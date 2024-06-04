@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Продукты</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item active">Продукты</li>
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
                    <th scope="col">Название</th>
                    <th scope="col">Категория</th>
                    <th scope="col">Контент</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Гл.изображение</th>
                    <th scope="col">Превью</th>
                    <th scope="col">Цена</th>
                    <th scope="col">Кол-во</th>
                    <th scope="col">Публикация</th>
                    <th scope="col">Действие</th>
                </tr>
                </thead>
                @foreach($products as $product)
                    <tbody>
                    <tr>
                        <td><a href="{{route('product.show',$product->id)}}">{{$product->title}}</a></td>
                        <td>{{$product->category->title}}</td>
                        <td>{{$product->content}}</td>
                        <td>{{$product->description}}</td>
                        <td></td>
                        <td></td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->count}}</td>
                        <td>{{$product->is_publish}}</td>
                        <td>
                            <div class="row" style="max-width:80%;">
                                <div class="col">
                                    <a href="{{route('product.edit',$product->id)}}">Редактировать</a>
                                </div>
                                <div class="col">
                                    <form action="{{route('product.delete',$product->id)}}" method="POST">
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

            <a href="{{route('product.create')}}" class="btn btn-success" style="width:auto;">Создать</a>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection

