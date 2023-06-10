@extends('backend.layout.master')

@section('title', 'Farmers List')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Farmers (किसान)</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Farmers (किसान)</li>
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
                                <h3 class="card-title">All the farmers listed below:</h3>
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
                                            <th>#KisanID</th>
                                            <th>Name</th>
                                            <th>
                                                Contact
                                                <small>(primary)</small>
                                            </th>
                                            <th>
                                                Contact
                                                <small>(secondary)</small>
                                            </th>
                                            <th>Village</th>
                                            {{-- <th>Comments</th> --}}
                                            <th>Registered On</th>
                                            {{-- <th>Updated On</th> --}}
                                            <th>
                                                <small>
                                                    उपार्जन
                                                </small>
                                            </th>
                                            <th>Photo</th>
                                            <th>Aadhaar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($farmers as $farmer)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('farmers.show', $farmer->id) }}" target="_blank">
                                                        <span class="badge badge-sm badge-primary">
                                                            {{ $farmer->kisan_id }}
                                                        </span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('farmers.show', $farmer->id) }}" target="_blank">
                                                        {{ $farmer->name }}
                                                    </a>
                                                </td>

                                                <td>
                                                    @if ($farmer->primary_contact)
                                                        <a href="tel:{{ $farmer->primary_contact }}">
                                                            <span class="badge badge-sm badge-primary">
                                                                {{ $farmer->primary_contact }}
                                                            </span>
                                                        </a>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($farmer->secondary_contact)
                                                        <a href="tel:{{ $farmer->secondary_contact }}">
                                                            <span class="badge badge-sm badge-secondary">
                                                                {{ $farmer->secondary_contact }}
                                                            </span>
                                                        </a>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td>{{ $farmer->village }}</td>
                                                {{-- <td>{{ $farmer->comment }}</td> --}}
                                                <td>{{ $farmer->created }}</td>
                                                {{-- <td>{{ $farmer->updated }}</td> --}}
                                                <td>{{ $farmer->acquirements->count() }}</td>
                                                <td>
                                                    @if ($farmer->photo_status)
                                                        <a href="{{ url($farmer->photo) }}" data-toggle="lightbox"
                                                            data-title="{{ $farmer->name . '`s profile photo' }}"
                                                            class="text-center" data-category="2, 4"
                                                            data-sort="black sample">
                                                            <img src="{{ url($farmer->photo) }}" class="photo"
                                                                alt="{{ $farmer->name . '`s profile photo' }}"
                                                                width="50px" />
                                                        </a>
                                                    @else
                                                        <a href="{{ url('kisaan.png') }}" data-toggle="lightbox"
                                                            data-title="{{ $farmer->name }}'s photo is not available."
                                                            data-gallery="gallery" style="display: inline-block;">

                                                            <img src="{{ url('kisaan.png') }}" class="img-fluid mb-2"
                                                                width="50px" alt="-">
                                                        </a>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($farmer->aadhaar_status)
                                                        <a href="{{ url($farmer->aadhaar_card) }}" data-toggle="lightbox"
                                                            data-title="{{ $farmer->name . '`s Aadhaar Card' }}"
                                                            class="text-center" data-category="2, 4"
                                                            data-sort="black sample" target="_blank">
                                                            <img src="{{ url($farmer->aadhaar_card) }}" class="photo"
                                                                alt="{{ $farmer->name . '`s Aadhaar Card' }}"
                                                                width="50px" />
                                                        </a>
                                                    @else
                                                        <span
                                                            title="{{ $farmer->name }} ({{ $farmer->kisan_id }})'s Aadhaar card is not yet uploaded.">
                                                            -
                                                        </span>
                                                    @endif
                                                </td>

                                                <td class="text-right py-0 align-middle">
                                                    <div class="btn-group btn-group-sm">
                                                        @if ($farmer->acquirements->count() > 0)
                                                            <a href="{{ route('farmers.records', $farmer->id) }}"
                                                                target="_blank" class="btn btn-secondary"
                                                                title="Clear RST Entries">
                                                                <i class="fas fa-history"></i>
                                                            </a>
                                                        @endif

                                                        <a href="{{ route('farmers.show', $farmer->id) }}" target="_blank"
                                                            class="btn btn-success"
                                                            title="Show Farmers & Related RST Detail">
                                                            <i class="fas fa-eye"></i>
                                                        </a>

                                                        <a href="{{ route('farmers.edit', $farmer->id) }}" target="_blank"
                                                            class="btn btn-info" title="Edit Farmers Details">
                                                            <i class="fas fa-pen"></i>
                                                        </a>

                                                        <a class="btn btn-danger"
                                                            title="Remove farmer records from database."
                                                            onclick="handleDelete({{ $farmer->kisan_id }})">
                                                            <i class="fas fa-trash"></i>
                                                        </a>

                                                        <form action="{{ route('farmers.destroy', $farmer->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn fa fa-trash text-danger"
                                                                id="{{ $farmer->kisan_id }}"
                                                                onclick="return confirm('Are you sure to delete {{ $farmer->name }} - ({{ $farmer->kisan_id }}) record?')">
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                                {{-- <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-success"
                                                            data-toggle="dropdown">Action</button>
                                                        <button type="button"
                                                            class="btn btn-success dropdown-toggle dropdown-hover dropdown-icon"
                                                            data-toggle="dropdown" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu" role="menu" style="">
                                                            <a class="dropdown-item" href="#">
                                                                {{ $farmer->name }} ({{ $farmer->kisan_id }})
                                                            </a>
                                                            <div class="d-flex flex-direction-row gap-0">
                                                                <a class="btn btn-app bg-info"
                                                                    href="{{ route('farmers.edit', $farmer->id) }}">
                                                                    <i class="fas fa-edit"></i> Edit
                                                                </a>

                                                                <a class="btn btn-app bg-success"
                                                                    href="{{ route('farmers.show', $farmer->id) }}"
                                                                    target="_blank">
                                                                    <i class="fas fa-eye"></i> Details
                                                                </a>

                                                                <div class="dropdown-divider"></div>
                                                                <a class="btn btn-app bg-danger"
                                                                    onclick="handleDelete({{ $farmer->kisan_id }})">
                                                                    <i class="fas fa-trash"></i> Delete
                                                                </a>

                                                                <script>
                                                                    function handleDelete(kisan_id) {
                                                                        let item = document.getElementById(kisan_id);
                                                                        item.click();
                                                                    }
                                                                </script>

                                                                <form action="{{ route('farmers.destroy', $farmer->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn fa fa-trash text-danger"
                                                                        id="{{ $farmer->kisan_id }}"
                                                                        onclick="return confirm('Are you sure to delete {{ $farmer->name }} record?')">
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td> --}}

                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#KisanID</th>
                                            <th>Name</th>
                                            <th>
                                                Contact
                                                <small>(primary)</small>
                                            </th>
                                            <th>
                                                Contact
                                                <small>(secondary)</small>
                                            </th>
                                            <th>Village</th>
                                            {{-- <th>Comments</th> --}}
                                            <th>Registered On</th>
                                            {{-- <th>Updated On</th> --}}
                                            <th>
                                                <small>
                                                    उपार्जन
                                                </small>
                                            </th>
                                            <th>Photo</th>
                                            <th>Aadhaar</th>
                                            <th>Action</th>
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
