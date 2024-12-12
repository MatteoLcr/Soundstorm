<div class="d-flex">
    <img src="{{Storage::url($track->cover)}}" class="imgCardrettangolare">
    <div class="cardUserCont d-flex flex-column justify-content-start">
        <div class="d-flex ms-4 mt-3 topItemCardRettangolare">
            <div class="rounded-circle d-flex justify-content-center align-items-center me-3 playButtonCont">
                <i class="bi bi-play-fill text-white fs-1 ps-1"></i>
            </div>
            <div>
                <div class="d-flex justify-content-between align-items-start topTextCardrettangolare">
                    <h6 class="mt-1"><a href="{{route('track.filterByUser', ['user' => $track->user])}}">{{$track->user->name}}</a></h6>
                    @foreach($track->genres as $genre)
                    <a href="{{route('track.filterByGenre', ['genre' => $genre])}}" class="btnCardRettangolare px-2 text-start align-items-center">#{{$genre->name}}</a>
                    @endforeach
                </div>
                <div class="d-flex justify-content-start align-items-baseline">
                    <h5 class="card-title me-3">{{$track->title}}</h5>
                    <p> relased at: {{ $track->created_at->format('d/m/Y') }} </p>
                </div>
            </div>
        </div>

        <div class="cardRettangolare ms-2">
            <audio controls>
                <source src="{{Storage::url($track->path)}}" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>

        <div class="d-flex justify-content-evenly align-items-center linkCardRettangolareContainer ms-3">
            <form action="{{route('track.like', $track->id)}}" method="POST">
                @csrf
                @php
                $like = $track->likes->where('user_id', auth()->user()->id)->first();
                $is_liked = $like ? $like->like : 0;  
                @endphp

                @if($is_liked)
                <button type="submit" class="linkBtn px-2 d-flex align-items-center" id="heartBtn">
                    <i class="bi bi-heart-fill me-2" id="heartIcon"></i>Non mi piace</button>
                @else 
                <button type="submit" class="linkBtn px-2 d-flex align-items-center" id="heartBtn">
                    <i class="bi bi-heart me-2" id="heartIcon"></i>Mi piace</button>
                @endif

            </form>

            <a class="linkBtn px-2 d-flex align-items-center"><i class="bi bi-repeat me-2"></i>Ripubblica</a>

            <a class="linkBtn px-2 d-flex align-items-center"><i class="bi bi-share-fill me-2"></i>Condividi</a>

            <a class="linkBtn px-2 d-flex align-items-center"><i class="bi bi-download me-2"></i>Download</a>

        </div>



    </div>
</div>