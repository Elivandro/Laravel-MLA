<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Novo cliente')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            @if(session()->has('messages'))
                <div class="flex justify-center mt-2 mb-4">
                    <h4 class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        {{ session()->get('messages') }}
                    </h4>
                </div>
            @endif
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex flex-wrap justify-between p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('signature.store') }}">
                    @csrf
                    <div>
                        <x-input-label for="name" :value="__('Nome')"/>
                        <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" autofocus/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                    </div>
                    <div class="mt-4">
                        <x-input-label for="document" :value="__('Documento')"/>
                        <x-text-input id="document" class="block w-full mt-1" type="text" name="document" :value="old('document')" pattern="[0-9]+$"/>
                        <x-input-error :messages="$errors->get('document')" class="mt-2"/>
                    </div>
                    <div class="mt-4">
                        <x-input-label for="birthdate" :value="__('Data de nascimento')"/>
                        <x-text-input id="birthdate" class="block w-full mt-1" type="date" name="birthdate"/>
                        <x-input-error :messages="$errors->get('birthdate')" class="mt-2"/>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            {{ __('Cadastrar') }}
                        </x-primary-button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>