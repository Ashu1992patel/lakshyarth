@extends('backend.layout.master')

@section('title', "Acquirement's Detail ")
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
                            <li class="breadcrumb-item">
                                <a href="{{ route('acquirements.index') }}">Acquirement (उपार्जन)</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Acquirement (उपार्जन) Details
                            </li>
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
                    <div class="col-md-9">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    {{ 'RST-' . $acquirement->rst . ' Details' }}
                                </h3>

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
                            <div class="card-body p-0">
                                <table class="table table-striped projects">
                                    <tr>
                                        <th>
                                            Registred On
                                        </th>
                                        <td>
                                            {{ $acquirement->created }}
                                            {{ $acquirement->time }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Last Updated
                                        </th>
                                        <td>
                                            {{ $acquirement->updated }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            RST Number
                                        </th>
                                        <td>
                                            <a title="RST Number">
                                                {{ $acquirement->rst }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Weight
                                        </th>
                                        <td>
                                            <a title="RST Number">
                                                {{ $acquirement->weight ?? '-' }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Farmer Name
                                        </th>
                                        <td>
                                            <a title="RST Number">
                                                {{ $acquirement->farmer->name }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Kisan ID
                                        </th>
                                        <td>
                                            {{ $acquirement->farmer->kisan_id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Vehicle Type
                                        </th>
                                        <td>
                                            {{ $acquirement->vehicle_type ?? '-' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Vehicle Number
                                        </th>
                                        <td>
                                            {{ $acquirement->vehicle_number ?? '-' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Clear?
                                        </th>
                                        <td>
                                            {{ $acquirement->is_cleared ? '✔' : '❌' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Comments
                                        </th>
                                        <td>
                                            <small>
                                                {{ $acquirement->comment }}
                                            </small>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-md-3" title="{{ $acquirement->farmer->name }} - {{ $acquirement->farmer->kisan_id }}">
                        <div class="row">
                            <div class="col-sm-12 col-sm-12">

                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            {{ 'RST-' . $acquirement->rst . ' File ' }}
                                        </h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                title="Collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove"
                                                title="Remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body p-1">
                                        @if ($acquirement->rst_file_status)
                                            <a href="{{ url($acquirement->rst_file) }}" data-toggle="lightbox"
                                                data-title="{{ 'RST-' . $acquirement->rst . ' File ' . '(' . $acquirement->farmer->name . '-' . $acquirement->farmer->kisan_id . ')' }}"
                                                class="text-center" data-category="2, 4" data-sort="black sample"
                                                target="_blank">
                                                <img src="{{ url($acquirement->rst_file) }}" class="photo"
                                                    alt="{{ 'RST-' . $acquirement->rst . ' File' }}" width="150px" />
                                            </a>
                                        @else
                                            RST file is not available/uploaded.
                                        @endif
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <div class="col-sm-12 col-sm-12">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            {{ $acquirement->farmer->name }}
                                        </h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                title="Collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove"
                                                title="Remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body p-1">
                                        @if ($acquirement->farmer->photo_status)
                                            <a href="{{ url($acquirement->farmer->photo) }}" data-toggle="lightbox"
                                                data-title="{{ $acquirement->farmer->name . ' (' . $acquirement->farmer->kisan_id . ')\'s Photo' }}"
                                                class="text-center" data-category="2, 4" data-sort="black sample"
                                                target="_blank">
                                                <img src="{{ url($acquirement->farmer->photo) }}"
                                                    class="photo table-avatar"
                                                    alt="{{ $acquirement->farmer->name }} ({{ $acquirement->farmer->kisan_id }})"
                                                    width="150px"
                                                    style="display: block;margin-left: auto;margin-right: auto;width: 100%;" />
                                            </a>
                                        @else
                                            <a href="{{ url('kisaan.png') }}" data-toggle="lightbox"
                                                data-title="Farmer photo is not available/uploaded." data-gallery="gallery"
                                                style="display: inline-block;">

                                                <img src="{{ url('kisaan.png') }}" class="img-fluid mb-2" width="150px"
                                                    id="photo_preview" alt="Farmer photo is not available/uploaded.">
                                            </a>
                                        @endif
                                    </div>
                                    <!-- /.card-body -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <strong>
                                        {{ $acquirement->farmer->name }}
                                        ({{ $acquirement->farmer->kisan_id }})
                                    </strong> related RST entries

                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"
                                        title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped projects" id="example1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Select</th>
                                            <th>RST</th>
                                            <th>Farmer</th>
                                            <th>Weight</th>
                                            <th title="Registered On">Date</th>
                                            <th title="Registered On">Time</th>
                                            <th>Vehicle Type</th>
                                            <th>Vehicle Number</th>
                                            <th>Cleared?</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($acquirement->farmer->acquirements as $key => $acquirement)
                                            <tr
                                                title="{{ 'RST-' . $acquirement->rst . ' Comment:-📝 ' . $acquirement->comment }}">
                                                <td>
                                                    {{ ++$key }}
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox"
                                                            id="{{ $acquirement->rst }}" name="hisaab">
                                                        <label for="{{ $acquirement->rst }}"
                                                            class="custom-control-label"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($acquirement->rst_file_status)
                                                        <a href="{{ url($acquirement->rst_file) }}" target="_blank">
                                                            <span style="color: orange" title="Click to view RST file">
                                                                {{ $acquirement->rst }}
                                                            </span>
                                                        </a>
                                                    @else
                                                        <span style="color: grey" title="RST is not uploaded.">
                                                            {{ $acquirement->rst }}
                                                        </span>
                                                    @endif
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
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th colspan="2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" onchange="checkAll(this)" name="chk[]"
                                                        id="chk" class="custom-control-input" />
                                                    <label for="chk" class="custom-control-label">Select All</label>
                                                </div>

                                            </th>
                                            <th></th>

                                            <th colspan="1">
                                                <span class="form-control">
                                                    {{ $acquirement->farmer->acquirements->sum('weight') }}
                                                </span>
                                            </th>
                                            <th colspan="1">
                                                <input type="number" id="weight_percentage" name="weight_percentage"
                                                    placeholder="2%" class="form-control" value="2"
                                                    onchange="getPercentage(this.value, {{ $acquirement->farmer->acquirements->sum('weight') }})">
                                            </th>
                                            <th>
                                                <span class="form-control" id="calculated_weight">
                                                    {{ ($acquirement->farmer->acquirements->sum('weight') * 98) / 100 }}
                                                </span>
                                            </th>
                                            <th>
                                                <span class="form-control" id="deducted_weight">
                                                    {{ ($acquirement->farmer->acquirements->sum('weight') * 2) / 100 }}
                                                </span>
                                            </th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script>
        function getPercentage(percentage, totalWeight) {
            console.log(totalWeight, percentage);
            let calculated_weight = document.getElementById('calculated_weight')
            calculated_weight.innerHTML = ((totalWeight * (100 - percentage)) / 100);

            let deducted_weight = document.getElementById('deducted_weight')
            deducted_weight.innerHTML = ((totalWeight * (percentage)) / 100);
        }

        function checkAll(source) {
            checkboxes = document.getElementsByName('hisaab');
            for (var i = 0, n = checkboxes.length; i < n; i++) {
                checkboxes[i].checked = source.checked;
            }
        }
    </script>
@endsection
