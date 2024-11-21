document.addEventListener('DOMContentLoaded', function () {
    let public_key = document.querySelector("input[name='public_key']")
    let user_name = document.querySelector("input[name='user_name']")
    // Inicializar Stripe
    const stripe = Stripe(public_key.value);
    const elements = stripe.elements();

    // Crear el elemento de tarjeta
    const card = elements.create('card');
    card.mount('#card-element');

    // Manejar la presentación del formulario
    const form = document.getElementById('payment-form');
    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const { setupIntent, error } = await stripe.confirmCardSetup(
            form.dataset.secret,
            {
                payment_method: {
                    card: card,
                    billing_details: {
                        name: user_name.value
                    }
                }
            }
        );

        if (error) {
            // Manejar error
            console.log(error);
        } else {
            // Enviar el token de pago al servidor
            const hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'payment_method');
            hiddenInput.setAttribute('value', setupIntent.payment_method);
            form.appendChild(hiddenInput);
            form.submit();
        }
    });
});