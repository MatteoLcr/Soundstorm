<x-layout>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-12 userHeader d-flex align-items-center">
                <img src="{{$user->profile->avatar ? Storage::url($user->profile->avatar) : 'public/storage/default.png'}}" alt="Admin" class="rounded-circle mx-4" width="280" height="280">
                <div class="d-flex flex-column userInfoContainer">
                    <h2>{{ $user->name}}</h2>
                    <h4>{{$user->profile->country}}, {{$user->profile->city}}</h4>
                    <h6>{{ Auth::user()->email ?? ''}}</h6>
                    <!-- Button trigger modal -->
                    <button type="button" class="sliderBtn1 mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Modifica profilo
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header d-flex flex-column justify-content-start">

                                    <div class="d-flex justify-content-start">
                                        <img src="{{$user->profile->avatar ? Storage::url($user->profile->avatar) : 'public/storage/default.png'}}" alt="Admin" class="rounded-circle" width="100" height="100">

                                        <div class="d-flex justify-content-between modal-title fs-5 ms-3" id="exampleModalLabel">
                                            <div class="d-flex flex-column">
                                                <h4 class="UserT1">{{Auth::user()->name}}</h4>
                                                <p class="text-muted font-size-sm">{{$user->profile->city}}, {{$user->profile->province}}, {{$user->profile->country}}</p>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>

                                    <form class="ms-5" action="{{ route('profile.setAvatar', compact('user'))}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="">
                                                <input type="file" class="form-control changeUserAvatar" name="avatar" id="avatar">
                                            </div>
                                            <div class="">
                                                <button type="submit" class="avatarBtnCondfirm">Conferma</button>
                                            </div>
                                        </div>
                                        @error('avatar')
                                        <span class="small fst-italic text-danger">{{$message}}"</span>
                                        @enderror
                                    </form>

                                </div>

                                <div class="modal-body text-dark">

                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-column justify-content-start rigaInfoCont">
                                            <p class="fw-bold">Nome</p>
                                            <p>{{ Auth::user()->name ?? ''}}</p>
                                        </div>
                                        <div class="d-flex flex-column justify-content-start rigaInfoCont">
                                            <p class="fw-bold">Email</p>
                                            <p>{{ Auth::user()->email ?? ''}}</p>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-column justify-content-start rigaInfoCont">
                                            <p class="fw-bold">Residenza</p>
                                            <p>{{ $user->profile->address ?? ''}}</p>
                                        </div>

                                        <div class="d-flex flex-column justify-content-start rigaInfoCont">
                                            <p class="fw-bold">Città</p>
                                            <p>{{ $user->profile->city ?? ''}}</p>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-column justify-content-start rigaInfoCont">
                                            <p class="fw-bold">Regione</p>
                                            <p>{{ $user->profile->region ?? ''}}</p>
                                        </div>
                                        <div class="d-flex flex-column justify-content-start rigaInfoCont">
                                            <p class="fw-bold">Nazione</p>
                                            <p>{{ $user->profile->country ?? ''}}</p>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-column justify-content-start rigaInfoCont">
                                            <p class="fw-bold">Cap</p>
                                            <p>{{ $user->profile->zip_code ?? ''}}</p>
                                        </div>
                                        <div class="d-flex flex-column justify-content-start rigaInfoCont">
                                            <p class="fw-bold">Cellulare</p>
                                            <p>{{ $user->profile->mobile_number ?? ''}}</p>
                                        </div>
                                    </div>

                                    <a href="{{route('profile.edit', compact('user'))}}" type="button" class="changeUserInfo text-center align-items-center">Modifica informazioni personali</a>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="avatarBtnCondfirm" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center my-5">
                <a class="btn btn-dark" href="{{route('track.create')}}">CARICA UNA TRACCIA</a>
            </div>
        </div>
        <hr>
        <div class="row mt-5 mb-3">
            <h5>I MIEI BRANI</h5>
        </div>
        <div class="row justify-content-center">
            @foreach ($user->tracks as $track)
            <div class="col-3 d-flex justify-content-center me-2 cardQuadrataUser">
                <x-cardUserProfile :track="$track"></x-card>
            </div>
            @endforeach
        </div>
        <hr>
    </div>



</x-layout>