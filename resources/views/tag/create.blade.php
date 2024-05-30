@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить тэг</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('tag.index')}}">Тэги</a></li>
                        <li class="breadcrumb-item">Добавить тэг</li>
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
                <form action="{{route('tag.store')}}" method="POST" class="w-25">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="title" placeholder="Название тэга">
                    </div>
                    @error('title')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-success">Добавить</button>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
