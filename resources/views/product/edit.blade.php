@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать продукт</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('product.index')}}">Продукты</a></li>
                        <li class="breadcrumb-item active">Редактирование продукта</li>
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
                <div style="width:400px;">
                    <form action="{{route('product.update',$product->id)}}" method="POST"
                    ">
                    @csrf
                    @method('patch')
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="title" placeholder="Наименование"
                               value="{{old('title',$product->title)}}">
                    </div>
                    @error('title')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <div class="form-group mb-3">
                            <textarea class="form-control" name="content"
                                      placeholder="Контент">{{old('content',$product->content)}}</textarea>
                    </div>
                    @error('content')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <div class="form-group mb-3">
                            <textarea class="form-control" name="description"
                                      placeholder="Описание">{{old('description',$product->description)}}</textarea>
                    </div>
                    @error('description')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <div class="form-group mb-3" style="width:200px;">
                        <input type="text" class="form-control" name="price" placeholder="Цена"
                               value="{{old('price',$product->price)}}">
                    </div>
                    @error('price')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <div class="form-group mb-3" style="width:120px;">
                        <input type="text" class="form-control" name="count" placeholder="Количество"
                               value="{{old('count',$product->count)}}">
                    </div>
                    @error('count')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-success">Добавить</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection

