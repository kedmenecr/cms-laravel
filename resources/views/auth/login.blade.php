@extends('layouts.app')

@section('content')

    <div class="colums">
        <div class="column is-one-third is-offset-one-third m-t-50">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Log In</h1>
                    <form action="{{route('login')}}" method="POST" role="form">
                        {{csrf_field()}}
                    <div class="field">
                        <label for="email" class="label">Email adress</label>
                        <p class="control">
                            <input class="input {{$errors->has('email') ? 'is-danger' : ""}}" type="text" name="email" id="email" placeholder="name@domain.com" value="{{old('email')}}">
                        </p>
                        @if($errors->has('email'))
                            <p class="help is-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <p class="control">
                            <input class="input {{$errors->has('password') ? 'is-danger' : ""}}" type="password" name="password" id="password" >
                        </p>
                        @if($errors->has('password'))
                        <p class="help is-danger">{{$errors->first('password')}}</p>
                        @endif
                    </div>
                    <b-checkbox class="mt-20" name="remember">Remember me</b-checkbox>
                    <button class="button is-primary-bg has-text-white is-outline is-fullwidth m-t-30">Log In</button>
                </form> {{-- end of form --}}
                </div> {{-- end of card-content --}}
            </div> {{-- end of card --}}
            <h5 class="has-text-centered m-t-20"><a href="{{route('password.request')}}" class="is-muted">Forgot your password?</a></h5>
        </div>
    </div>

@endsection
