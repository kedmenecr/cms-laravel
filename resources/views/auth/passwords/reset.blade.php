@extends('layouts.app')

@section('content')


    @if(session('status'))
        <div class="notification is-success">
            {{session('status')}}
        </div>
    @endif

    <div class="colums">
        <div class="column is-one-third is-offset-one-third m-t-50">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Reset your password</h1>
                    <form action="{{route('password.')}}" method="POST" role="form">
                        {{csrf_field()}}
                        <input type="hidden" value="{{$token}}" name="token">
                        <div class="field">
                            <label for="email" class="label">Email adress</label>
                            <p class="control">
                                <input required class="input {{$errors->has('email') ? 'is-danger' : ""}}" type="text" name="email" id="email" placeholder="name@domain.com" value="{{old('email')}}">
                            </p>
                            @if($errors->has('email'))
                                <p class="help is-danger">{{$errors->first('email')}}</p>
                            @endif
                        </div>
                        <button class="button is-success is-outline is-fullwidth m-t-30">Submit</button>
                        <div class="field">
                            <label for="password" class="label">Password</label>
                            <p class="control">
                                <input required class="input {{$errors->has('password') ? 'is-danger' : ""}}" type="password" name="password" id="password" >
                            </p>
                            @if($errors->has('password'))
                                <p class="help is-danger">{{$errors->first('password')}}</p>
                            @endif
                        </div>
                        <div class="field">
                            <label for="password_confirmation" class="label">Password Confirmation</label>
                            <p class="control">
                                <input required class="input {{$errors->has('password_confirmation') ? 'is-danger' : ""}}" type="password" name="password" id="password" >
                            </p>
                            @if($errors->has('password_confirmation'))
                                <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                            @endif
                            <button class="button is-primary is-outline is-fullwidth m-t-30">Register</button>
                        </div>
                </div>
                </form> {{-- end of form --}}
            </div> {{-- end of card-content --}}
        </div> {{-- end of card --}}
        <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Back to login.</a></h5>
    </div>
    </div>
@endsection
