<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 topItem">
                <h3>TUTTI GLI ARTISTI</h3>
            </div>
        </div>
    </div>

    <div class="container">
        @foreach ($genres as $genre)
        <div class="row rowCustom mb-3">
            <div class="col-6">
                <h5>{{$genre->name}}</h5>
                @foreach ($genresTracks as $genreTracks)
                @if($genreTracks)
                @for ($index = 0; $index < count($genreTracks->tracks); $index++)
                <img src="{{Storage::url($genreTracks->tracks[$index]->user->profile->avatar)}}" alt="" width="100"; height="100">
                    @dump($genreTracks->tracks[$index]->user->name)
                @endfor
                @endif
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</x-layout>