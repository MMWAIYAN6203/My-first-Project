<x-layout>
    <x-slot:title>
        Blog Detail
    </x-slot:title>
    <div class="flex flex-col items-center">
        <h1
            class="text-md sm:text-xl md:text-2xl lg:text-[34px] xl:text-[36px] font-semibold text-[color:var(--nav-color)] py-[40px] text-center">
            {{ $blog->title }}
        </h1>
        <img class="object-fill rounded-xl shadow-2xl w-[40vh] h-[60vh] sm:w-[60vh] sm:h-[80vh] md:w-[70vh] md:h-[90vh] lg:w-[70vh] lg:h-[90vh] xl:w-[60vh] xl:h-[80vh]"
            src="{{ asset("storage/$blog->photo") }}" alt="image of blog">
        <p class="text-[10px] sm:text-[14px] md:text-[14px] lg:text-[16px] xl:text-lg py-[40px] ">
            {!! $blog->description !!}
        </p>
    </div>
    <script src="/script.js"></script>
</x-layout>
