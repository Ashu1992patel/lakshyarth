@extends('backend.layout.master')
@section('title', 'Edit Settings')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Settings</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="">
                                    Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Edit Settings</li>
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
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- /.card-header -->
                            <!-- Widget: user widget style 1 -->
                            <div class="card-header">
                                <h3 class="card-title">
                                    Settings
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
                                <form method="POST" action="{{ route('settings.update', $settings->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')

                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="company_full_name" class="col-sm-4 col-form-label">
                                                Company Name (FULL)
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="company_full_name"
                                                    name="company_full_name" placeholder="Enter Company's Full Name"
                                                    value="{{ old('company_full_name', $settings->company_full_name) }}"
                                                    required autocomplete="company_full_name" autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="company_short_name" class="col-sm-4 col-form-label">
                                                Company Name (Short)
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="company_short_name"
                                                    name="company_short_name" placeholder="Enter Company's Short Name"
                                                    value="{{ old('company_short_name', $settings->company_short_name) }}"
                                                    required autocomplete="company_short_name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="address" class="col-sm-4 col-form-label">
                                                Address
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="address" name="address"
                                                    placeholder="Enter address"
                                                    value="{{ old('address', $settings->address) }}" required
                                                    autocomplete="address">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="contact_primary" class="col-sm-4 col-form-label">
                                                Contact
                                                <small>(Primary)</small>
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="contact_primary"
                                                    name="contact_primary" placeholder="Enter contact_primary"
                                                    value="{{ old('contact_primary', $settings->contact_primary) }}"
                                                    required autocomplete="contact_primary">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="contact_secondary" class="col-sm-4 col-form-label">
                                                Contact
                                                <small>(Secondary)</small>
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="secondary_contact"
                                                    name="contact_secondary" placeholder="Enter Secondary Contact"
                                                    value="{{ old('contact_secondary', $settings->contact_secondary) }}"
                                                    required autocomplete="contact_secondary">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label">
                                                Email
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Enter email" value="{{ old('email', $settings->email) }}"
                                                    required autocomplete="email">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="footer_text" class="col-sm-4 col-form-label">
                                                Footer Text
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="footer_text"
                                                    name="footer_text" placeholder="Enter footer text"
                                                    value="{{ old('footer_text', $settings->footer_text) }}" required
                                                    autocomplete="footer_text">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="logo" class="col-sm-4 col-form-label">
                                                Logo
                                            </label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="logo_id"
                                                            name="logo"
                                                            onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])">
                                                        <label class="custom-file-label" for="logo">
                                                            Choose Logo
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                @if ($settings->logo)
                                                    <a href="{{ url($settings->logo) }}" data-toggle="lightbox"
                                                        data-title="Logo Preview" class="text-center"
                                                        data-category="2, 4" data-sort="black sample">
                                                        <img src="{{ url($settings->logo) }}" class="elevation-2 photo"
                                                            id="logo" alt="Logo Preview" width="50px" />
                                                    </a>
                                                @else
                                                    <img id="logo" alt="Logo Preview" class="elevation-2 photo"
                                                        src="{{ url('backend/dist/img/avatar5.png') }}" width="50px">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="banner_image" class="col-sm-4 col-form-label">
                                                Banner Image
                                            </label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="banner_image_id" name="banner_image"
                                                            onchange="document.getElementById('banner_image').src = window.URL.createObjectURL(this.files[0])">
                                                        <label class="custom-file-label" for="banner_image">
                                                            Choose Banner
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="box_image_1" class="col-sm-4 col-form-label">
                                                Box Image 1
                                            </label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="box_image_1_id" name="box_image_1"
                                                            onchange="document.getElementById('box_image_1').src = window.URL.createObjectURL(this.files[0])">
                                                        <label class="custom-file-label" for="box_image_1">
                                                            Choose Box Image 1
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="box_image_2" class="col-sm-4 col-form-label">
                                                Box Image 2
                                            </label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="box_image_2_id" name="box_image_2"
                                                            onchange="document.getElementById('box_image_2').src = window.URL.createObjectURL(this.files[0])">
                                                        <label class="custom-file-label" for="box_image_2">
                                                            Choose Box Image 2
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="box_image_3" class="col-sm-4 col-form-label">
                                                Box Image 3
                                            </label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="box_image_3_id" name="box_image_3"
                                                            onchange="document.getElementById('box_image_3').src = window.URL.createObjectURL(this.files[0])">
                                                        <label class="custom-file-label" for="box_image_3">
                                                            Choose Box Image 3
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update Settings</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <div class="col-md-12">
                        <div class="row">
                            <!-- Banner Image -->
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <!-- Form Element sizes -->
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Slider Image Preview</h3>
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
                                        @if ($settings->banner_image)
                                            <a href="{{ url($settings->banner_image) }}" data-toggle="lightbox"
                                                data-title="Banner Image 1 Preview" class="text-center"
                                                data-category="2, 4" data-sort="black sample">
                                                <img src="{{ url($settings->banner_image) }}" class="elevation-2 photo"
                                                    id="banner_image" alt="Banner Image 1 Preview" width="250px" />
                                            </a>
                                        @else
                                            <img id="banner_image" alt="Banner Image 1 Preview" class="elevation-2 photo"
                                                src="{{ url('backend/dist/img/avatar5.png') }}" width="150px">
                                        @endif
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /. Banner Image -->

                            <!-- Box Image 1 -->
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <!-- Form Element sizes -->
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Box Image 1</h3>
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
                                        @if ($settings->box_image_1)
                                            <a href="{{ url($settings->box_image_1) }}" data-toggle="lightbox"
                                                data-title="Banner Image 2 Preview" class="text-center"
                                                data-category="2, 4" data-sort="black sample">
                                                <img src="{{ url($settings->box_image_1) }}" class="elevation-2 photo"
                                                    id="box_image_1" alt="Banner Image 1 Preview" width="250px" />
                                            </a>
                                        @else
                                            <img id="box_image_1" alt="Banner Image 1 Preview" class="elevation-2 photo"
                                                src="{{ url('backend/dist/img/avatar5.png') }}" width="150px">
                                        @endif
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /. Box Image 1 -->

                            <!-- Box Image 2 -->
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <!-- Form Element sizes -->
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Box Image 2</h3>
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
                                        @if ($settings->box_image_2)
                                            <a href="{{ url($settings->box_image_2) }}" data-toggle="lightbox"
                                                data-title="Banner Image 2 Preview" class="text-center"
                                                data-category="2, 4" data-sort="black sample">
                                                <img src="{{ url($settings->box_image_2) }}" class="elevation-2 photo"
                                                    id="box_image_2" alt="Banner Image 2 Preview" width="250px" />
                                            </a>
                                        @else
                                            <img id="box_image_2" alt="Banner Image 1 Preview" class="elevation-2 photo"
                                                src="{{ url('backend/dist/img/avatar5.png') }}" width="150px">
                                        @endif
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /. Box Image 2 -->

                            <!-- Box Image 3 -->
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <!-- Form Element sizes -->
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Box Image 2</h3>
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
                                        @if ($settings->box_image_3)
                                            <a href="{{ url($settings->box_image_3) }}" data-toggle="lightbox"
                                                data-title="Banner Image 2 Preview" class="text-center"
                                                data-category="2, 4" data-sort="black sample">
                                                <img src="{{ url($settings->box_image_3) }}" class="elevation-2 photo"
                                                    id="box_image_3" alt="Banner Image 3 Preview" width="250px" />
                                            </a>
                                        @else
                                            <img id="box_image_3" alt="Banner Image 1 Preview" class="elevation-2 photo"
                                                src="{{ url('backend/dist/img/avatar5.png') }}" width="150px">
                                        @endif

                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /. Box Image 3 -->
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
