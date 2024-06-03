<x-layout>
    <x-slot:title>
        Blog Detail
    </x-slot:title>
    <div class="max-w-xl mx-auto">
        <h1
            class="text-md sm:text-xl md:text-2xl lg:text-[34px] xl:text-[36px] font-semibold text-[color:var(--nav-color)] py-[40px] text-center">
            {{ $blog->title }}
        </h1>
        <img class="object-fill rounded-xl shadow-2xl w-[50vh] h-[40vh] m-auto p-[10px] ms- sm:w-[] sm:h-[] md:w-[80vh] md:h-[60vh] lg:w-[90vh]  lg:h-[60vh] xl:w-[80vh] xl:h-[60vh]"
            src="{{ asset("storage/$blog->photo") }}" alt="image of blog">
        <div class="p-4 my-5 text-base leading-8 no-tailwindcss-base">
            {!! $blog->description !!}
        </div>
        </p>
    </div><br><br>
    <script src="/script.js"></script>
</x-layout>
