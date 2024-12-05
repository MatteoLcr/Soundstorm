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
    <div class="container mt-5">
        <div class="row justify-content-evenly">
            <div class="col-4 p-5">
                <img class="img-fluid" src="" alt="">
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
</x-layout>