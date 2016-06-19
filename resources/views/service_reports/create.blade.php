@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Add a Service Report</h3>
            <form method="POST" action="/service_reports/store">
                <fieldset class="form-group">
                    <label for="customerBody">Customer Body</label>
                    <input class="form-control" id="customerBody" type="text" name="customer_body"/>
                </fieldset>
                <fieldset class="form-group">
                    <label for="contactPerson">Contact Person</label>
                    <input class="form-control" id="contactPerson" type="text" name="contact_person"/>
                </fieldset>
                <fieldset class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" type="email" name="email"/>
                </fieldset>
                <fieldset class="form-group">
                    <label for="telephone">Telephone</label>
                    <input class="form-control" id="telephone" type="text" name="telephone"/>
                </fieldset>
                <fieldset class="form-group">
                    <label for="fax">Fax</label>
                    <input class="form-control" id="fax" type="text" name="fax"/>
                </fieldset>
                <fieldset class="form-group">
                    <label for="referenceNumber">Reference Number</label>
                    <input class="form-control" id="referenceNumber" type="text" name="reference_number"/>
                </fieldset>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
