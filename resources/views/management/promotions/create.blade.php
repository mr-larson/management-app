<x-app-layout>
    <x-slot name="header">
        <x-h1>{{ __('Promotions') }}</x-h1>
    </x-slot>
    <x-card-form class="bg-blue-">
        <section class="max-w-xl">
            <header>
                <x-h2>
                    {{ __('Create Promotion') }}
                </x-h2>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('To create a promotion, you just need a name.') }}
                </p>
            </header>
            <form method="POST" action="{{route("promotion.store") }}" enctype="multipart/form-data">
                @csrf
                @include('management.promotions.form')
                <div class="flex justify-center m-2">
                    <x-btn-submit>{{ __('Save') }}</x-btn-submit>
                </div>
            </form>
        </section>
    </x-card-form>
</x-app-layout>