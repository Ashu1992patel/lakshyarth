@extends('backend.layout.master')

@section('title', "Farmers's Detail ")
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
                            <li class="breadcrumb-item">
                                <a href="{{ route('farmers.index') }}">Farmers (किसान)</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Single Farmer Details
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
                    <div class="col-md-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Farmer's Complete Information
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
                                            Farmer Name
                                        </th>
                                        <td>
                                            {{ $farmer->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Kisan ID
                                        </th>
                                        <td>
                                            {{ $farmer->kisan_id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Gender
                                        </th>
                                        <td>
                                            {{ $farmer->gender }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Village
                                        </th>
                                        <td>
                                            {{ $farmer->village }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Registred On
                                        </th>
                                        <td>
                                            {{ $farmer->created }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Last Update
                                        </th>
                                        <td>
                                            {{ $farmer->updated }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Primary Contact
                                        </th>
                                        <td>
                                            <a title="Primary Contact" href="tel:{{ $farmer->primary_contact }}">
                                                {{ $farmer->primary_contact }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Secondary Contact
                                        </th>
                                        <td>
                                            <a title="Primary Contact" href="tel:{{ $farmer->secondary_contact }}">
                                                {{ $farmer->secondary_contact }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Comments
                                        </th>
                                        <td>
                                            <small>
                                                {{ $farmer->comment ?? '-' }}
                                            </small>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>

                    <div class="col-md-4" title="{{ $farmer->name }} - {{ $farmer->kisan_id }}">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Photo
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
                                        @if ($farmer->photo_status)
                                            <a href="{{ url($farmer->photo) }}" data-toggle="lightbox"
                                                data-title="{{ $farmer->name . '`s Profile Photo' }}" class="text-center"
                                                data-category="2, 4" data-sort="black sample" target="_blank">
                                                <img src="{{ url($farmer->photo) }}" class="photo"
                                                    alt="{{ $farmer->name . '`s Profile Photo' }}" width="200px" />
                                            </a>
                                        @else
                                            <img id="photo_preview" alt="Farmer Photo Preview" class="table-avatar"
                                                src="{{ url('backend/dist/img/avatar5.png') }}" width="150px"
                                                title="{{ $farmer->name }} ({{ $farmer->kisan_id }})'s photo is not uploaded.">
                                        @endif
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Aadhaar Card
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
                                        @if ($farmer->aadhaar_status)
                                            <a href="{{ url($farmer->aadhaar_card) }}" data-toggle="lightbox"
                                                data-title="{{ $farmer->name . '`s Aadhaar Card' }}" class="text-center"
                                                data-category="2, 4" data-sort="black sample" target="_blank">
                                                <img src="{{ url($farmer->aadhaar_card) }}" class="photo" id="photo"
                                                    alt="{{ $farmer->name . '`s Aadhaar Card' }}" width="200px" />
                                            </a>
                                        @else
                                            <img id="aadhaar_preview" alt="Farmer Aadhaar card preview"
                                                class="table-avatar"
                                                title="{{ $farmer->name }} ({{ $farmer->kisan_id }})'s photo is not uploaded."
                                                src="{{ url('backend/dist/img/aadhaar-card.png') }}" width="200px">
                                        @endif
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    List of related RST entries
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
                                        @foreach ($farmer->acquirements as $key => $acquirement)
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
                                                    <a href="{{ route('acquirements.show', $acquirement->id) }}"
                                                        target="_blank" class="text-center">
                                                        {{ $acquirement->rst ?? '-' }}
                                                    </a>
                                                </td>
                                                <td>
                                                    {{ $acquirement->farmer->name }}
                                                    <span class="badge badge-sm badge-warning">
                                                        {{ $acquirement->farmer->kisan_id }}
                                                    </span>
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
                                                    {{ $farmer->acquirements->sum('weight') }}
                                                </span>
                                            </th>
                                            <th colspan="1">
                                                <input type="number" id="weight_percentage" name="weight_percentage"
                                                    placeholder="2%" class="form-control" value="2"
                                                    onchange="getPercentage(this.value, {{ $farmer->acquirements->sum('weight') }})">
                                            </th>
                                            <th>
                                                <span class="form-control" id="calculated_weight">
                                                    {{ ($farmer->acquirements->sum('weight') * 98) / 100 }}
                                                </span>
                                            </th>
                                            <th>
                                                <span class="form-control" id="deducted_weight">
                                                    {{ ($farmer->acquirements->sum('weight') * 2) / 100 }}
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
            </div>
            <!-- /.container-fluid -->
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
