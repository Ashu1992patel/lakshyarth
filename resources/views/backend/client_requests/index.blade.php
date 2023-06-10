@extends('backend.layout.master')

@section('title', 'Client Requests')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Client Requests</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Client Requests</li>
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
                                <h3 class="card-title">All the client requests listed below:</h3>
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Status</th>
                                            <th>Registered On</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($client_requests as $key => $client_request)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $client_request->name }}</td>
                                                <td>
                                                    <a href="mailto:{{ $client_request->email }}">
                                                        <i class="fas fa-envelope fa-sm"></i>{{ $client_request->email }}
                                                    </a>
                                                </td>
                                                <td>{{ $client_request->subject }}</td>
                                                <td>{{ $client_request->message }}</td>
                                                <td
                                                    title="{{ $client_request->status ? 'It is not resolved' : 'Already resolved' }}">
                                                    {{ $client_request->status ? '✔' : '❌' }}
                                                </td>
                                                <td>{{ $client_request->created }}</td>
                                                <td class="text-right py-0 align-middle">
                                                    <div class="btn-group btn-group-sm">
                                                        <a class="fas fa-trash" title="Remove farmer records from database."
                                                            onclick="handleDelete({{ $client_request->id }})">
                                                        </a>

                                                        <form
                                                            action="{{ route('client_requests.destroy', $client_request->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn fa fa-trash text-danger"
                                                                id="{{ $client_request->id }}"
                                                                onclick="return confirm('Are you sure to remove this request?')">
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
