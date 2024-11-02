<x-app-layout>
        <h1 class="text-xl">{{$tactic->tactic_name}}</h1>
        <h2>made by: {{$tactic->username}}</h2>
        <p>{{$tactic->description}}</p>
        <ul>
            <li>line up: {{$tactic->line_up}}</li>
            <li>pace: {{$tactic->pace}}</li>
            <li>style: {{$tactic->style}}</li>
            <li>pression: {{$tactic->pression}}</li>
        </ul>
</x-app-layout>
