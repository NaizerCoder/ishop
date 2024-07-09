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
                    <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
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

                        <div class="form-group mb-3" style="width:200px;">
                            <input type="text" class="form-control" name="old_price" placeholder="Старая цена"
                                   value="{{old('old_price',$product->old_price)}}">
                        </div>
                        @error('old_price')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror

                        <div class="form-group mb-3" style="width:120px;">
                            <input type="text" class="form-control" name="count" placeholder="Количество"
                                   value="{{old('count',$product->count)}}">
                        </div>
                        @error('count')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror

                        <!-- select Group -->
                        <div class="form-group">
                            <select class="form-control" name="group_id">
                                <option disabled selected>Группы</option>
                                <option value=''>нет группы</option>
                                @foreach($groups as $group)
                                    <option value="{{$group->id}}"
                                        {{--когда отношения один ко многим -> обращение к одной категории--}}
                                        {{ $group->id == old('group_id',$product->group_id) ? "selected" : "" }}
                                    > {{ $group->title }}

                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- select Category -->
                        <div class="form-group">
                            <select class="form-control" name="category_id">
                                <option disabled selected>Категория</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                        {{--когда отношения один ко многим -> обращение к одной категории--}}
                                        {{ $category->id == old('category_id',$product->category_id) ? "selected" : "" }}
                                    > {{ $category->title }}

                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- MultiSelect Colors -->
                        <div class="form-group mb-3">
                            <select class="colors" name="colors[]" multiple="multiple" data-placeholder="Цвет"
                                    style="width: 100%;">
                                @foreach($colors as $color)
                                    <option value="{{$color->id}}"
                                        {{--когда отношения многие ко многим -> обращение к массиву--}}
                                        {{ in_array( $color->id , old('colors',$product->colors->pluck('id')->toArray()) )  ? ' selected' : '' }}
                                    >{{$color->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- MultiSelect Tags -->
                        <div class="form-group mb-3">
                            <select class="tags" name="tags[]" multiple="multiple" data-placeholder="Задайте тэг"
                                    style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}"
                                        {{--когда отношения многие ко многим -> обращение к массиву--}}
                                        {{ in_array( $tag->id , old('tags',$product->tags->pluck('id')->toArray()) )  ? ' selected' : '' }}
                                    >{{$tag->title}}</option>
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

                        <div class="h4">Загруженные изображения</div>
                        <div class="row form-group mb-3">

                            @foreach($images as $image)
                                <div class="col w-25 mb-2 text-center">
                                    <a href="{{ $image->url  }} " target="__blank"><img src="{{ $image->url  }}"
                                                                                        alt="preview"
                                                                                        class="w-100 h-100"></a>
                                    <a href="{{route('image.delete',$image->id)}}">X</a>
                                </div>
                            @endforeach
                        </div>

                        <button type="submit" class="btn btn-success">Обновить</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection

