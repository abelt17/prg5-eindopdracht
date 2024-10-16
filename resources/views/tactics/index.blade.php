<x-primary-layout>
    <h1>Overview of tactics</h1>
    @foreach($tactics as $tactic)
        <x-tactic-item :tactic="$tactic">

        </x-tactic-item>
{{--        <form action="{{url(route('tactics.destroy'))}}" method="post">--}}
{{--            @method('DELETE')--}}
{{--            <button type="submit">delete</button>--}}
{{--        </form>--}}
    @endforeach
    <a href="{{url(route('tactics.create'))}}">create</a>

</x-primary-layout>
