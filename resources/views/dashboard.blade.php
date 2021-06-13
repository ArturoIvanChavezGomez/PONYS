<x-app-layout>

    {{-- <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}
    
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">

                <div class="p-6 bg-purple-500 ">

                    @if(session('status'))

                        <p class="block font-semibold text-xl text-gray-100">{{ session('status') }}</p> 
                    
                    @else
                        <form method="POST" action="{{ route('group.student') }}">
                            @csrf

                            <p class="block font-semibold text-3xl text-gray-100 mb-2 text-left md:text-center">¡Hola, {{ Auth::user()->name }} {{ Auth::user()->paternal_name }} {{ Auth::user()->maternal_name }}!</p> 
                            <p class="block font-semibold text-2xl text-gray-100">Inscríbete a un grupo.</p> 

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="my-4" :errors="$errors" />

                            <!-- Group Select Code -->
                            <div class="mt-4">
                                <label class="block text-lg font-semibold text-gray-100" for="name">Código del Grupo:</label>

                                <x-input id="name" class="block mt-1 w-full border-none" type="text"
                                                name="name"
                                                required />
                            </div>

                            <!-- Group Password -->
                            <div class="mt-4">
                                <label class="block text-lg font-semibold text-gray-100" for="password">Contraseña del Grupo:</label>

                                <x-input id="password" class="block mt-1 w-full border-none" type="password"
                                                name="password"
                                                required />
                            </div>

                            <!-- Button -->
                            <div class="flex items-center justify-end mt-6">
                                <x-button>
                                    {{ __('Registrarme en la clase') }}
                                </x-button>
                            </div>
                        </form>
                    @endif
   
                </div>
                
            </div>
        </div>
    </div>

</x-app-layout>
