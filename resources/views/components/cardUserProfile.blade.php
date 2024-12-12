<div class="cont">
    <img src="{{Storage::url($track->cover)}}" class="imgCardQuadrataUser">
    <div class="controllerCardQuadrataUser">
        <audio controls>
            <source src="{{Storage::url($track->path)}}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>
    <div class="infoCardQuadrataUser">
        <h6 class="mt-1"><a href="{{route('track.filterByUser', ['user' => $track->user])}}">{{$track->user->name}}</a></h6>
        <h6 class="card-title">{{$track->title}}</h6>
        
        <div class="d-flex justify-content-between align-items-center iconUserCardContainer">
            <a href="{{route('track.edit', compact('track'))}}" class="btn"><i class="bi bi-sliders2-vertical"></i></a>
           <form
           class="d-inline"
           method="post" 
           onclick="return confirm('sei sicuro di voler cancellare?')"
           action="{{route('track.destroy', compact('track'))}}">
           @csrf
           @method('delete')
           <button class="btn"><i class="bi bi-trash3"></i></button>
           </form>
        </div>
    </div>
</div>