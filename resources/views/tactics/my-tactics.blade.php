<x-app-layout>
    <h2>My Tactics</h2>

    @if($tactics->isEmpty())
        <p>No tactics found</p>
        <p>Create your first tactic</p>
    @else
            @foreach($tactics as $tactic)
                <x-tactic-item :tactic="$tactic">

                </x-tactic-item>
            @endforeach
    @endif

</x-app-layout>
