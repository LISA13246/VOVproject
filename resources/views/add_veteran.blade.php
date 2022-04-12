@extends('viewadmin')
@section('contentadmin')

        <div class="form-group body-color">
            <form action="{{route('add_participants')}}" method="post">
                @csrf
                <label class="element-margin" for="name">Фамилия</label>
                <input type="text" class="form-control element-margin"  name="surname" aria-describedby="emailHelp">
                <label class="element-margin" for="name">Имя</label>
                <input type="text" class="form-control element-margin"  name="name"  aria-describedby="emailHelp">
                <label class="element-margin" for="name">Отчество</label>
                <input type="text" class="form-control element-margin"  name="patronymic" aria-describedby="emailHelp">
                <label class="element-margin" for="name">Дата рождения</label>
                <input type="text" class="form-control element-margin" name="date_of_birth"  aria-describedby="emailHelp">
                <label class="element-margin" for="name">Дата смерти</label>
                <input type="text" class="form-control element-margin" name="date_of_death"  aria-describedby="emailHelp">
                <label class="element-margin" for="name">Воинское звание</label>
                <input type="text" class="form-control element-margin"  name="ranks"  aria-describedby="emailHelp">
                <label class="element-margin" for="name">Место рождения</label>
                <textarea class="form-control element-margin"  name="place_of_birth"  aria-describedby="emailHelp"></textarea>
                <label class="element-margin" for="name">Место призыва</label>
                <textarea  class="form-control element-margin"  name="place_of_appeal"  aria-describedby="emailHelp"></textarea>
                <label class="element-margin" for="name">Место службы</label>
                <textarea class="form-control element-margin"  name="place_of_service"  aria-describedby="emailHelp"></textarea>
                <label class="element-margin" for="name">Биография</label>
                <textarea  class="form-control element-margin"  name="biography" aria-describedby="emailHelp"></textarea>
                <button type="submit" class="btn button-color element-margin">Сохранить</button>
            </form>
            <label class="element-margin" for="name">Рабочие места</label>
            <br><button type="submit" class="btn button-color element-margin">Добавить</button>
            <button type="submit" class="btn button-color element-margin">Редактировать</button>
            <br><label class="element-margin" for="name">Награды</label>
            <br><button type="submit" class="btn button-color element-margin">Добавить</button>
            <button type="submit" class="btn button-color element-margin">Редактировать</button>
        </div>



@endsection
