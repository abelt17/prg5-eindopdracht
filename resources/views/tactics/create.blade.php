<x-primary-layout>
            <form action="{{url(route('tactics.store'))}}" method="post">
                @csrf
                <label for="username">username</label>
                <input type="text" id="username" name="username">

                <label for="tactic_name">tactic_name</label>
                <input type="text" id="tactic_name" name="tactic_name">

                <label for="line_up">line_up</label>
                <input type="text" id="line_up" name="line_up">

                <label for="pression">pression</label>
                <input type="text" id="pression" name="pression">

                <label for="style">style</label>
                <input type="text" id="style" name="style">

                <label for="pace">pace</label>
                <input type="text" id="pace" name="pace">

                <label for="description">description</label>
                <input type="text" id="description" name="description">

                <button type="submit">save</button>
            </form>
</x-primary-layout>
