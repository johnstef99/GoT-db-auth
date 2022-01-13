<x-layout>
    <h1 class="text-white text-center text-3xl py-4 px-4 italic">
        House {{$house->name}}
    </h1>
    <div class="grid grid-cols-6 gap-x-0 gap-y-8 items-center">
        <div class="col-span-4 w-full">
            <h2 class="text-white">More info</h2>
            <table class="table-auto w-full bg-got-200 rounded-lg text-center">
                <tr>
                    <th>Location:</th>
                    <td> {{$house->location->name}} </td>
                </tr>
                <tr>
                    <th>Leaders:</th>
                    <td>
                        @if ($house->leaders->count() < 1)
                            -
                        @else
                            {{$house->leaders->pluck('name')->join(',')}}
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Slogan:</th>
                    <td>{{$house->slogan}}</td>
                </tr>
            </table>
            <br>
        </div>

        <div class="col-span-2">
            <h2 class="text-white">Members({{$house->members->count()}})</h2>
            <table class="table-auto bg-got-200 rounded-lg mx-auto text-center">
                <thead>
                <tr>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($house->members as $char)
                    <tr class="hover:bg-got-300">
                        <td><a href="/characters/{{$char->id}}"> {{$char->name}} </a></td>
                    </tr>
                    </a>
                @empty
                    <tr>
                        <td colspan="3">No record found</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
