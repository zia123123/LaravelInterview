@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
            
<br/>
<h2>Posts:</h2>
@foreach($post as $posts)
<p> {{ $posts->id }} {{ $posts->content }}  </p>
<p> name : {{ $posts->user->name }}</p>
<p> email : {{ $posts->user->email }}</p>
@endforeach

<h2>UserList With Comment:</h2>
@foreach($array as $posts)
<p> name : {{ $posts->name }}</p>
<p>Comment : 
{{ $comment = App\Comment::where('name', $posts->name)->pluck('comment')->first()}}
</p>
@endforeach

<h2>Comment Guest :</h2>
<p>Comment : 
@foreach($array as $comment)
{{ $comment = App\Comment::where('name', '!=' ,$comment->name)->first() }}
</p>
@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
