<x-layout>
    <x-slot:title>
        Team
    </x-slot:title>
    <div class="">
        <h1
            class="text-xl my-10 xl:pb-[20px] font-semibold text-[color:var(--nav-color)] sm:text-4xl md:text-[2rem] lg:text-[2.6rem] xl:text-[36px] text-center">
            My Team Members
        </h1>
    </div>
    <!-- blog card design -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <div>
        <section class="hero-section sm:mt-[-20px]">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-11">
                @forelse ($teams as $team)
                    @if (strtolower($team->role) === 'ceo' || strtolower($team->role) === 'founder')
                        <a class="CEO-card w-[35vh] h-[43vh] block"
                            href="{{ route('team.detail', ['team' => $team->id]) }}">
                            <div class="front">
                                <div class="card-top1">
                                    <p class="card-top-para1 text-black">{{ $team->role }}</p>
                                </div>

                                <img class="w-full h-full rounded-2xl" src="{{ asset("storage/$team->photo") }}"
                                    alt="member-photo">
                                <p class="text-white">{{ $team->name }}</p>
                                <!-- <p class="follow">Follow me for more... -->
                                </p>
                            </div>
                            <div class="back">
                                <p class="text-center text-white">
                                    {{ $team->bio }}
                                </p>


                            </div>
                        </a>
                    @else
                        <a class="m-card w-[38vh] h-[40vh] m-auto block"
                            href="{{ route('team.detail', ['team' => $team->id]) }}">
                            <center>
                                <div class="profileimage">
                                    <img class="w-[180px] h-[180px] rounded-full"
                                        src="{{ asset("storage/$team->photo") }}" alt="">
                                </div>
                                <div class="Name font-semibold">
                                    <p>{{ $team->name }}</p>
                                </div>
                                <div class="socialbar font-semibold text-[15px] w-[150px] truncate">
                                    <p>
                                        {{ $team->bio }}
                                    </p>
                                </div>
                            </center>
                        </a>
                    @endif
                @empty
                    <div class='col-span-4 min-h-[50vh] flex justify-center items-center'>
                        <x-nodata data='team member' />
                    </div>
                @endforelse
            </div>
        </section>
        <div class="max-w-[1200px] mx-auto my-11">
            {{ $teams->links() }}
        </div>
    </div>
    <script src="/script.js"></script>
</x-layout>
