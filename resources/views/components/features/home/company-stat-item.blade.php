@props([
    'number' => null,
    'label' => null,
    'description' => null,
])

<div class="group text-center space-y-3 p-4 rounded-lg hover:bg-gray-50 transition-all duration-300">
    <div class="space-y-2">
        <div class="text-3xl font-bold text-primary-blue group-hover:scale-105 transition-transform duration-300">
            {{ $number }}
        </div>
        <h5 class="text-lg font-semibold text-black group-hover:text-primary-blue transition-colors duration-300">
            {{ $label }}
        </h5>
        <p class="text-sm text-primary-gray font-nunito-sans">
            {{ $description }}
        </p>
    </div>
</div>