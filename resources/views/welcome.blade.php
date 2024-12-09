<x-layout>
    @if(session('success'))
    <div class="container mt-3">
        <div class="row justify-content-center text-center">
            <div class="col-6 alert alert-success">
                {{ session('success')}}
            </div>
        </div>
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center my-5">
                <a class="btn btn-dark" href="{{route('track.create')}}">CARICA UNA TRACCIA</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center my-5">
                <h3>ULTIMI BRANI INSERITI</h3>
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