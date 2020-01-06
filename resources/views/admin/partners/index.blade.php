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
            <li class="active">
                Партнеры
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            Все партнеры
                        </h3>
                        <div class="pull-right">
                            <a href="{{ route('admin::partners::add') }}" class="btn btn-mini btn-success">
                                <i class="fa fa-plus"></i>
                                Добавить партнера
                            </a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($partners as $partner)
                                    <tr>
                                        <td>{{ $partner->id }}</td>
                                        <td>{{ $partner->title }}</td>
                                        <td>{{ $partner->description }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@stop

@section('admin-scripts')
    <script>
        $(function () {
            $('#example1').DataTable();
        });
    </script>
@stop