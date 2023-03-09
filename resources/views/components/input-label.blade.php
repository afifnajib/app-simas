@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-lg font-bold text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
