<x-layout>

<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="{{route('login')}}" class="rounded p-5 shadow" method="POST">
                @csrf

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

                <button type="submit" class="btn btn-primary">Login</button>
                <div class="mt-2">
                    <span>Don't have an account? <a href="{{route('register')}}">Register</a></span>
                </div>

            </form>
        </div>
    </div>
</div>



</x-layout>