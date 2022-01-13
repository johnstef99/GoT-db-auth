<x-layout>
    <h1 class="text-3xl mx-auto text-center text-white py-4 italic">Houses</h1>
    <table class="table-auto bg-got-200 rounded-lg mx-auto hover:table-fixed text-center">
        <thead>
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th>Members</th>
            <th>Leaders</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($houses as $house)
            <tr class="hover:bg-got-300">
                <td><a href="/houses/{{$house->id}}"> {{$house->name}} </a></td>
                <td>{{$house->location->name}}</td>
                <td>{{$house->members->count()}}</td>
                <td>
                    @if ($house->leaders->count() < 1)
                        -
                    @else
                        {{$house->leaders->pluck('name')->join(',')}}
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
