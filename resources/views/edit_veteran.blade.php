@extends('viewadmin')
@section('contentadmin')
@isset($veteran)
    <div class="form-group body-color">
        <form action="{{route('edit_participants', $veteran->id)}}" method="post">
            @csrf
        <label class="element-margin" for="name">Фамилия</label>
        <input type="text" class="form-control element-margin" value={{$veteran->surname}} name="surname" aria-describedby="emailHelp">
        <label class="element-margin" for="name">Имя</label>
        <input type="text" class="form-control element-margin" value={{$veteran->name}} name="name"  aria-describedby="emailHelp">
        <label class="element-margin" for="name">Отчество</label>
        <input type="text" class="form-control element-margin" value={{$veteran->patronymic}} name="patronymic" aria-describedby="emailHelp">
        <label class="element-margin" for="name">Дата рождения</label>
        <input type="text" class="form-control element-margin" value={{$veteran->date_of_birth}} name="date_of_birth"  aria-describedby="emailHelp">
        <label class="element-margin" for="name">Дата смерти</label>
        <input type="text" class="form-control element-margin" value={{$veteran->date_of_death}} name="date_of_death"  aria-describedby="emailHelp">
        <label class="element-margin" for="name">Воинское звание</label>
        <input type="text" class="form-control element-margin" value={{$veteran->militaryRanks->ranks}} name="ranks"  aria-describedby="emailHelp">
        <label class="element-margin" for="name">Место рождения</label>
        <textarea class="form-control element-margin"  name="place_of_birth"  aria-describedby="emailHelp">{{$veteran->place_of_birth}}</textarea>
        <label class="element-margin" for="name">Место призыва</label>
        <textarea  class="form-control element-margin"  name="place_of_appeal"  aria-describedby="emailHelp">{{$veteran->place_of_appeal}}</textarea>
        <label class="element-margin" for="name">Место службы</label>
        <textarea class="form-control element-margin"  name="place_of_service"  aria-describedby="emailHelp">{{$veteran->place_of_service}}</textarea>
        <label class="element-margin" for="name">Биография</label>
        <textarea  class="form-control element-margin"  name="biography" aria-describedby="emailHelp">{{$veteran->biography}}</textarea>
        <button type="submit" class="btn button-color element-margin">Сохранить</button>
        </form>
        <label class="element-margin" for="name">Рабочие места</label>
        <br><button type="submit" class="btn button-color element-margin">Добавить</button>
        <button type="submit" class="btn button-color element-margin">Редактировать</button>
        <br><label class="element-margin" for="name">Награды</label>
        <br><button type="submit" class="btn button-color element-margin">Добавить</button>
        <button type="submit" class="btn button-color element-margin">Редактировать</button>
    </div>
@endisset


@endsection
