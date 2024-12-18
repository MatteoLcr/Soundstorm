<x-layout>

    <div class="container">
        <div class="row">

            @foreach($tracks as $track)
            <div class="col-12 spazio">
                <x-cardRettangolareUser :track="$track"></x-cardRettangolareUser>
            </div>
            @endforeach
        </div>
    </div>




</x-layout>