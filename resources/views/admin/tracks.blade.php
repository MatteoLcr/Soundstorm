<x-layout>
    <x-dashboard-nav></x-dashboard-nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>BRANI</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table striped border">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Iscritto da</th>
                            <th scope="col">Ruolo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tracks as $track)
                        <tr>
                            <th scope="row">{{$track->id}}</th>
                            <td>{{$track->title}}</td>
                            <td>{{$track->description}}</td>
                            <td>{{$track->created_at->format('d/m/Y')}}</td>
                            <td>{{$track->user->name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>