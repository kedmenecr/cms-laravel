@extends('layouts.manage')

@section('content')

    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">{{$user->name}}</h1>
                <h4 class="subtitle">View user details</h4>
            </div> {{-- colum ends --}}

            <div class="column">
                <a href="{{route('users.edit',$user->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-5"></i>Edit user</a>
            </div>
        </div>
        <hr class="m-t-10">

        <div class="columns">
            <div class="column">
                <div class="field">
                    <label for="name" class="label">Name</label>
                    <pre>{{$user->name}}</pre>
                </div>
                <div class="field">
                    <label for="email" class="label">email</label>
                    <pre>{{$user->email}}</pre>
                </div>

                <div class="field">
                    <label for="email" class="label">Roles</label>
                    <ul>
                        {{$user->roles->count() ==  0 ? 'This user has no roles yet.' : ''}}
                    @foreach($user->roles as $role)
                        <li>{{$role->display_name}} {{$role->description}}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection