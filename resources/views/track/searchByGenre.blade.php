<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5>TUTTI I BRANI DELLA CATEGORIA {{$genre->name}}</h5>
            </div>
        </div>

        <div class="row">
            @foreach($tracks as $track)
            <div class="col-12 col-md-3 mb-3">
                <x-card :track="$track"></x-card>
            </div>
            @endforeach
        </div>
    </div>







</x-layout>