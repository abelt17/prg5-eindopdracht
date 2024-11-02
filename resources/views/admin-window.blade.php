<x-app-layout>
    <p>welcome admin</p>

    @foreach($users as $user)
        <x-user-item :user="$user">

        </x-user-item>
    @endforeach

</x-app-layout>
