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
                            <li class="breadcrumb-item"><a href="{{route('product.index')}}">Продукты</a></li>
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
                    <table class="table table-bordered" style="width:800px;">
                        <thead>
                        <tr>
                            <th scope="col" style="width:300px;">#</th>
                            <th scope="col">Содержимое</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>Название</th>
                            <td>{{$product->title}}</td>
                        </tr>

                        <tr>
                            <th>Контент</th>
                            <td>{{$product->content}}</td>
                        </tr>

                        <tr>
                            <th>Описание</th>
                            <td>{{$product->description}}</td>
                        </tr>

                        <tr>
                            <th>Группа</th>
                            <td>{{$product->group->title}}</td>
                        </tr>

                        <tr>
                            <th>Цена</th>
                            <td>{{$product->price}}</td>
                        </tr>

                        <tr>
                            <th>Старая цена</th>
                            <td>{{$product->old_price}}</td>
                        </tr>

                        <tr>
                            <th>Количество</th>
                            <td>{{$product->count}}</td>
                        </tr>

                        <tr>
                            <th>Количество</th>
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

