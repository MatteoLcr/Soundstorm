<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 topItem">
                <h3 class="ms-5 mb-5">TUTTI GLI ARTISTI SUDDIVISI PER GENERE MUSICALE</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-evenly">

            @foreach ($genres as $genre)
            <div class="col-5 p-3 mb-3 genreBox">
                <h5 class="genreName">{{$genre->name}}</h5>
                @php
                $singleUserGenre = [];
                foreach ($genresTracks as $genreTrack) {
                if ($genreTrack->genres->contains($genre)) {
                $singleUserGenre[] = $genreTrack->user->profile->avatar;
                }
                }
                // Per ottenere solo nomi univoci
                $singleUser = array_unique($singleUserGenre);
                // Stampa la lista finale di utenti univoci
                @endphp
                @foreach ($singleUser as $user)
                <img src="{{Storage::url($user)}}" class="mb-2 img-rounded img-fluid genreBoxImg" alt="">
                @endforeach
            </div>
            @endforeach

        </div>
    </div>
</x-layout>