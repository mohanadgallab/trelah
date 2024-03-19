@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Services
                    <a href="{{ route('services.create')}}" class="btn btn-info float-end">Add New</a>
                </div>
        
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-image">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Type</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <th>1</th>
                                    <td>{{ $service->name }}</td>
                                    <td style="width:100px">{{ substr($service->desc,0,100) }}</td>
                                    <td style="width:100px">{{ $service->type }}</td>
                                    <td style="width:150px"><img src="{{ asset('services/'.$service->image_path) }}"
                                            class="img-fluid img-thumbnail"></td>
                                    <td style="" class="">
                                        <a href="{{ route('services.show', [$service]) }}"
                                            class="btn btn-secondary m-2">
                                            View
                                        </a>
                                        <a href="{{ route('services.edit', $service) }}" class="btn btn-warning m-2">
                                            Edit
                                        </a>
                                        <form method="post" action="{{ route('services.destroy', $service) }}"
                                            style="display:inline-block">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-danger m-3">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection