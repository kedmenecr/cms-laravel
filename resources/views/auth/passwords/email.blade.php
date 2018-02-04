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
                    <h1 class="title">Forgot password?</h1>
                    <form action="{{route('password.email')}}" method="POST" role="form">
                        {{csrf_field()}}
                        <div class="field">
                            <label for="email" class="label">Email adress</label>
                            <p class="control">
                                <input required class="input {{$errors->has('email') ? 'is-danger' : ""}}" type="text" name="email" id="email" placeholder="name@domain.com" value="{{old('email')}}">
                            </p>
                            @if($errors->has('email'))
                                <p class="help is-danger">{{$errors->first('email')}}</p>
                            @endif
                        </div>
                            <button class="button is-primary is-outline is-fullwidth m-t-30">Submit</button>
                        </div>
                </form> {{-- end of form --}}
                </div> {{-- end of card-content --}}
            </div> {{-- end of card --}}
            <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Back to login.</a></h5>
        </div>
    </div>
@endsection
