<x-layout>
    <h1 class="text-3xl mx-auto text-center text-white py-4 italic">Events</h1>
    <table class="table-auto bg-got-200 rounded-lg mx-auto hover:table-fixed text-center">
        <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($events as $e)
            <tr class="hover:bg-got-300">
                <td>
                    <a href="/events/{{$e->id}}">
                        {{$e->name}}
                    </a>
                </td>
                <td>{{$e->type}}</td>
                <td>{{$e->date}}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No record found</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <br>
</x-layout>
