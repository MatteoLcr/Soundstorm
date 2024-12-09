<x-layout>
    <x-dashboard-nav></x-dashboard-nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>UTENTI</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table striped border">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Iscritto da</th>
                            <th scope="col">Ruolo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at->format('d/m/Y')}}</td>
                            <td>{{$user->isAdmin() ? 'Admin' : 'Utente base'}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>