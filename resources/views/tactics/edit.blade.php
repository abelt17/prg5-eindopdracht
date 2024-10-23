<x-primary-layout>
    // error in the action
    <form action="{{url(route('tactics.update', $tactic->id))}}" method= "post">
        @csrf
        @method('PUT')
        <p>{{$tactic->username}}</p>
        <label for="tactic_name">tactic_name</label>
        <input type="text" id="tactic_name" name="tactic_name" value="{{$tactic->tactic_name}}">

        <label for="line_up">line_up</label>
        <input type="text" id="line_up" name="line_up" value="{{$tactic->line_up}}">

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

</x-primary-layout>
