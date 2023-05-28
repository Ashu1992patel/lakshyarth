@extends('backend.layout.master')

@section('title', "Farmers's RST Records ")
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
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Calculation
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
                            <div class="card-body">
                                @if ($farmer->acquirements->count() > 0)
                                    <table class="table table-striped projects" style="font-size: .9rem">
                                        <tbody>
                                            <form action="{{ route('farmers.records', $farmer->id) }}" method="post">
                                                @csrf
                                                @method('POST')
                                                <input type="hidden" name="acquirement_ids" id="acquirement_ids"
                                                    class="form-control">
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"
                                                            title="Click the checkbox to select all the RST entires to clear.">

                                                            <input type="checkbox" onchange="checkAll(this)"
                                                                id="rst_select_all" class="custom-control-input"
                                                                value="" />
                                                            <label for="rst_select_all" class="custom-control-label"
                                                                title="सबका चयन करें">
                                                                SELECT ALL
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <th colspan="2">
                                                        {{-- {{ $farmer->acquirements->sum('weight') }} --}}
                                                        <input type="number" class="form-control" value="0" readonly
                                                            id="total_weight" name="total_weight" />
                                                        <label for="total_weight" title="Total weight">
                                                            <small class="error">कुल वजन।</small>
                                                        </label>
                                                    </th>
                                                    <th>
                                                        <input type="number" id="weight_percentage"
                                                            name="weight_percentage" placeholder="2%"
                                                            class="form-control bg-secondary" value="2" autofocus
                                                            required
                                                            onchange="getPercentage(this.value, {{ $farmer->acquirements->sum('weight') }})">
                                                        <label for="weight_percentage" title="% Deduction.">
                                                            <small class="error">% कटौती।</small>
                                                        </label>
                                                    </th>
                                                    <th colspan="2">
                                                        {{-- {{ ($farmer->acquirements->sum('weight') * 98) / 100 }} --}}
                                                        <input type="number" step=0.01 class="form-control"
                                                            id="calculated_weight" name="calculated_weight" value="0"
                                                            readonly>
                                                        <label for="calculated_weight" title="Weight after deduction.">
                                                            <small class="error">कटौती के बाद वजन।</small>
                                                        </label>
                                                    </th>
                                                    <th>
                                                        {{-- {{ ($farmer->acquirements->sum('weight') * 2) / 100 }} --}}
                                                        <input type="number" class="form-control" id="deducted_weight"
                                                            name="calculated_weight" value="0" readonly />
                                                        <label for="calculated_weight"
                                                            title="Weight deducted of total weight.">
                                                            <small class="error">
                                                                कुल वजन से घटाया गया वजन।
                                                            </small>
                                                        </label>
                                                    </th>
                                                    <th>
                                                        <button type="submit" class="btn btn-info"
                                                            title="सभी चयनित का निपटारा करें">
                                                            Submit
                                                        </button>
                                                    </th>
                                                </tr>
                                            </form>
                                        </tbody>
                                    </table>
                                @else
                                    <p class="text-center">No Records Available</p>
                                @endif
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- left column -->

                    <!-- left column -->
                    <div class="col-md-12">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">
                                    All RST Entries - <strong>NOT CLEARED</strong>
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
                            <div class="card-body">
                                @if ($farmer->acquirements->count() > 0)
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
                                                            <input class="custom-control-input rst_checkbox"
                                                                type="checkbox" onchange="getChecked();"
                                                                id="{{ $acquirement->rst }}" name="hisaab"
                                                                value="{{ $acquirement->id }}"
                                                                data-weight="{{ $acquirement->weight }}">
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
                                                    <td title="In quintal">{{ $acquirement->weight }} </td>
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
                                    </table>
                                @else
                                    <p class="text-center">No Records Available</p>
                                @endif
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- left column -->

                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
