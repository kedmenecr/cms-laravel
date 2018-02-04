@extends('layouts.manage')


@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
        
            <th>Title</th>
            <th>Body</th>
        </tr>
    @foreach ($articles as $article)
    <tr>
        
        <td>{{ $article->title}}</td>
        <td>{{ $article->body}}</td>
        
    </tr>
    @endforeach
    </table>


@endsection