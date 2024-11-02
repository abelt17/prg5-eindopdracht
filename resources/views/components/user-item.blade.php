@props(['user'])
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mb-4 bg-white">
    <h2 class="text-xl">{{$user->name}}</h2>
    <p>{{$user->email}}</p>
    <p>{{$user->created_at}}</p>
    <p>is the user active: {{$user->active}}</p>
    <form action="{{url(route('users.toggle', $user))}}" method="post">
        @csrf
        <button type="submit">Toggle</button>
    </form>

</div>
