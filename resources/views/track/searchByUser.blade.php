<x-layout>

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-12 userHeader d-flex align-items-center">
                <img src="{{$user->profile->avatar ? Storage::url($user->profile->avatar) : 'public/storage/default.png'}}" alt="Admin" class="rounded-circle mx-4" width="280" height="280">
                <div class="d-flex flex-column userInfoContainer">
                    <h2>{{ $user->name}}</h2>
                    <h4>{{$user->profile->country}}, {{$user->profile->city}}</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex align-items-center">
                <h3>BRANI</h3>
            </div>
            <div class="row ">
                @foreach ($tracks as $track)
                <div class="col-10 mb-5 d-flex flex-row justify-content-evenly">
                    <x-cardRettangolareUser :track="$track"></x-cardRettangolareUser>
                    <div class="separe ms-3"></div>
                </div>
                <div class="col-2 boxSideUser d-none">
                </div>
                @endforeach
            </div>
        </div>
    </div>



</x-layout>