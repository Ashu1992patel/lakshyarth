@extends('backend.layout.master')
@section('title', 'Edit farmer Details')
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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('farmers.index') }}">Farmers (किसान)</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Farmer Details</li>
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
                            <!-- /.card-header -->
                            <!-- Widget: user widget style 1 -->
                            <div class="card-header">
                                <h3 class="card-title">
                                    Edit
                                    {{ $farmer->name . ' (' . $farmer->kisan_id . ')' }}'s
                                    record
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
                            <!-- /.widget-user -->
                            <!-- form start -->
                            <div class="card-body p-0">
                                <form method="POST" action="{{ route('farmers.update', $farmer->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-4 col-form-label">
                                                Farmer Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Enter Kisan Name" value="{{ old('name', $farmer->name) }}"
                                                    required autocomplete="name" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="gender" class="col-sm-4 col-form-label">Gender: </label>
                                            <div class="col-sm-8">
                                                <select name="gender" id="gender" class="form-control">
                                                    <option value="male"
                                                        {{ old('gender', $farmer->gender) == 'male' ? 'selected' : '' }}>
                                                        Male
                                                    </option>
                                                    <option value="female"
                                                        {{ old('gender', $farmer->gender) == 'female' ? 'selected' : '' }}>
                                                        Female
                                                    </option>
                                                    <option value="other"
                                                        {{ old('gender', $farmer->gender) == 'other' ? 'selected' : '' }}>
                                                        Other
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="primary_contact" class="col-sm-4 col-form-label">
                                                Contact
                                                <small>(Primary)</small>
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="tel" class="form-control" id="primary_contact"
                                                    name="primary_contact" placeholder="Enter Primary Contact"
                                                    value="{{ old('primary_contact', $farmer->primary_contact) }}"
                                                    autocomplete="primary_contact">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="secondary_contact" class="col-sm-4 col-form-label">
                                                Contact
                                                <small>(Alternative)</small>
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="tel" class="form-control" id="secondary_contact"
                                                    name="secondary_contact" placeholder="Enter Secondary Contact"
                                                    value="{{ old('secondary_contact', $farmer->secondary_contact) }}"
                                                    autocomplete="secondary_contact">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="village" class="col-sm-4 col-form-label">Village</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="village" name="village"
                                                    placeholder="Village Name"
                                                    value="{{ old('village', $farmer->village) }}" autocomplete="village">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="photo" class="col-sm-4 col-form-label">Photo</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="photo"
                                                            name="photo"
                                                            onchange="document.getElementById('photo_preview').src = window.URL.createObjectURL(this.files[0])">
                                                        <label class="custom-file-label" for="photo">Choose
                                                            Photo</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="aadhaar_card" class="col-sm-4 col-form-label">Aadhar Card</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="aadhaar_card"
                                                            name="aadhaar_card"
                                                            onchange="document.getElementById('aadhaar_preview').src = window.URL.createObjectURL(this.files[0])">
                                                        <label class="custom-file-label" for="aadhaar_card">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update Farmer Details</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <!-- Form Element sizes -->
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Farmer Photo Preview</h3>
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
                                        @if ($farmer->photo_status)
                                            <img src="{{ url($farmer->photo) }}"
                                                alt="{{ $farmer->name . '`s profile photo' }}" id="photo_preview"
                                                width="150px" class="elevation-2 photo">
                                        @else
                                            <img id="photo_preview" alt="Farmer Photo Preview" class="table-avatar"
                                                src="{{ url('backend/dist/img/avatar5.png') }}" width="150px">
                                        @endif

                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <!-- Form Element sizes -->
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Aadhaar Card Preview</h3>
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
                                        @if ($farmer->aadhaar_status)
                                            <img src="{{ url($farmer->aadhaar_card) }}"
                                                alt="{{ $farmer->name . '`s aadhaar card' }}" id="aadhaar_preview"
                                                height="150px" class="elevation-2 photo">
                                        @else
                                            <img id="aadhaar_preview" alt="Farmer Aadhaar card preview"
                                                class="table-avatar" src="{{ url('backend/dist/img/aadhaar-card.png') }}"
                                                height="150px">
                                        @endif

                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
