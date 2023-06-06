@extends('backend.layout.master')

@section('title', "Farmers's Detail ")
@section('content')
    @php
        $count = 1;
    @endphp
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
                    <!-- Profile details -->
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

                    <!-- Profile Photo & Aadhaar Card -->
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
                    <!-- Calculation Form - Starts -->
                    @if ($farmer->acquirements->count() > 0)
                        <div class="col-md-12">
                            <div class="card card-warning">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        RST Calculation & Settlement Form
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
                                                        <input type="number" class="form-control" value="0"
                                                            readonly id="total_weight" name="total_weight" />
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
                                                            id="calculated_weight" name="calculated_weight"
                                                            value="0" readonly>
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

                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    @endif
                    <!-- Calculation Form - Ends -->

                    <!-- NOT CLEARED RSTs- Starts -->
                    @if ($farmer->acquirements->count() > 0)
                        <div class="col-md-12">
                            <div class="card card-secondary">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        All RST Entries - <strong>NOT CLEARED</strong>
                                    </h3>

                                    <div class="card-tools">
                                        @if ($farmer->acquirements->count() > 0)
                                            <a href="{{ route('farmers.records', $farmer->id) }}" target="_blank"
                                                title="Clear RST Entries">
                                                <span class="badge badge-light">
                                                    <i class="fas fa-history"></i>
                                                </span>
                                            </a>
                                        @endif

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
                                    <table class="table table-striped projects" id="example{{ ++$count }}">
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
                                        {{-- <tfoot>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th colspan="2">
                                                    <input type="number" class="form-control"
                                                        value="{{ $farmer->acquirements->sum('weight') }}" readonly
                                                        id="total_weight" name="total_weight" />
                                                    <label for="total_weight" title="Total weight">
                                                        <small class="error">कुल वजन।</small>
                                                    </label>
                                                </th>
                                                <th>
                                                    <input type="number" id="weight_percentage" name="weight_percentage"
                                                        placeholder="2%" class="form-control bg-secondary" value="2"
                                                        autofocus required
                                                        onchange="getPercentage(this.value, {{ $farmer->acquirements->sum('weight') }})">
                                                    <label for="weight_percentage" title="% Deduction.">
                                                        <small class="error">% कटौती।</small>
                                                    </label>
                                                </th>
                                                <th colspan="2">
                                                    <input type="number" step=0.01 class="form-control"
                                                        id="calculated_weight" name="calculated_weight"
                                                        value="{{ ($farmer->acquirements->sum('weight') * (100 - 2)) / 100 }}"
                                                        readonly>
                                                    <label for="calculated_weight" title="Weight after deduction.">
                                                        <small class="error">कटौती के बाद वजन।</small>
                                                    </label>
                                                </th>
                                                <th>
                                                    <input type="number" class="form-control" id="deducted_weight"
                                                        name="calculated_weight"
                                                        value="{{ ($farmer->acquirements->sum('weight') * 2) / 100 }}"
                                                        readonly />
                                                    <label for="calculated_weight"
                                                        title="Weight deducted of total weight.">
                                                        <small class="error">
                                                            कुल वजन से घटाया गया वजन।
                                                        </small>
                                                    </label>
                                                </th>
                                            </tr>
                                        </tfoot> --}}
                                    </table>
                                    <!--  <p class="text-center">No Records Available</p> -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    @endif
                    <!-- NOT CLEARED RSTs- Ends -->

                    <!-- CLEARED RSTs- Starts - Group By Transaction ID -->
                    @if ($farmer->settlements->groupBy('transaction_id')->count() > 0)
                        @foreach ($farmer->settlements->groupBy('transaction_id') as $tkey => $transactions)
                            <div class="col-md-12">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            TRANSACTION ID:
                                            <span class="badge badge-secondary">{{ $tkey }}</span>
                                            <small>(CLEARED)</small>
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
                                        @if ($transactions->count() > 0)
                                            <table class="table table-striped projects" id="example{{ ++$count }}">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>RST</th>
                                                        <th>Farmer</th>
                                                        <th>Weight</th>
                                                        <th title="Registered On">Registered</th>
                                                        {{-- <th title="Updated On">Last Updated</th> --}}
                                                        <th>Vehicle Type</th>
                                                        <th>Vehicle Number</th>
                                                        {{-- <th>Cleared?</th> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $weight = 0;
                                                    @endphp
                                                    @foreach ($transactions as $key => $transaction)
                                                        @php
                                                            $weight += $transaction->calculated_weight;
                                                        @endphp
                                                        <tr>
                                                            <td>
                                                                {{ ++$key }}
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('acquirements.show', $transaction->acquirement->id) }}"
                                                                    target="_blank" class="text-center">
                                                                    {{ $transaction->acquirement->rst ?? '-' }}
                                                                </a>
                                                            </td>
                                                            <td>
                                                                {{ $transaction->farmer->name }}
                                                                <span class="badge badge-sm badge-warning">
                                                                    {{ $transaction->farmer->kisan_id }}
                                                                </span>
                                                            </td>
                                                            <td
                                                                title="{{ $transaction->deducted_weight ?? '-' }} ({{ $transaction->percentage . '%' ?? '-' }} of {{ $transaction->acquirement->weight ?? '-' }})">
                                                                {{ $transaction->calculated_weight }}
                                                            </td>
                                                            <td>
                                                                {{ $transaction->created }}
                                                            </td>
                                                            {{-- <td>{{ $transaction->updated }}</td> --}}
                                                            <td>
                                                                {{ $transaction->acquirement->vehicle_type ?? 'NA' }}
                                                            </td>
                                                            <td>
                                                                {{ $transaction->acquirement->vehicle_number ?? 'NA' }}
                                                            </td>
                                                            {{-- <td>
                                                                {{ $transaction->acquirement->is_cleared ? '✔' : '❌' }}
                                                            </td> --}}
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                                <tfoot>
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <th>
                                                            Total Weight:
                                                        </th>
                                                        <th>
                                                            {{ $weight ?? '-' }}
                                                        </th>
                                                        <th colspan="3"></th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        @else
                                            <p class="text-center">No Records Available</p>
                                        @endif
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <!-- CLEARED RSTs- Ends - Group By Transaction ID -->

                    <!-- All CLEARED RSTs - Starts -->
                    @if ($farmer->acquirementsCleared->count() > 0)
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        All RST Entries -
                                        <strong>CLEARED</strong>
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
                                    <table class="table table-striped projects" id="example{{ ++$count }}">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>RST</th>
                                                <th>Farmer</th>
                                                <th>Weight</th>
                                                <th title="Registered On">Registered</th>
                                                <th title="Updated On">Last Updated</th>
                                                <th>Vehicle Type</th>
                                                <th>Vehicle Number</th>
                                                {{-- <th>Cleared?</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($farmer->acquirementsCleared as $key => $acquirement)
                                                <tr
                                                    title="{{ 'RST-' . $acquirement->rst . ' Comment:-📝 ' . $acquirement->comment }}">
                                                    <td>
                                                        {{ ++$key }}
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
                                                    <td>{{ $acquirement->created }} {{ $acquirement->time }}</td>
                                                    <td>{{ $acquirement->updated }}</td>
                                                    <td>{{ $acquirement->vehicle_type ?? 'NA' }}</td>
                                                    <td>{{ $acquirement->vehicle_number ?? 'NA' }}</td>
                                                    {{-- <td>
                                                        {{ $acquirement->is_cleared ? '✔' : '❌' }}
                                                    </td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    @endif
                    <!-- All CLEARED RSTs - Ends -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
