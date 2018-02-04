@extends('layouts.manage')

@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-outlined is-pulled-left">Manage Users</h1>
            </div>
            <div class="column">
                <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-5"></i>Create a user</a>
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-content">
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date Created</th>
                    <th>Actions</th>
                </thead>

                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th>{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at->toFormattedDateString()}}</td>
                        <td><a href="{{route('users.edit',$user->id)}}" class="button is-outlined">Edit</a></td>
                        <td><a href="{{route('users.show',$user->id)}}" class="button is-outlined">Show</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
        {{$users->links()}}
    </div>




@endsection