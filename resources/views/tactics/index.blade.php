<x-app-layout>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>Overview of tactics</h1>

    <form action="{{route('tactics.index')}}" method="get">

        <label for="line_up">Filter</label>
        <select name="line_up" id="line_up">
            <option value="">all line ups</option>
            @foreach($formations as $formation)
                <option
                    value="{{$formation->line_up}}" {{($formation->line_up == $filteredLineUp) ? 'selected' : ''}}>{{$formation->line_up}}</option>
            @endforeach
        </select>
        <button type="submit">Save</button>

    </form>
    @auth()
        <a href="{{url(route('tactics.create'))}}">create</a>
    @endauth

    <div >
        @foreach($tactics as $tactic)
            @if($tactic->line_up == $filteredLineUp)
                <x-tactic-item :tactic="$tactic">

                </x-tactic-item>
            @elseif($filteredLineUp == '')
                <x-tactic-item :tactic="$tactic">
                </x-tactic-item>
            @endif
        @endforeach
    </div>

</x-app-layout>


{{--        <form action="{{url(route('tactics.destroy'))}}" method="post">--}}
{{--            @method('DELETE')--}}
{{--            <button type="submit">delete</button>--}}
{{--        </form>--}}
