<x-primary-layout>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>Overview of tactics</h1>
    @auth()
        <a href="{{url(route('tactics.create'))}}">create</a>
    @endauth
    @foreach($tactics as $tactic)
        <x-tactic-item :tactic="$tactic">

        </x-tactic-item>
        {{--        <form action="{{url(route('tactics.destroy'))}}" method="post">--}}
        {{--            @method('DELETE')--}}
        {{--            <button type="submit">delete</button>--}}
        {{--        </form>--}}
    @endforeach

</x-primary-layout>
