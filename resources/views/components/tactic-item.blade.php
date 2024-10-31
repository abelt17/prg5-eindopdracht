@props(['tactic'])
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mb-4 bg-white">
    <h2 class="text-xl">{{$tactic->tactic_name}}</h2>
    <p>{{$tactic->username}}</p>
    <p>{{$tactic->description}}</p>
    <a href="{{url(route('tactics.show', $tactic))}}" class="bg-gray-100 p-2">details</a>
    <a href="{{url(route('tactics.edit', $tactic))}}" class="bg-gray-100 p-2">edit</a>
    <form action="{{url(route('favorites.store', $tactic))}}" method= "post">
        @csrf
        <button type="submit">Save</button>
    </form>
</div>
