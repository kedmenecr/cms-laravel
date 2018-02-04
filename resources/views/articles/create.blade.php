@extends('layouts.manage')



@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Article</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('articles.index') }}"> Back</a>
            </div>
        </div>
    </div>




    {!! Form::open(array('route' => 'articles.store','method'=>'POST')) !!}
         @include('articles.form')
    {!! Form::close() !!}


@endsection