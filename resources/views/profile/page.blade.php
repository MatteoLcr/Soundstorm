<x-layout>
    @if(session('success'))
    <div class="container mt-3">
        <div class="row text-center">
            <div class="col-6 alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    </div>
    @endif

    <div class="container">
        <div class="row justify-content-evenly">
            <div class="col-4 p-5">
                <div class="mt-3">
                    <h4>{{Auth::user()->name}}</h4>
                    <p class="text-muted font-size-sm">{{$user->profile->city}}, {{$user->profile->province}}, {{$user->profile->country}}</p>
                </div>
                <img src="{{$user->profile->avatar ? Storage::url($user->profile->avatar) : 'public/storage/default.png'}}" alt="Admin" class="rounded-circle" width="250" height="250">
                <form class="mt-5" action="{{ route('profile.setAvatar', compact('user'))}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="col-9">
                            <input type="file" class="form-control" name="avatar" id="avatar">
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary">Modifica</button>
                        </div>
                    </div>
                    @error('avatar')
                    <span class="small fst-italic text-danger">{{$message}}"</span>
                    @enderror
                </form>
            </div>

            <div class="col-4 p-3">
                <div class="row">
                    <div class="col-3 fw-bold">
                        <p>Nome</p>
                    </div>
                    <div class="col-9">
                        <p>{{ Auth::user()->name ?? ''}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 fw-bold">
                        <p>Email</p>
                    </div>
                    <div class="col-9">
                        <p>{{ Auth::user()->email ?? ''}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 fw-bold">
                        <p>Residenza</p>
                    </div>
                    <div class="col-9">
                        <p>{{ $user->profile->address ?? ''}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 fw-bold">
                        <p>Città</p>
                    </div>
                    <div class="col-9">
                        <p>{{ $user->profile->city ?? ''}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 fw-bold">
                        <p>Provincia</p>
                    </div>
                    <div class="col-9">
                        <p>{{ $user->profile->province ?? ''}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 fw-bold">
                        <p>Regione</p>
                    </div>
                    <div class="col-9">
                        <p>{{ $user->profile->region ?? ''}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <p>Nazione</p>
                    </div>
                    <div class="col-9">
                        <p>{{ $user->profile->country ?? ''}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <p>Cap</p>
                    </div>
                    <div class="col-9">
                        <p>{{ $user->profile->zip_code ?? ''}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <p>Cellulare</p>
                    </div>
                    <div class="col-9">
                        <p>{{ $user->profile->mobile_number ?? ''}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row ">
            <h5>I MIEI BRANI</h5>
        </div>
        <div class="row justify-content-center">
            @foreach ($user->tracks as $track)
            <div class="col-3 d-flex justify-content-center mx-2 cardQuadrataUser">
                <x-cardUserProfile :track="$track"></x-card>
            </div>
            @endforeach
        </div>

        <div class="row ">
            <h5>BRANI CHE MI PIACCIONO</h5>
        </div>
        <div class="row justify-content-center">
            @foreach($likes as $like)

            @php
                $like = $track->likes->where('user_id', auth()->user()->id)->first();
                $is_liked = $like ? $like->like : 0;  
                @endphp
            @if($is_liked)
            <div class="col-10 mb-5 d-flex flex-row justify-content-evenly">
                <x-cardRettangolareUser :track="$track"></x-cardRettangolareUser>
            </div>
            @endif
                @endforeach
            </div>
        </div>

</x-layout>