@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-bold text-red-700">
            {{ __('Ups! Algo salió mal.') }}
        </div>

        <ul class="mt-3 list-disc list-inside font-semibold text-sm text-red-700">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
