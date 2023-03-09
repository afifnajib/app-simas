@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-md font-bold text-gray-700']) }}>
    {{ $value ?? $slot }} <span class="text-sm font-normal">(Opsional)</span>
</label>
