@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Truck Details
                    <a href="{{ route('trucks.index')}}" class="btn btn-info float-end">Back</a>
                </div>
        
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ Storage::url($truck->image_path)}}" alt="{{ $truck->name }}" class="img-fluid h-100">
                        </div>
                        <div class="col-md-6">
                            <h1>{{ $truck->name }}</h1>
                            <div class="navbar" >
                                <ul class="d-flex justifu-content-center align-content-md-center">
                                    <li class="m-3">{{ $truck->long }}</li>
                                    <li class="m-3">{{ $truck->width }}</li>
                                    <li class="m-3">{{ $truck->weight }}</li>
                                </ul>
                            </div>
                            <div class="navbar" >
                                <ul class=" ">
                                    <li class="m-3">{{ $truck->area_1 }}</li>
                                    <li class="m-3">{{ $truck->area_2 }}</li>
                                    <li class="m-3">{{ $truck->area_3 }}</li>
                                    <li class="m-3">{{ $truck->area_4 }}</li>
                                    <li class="m-3">{{ $truck->area_5 }}</li>
                                    <li class="m-3">{{ $truck->area_6 }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection