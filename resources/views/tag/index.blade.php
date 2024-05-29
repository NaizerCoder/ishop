@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Тэги</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item active">Тэги</li>
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
                    <th scope="col">Действие</th>
                </tr>
                </thead>
                @foreach($tags as $tag)
                    <tbody>
                    <tr>
                        <td><a href="{{route('tag.show',$tag->id)}}">{{$tag->title}}</a></td>
                        <td>
                            <div class="row w-25">
                                <div class="col">
                                    <a href="{{route('tag.edit',$tag->id)}}">Редактировать</a>
                                </div>
                                <div class="col">
                                    <form action="{{route('tag.delete',$tag->id)}}" method="POST"
                                          class="w-25">
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

            <a href="{{route('tag.create')}}" class="btn btn-success" style="width:auto;">Создать</a>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection

