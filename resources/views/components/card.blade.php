<div class="card">

    <div class="text-center">
        <img src="{{Storage::url($track->cover)}}" alt="{{$track->title}}" width="200" class="p-3 rounded-pill">
    </div>

    <div class="card-body">
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
        Inserito da: <a href="{{route('track.filterbyUser', ['user' => $track->user])}}">{{$track->user->name}}</a> - {{ $track->created_at->format('d/m/Y') }}
    </div>
</div>