<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Novo plano')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex flex-wrap justify-between p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('plano.store') }}">
                    @csrf
                    <div>
                        <x-input-label for="name" :value="__('Nome')"/>
                        <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" autofocus/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                    </div>
                    <div class="mt-4">
                        <x-input-label for="short_description" :value="__('descrição breve')"/>
                        <x-text-input id="short_description" class="block w-full mt-1" type="text" name="short_description" :value="old('short_description')"/>
                        <x-input-error :messages="$errors->get('short_description')" class="mt-2"/>
                    </div>
                    <div class="mt-4">
                        <x-input-label for="price" :value="__('Preço (em centavos)')"/>
                        <x-text-input id="price" class="block w-full mt-1" type="number" name="price" min="1"/>
                        <x-input-error :messages="$errors->get('price')" class="mt-2"/>
                    </div>
                    <div class="mt-4">
                        <x-input-label for="code" :value="__('Código')"/>
                        <x-text-input id="code" class="block w-full mt-1" type="text" name="code" :value="old('code')"/>
                        <x-input-error :messages="$errors->get('code')" class="mt-2"/>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            {{ __('Cadastrar') }}
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>