@props(['tactic'])
<div>
    <h2>{{$tactic->tactic_name}}</h2>
    <p>{{$tactic->username}}</p>
    <p>{{$tactic->description}}</p>
    <a href="{{url(route('tactics.show', $tactic))}}">details</a>
</div>
