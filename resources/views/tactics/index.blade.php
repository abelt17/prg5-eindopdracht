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
        <input type="search" class="form-control" placeholder="Find tactic here" name="search"
               value="{{ request('search') }}">

        <button type="submit">Save</button>

    </form>
    {{--    <ul class="list-group mt-3">--}}
    {{--        @forelse($searchedTactics as $searchedTactic)--}}
    {{--            <li class="list-group-item">{{ $searchedTactic->tactic_name }}</li>--}}
    {{--        @empty--}}
    {{--            <li class="list-group-item list-group-item-danger">Tactic Not Found.</li>--}}
    {{--        @endforelse--}}
    {{--    </ul>--}}

    @auth()
        <a href="{{url(route('tactics.create'))}}">create</a>
    @endauth

    <div>

        @foreach($tactics as $tactic)
            @if($tactic->active)
                @if($tactic->line_up == $filteredLineUp)
                    <x-tactic-item :tactic="$tactic">

                    </x-tactic-item>
                @elseif($filteredLineUp == '')
                    <x-tactic-item :tactic="$tactic">
                    </x-tactic-item>
                @endif
            @endif
        @endforeach
    </div>

</x-app-layout>


