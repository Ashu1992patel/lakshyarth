@extends('backend.layout.master')
@section('title', 'Dashboard ')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Lakshyarth Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Lakshyarth Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1">
                                <i class="fas fa-users"></i>
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Farmers</span>
                                <span class="info-box-number">{{ $farmers->count() }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1">
                                <i class="fas fa-list"></i>
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Acquirements</span>
                                <span class="info-box-number">
                                    {{ $acquirements->count() }}
                                    {{-- <small>%</small> --}}
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    {{-- <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Likes</span>
                                <span class="info-box-number">41,410</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div> --}}
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1">
                                <i class="fas fa-sign-out"></i>
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Logout</span>
                                <span class="info-box-number">
                                    <button class="btn btn-sm btn-primary"
                                        onclick="document.getElementById('logout').click()">Here</button>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Main row -->
                <div class="row">
                    {{-- <div class="col-md-12">
                        <!-- TABLE: LATEST ORDERS -->
                        <div class="card">
                            <div class="card-header border-transparent">
                                <h3 class="card-title">Latest Orders</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Item</th>
                                                <th>Status</th>
                                                <th>Popularity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                <td>Call of Duty IV</td>
                                                <td><span class="badge badge-success">Shipped</span></td>
                                                <td>
                                                    <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                        90,80,90,-70,61,-83,63</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                <td>iPhone 6 Plus</td>
                                                <td><span class="badge badge-danger">Delivered</span></td>
                                                <td>
                                                    <div class="sparkbar" data-color="#f56954" data-height="20">
                                                        90,-80,90,70,-61,83,63</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                <td>Samsung Smart TV</td>
                                                <td><span class="badge badge-info">Processing</span></td>
                                                <td>
                                                    <div class="sparkbar" data-color="#00c0ef" data-height="20">
                                                        90,80,-90,70,-61,83,63</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                                <td>Samsung Smart TV</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                                <td>
                                                    <div class="sparkbar" data-color="#f39c12" data-height="20">
                                                        90,80,-90,70,61,-83,68</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New
                                    Order</a>
                                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All
                                    Orders</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div> --}}

                    <!-- Left col -->
                    <div class="col-md-12">
                        <!-- USERS LIST -->
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Recently Registered Farmers
                                </h3>

                                <div class="card-tools">
                                    <span class="badge badge-primary">
                                        {{ $farmers->count() }} Total Farmers
                                    </span>
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">`
                                <ul style="display: flex;flex-flow: row wrap;justify-content: space-around;">
                                    @foreach ($farmers->take(14) as $farmer)
                                        <li class="text-center m-2 p-2">
                                            @if ($farmer->photo_status)
                                                <a href="{{ $farmer->photo }}" data-toggle="lightbox"
                                                    data-title="{{ $farmer->name }} ({{ $farmer->kisan_id }})"
                                                    data-gallery="gallery" style="display: inline-block;">

                                                    <img src="{{ $farmer->photo }}" class="img-fluid mb-2" width="50px"
                                                        alt="{{ $farmer->name }} ({{ $farmer->kisan_id }})">
                                                </a>
                                            @else
                                                <i class="fas fa-user fa-2x"></i>
                                            @endif

                                            <div>
                                                <a class="users-list-name" href="{{ route('farmers.show', $farmer->id) }}"
                                                    target="_blank">
                                                    {{ $farmer->name }}
                                                </a>
                                                <span class="users-list-date">
                                                    {{ $farmer->dashboard_created }}
                                                </span>
                                            </div>
                                        </li>
                                        {{-- <li>
                                            @if ($farmer->photo_status)
                                                <img src="{{ $farmer->photo }}" alt="User Image" style="width: 80px;">
                                            @else
                                                <i class="fas fa-user fa-2x"></i>
                                            @endif

                                            <a class="users-list-name" href="#">
                                                {{ $farmer->name }}
                                            </a>
                                            <span class="users-list-date">
                                                {{ $farmer->dashboard_created }}
                                            </span>
                                        </li> --}}
                                    @endforeach
                                </ul>
                                <!-- /.users-list -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="{{ route('farmers.index') }}" target="_blank">
                                    View All Farmers
                                </a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!--/.card -->
                    </div>

                    <!-- Acquairements -->
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <!-- USERS LIST -->
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Recent <strong>PENDING</strong> RST Entries
                                </h3>

                                <div class="card-tools">
                                    <span class="badge badge-warning">
                                        {{ $acquirements->count() }} Total Acquirements
                                    </span>
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">`
                                <ul style="display: flex;flex-flow: row wrap;justify-content: space-around;">
                                    @foreach ($acquirements->take(8) as $acquirement)
                                        <li class="text-center m-2 p-2"
                                            title="{{ 'RST-' . $acquirement->rst . ' File ' . '(' . $acquirement->farmer->name . '-' . $acquirement->farmer->kisan_id . ')' }}">
                                            @if ($acquirement->rst_file_status)
                                                <a href="{{ url($acquirement->rst_file) }}" data-toggle="lightbox"
                                                    data-title="{{ 'RST-' . $acquirement->rst . ' File ' }}"
                                                    class="text-center" data-category="2, 4" data-sort="black sample"
                                                    target="_blank">
                                                    <img src="{{ url($acquirement->rst_file) }}" class="img-fluid mb-2"
                                                        alt="{{ 'RST-' . $acquirement->rst . ' File' }}"
                                                        width="50px" />
                                                </a>
                                            @else
                                                <i class="fas fa-file fa-2x"></i>
                                            @endif

                                            <div>
                                                <a class="users-list-name" target="_blank"
                                                    href="{{ route('acquirements.show', $acquirement->id) }}"
                                                    target="_blank">
                                                    {{ $acquirement->rst }}
                                                </a>
                                                <span class="users-list-date">
                                                    {{ $acquirement->created }}
                                                </span>
                                            </div>
                                        </li>
                                        {{-- <li>
                                            @if ($farmer->photo_status)
                                                <img src="{{ $farmer->photo }}" alt="User Image" style="width: 80px;">
                                            @else
                                                <i class="fas fa-user fa-2x"></i>
                                            @endif

                                            <a class="users-list-name" href="#">
                                                {{ $farmer->name }}
                                            </a>
                                            <span class="users-list-date">
                                                {{ $farmer->dashboard_created }}
                                            </span>
                                        </li> --}}
                                    @endforeach
                                </ul>
                                <!-- /.users-list -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="{{ route('acquirements.index') }}">
                                    View All Acquirements
                                </a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!--/.card -->
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <!-- USERS LIST -->
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Recent <strong>CLEARED</strong> RST Entries
                                </h3>

                                <div class="card-tools">
                                    <span class="badge badge-success">
                                        {{ $acquirements->count() }} Total Acquirements
                                    </span>
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">`
                                <ul style="display: flex;flex-flow: row wrap;justify-content: space-around;">
                                    @foreach ($acquirementsCleared->take(8) as $acquirement)
                                        <li class="text-center m-2 p-2"
                                            title="{{ 'RST-' . $acquirement->rst . ' File ' . '(' . $acquirement->farmer->name . '-' . $acquirement->farmer->kisan_id . ')' }}">
                                            @if ($acquirement->rst_file_status)
                                                <a href="{{ url($acquirement->rst_file) }}" data-toggle="lightbox"
                                                    data-title="{{ 'RST-' . $acquirement->rst . ' File ' }}"
                                                    class="text-center" data-category="2, 4" data-sort="black sample"
                                                    target="_blank">
                                                    <img src="{{ url($acquirement->rst_file) }}" class="img-fluid mb-2"
                                                        alt="{{ 'RST-' . $acquirement->rst . ' File' }}"
                                                        width="50px" />
                                                </a>
                                            @else
                                                <i class="fas fa-file fa-2x"></i>
                                            @endif

                                            <div>
                                                <a class="users-list-name" target="_blank"
                                                    href="{{ route('acquirements.show', $acquirement->id) }}"
                                                    target="_blank">
                                                    {{ $acquirement->rst }}
                                                </a>
                                                <span class="users-list-date">
                                                    {{ $acquirement->created }}
                                                </span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <!-- /.users-list -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="{{ route('acquirements.index') }}">
                                    View All Acquirements
                                </a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!--/.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
