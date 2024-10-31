<x-app-layout>
    <h2>My Favorites</h2>

    @if($myFavs->isEmpty())
        <p>No tactics found</p>
        <p>Save your first tactic</p>
    @else
        @foreach($myFavs as $tactic)
            <x-tactic-item :tactic="$tactic">

            </x-tactic-item>
        @endforeach
    @endif

</x-app-layout>
