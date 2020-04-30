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
                    All Blog Posts
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
                            <div class="box-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>

                                            <td>Title</td>
                                            <td>Author</td>
                                            <td>Category</td>
                                            <td>Date</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>

                                      <tbody>
                                      @foreach ($posts as $post)
                                          <tr>
                                              <td>
                                                  {{ $post->title  }}
                                              </td>
                                              <td> {{ $post->author->name }}</td>
                                            <td>  N/a {{--{{ $posts->category->title  }} --}}</td>
                                              <td><abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr> |
                                                  {!! $post->publicationLabel() !!} </td>

                                              <td>
                                                  <a href="{{ route('backend.blog.edit', $post->id) }}" class="btn btn-xs btn-default">
                                                      <i class="fa fa-edit"></i>
                                                  </a>
                                                  <a href="{{ route('backend.blog.destroy', $post->id) }}" class="btn btn-xs btn-danger">
                                                      <i class="fa fa-times"></i>
                                                  </a>

                                              </td>
                                          </tr>
                                      @endforeach

                                      </tbody>


                                </table>


                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer clearfix">
                                <div class="pull-left">
                                    {{ $posts->render() }}
                                </div>
                                <div class="pull-right">

                                    <small>{{ $postCount }} {{ str_plural('Item', $postCount) }}</small>
                                </div>

                            </div>

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
