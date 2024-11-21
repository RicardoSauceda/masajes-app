<?php

namespace App\Http\Controllers;

use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function index()
    {
        $plans = Subscription::all();
        return view('subscriptions.subscriptions', ['plans' => $plans])->with(['stripe_public_key' => env('STRIPE_KEY'),]);
    }
}
