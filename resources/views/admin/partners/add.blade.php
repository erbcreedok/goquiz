@extends('layouts.admin')

@section('content')

    <section class="content-header">
        <h1>
            Партнеры
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin::index') }}">
                    <i class="fa fa-dashboard"></i> Главная
                </a>
            </li>
            <li>
                <a href="{{ route('admin::partners::index') }}">
                    <i class="fa fa-handshake-o"></i> Партнеры
                </a>
            </li>
            <li class="active">
                Добавить партнера
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            Добавить партнера
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="POST" enctype="multipart/form-data" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="logo" class="control-label col-sm-3">
                                    Лого
                                </label>
                                <div class="col-sm-6">
                                    <input type="file" name="logo" id="logo" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="control-label col-sm-3">
                                    Название
                                </label>
                                <div class="col-sm-6">
                                    <input type="text" name="title" id="title" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label col-sm-3">
                                    Описание
                                </label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="description" id="description" cols="30" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <input type="submit" class="form-control btn btn-success" value="Сохранить">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@stop