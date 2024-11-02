<x-app-layout>
    <h2>My Favorites</h2>

    @if($myFavs->isEmpty())
        <p>No tactics found</p>
        <p>Save your first tactic</p>
    @else
        @foreach($myFavs as $tactic)
            @if($tactic->active)
                <x-tactic-item :tactic="$tactic">

                </x-tactic-item>
            @endif
        @endforeach
    @endif

</x-app-layout>
