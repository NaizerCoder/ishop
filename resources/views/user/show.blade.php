@extends('layouts.main')
@section('content')
    @extends('layouts.main')
    @section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">"{{$user->surname}} {{$user->name}} {{$user->patronymic}}"</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Пользователи</a></li>
                            <li class="breadcrumb-item active">Просмотр пользователя</li>
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
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Возраст</th>
                            <th scope="col">Адрес</th>
                            <th scope="col">Пол</th>
                            <th scope="col">E-mail</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>{{$user->age}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->gender}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                        </tbody>

                    </table>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

    @endsection

@endsection

