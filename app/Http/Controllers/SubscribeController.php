<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\HasMiddleware;

class SubscribeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showPlans()
    {
        $plans = Plan::all();
        return view('subscribe.plans', compact('plans'));
    }

    public function checkoutPlan(Plan $plan)
    {
        $user = Auth::user();
        return view('subscribe.checkout', compact('plan'));
    }

    public function processCheckout(Request $request)
    {
        $user = Auth::user();
        $plan = Plan::findOrFail($request->plan_id);
        $user->memberships()->create([
            'plan_id' => $plan->id,
            'active' => true,
            'started_date' => now(),
            'end_date' => now()->addDays($plan->duration),
        ]);
        return redirect()->route('subscribe.success');
    }

    public function showSuccess()
    {
        return view('subscribe.success');
    }

    public function index()
    {
        // Logic to retrieve and display subscription plans
    }

    /**
     * Handle the subscription process.
     */
    public function subscribe(Request $request)
    {
        // Logic to handle user subscription
    }

    /**
     * Cancel the subscription.
     */
    public function cancel(Request $request)
    {
        // Logic to cancel user subscription
    }
}
