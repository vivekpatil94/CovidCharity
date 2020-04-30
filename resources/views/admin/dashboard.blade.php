@extends('admin.layouts.master')

@section('content')
    <div class="wrapper">

    @include('admin.include.header')
        <!-- Left side column. contains the logo and sidebar -->
    @include('admin.include.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dasbhboard
                </h1>
                <ol class="breadcrumb">
                    <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body ">
                                <h3>Welcome to MyBlog!</h3>
                                <p class="lead text-muted">Hallo User, Welcome to MyBlog</p>

                                <h4>Get started</h4>
                                <p><a href="{{ route('backend.blog.create') }}" class="btn btn-primary">Write your first blog post</a> </p>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
                <!-- ./row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
@endsection
