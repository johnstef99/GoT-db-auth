<x-layout>
    <h1 class="text-3xl mx-auto text-center text-white py-4 italic">Characters</h1>
    <table class="table-auto bg-got-200 rounded-lg text-center">
        <thead>
        <tr>
            <th>Name</th>
            <th>House</th>
            <th>Titles</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($characters as $char)
            <tr class="hover:bg-got-300">
                <td><a href="/characters/{{$char->id}}"> {{$char->name}} </a></td>
                <td><a href="/houses/{{$char->house->id}}"> {{$char->house->name}} </a></td>
                <td>@if ($char->titles->count() > 0)
                        {{$char->titles->map(function ($title){
                            return \App\Enums\CharacterTitles::getDescription($title->enum());
                        })->join(',')}}
                    @else
                        -
                    @endif
                </td>
            </tr>
            </a>
        @empty
            <tr>
                <td colspan="3">No record found</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <br>
</x-layout>
