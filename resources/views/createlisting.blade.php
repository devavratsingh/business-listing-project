@extends('layouts.app')

@section('content')
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">Create Listing <span class="float-right"><a href="/dashboard" class="btn btn-dark btn-sm">Go Back</a></span></div>

	                <div class="card-body">
	                    {{ Form::open(array('action' => 'ListingsController@store', 'method' => 'POST')) }}
						    {{Form::bsText('name', '', ['placeholder' => 'Company Name'])}}
						    {{Form::bsText('website', '', ['placeholder' => 'Website Link'])}}
						    {{Form::bsText('email', '', ['placeholder' => 'Contact Email'])}}
						    {{Form::bsText('address', '', ['placeholder' => 'Enter Address'])}}
						    {{Form::bsText('phone', '', ['placeholder' => 'Contact Phone'])}}
						    {{Form::bsTextArea('bio', '', ['placeholder' => 'About This Business'])}}
						    {{Form::bsSubmit('submit', ['class' => 'btn btn-primary'])}}
						{{ Form::close() }}
	                </div>
	            </div>
	        </div>
	    </div>
@endsection