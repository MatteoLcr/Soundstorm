<x-layout>

<div class="container" >
    <div class="row justify-content-center align-items-center loginCont">
        
            <form action="{{route('login')}}" class="col-5 d-flex flex-column justify-content-center align-items-center rounded p-5 shadow loginBox" method="POST">
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

                <button type="submit" class="loginBtn mt-4">Login</button>
                <div class="mt-2">
                    <span>Don't have an account? <a href="{{route('register')}}" class="textOrange">Register</a></span>
                </div>

            </form>
        
    </div>
</div>



</x-layout>