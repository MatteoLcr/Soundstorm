<x-layout>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 mt-5">
                <h3>ADMIN DASHBOARD</h3>
            </div>
        </div>
    </div>
    <x-dashboard-nav></x-dashboard-nav>


    <div class="row">
        <div class="col-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <p class="card-title fs-5">Totale utenti</p>
                    <p class="card-text fs-1">{{$usersCount}}</p>
                </div>
            </div>
        </div>


        <div class="col-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <p class="card-title fs-5">Totale brani</p>
                    <p class="card-text fs-1">{{$tracksCount}}</p>
                </div>
            </div>
        </div>


        <div class="col-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <p class="card-title fs-5">Totale dimensione brani</p>
                    <p class="card-text fs-1">{{ $tracksSize}} MB</p>
                </div>
            </div>
        </div>


        <div class="col-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <p class="card-title fs-5">Brani inseriti settimana precedente</p>
                    <p class="card-text fs-1">{{ $lastWeekTracks }}</p>
                </div>
            </div>
        </div>
    </div>


</x-layout>