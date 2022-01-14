<x-layout>
    <h1 class="text-white text-center text-3xl py-4 px-4 italic">
        {{$event->type}} {{$event->name}}<br>({{$event->date}})
    </h1>
    <div class="grid grid-cols-6 gap-x-4 gap-y-8 items-start">
        <div class="col-span-6 text-white italic">
            <p>{{$event->description}}</p>
        </div>

        <div class="col-span-4 w-full">
            <h2 class="text-white">Participants({{$event->participants->count()}})</h2>
            <table class="table-auto w-full bg-got-200 rounded-lg mx-auto text-center">
                <thead>
                <tr>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($event->participants as $char)
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

        <div class="col-span-2 w-full">
            <h2 class="text-white">Locations</h2>
            <table class="table-auto bg-got-200 rounded-lg mx-auto text-center w-full">
                <thead>
                <tr>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($event->locations as $loc)
                    <tr class="">
                        <td>{{$loc->name}}</td>
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
