@extends('backend.layout.master')

@section('title', 'उपार्जन List')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Acquirement (उपार्जन)</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Acquirement (उपार्जन)</li>
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
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All the acquirements listed below:</h3>
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
                                            <th>#</th>
                                            <th>RST</th>
                                            <th>Farmer</th>
                                            <th>Weight</th>
                                            <th title="Registered On">Date</th>
                                            <th title="Registered On">Time</th>
                                            <th>Vehicle Type</th>
                                            <th>Vehicle Number</th>
                                            <th>Cleared?</th>
                                            <th>RST File</th>
                                            <th>Action</th>
                                            {{-- <th>Approved?</th> --}}
                                            {{-- <th>Comment</th> --}}
                                            {{-- <th>Updated On</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($acquirements as $key => $acquirement)
                                            <tr
                                                title="{{ 'RST-' . $acquirement->rst . ' Comment:-📝 ' . $acquirement->comment }}">
                                                <td>
                                                    {{ ++$key }}
                                                </td>
                                                <td>
                                                    <span class="badge badge-sm badge-success text-center">
                                                        {{ $acquirement->rst }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <a href="{{ route('farmers.show', $acquirement->farmer->id) }}"
                                                        target="_blank">
                                                        {{ $acquirement->farmer->name }}
                                                        <span class="badge badge-sm badge-warning">
                                                            {{ $acquirement->farmer->kisan_id }}
                                                        </span>
                                                    </a>
                                                </td>
                                                <td>{{ $acquirement->weight }}</td>
                                                <td>{{ $acquirement->created }}</td>
                                                <td>{{ $acquirement->time }}</td>

                                                <td>{{ $acquirement->vehicle_type ?? 'NA' }}</td>
                                                <td>{{ $acquirement->vehicle_number ?? 'NA' }}</td>

                                                <td>
                                                    {{ $acquirement->is_cleared ? '✔' : '❌' }}
                                                </td>
                                                {{-- <td>
                                                    @if ($acquirement->rst_file_status)
                                                        <a href="{{ url($acquirement->rst_file) }}" target="_blank">
                                                            <i class="fas fa-download fa-primary"></i>
                                                        </a>
                                                    @else
                                                        <span title="RST is not uploaded.">
                                                            ❌
                                                        </span>
                                                    @endif
                                                </td> --}}
                                                <td>
                                                    @if ($acquirement->rst_file_status)
                                                        <a href="{{ url($acquirement->rst_file) }}" data-toggle="lightbox"
                                                            data-title="{{ 'RST-' . $acquirement->rst . ' File ' . '(' . $acquirement->farmer->name . '-' . $acquirement->farmer->kisan_id . ')' }}"
                                                            class="text-center" data-category="2, 4"
                                                            data-sort="black sample" target="_blank">
                                                            <img src="{{ url($acquirement->rst_file) }}" class="photo"
                                                                alt="{{ 'RST-' . $acquirement->rst . ' File' }}"
                                                                width="50px" />
                                                        </a>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="text-right py-0 align-middle">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="{{ route('acquirements.show', $acquirement->id) }}"
                                                            target="_blank" class="btn btn-primary"
                                                            title="Show RST Details">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('acquirements.edit', $acquirement->id) }}"
                                                            target="_blank" class="btn btn-info" title="Edit RST Record">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <a class="btn btn-warning"
                                                            onclick="handleDelete({{ $acquirement->farmer->kisan_id }})">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                        <form
                                                            action="{{ route('acquirements.destroy', $acquirement->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn fa fa-trash text-danger"
                                                                id="{{ $acquirement->farmer->kisan_id }}"
                                                                onclick="return confirm('Are you sure to delete RST-{{ $acquirement->rst }} record?')">
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                                {{-- <td>{{ $acquirement->approved }}</td> --}}
                                                {{-- <td>{{ $acquirement->comment }}</td> --}}
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>RST</th>
                                            <th>Farmer</th>
                                            <th>Weight</th>
                                            <th title="Registered On">Date</th>
                                            <th title="Registered On">Time</th>
                                            <th>Vehicle Type</th>
                                            <th>Vehicle Number</th>
                                            <th>Cleared?</th>
                                            <th>RST File</th>
                                            <th>Action</th>
                                            {{-- <th>Approved?</th> --}}
                                            {{-- <th>Comment</th> --}}

                                            {{-- <th>Updated On</th> --}}
                                        </tr>
                                    </tfoot>
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
        function handleDelete(kisan_id) {
            let item = document.getElementById(kisan_id);
            item.click();
        }
    </script>
@endsection
