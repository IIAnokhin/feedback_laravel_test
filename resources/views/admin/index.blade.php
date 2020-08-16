@extends('layouts.app')

@section('content')

    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Имя Клиента</th>
            <th>Почта Клиента</th>
            <th>Тема</th>
            <th>Сообщение</th>
            <th>File</th>
            <th>Actions</th>
            <th>Дата</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bids as $bid)
            <tr>
                <td>{{$bid->id}}</td>
                <td>User</td>
                <td>Email</td>
                <td>{{$bid->title}}</td>
                <td>{{$bid->text}}</td>
                <td>File</td>
                <td>
                    <div>
                        <a href="{{ route('bids.show', ['id' => $bid->id]) }}">Просмотр</a>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                            <input type="checkbox" checked> Ответил
                        </label>
                    </div>

                </td>
                <td>{{$bid->created_at}}</td>
            </tr>
        @endforeach
        </tfoot>
    </table>
@endsection
