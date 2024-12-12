<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 topItem">
                <h3>TUTTI GLI ARTISTI</h3>
            </div>
        </div>
        <div class="row">
            @foreach ($genres as $genre)
            <div class="col-6 bg-info m-2">
                <h5>{{$genre->name}}</h5>
                <div class="bg-success">
                    <h6>{{$genre->tracks->count()}}</h6>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</x-layout>