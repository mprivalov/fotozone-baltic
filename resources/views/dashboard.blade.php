<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Hero Section -->
    <div class="flex justify-center items-center h-screen">
        <div class="heropattern flex justify-center items-center m-auto">
            {{-- <h1 class="heroname alfa-slab-one-regular text-white text-2xl">Make your event unforgettable</h1> --}}
        </div>
    </div>

    <!-- Examples -->
    <div class="max-w-screen-2xl px-3 sm:px-5 lg:px-7">
        <div class="my-5 sm:my-10">
            <div class="flex justify-between items-center mb-5 sm:mb-10">
                <h2 class="text-3xl dosis-semibold uppercase">Mūsu darbi</h2>
                <a href="/portfolio" class="text-sm text-gray-500 hover:underline hover:text-black">Vairāk</a>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
                <img src="{{ asset('storage/images/examples/example-people5.jpeg') }}" alt="Example People 5"
                    class="w-full h-80 md:h-96 object-cover object-center bg-slate-200 shadow-xl" loading="lazy">
                <img src="{{ asset('storage/images/examples/example-people1.jpeg') }}" alt="Example People 1"
                    class="w-full h-80 md:h-96 object-cover object-center bg-slate-200 shadow-xl" loading="lazy">
                <img src="{{ asset('storage/images/examples/example-people2.jpeg') }}" alt="Example People 2"
                    class="w-full h-80 md:h-96 object-cover object-center bg-slate-200 shadow-xl" loading="lazy">
                <img src="{{ asset('storage/images/examples/example-people3.jpeg') }}" alt="Example People 3"
                    class="w-full h-80 md:h-96 object-cover object-center bg-slate-200 shadow-xl" loading="lazy">
                <img src="{{ asset('storage/images/examples/example-people.jpeg') }}" alt="Example People"
                    class="w-full h-80 md:h-96 object-cover object-center bg-slate-200 shadow-xl" loading="lazy">
                <img src="{{ asset('storage/images/examples/example-people4.jpeg') }}" alt="Example People 4"
                    class="w-full h-80 md:h-96 object-cover object-center bg-slate-200 shadow-xl" loading="lazy">
            </div>

        </div>
    </div>

    <!-- Stock -->
    <div class="max-w-screen-2xl px-3 sm:px-5 lg:px-7">
        <div class="my-5 sm:my-10">
            <div class="flex justify-between items-center mb-5 sm:mb-10">
                <h2 class="text-3xl dosis-semibold uppercase">Pieejams</h2>
                <a href="/shop" class="text-sm text-gray-500 hover:underline hover:text-black">Vairāk</a>
            </div>
            <div class="w-full h-full overflow-x-scroll whitespace-nowrap scroll-smooth scrollbar-hide">
                @foreach ($items as $item)
                    <img src="{{ asset('storage/images/shop/' . $item['image']) }}" alt="{{ $item['name'] }}"
                        class="h-52 w-52 inline-block mr-3 border bg-slate-200 object-cover">
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
