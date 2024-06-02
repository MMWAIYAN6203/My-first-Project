@props(['blog'])

<a class="card" href="{{ route('blog.detail', ['blog' => $blog->id]) }}">
    <div class="card__background" style="background-image: url({{ asset("storage/$blog->photo") }})">
    </div>
    <div class="card__content max-w-[220px]">
        {{-- <p class="card__category">Category</p> --}}
        <h3 class="card__heading line-clamp-2">{{ $blog->title }}</h3>
    </div>
</a>
