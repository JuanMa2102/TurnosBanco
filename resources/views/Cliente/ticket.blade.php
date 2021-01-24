<x-guest-layout>
    
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

             <x-jet-label class="mb-4 text-center text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl ..." value="{{$turn[0]->name}}" />
    
            <x-jet-label class="mb-4 text-center text-base sm:text-lg md:text-x2 lg:text-3xl xl:text-3xl ..." value="{{$turn[0]->turnNumber}}" />

            <div>
                <x-jet-label for="Fecha" value="{{ __('FECHA') }}" />
                <x-jet-label id="fecha" class="block mt-1 w-full" name="fecha" value="{{$turn[0] -> created_at}}" />
            </div>

            <div class="mt-4">
                <x-jet-label for="operation" value="{{ __('TIPO DE OPERACION') }}" />
                <x-jet-label id="operation" class="block mt-1 w-full" name="operation" value="{{$operacion[0] -> description}}" />
            </div>

            <div class="items-center mt-4">
                <a href="{{ route('turno') }}" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Regresar') }}
                </a>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>