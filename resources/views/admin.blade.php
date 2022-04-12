@extends('viewadmin')
@section('contentadmin')
<form class = "body-color"  action="{{ route('login') }}" method="post">
@csrf

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <h1 class="h3 mb-3 fw-normal element-margin"><ya-tr-span data-index="0-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Please sign in" data-translation="Войдите в систему" data-type="trSpan">Войдите в систему</ya-tr-span></h1>





    <div class="form-floating ">
      <input name="login" type="login" class="form-control element-margin" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput"><ya-tr-span data-index="1-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Login" data-translation="Логин" data-type="trSpan">Логин</ya-tr-span></label>
    </div>

    <div class="form-floating">
      <input name="password" type="password" class="form-control element-margin" id="floatingPassword" placeholder="Пароль">
      <label for="floatingPassword"><ya-tr-span data-index="2-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Password" data-translation="Пароль" data-type="trSpan">Пароль</ya-tr-span></label>
    </div>
    <button class="w-100 btn btn-lg button-color element-margin" type="submit"><ya-tr-span data-index="4-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Sign in" data-translation="Вход" data-type="trSpan">Вход</ya-tr-span></button>

  </form>
@endsection
