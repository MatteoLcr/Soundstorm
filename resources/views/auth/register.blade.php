<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="{{route('register')}}" class="rounded p-5 shadow" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                        @error('name')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}">
                        @error('email')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                        @error('password')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Password confirmation</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                        @error('password_confirmation')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <hr>

                    <div class="mb-3">
                        <label for="mobile_number" class="form-label">Mobile number</label></label>
                        <input type="text" class="form-control" name="mobile_number" id="mobile_number" value="{{old('mobile_number')}}">
                        @error('mobile_number')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3 d-flex justify-content-between">
                        <div class="col-7">
                            <label for="address" class="form-label">Residenza</label>
                            <input type="text" class="form-control" name="address" id="address" value="{{old('address')}}">
                            @error('address')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="col-4">
                            <label for="zip_code" class="form-label">CAP</label>
                            <input type="text" class="form-control" name="zip_code" id="zip_code" value="{{old('zip_code')}}">
                            @error('zip_code')
                            <div class="text-danger">{{$message}}</div>
                            @enderror   
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-between">
                        <div class="col-7">
                            <label for="city" class="form-label">Città</label>
                            <input type="text" name="city" class="form-control" id="city">
                            @error('city')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="col-4">
                            <label for="province" class="form-label">Provincia</label>
                            <input type="text" name="province" class="form-control" id="province">
                            @error('province')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 d-flex justify-content-between">
                        <div class="col-5">
                            <label for="region" class="form-label">Regione</label>
                            <input type="text" name="region" class="form-control" id="region">
                            @error('region')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="col-5">
                            <label for="country" class="form-label">Nazione</label>
                            <input type="text" name="country" class="form-control" id="country">
                            @error('country')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                    </div>


                    <button type="submit" class="btn btn-primary">Register</button>
                    <div class="mt-2">
                        <span>Already have an account? <a href="{{route('login')}}">Login</a></span>
                    </div>

                </form>
            </div>
        </div>
    </div>



</x-layout>