@extends('layouts.main')
@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактировать пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Пользователи</a></li>
                            <li class="breadcrumb-item active">Редактирование пользователя</li>
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
                    <form action="{{route('user.update',$user->id)}}" method="POST" class="w-25">
                        @csrf
                        @method('patch')

                        <div class="form-group mb-3">
                            <input type="text" class="form-control" name="surname" placeholder="Фамилия"
                                   value="{{old('surname',$user->surname)}}">
                        </div>
                        @error('surname')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror

                        <div class="form-group mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Имя" value="{{old('name',$user->name)}}">
                        </div>
                        @error('name')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror

                        <div class="form-group mb-3">
                            <input type="text" class="form-control" name="patronymic" placeholder="Отчество"
                                   value="{{old('patronymic',$user->patronymic)}}">
                        </div>
                        @error('patronymic')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror

                        <div class="form-group mb-3" style="width:90px;">
                            <input type="text" class="form-control" name="age" placeholder="Возраст" value="{{old('age',$user->age)}}" maxlength="3">
                        </div>
                        @error('age')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror

                        <div class="form-group mb-3">

                            <select class="form-control" name="gender">

                                <option selected disabled>Пол</option>
                                <option value="1" {{ old('gender',$user->gender)==1 ? 'selected' : ''  }}> Мужской</option>
                                <option value="2" {{ old('gender',$user->gender)==2 ? 'selected' : ''  }}> Женский</option>
                            </select>
                        </div>
                        @error('gender')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror

                        <div class="form-group mb-3">
                            <input type="text" class="form-control" name="address" placeholder="Адрес" value="{{old('address',$user->address)}}">
                        </div>
                        @error('address')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror

                        <div class="form-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Электронная почта" value="{{old('email',$user->email)}}">
                        </div>
                        @error('email')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror


                        <button type="submit" class="btn btn-success">Обновить</button>
                    </form>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
@endsection

