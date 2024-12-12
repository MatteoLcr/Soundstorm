<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center my-5">
                <h3></h3>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($tracks as $track)
            <div class="col-10 my-3">
                <x-cardRettangolareUser :track="$track"></x-cardRettangolareUser>
            </div>
            @endforeach
        </div>
    </div>





</x-layout>