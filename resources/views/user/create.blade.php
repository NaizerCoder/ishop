@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('tag.index')}}">Пользователи</a></li>
                        <li class="breadcrumb-item">Добавить тэг</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{route('user.store')}}" method="POST" class="w-25">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="surname" placeholder="Фамилия"
                               value="{{old('surname')}}">
                    </div>
                    @error('surname')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Имя" value="{{old('name')}}">
                    </div>
                    @error('name')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="patronymic" placeholder="Отчество"
                               value="{{old('patronymic')}}">
                    </div>
                    @error('patronymic')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <div class="form-group mb-3" style="width:90px;">
                        <input type="text" class="form-control" name="age" placeholder="Возраст" value="{{old('age')}}" maxlength="3">
                    </div>
                    @error('age')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <div class="form-group mb-3">

                        <select class="form-control" name="gender">
                            <option selected disabled>Пол</option>
                            <option value="1" {{ old('gender')==1 ? 'selected' : ''  }}> Мужской</option>
                            <option value="2" {{ old('gender')==2 ? 'selected' : ''  }}> Женский</option>
                        </select>
                    </div>
                    @error('gender')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="address" placeholder="Адрес" value="{{old('address')}}">
                    </div>
                    @error('address')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <div class="form-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Электронная почта" value="{{old('email')}}">
                    </div>
                    @error('email')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <div class="form-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Пароль" value="{{old('password')}}">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Повтор пароля" value="{{old('password_confirmation')}}">
                    </div>
                    @error('password')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror


                    <button type="submit" class="btn btn-success">Добавить</button>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection

