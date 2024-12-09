<x-layout>

<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <h3>TUTTI I BRANI DI {{ $user->name}}</h3>
        </div>
        <div class="row">
        @foreach ($tracks as $track)
            <div class="col-12 col-md-3">
                <x-card :track="$track"></x-card>
            </div>
            @endforeach
        </div>
    </div>
</div>



</x-layout>