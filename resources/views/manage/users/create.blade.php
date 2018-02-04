@extends('layouts.manage')

@section('content')

    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Create a user</h1>
            </div>
        </div>
        <hr class="m-t-10">


        <div class="columns">
            <div class="column">
                <form action="{{route('users.store')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="field">
                        <label for="name">Name</label>
                        <p class="control">
                            <input type="text" class="input" name="name" id="name">
                        </p>
                    </div>

                    <div class="field">
                        <label for="name">Email:</label>
                        <p class="control">
                            <input type="email" class="input" name="email" id="email">
                        </p>
                    </div>

                    <div class="field">
                        <label for="password">Password</label>
                        <p class="control">
                            <input type="text" class="input" name="password" id="password" :disabled="auto_password">
                            <b-checkbox class="m-t-10" name="auto_generate" :checked="true" v-model="auto_password">Auto generate password</b-checkbox>
                        </p>
                    </div>

                    <button class="button is-success">Create user</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
            <script>
                var app = new Vue({
                    el:'#app',
                    data: {
                        auto_password : true
                    },
                });
            </script>
@endsection
