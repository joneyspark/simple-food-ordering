<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn bg-gradient-info w-100 mt-4 mb-0']) }}>
    {{ $slot }}
</button>
