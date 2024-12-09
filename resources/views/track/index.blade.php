<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center my-5">
                <h3>TUTTE LE TRACCE</h3>
            </div>
        </div>
        <div class="row">
            @foreach ($tracks as $track)
            <div class="col-12 col-md-3">
                <x-card :track="$track"></x-card>
            </div>
            @endforeach
        </div>
    </div>





</x-layout>