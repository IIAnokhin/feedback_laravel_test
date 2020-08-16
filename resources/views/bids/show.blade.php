@extends('layouts.app')

@section('content')
    <div class="card" style="width: 70rem;">
        <div class="card-body">
            <h3 class="card-author">User</h3>
            <h5 class="card-title">{{$bid->title}}</h5>

            <p class="card-text">{{$bid->text}}</p>
            <p class="card-date">Заявка отправлена {{$bid->created_at->diffForHumans()}}</p>
            <a href="/" class="card-link">Home</a>
            <a href="#" class="card-link">Actions</a>
        </div>
    </div>

@endsection
