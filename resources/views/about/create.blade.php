@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    New About
                    <a href="{{ route('about.index')}}" class="btn btn-info float-end">Back</a>
                </div>
        
                <div class="card-body">
                    <form action="{{ route('about.store') }}" method="POST" class="form-inline" enctype="multipart/form-data">
                        @csrf
                        @include('about.form')
                        <button type="submit" class="btn btn-lg btn-danger mt-5">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection