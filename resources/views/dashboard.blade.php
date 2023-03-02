<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex flex-wrap justify-between p-6 text-gray-900 dark:text-gray-100">
                    @forelse ($clients as $client)
                        <ul>
                            <li>Vendedor: {{ $name }}</li>
                            <li>Cliente: {{ $client->name}}</li>
                            <li>Documento: {{ $client->document }}</li>
                            
                            @foreach($client->signatures as $signature)
                                <li>Plano: {{ $signature->plan->name }}</li>
                                <li>Descrição: {{ $signature->plan->short_description }}</li>
                                <li>Preço: {{ $signature->plan->price }}</li>
                                <li>Situação do plano: {{ $signature->status->name }}</li>
                            @endforeach
                        </ul>
                    @empty
                        <div>
                            Sem clientes cadastrados
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>