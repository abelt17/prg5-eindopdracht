@props(['tactic'])

<x-app-layout>
    @auth()
        @if(\Illuminate\Support\Facades\Auth::user()->favorites()->count() >= 3)
            <form action="{{url(route('tactics.store'))}}" method="post">
                @csrf
                <label for="tactic_name">Tactic name</label>
                <input type="text" id="tactic_name" name="tactic_name" value="{{ old('tactic_name') }}" required>

                <label for="line_up">line up</label>
                <select name="line_up" id="line_up">
                    @foreach($formations as $formation)
                        <option value="{{$formation->line_up}}">{{$formation->line_up}}</option>
                    @endforeach
                </select>

                <label for="pression">Pression</label>
                <input type="text" id="pression" name="pression" value="{{ old('pression') }}" required>

                <label for="style">Style</label>
                <input type="text" id="style" name="style" value="{{ old('style') }}" required>

                <label for="pace">Pace</label>
                <input type="text" id="pace" name="pace" value="{{ old('pace') }}" required>

                <label for="description">Description</label>
                <input type="text" id="description" name="description" value="{{ old('name') }}" required>

                <button type="submit">Save</button>
            </form>
        @else
            <p>you need to save 3 tactics to gain acces to creating them.</p>

        @endif
    @endauth
</x-app-layout>
