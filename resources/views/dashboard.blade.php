@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="float-right"><a href="/listings/create" class="btn btn-success btn-sm">Add Listing</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your Listings</h3>
                    @if(count($listings))
                        <table class="table table-striped">
                            <tr>
                                <th>Company</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($listings as $listing)
                            <tr>
                                <td>{{$listing->name}}</td>
                                <td><a href="/listings/{{$listing->id}}/edit" class="btn btn-secondary  btn-sm float-right">Edit</a></td>
                                <td>
                                    {{ Form::open(array('action' => ['ListingsController@destroy', $listing->id], 'method' => 'POST', 'class' => 'float-left', 'onsubmit' => 'return confirm("Are You Sure ?")')) }}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::bsSubmit('delete', ['class' => 'btn btn-danger btn-sm'])}}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                            @endforeach
                        </table>

                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
