@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Update About
                    <a href="{{ route('about.index')}}" class="btn btn-info float-end">Back</a>
                </div>
        
                <div class="card-body">
                    <form action="{{ route('about.update', [$about]) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        @include('about.form')
                        <button type="submit" class="btn btn-lg btn-danger mt-5">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection