@extends('backend.layout.master')

@section('title', 'News Letters')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>News Letters</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">News Letters</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">All the news letters listed below:</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Email</th>
                                            <th>Registered On</th>
                                            <th>Updated On</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($news_letters as $key => $news_letter)
                                            <tr>

                                                <td>{{ ++$key }}</td>
                                                <td>
                                                    <a href="mailto:{{ $news_letter->email }}">
                                                        <i class="fas fa-envelope"></i>
                                                        {{ $news_letter->email }}
                                                    </a>
                                                </td>
                                                <td>{{ $news_letter->created }}</td>
                                                <td>{{ $news_letter->updated }}</td>

                                                <td class="text-right py-0 align-middle text-center">
                                                    <div class="btn-group btn-group-sm">
                                                        <a class="fas fa-trash" title="Remove farmer records from database."
                                                            onclick="handleDelete({{ $news_letter->id }})">
                                                        </a>

                                                        <form action="{{ route('news_letters.destroy', $news_letter->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn fa fa-trash text-danger"
                                                                id="{{ $news_letter->id }}"
                                                                onclick="return confirm('Are you sure to remove subscription of {{ $news_letter->email }}?')">
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>

                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script>
        function handleDelete(id) {
            let item = document.getElementById(id);
            item.click();
        }
    </script>
@endsection
