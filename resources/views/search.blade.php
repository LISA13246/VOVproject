@extends('view')

@section('content')
<form class="body-color" action="{{ route('veteran_search') }}" method="post">
    @csrf
  <div class="form-group">
    <label class="element-margin" for="name">Введите ФИО участника</label>

  <input type="text" class="form-control element-margin" name="name" id="name" aria-describedby="emailHelp" placeholder="ФИО">
  </div>

 <button type="submit" class="btn button-color element-margin">Поиск</button>

</form>
@isset($veterans)
@for($i=0; $i<count($veterans)/2; $i++)
<div class="row">
    @for($j=$i; $j<=$i+1;$j++)
        @if(count($veterans) > $j)
    <div class="col-6">
<div class="veteran-card card card-row" >
    <img  class="card-img-top" alt="Card image cap" src={{$veterans[$j]->photo}}>
    <div class="card-body">
        <h5 class="card-title">{{$veterans[$j]->surname}} {{$veterans[$j]->name }} {{$veterans[$j]->patronymic }}</h5>
        <p class="card-text">{{$veterans[$j]->biography}}</p>
    </div>
    <!--<ul class="list-group list-group-flush">
        <li class="list-group-item">медаль "За боевые заслуги" </li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>-->

</div>
    </div>
        @endif
        @endfor
</div>
    @endfor
@endisset

@endsection
