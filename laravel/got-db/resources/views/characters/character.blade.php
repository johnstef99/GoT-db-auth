<x-layout>
    <h1 class="text-white text-center text-3xl py-4 px-4 italic">
        {{$char->name}} of house
        <a class="text-got-200" href="/houses/{{$char->house->id}}">
            {{$char->house->name}}
        </a>
    </h1>
    <div class="grid grid-cols-6 gap-x-4 gap-y-8 items-center">
        <div class="col-span-4 w-full h-full row-span-2">
            <h2 class="text-white">More info</h2>
            <table class="w-full h-5/6">
                <tr>
                    <th>Date of birth:</th>
                    <td>{{$char->date_of_birth}}</td>
                </tr>
                <tr>
                    <th>Date of death:</th>
                    <td>{{$char->date_of_death}}</td>
                </tr>
                <tr>
                    <th>House Leader</th>
                    <td>{{$char->house_leader ? 'Yes' : 'No'}}</td>
                </tr>
                <tr>
                    <th>Titles:</th>
                    <td>
                        @if ($char->titles->count() > 0)
                            {{$char->titles->map(function ($title){
                                return \App\Enums\CharacterTitles::getDescription($title->enum());
                            })->join(',')}}
                        @else
                            -
                        @endif
                    </td>
                </tr>
            </table>
        </div>

        <div class="col-span-2 w-full">
            <h2 class="text-white">Friends</h2>
            <table class="table-auto w-full">
                @foreach($char->friends as $friend)
                    <tr class="hover:bg-got-300">
                        <td class="px-4">
                            <a href="/characters/{{$friend->id}}">
                                {{ $friend->name }}
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

        <div class="col-span-2 w-full">
            <h2 class="text-white">Relatives</h2>
            <table class="table-auto w-full">
                @foreach($char->relatives as $relative)
                    <tr class="hover:bg-got-300">
                        <td class="px-4">
                            <a href="/characters/{{$relative->id}}">
                                {{ $relative->name }}
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>


        @if($char->events->count()>0)
            <div class="col-span-4 w-full col-start-2">
                <h2 class="text-white">Participated in</h2>
                <table class="table-auto w-full text-center">
                    <thead>
                    <tr>
                        <th>Event</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($char->events->sortBy('date') as $item)
                        <tr class="hover:bg-got-300">
                            <td>
                                <a href="/events/{{$item->id}}">
                                    {{ $item->name }}
                                </a>
                            </td>
                            <td> {{ $item->date }} </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        @if($char->owns->count()>0)
            <div class="col-span-4 w-full col-start-2">
                <h2 class="text-white">Owner of</h2>
                <table class="table-auto w-full text-center">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Specie</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($char->owns as $item)
                        <tr class="">
                            <td> {{ $item->name }} </td>
                            <td> {{ $item->species }} </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif

    </div>
</x-layout>
