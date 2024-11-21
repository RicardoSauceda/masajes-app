@extends('templates.app')
@section('title')
    Pagos - Inicio
@endsection

@section('main')

<main class="flex-grow container mx-auto px-4 py-8 lg:w-2/3">
    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Our Subscriptions Plans</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            @foreach ($plans as $plan)
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-semibold mb-2"> {{ $plan->title }} </h3>
                <p class="text-gray-600 mb-4">{{ $plan->modality }}</p>
                <p class="text-3xl font-bold mb-4">${{ $plan->price }}</p>
                <ul class="list-disc list-inside mb-6 text-gray-600">
                    @php $beneficios = explode(',', $plan->description); @endphp
                    @foreach ($beneficios as $beneficio)
                    <li>{{ $beneficio }}</li>
                    @endforeach
                </ul>
                <form action="{{ route('payment.main') }}" method="POST">
                    @csrf
                    <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                    <button type="submit"
                        class="w-full bg-black text-white py-2 rounded hover:bg-white border hover:border-black hover:text-black transition-colors">
                        Subscribe
                    </button>
                </form>
            </div>
            @endforeach

        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Schedule Your Next Appointment</h2>
        <div class="bg-white rounded-lg shadow-md p-6">
            <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                    <input type="date" id="date" name="date"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="time" class="block text-sm font-medium text-gray-700 mb-1">Time</label>
                    <select id="time" name="time"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Choose one hour</option>
                        <option value="09:00">09:00 AM</option>
                        <option value="11:00">11:00 AM</option>
                        <option value="14:00">02:00 PM</option>
                        <option value="16:00">04:00 PM</option>
                    </select>
                </div>
                <div class="md:col-span-2">
                    <label for="type" class="block text-sm font-medium text-gray-700 mb-1">Type of massage</label>
                    <select id="type" name="type"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Choose a type of massage</option>
                        <option value="relax">Relajante</option>
                        <option value="deep">Tejido Profundo</option>
                        <option value="sports">Deportivo</option>
                        <option value="prenatal">Prenatal</option>
                    </select>
                </div>
                <button type="submit"
                    class="md:col-span-2 bg-black text-white py-2 px-4 rounded hover:bg-white border hover:border-black hover:text-black transition-colors">
                    Reserve now
                </button>
            </form>
        </div>
    </section>

    {{-- <section>
        <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Your Profile</h2>
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center space-x-4 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div>
                    <h3 class="text-lg font-semibold">María García</h3>
                    <p class="text-sm text-gray-500">Plan Estándar</p>
                </div>
            </div>
            <div class="space-y-2 text-gray-600">
                <p><strong>Próxima cita:</strong> 15 de Julio, 2023 - 11:00 AM</p>
                <p><strong>Masajes restantes este mes:</strong> 1</p>
                <button
                    class="w-full mt-4 border border-blue-600 text-blue-600 py-2 px-4 rounded hover:bg-blue-50 transition-colors">Ver
                    historial de citas</button>
            </div>
        </div>
    </section> --}}
</main>
@endsection