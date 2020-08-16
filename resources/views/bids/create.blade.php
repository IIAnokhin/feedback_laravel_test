@extends('layouts.app')

@section('content')
    <form action="{{ route('bids.store') }}" method="post">
        @csrf
        <h3>Оставить заявку</h3>
        <div class="form-group">
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="form-group">
            <textarea name="text"  rows="10" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <input type="file" >
        </div>

        <input type="submit" value="Оставить заявку" class="btn btn-outline-success">
    </form>
@endsection
