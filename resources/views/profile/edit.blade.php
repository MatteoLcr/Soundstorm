<x-layout>

    <H3>AGGIORNA PROFILO</H3>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-6 p-5">
                <form class="rounded p-5" action="{{route('profile.update', compact('user'))}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ Auth::user()->name}}">
                        @error('name')
                        <span class="small fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ Auth::user()->email}}">
                        @error('email')
                        <span class="small fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <hr>

                    <div class="mb-3">
                        <label for="mobile_number" class="form-label">Cellulare</label>
                        <input type="mobile_number" name="mobile_number" class="form-control" id="mobile_number" value="{{$user->profile->mobile_number}}">
                        @error('mobile_number')
                        <span class="small fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Residenza</label>
                        <input type="address" name="address" class="form-control" id="address" value="{{ $user->profile->address}}">
                        @error('address')    
                        <span class="small fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="city" class="form-label">Città</label>
                        <input type="city" name="city" class="form-control" id="city" value="{{$user->profile->city}}">
                        @error('city')
                        <span class="small fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="zip_code" class="form-label">CAP</label>
                        <input type="zip_code" name="zip_code" class="form-control" id="zip_code" value="{{$user->profile->zip_code}}">
                        @error('zip_code')
                        <span class="small fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="province" class="form-label">Provincia</label>
                        <input type="province" name="province" class="form-control" id="province" value="{{$user->profile->province}}">
                        @error('province')
                        <span class="small fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="region" class="form-label">Regione</label>
                        <input type="region" name="region" class="form-control" id="region" value="{{$user->profile->region}}">
                        @error('region')
                        <span class="small fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="country" class="form-label">Nazione</label>
                        <input type="country" name="country" class="form-control" id="country" value="{{$user->profile->country}}">
                        @error('country')
                        <span class="small fst-italic text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Aggiorna profilo</button>
                    <a href="{{route('profilo.page')}}" class="btn btn-secondary">Annulla"></a>




                </form>
            </div>
        </div>
    </div>
</x-layout>