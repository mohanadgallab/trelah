@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Update Service
                    <a href="{{ route('others.index')}}" class="btn btn-info float-end">Back</a>
                </div>
        
                <div class="card-body">
                    <form action="{{ route('others.update', [$other]) }}" method="POST">
                        @method('put')
                        @csrf
                        @include('other.form')
                        <button type="submit" class="btn btn-lg btn-danger mt-5">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection