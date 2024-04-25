@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    New Country
                    <a href="{{ route('countries.index')}}" class="btn btn-info float-end">Back</a>
                </div>
        
                <div class="card-body">
                    <form action="{{ route('countries.store') }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @include('countries.form')
                        <button type="submit" class="btn btn-lg btn-danger mt-5">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection