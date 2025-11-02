<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{

    public function showPlans()
    {
        $plans = Plan::all();
        return view('subscribe.plans', compact('plans'));
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
