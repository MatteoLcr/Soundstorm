<div class="card">

    <div class="text-center">
        <img src="{{Storage::url($track->cover)}}" alt="{{$track->title}}" width="200" class="p-3">
    </div>

    <div class="card-body">
        @if($track->genres->count())
            @foreach($track->genres as $genre)
            <a href="{{route('track.filterByGenre', ['genre' => $genre])}}" class="me-1 small">#{{$genre->name}}</a>
            @endforeach
        @else
            <span class="small">Gnere sconosciuto</span>
        @endif
        <h6><a href="{{route('track.filterByUser', ['user' => $track->user])}}">{{$track->user->name}}</a></h6>
        <h5 class="card-title">{{$track->title}}</h5>
        <p class="card-text">{{$track->description}}</p>
        <div>
            <audio class="w-100" controls>
                <source src="{{Storage::url($track->path)}}" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
    </div>
    <div class="card-footer text-body-secondary small">
        {{ $track->created_at->format('d/m/Y') }}
    </div>
</div>