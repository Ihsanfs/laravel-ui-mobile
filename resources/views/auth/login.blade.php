@extends('layouts.app') @section('content')
<div class="d-flex justify-content-center">
<div class="container ">

        <div class="col-md-auto">

            <form action="{{ route('login') }}" method="post">

                @csrf
                <div class="text-center">
                    <img src="https://akcdn.detik.net.id/community/media/visual/2022/12/08/memphis-depay-1_169.jpeg?w=700&q=90" class=" img-thumbnail img-fluid" alt="...">
                  </div>

                <div class="mb-4 mt-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror" />
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror" />
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember me </label>
                </div> --}}
                <div class="d-flex justify-content-between">
                    <div>


                        <a href="{{ route('password.request') }}"  style="text-decoration: none;">Forgot password</a>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login</button>
                    </div>
                </div>
                {{-- <div class="d-flex flex-row-reverse bd-highlight">
                    <div class="p-2 bd-highlight">

            </div>
            <div class="p-2 bd-highlight">Flex item 1</div>
        </div> --}}
        <br/>
        <div class="container">
        <div class="d-flex justify-content-center">
           <p>dont have an account?</p>
        </div>
        <div class="d-flex justify-content-center">
            <a href="{{route('register')}}" style="text-decoration: none;">Register</a>
        </div>


    </div>

            </form>


        </div>
    </div>
</div>

@endsection
