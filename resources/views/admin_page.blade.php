@extends('viewadmin')
@section('contentadmin')
    @isset($veterans)
        @if(count($veterans) > 0)
            <div class="table-responsive">
            <table class="table table-striped" >
                <thead>
                <tr>
                    <th scope="col">Имя</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Отчество</th>
                    <th scope="col" style="white-space: nowrap">Дата рождения</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
            <tbody>
        @foreach($veterans as $veteran)
            <tr>
                <td>{{$veteran->name}}</td>
                <td>{{$veteran->surname}}</td>
                <td>{{$veteran->patronymic}}</td>
                <td>{{$veteran->date_of_birth}}</td>
                <td><a href="{{route('edit_participants', $veteran->id)}}">Редактировать</a></td>
                <td><a href="{{route('delete_participants',$veteran->id)}}">Удалить</a></td>
            </tr>
            @endforeach
            </tbody>
    </table>
            </div>
        @endif
    @endisset
    <a href="{{route('add_participants_get_view')}}" class="btn button-color element-margin">Добавить</a>
@endsection
