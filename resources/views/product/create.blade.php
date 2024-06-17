@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить продукт</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('product.index')}}">Продукты</a></li>
                        <li class="breadcrumb-item">Добавить продукт</li>
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
                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" name="title" placeholder="Наименование"
                                   value="{{old('title')}}">
                        </div>
                        @error('title')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror

                        <div class="form-group mb-3">
                        <textarea class="form-control" name="content"
                                  placeholder="Контент">{{old('content')}}</textarea>
                        </div>
                        @error('content')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror

                        <div class="form-group mb-3">
                        <textarea class="form-control" name="description"
                                  placeholder="Описание">{{old('description')}}</textarea>
                        </div>
                        @error('description')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror

                        <div class="form-group mb-3" style="width:200px;">
                            <input type="text" class="form-control" name="price" placeholder="Цена"
                                   value="{{old('price')}}">
                        </div>
                        @error('price')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror

                        <div class="form-group mb-3" style="width:200px;">
                            <input type="text" class="form-control" name="old_price" placeholder="Старая цена"
                                   value="{{old('old_price')}}">
                        </div>
                        @error('old_price')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror

                        <div class="form-group mb-3" style="width:120px;">
                            <input type="text" class="form-control" name="count" placeholder="Количество"
                                   value="{{old('count')}}">
                        </div>
                        @error('count')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror

                        <!-- select Category -->
                        <div class="form-group">
                            <select class="form-control" name="category_id">
                                <option disabled selected>Категория</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                        {{ $category->id == old('category_id') ? ' selected' : "" }}
                                    > {{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('category_id')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror

                        <!-- MultiSelect Tags -->
                        <div class="form-group mb-3">
                            <select class="tags" name="tags[]" multiple="multiple" data-placeholder="Задайте тэг"
                                    style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}"
                                        {{ is_array( old('tags') ) && in_array( $tag->id,old('tags') )  ? ' selected' : '' }}
                                    >{{$tag->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- MultiSelect Colors -->
                        <div class="form-group mb-3">
                            <select class="tags" name="colors[]" multiple="multiple" data-placeholder="Задайте цвет"
                                    style="width: 100%;">
                                @foreach($colors as $color)
                                    <option value="{{$color->id}}"
                                        {{ is_array( old('colors') ) && in_array( $color->id,old('colors') )  ? ' selected' : '' }}
                                    >
                                        {{$color->color}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Images -->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="images[]" multiple>
                                    <label class="custom-file-label" for="exampleInputFile">Выбрать файл</label>
                                </div>
                                <div class="input-group-append">

                                </div>
                            </div>
                        </div>
                        @error('images')
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

