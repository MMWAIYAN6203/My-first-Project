<x-layout>
    <x-slot:title>
        {{ __("Blog") }}
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
            @if (sizeof($blogs))
                <div class="card-grid">
                    @foreach ($blogs as $blog)
                        <x-blogcard :blog="$blog" />
                    @endforeach
                </div>
            @else
                <div class='min-h-[50vh] flex justify-center items-center'>
                    <x-nodata data='blog' />
                </div>
            @endif
        </section>
        @if ($blogs)
            <div class="max-w-[1200px] mx-auto my-11">
                {{ $blogs->links() }}
            </div>
        @endif
    </div>
    <script src="/script.js"></script>
</x-layout>
