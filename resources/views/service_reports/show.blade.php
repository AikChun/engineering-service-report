@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $serviceReport->id }}</h1>
            <ul class="list-group">
                <li class="list-group-item">{{ $serviceReport->customer_name }}</li>
                <li class="list-group-item">{{ $serviceReport->contact_person }}</li>
                <li class="list-group-item">{{ $serviceReport->email }}</li>
                <li class="list-group-item">{{ $serviceReport->telephone }}</li>
                <li class="list-group-item">{{ $serviceReport->fax }}</li>
                <li class="list-group-item">{{ $serviceReport->user_id }}</li>
                <li class="list-group-item">{{ $serviceReport->reference_number }}</li>
            </ul>
            <input type="button" class="btn btn-success" value="Create" href="/service_reports/create"/>
        </div>
    </div>
@endsection
