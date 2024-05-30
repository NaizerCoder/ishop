@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пользователи</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item active">Пользователи</li>
                    </ol>
                </div><!-- /.col --><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ФИО</th>
                    <th scope="col">Возраст</th>
                    <th scope="col">Адрес</th>
                    <th scope="col">Пол</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Действие</th>
                </tr>
                </thead>
                @foreach($users as $user)
                    <tbody>
                    <tr>
                        <td><a href="{{route('user.show',$user->id)}}">{{$user->surname}} {{$user->name}} {{$user->patronymic}}</a></td>
                        <td>{{$user->age}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->GenderTitle}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <div class="row" style="max-width:80%;">
                                <div class="col">
                                    <a href="{{route('user.edit',$user->id)}}">Редактировать</a>
                                </div>
                                <div class="col">
                                    <form action="{{route('user.delete',$user->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="border-0 bg-transparent text-danger">Удалить
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </tr>
                    </tbody>
                @endforeach
            </table>

            <a href="{{route('user.create')}}" class="btn btn-success" style="width:auto;">Создать</a>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection

