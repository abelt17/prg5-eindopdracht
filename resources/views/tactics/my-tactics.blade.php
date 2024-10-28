<x-app-layout>
    <h2>My Tactics</h2>

    @if($tactics->isEmpty())
        <p>Create your first tactic</p>
    @else
        <ul>
            @foreach($tactics as $tactic)
                <x-tactic-item :tactic="$tactic">

                </x-tactic-item>
            @endforeach
        </ul>
    @endif

</x-app-layout>
