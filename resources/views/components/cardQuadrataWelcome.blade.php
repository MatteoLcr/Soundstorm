<div class="cont">
    <img src="{{Storage::url($track->cover)}}" class="imgCardQuadrata">
    <div class="controllerCardQuadrata">
        <audio controls>
            <source src="{{Storage::url($track->path)}}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>
    <div class="infoCardQuadrata">
        <h6 class="mt-1"><a href="{{route('track.filterByUser', ['user' => $track->user])}}">{{$track->user->name}}</a></h6>
        <h6 class="card-title">{{$track->title}}</h6>
    </div>
</div>