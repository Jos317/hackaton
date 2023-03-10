<button  {{ $attributes->merge(['class' => 'items-center text-align-center px-7 py-3 bg-red-500  border border-transparent rounded-md font-semibold text-white hover:bg-gray-700 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
