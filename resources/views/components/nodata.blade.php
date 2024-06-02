@props(['data' => 'data'])

<div>
    <img class='w-[400px] mb-8 mix-blend-multiply' src="{{ asset('images/notfound.png') }}" />
    <h1 {{ $attributes->merge(['class' => 'text-4xl text-center text-[#07182E]']) }}>No {{ $data }} Found!</h1>
</div>
