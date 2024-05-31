@extends('layouts.main')
@section('content')
    @extends('layouts.main')
    @section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Просмотр продукта</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Пользователи</a></li>
                            <li class="breadcrumb-item active">Просмотр продукта</li>
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
                            <th scope="col">Название</th>
                            <th scope="col">Контент</th>
                            <th scope="col">Описание</th>
                            <th scope="col">Гл.изображение</th>
                            <th scope="col">Превью</th>
                            <th scope="col">Цена</th>
                            <th scope="col">Кол-во</th>
                            <th scope="col">Публикация</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->content}}</td>
                            <td>{{$product->description}}</td>
                            <td></td>
                            <td></td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->count}}</td>
                            <td>{{$product->is_publish}}</td>
                        </tr>
                        </tbody>

                    </table>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

    @endsection

@endsection

