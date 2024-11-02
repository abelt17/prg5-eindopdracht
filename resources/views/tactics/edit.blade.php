<x-app-layout>
    <form action="{{url(route('tactics.update', $tactic->id))}}" method="post">
        @csrf
        @method('PUT')
        <p>{{$tactic->username}}</p>
        <label for="tactic_name">tactic_name</label>
        <input type="text" id="tactic_name" name="tactic_name" value="{{$tactic->tactic_name}}">

        <label for="line_up">line up</label>
        <select name="line_up" id="line_up">
            @foreach($formations as $formation)
                <option
                    value="{{$formation->line_up}}" {{($formation->line_up == $tactic->line_up) ? 'selected' : ''}}>{{$formation->line_up}}</option>
            @endforeach
        </select>

        <label for="pression">pression</label>
        <input type="text" id="pression" name="pression" value="{{$tactic->pression}}">

        <label for="style">style</label>
        <input type="text" id="style" name="style" value="{{$tactic->style}}">

        <label for="pace">pace</label>
        <input type="text" id="pace" name="pace" value="{{$tactic->pace}}">

        <label for="description">description</label>
        <input type="text" id="description" name="description" value="{{$tactic->description}}">

        <button type="submit">save</button>
    </form>
    <form action="{{url(route('tactics.destroy', $tactic->id))}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
    </form>

</x-app-layout>
