<?php

namespace App\Http\Controllers;

use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Http\Request;
use App\Models\Subscription;
use Stripe\SetupIntent;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $plan = Subscription::find($request->plan_id);
        $user = $request->user();
        $public_key = env(key: 'STRIPE_KEY');
        // Crear un intento de pago (Payment Intent) para el usuario
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Crear un SetupIntent
        $setupIntent = SetupIntent::create([
            'payment_method_types' => ['card'],
            'customer' => $user->stripe_id, // Asegúrate de que el usuario tenga un stripe_id
        ]);

        return view('payment.payment_end', [
            'public_key' => $public_key,
            'user' => $user,
            'plan' => $plan,
            // 'intent' => $setupIntent,
            'client_secret' => $setupIntent->client_secret, // Pasa solo el client_secret
        ]);
    }

    public function storage(Request $request, $plan_id)
    {
        $user = $request->user();
        $paymentMethod = $request->payment_method; // Token devuelto por Stripe.js

        // Intenta asociar el método de pago al usuario
        $user->updateDefaultPaymentMethod($paymentMethod);

        // Crea la suscripción usando Cashier
        $user->newSubscription('default', $plan_id)
            ->create($paymentMethod);

        return redirect()->route('subscription.success');
    }
}
