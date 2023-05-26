@extends('backend.layout.master')
@section('title', 'Add New Acquirement ')
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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('acquirements.index') }}">
                                    Acquirements (उपार्जन)
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                Add New Acquirement
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
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Acquirement Entry Form (New)</h3>
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
                            <!-- form start -->
                            <div class="card-body p-0">
                                <form method="POST" action="{{ route('acquirements.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="rst" class="col-sm-4 col-form-label">RST</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="rst" name="rst"
                                                    placeholder="Enter RST Number" :value="old('rst')" required
                                                    autocomplete="rst" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="farmer_id" class="col-sm-4 col-form-label">Farmer </label>
                                            <div class="col-sm-8">
                                                <select class="select2" name="farmer_id" id="farmer_id"
                                                    style="width: 100%;">
                                                    <option value="">Select Farmer</option>
                                                    @foreach ($farmers as $farmer)
                                                        <option value="{{ $farmer->id }}">
                                                            {{ $farmer->name }} ({{ $farmer->kisan_id }})
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="vehicle_type" class="col-sm-4 col-form-label">
                                                Vehicle Type
                                            </label>
                                            <div class="col-sm-8">
                                                <select class="select2" name="vehicle_type" id="vehicle_type"
                                                    style="width: 100%;">
                                                    <option value="">Select Vehicle Type</option>
                                                    <option {{ old('vehicle_type') == 'Tractor' ? 'selected' : '' }}
                                                        value="Tractor">Tractors</option>
                                                    <option {{ old('vehicle_type') == 'Bike' ? 'selected' : '' }}
                                                        value="Bike">
                                                        Bike</option>
                                                    <option {{ old('vehicle_type') == 'Auto' ? 'selected' : '' }}
                                                        value="Auto">
                                                        Auto</option>
                                                    <option {{ old('vehicle_type') == 'Truck' ? 'selected' : '' }}
                                                        value="Truck">
                                                        Truck</option>
                                                    <option {{ old('vehicle_type') == 'Bus' ? 'selected' : '' }}
                                                        value="Bus">
                                                        Bus
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="vehicle_number" class="col-sm-4 col-form-label">
                                                Vehicle Number
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="vehicle_number"
                                                    name="vehicle_number"
                                                    placeholder="Enter Vehicle Number e.g MP20-NJ-2361" minlength="8"
                                                    :value="old('vehicle_number')" autocomplete="vehicle_number">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="weight" class="col-sm-4 col-form-label">
                                                Weight
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" id="weight" name="weight"
                                                    placeholder="Enter Total Weight" :value="old('weight')"
                                                    autocomplete="weight">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="comment" class="col-sm-4 col-form-label">
                                                comment
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="comment" name="comment"
                                                    placeholder="Other?" :value="old('comment')" autocomplete="comment">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="rst_file" class="col-sm-4 col-form-label">RST File</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="rst_file"
                                                            name="rst_file"
                                                            onchange="document.getElementById('rst_file_preview').src = window.URL.createObjectURL(this.files[0])">
                                                        <label class="custom-file-label" for="rst_file">
                                                            Click Here Upload RST File Image
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Register RST Detail</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <div class="col-md-4">
                        <!-- Form Element sizes -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">RST File Preview</h3>
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
                                <img id="rst_file_preview" alt="RST File Preview" class="table-avatar"
                                    src="{{ url('backend/dist/img/aadhaar-card.png') }}" width="300px">
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
