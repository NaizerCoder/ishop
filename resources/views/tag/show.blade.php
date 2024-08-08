@extends('layouts.main')
@section('content')
    @extends('layouts.main')
    @section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Просмотр тэга "{{$tag->title}}"</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('tag.index')}}">Тэги</a></li>
                            <li class="breadcrumb-item active">Просмотр тэга</li>
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
                            <th scope="col">ID</th>
                            <th scope="col">Название</th>
                            <th scope="col">Продукт</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->title}}</td>
                            <td>@dd($tag->products)</td>

                        </tr>
                        </tbody>

                    </table>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

    @endsection

@endsection

