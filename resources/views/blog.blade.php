<x-layout>
    <x-slot:title>
        Blog
    </x-slot:title>
    <div class="">
        <h1
            class="text-xl my-10 xl:pb-[20px] font-semibold text-[color:var(--nav-color)] sm:text-4xl md:text-[2rem] lg:text-[2.6rem] xl:text-[36px] text-center">
            {{ __('Recently Updated Blogs') }}
        </h1>
    </div>
    <!-- blog card design -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <div>
        <section class="hero-section sm:mt-[-20px]">
            <div class="card-grid">
                @forelse ($blogs as $blog)
                    <x-blogcard :blog="$blog" />
                @empty
                    <x-nodata data='blog' />
                @endforelse
            </div>
        </section>
        @if ($blogs)
            <div class="max-w-[1200px] mx-auto my-11">
                {{ $blogs->links() }}
            </div>
        @endif
    </div>
    <script src="/script.js"></script>
</x-layout>
