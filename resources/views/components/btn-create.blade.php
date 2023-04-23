@props(['fas'])
<a {{ $attributes->merge(['class' => 'text-white bg-gradient-to-r from-blue-400 to-blue-500 border-blue-900 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2']) }}>
    @if ($fas)
        <i class="fas fa-{{ $fas }} text-white"></i>
    @endif
    <span class="ml-2"> {{ $slot }} </span>
</a>