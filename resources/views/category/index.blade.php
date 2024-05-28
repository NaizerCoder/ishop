@extends('layouts.main')
@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Категории</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Категории</a></li>
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
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Название</th>
                        <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    @foreach($categories as $category)
                        <tbody>
                        <tr>
                            <td>{{$category->title}}</td>
                            <td> <a href="{{route('category.edit',$category->id)}}">Редактировать</a> | <a href="{{route('category.delete',$category->id)}}">Удалить</a></td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>

                <a href="{{route('category.create')}}" class="btn btn-success w-25">Создать</a>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

@endsection

