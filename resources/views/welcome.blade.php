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
    <a class="btn btn-dark" href="{{route('track.create')}}">CARICA UNA TRACCIA</a>
</x-layout>