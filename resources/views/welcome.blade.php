<!DOCTYPE html>
<html lang="es" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MasajeEnCasa - Servicios de Masajes a Domicilio</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen bg-gray-50">

    <x-header-component title="Header" />

    <main class="flex-grow">
        <section class="bg-green-500 text-white py-20">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Relax in the comfort of your home</h2>
                <p class="text-xl mb-8">Experience the luxury of a professional massage without leaving home.</p>
                <a href="#"
                    class="bg-white text-green-700 py-2 px-6 rounded-full text-lg font-bold hover:bg-blue-100 transition-colors">Reserve
                    Now</a>
            </div>
        </section>

        <section class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">More about our Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-600 mb-4" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Relaxing Massage</h3>
                        <p class="text-gray-600">Enjoy a gentle massage that relieves stress and promotes total
                            relaxation.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-600 mb-4" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Deportive Massage</h3>
                        <p class="text-gray-600">Ideal for athletes and active people. Helps prevent injuries and
                            improves performance.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-600 mb-4" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Therapeutic Massage </h3>
                        <p class="text-gray-600">Focused on relieving muscle pain and improving joint mobility.
                            mobility.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-gray-100 py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">Why choose MassageAtHome?</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-600 mx-auto mb-4"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Save time</h3>
                        <p class="text-gray-600">No need to move, the masseur comes to you.</p>
                    </div>
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-600 mx-auto mb-4"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Certified professionals</h3>
                        <p class="text-gray-600">All our masseurs are highly qualified.</p>
                    </div>
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-600 mx-auto mb-4"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Customization</h3>
                        <p class="text-gray-600">We adapt the massage to your specific needs.</p>
                    </div>
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-600 mx-auto mb-4"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Competitive pricing</h3>
                        <p class="text-gray-600">Premium quality at affordable prices.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">What our customers say</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <p class="text-gray-600 mb-4">"El mejor masaje que he recibido. El masajista fue muy profesional
                            y el servicio a domicilio es muy conveniente."</p>
                        <p class="font-semibold">- María G.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <p class="text-gray-600 mb-4">"Increíble experiencia. Me ayudó mucho con mi dolor de espalda
                            crónico. Definitivamente lo recomiendo."</p>
                        <p class="font-semibold">- Carlos R.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <p class="text-gray-600 mb-4">"Excelente servicio y atención. Es genial poder relajarse en casa
                            después de un largo día de trabajo."</p>
                        <p class="font-semibold">- Ana L.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-black text-white py-16">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold mb-4">Ready to relax?</h2>
                <p class="text-xl mb-8"> Reserve your massage session now and experience the diference.
                </p>
                <a href="#"
                    class="bg-white text-blue-600 py-2 px-6 rounded-full text-lg font-semibold hover:bg-blue-100 transition-colors">Book
                    your massage</a>
            </div>
        </section>
    </main>

    <x-footer-component title="Footer" />
</body>

</html>