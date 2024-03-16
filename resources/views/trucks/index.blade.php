@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Trucks') }}
                    <a href="{{ route('trucks.create')}}" class="btn btn-info float-end">Create</a>
                </div>
        
                <div class="card-body">
                    <table class="table">
                        <caption>List of users</caption>
                        <thead>
                          <tr>
                            <th >#</th>
                            <th  class="d-flex justify-content-center">Name</th>
                            <th  >Image</th>
                            <th  class="d-flex justify-content-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($trucks as $truck)
                          <tr >
                            <th scope="row">1</th>
                            <td class="text-center">{{$truck->name}}</td>
                            <td style="width: 100px; height: 80px"><img src="{{ Storage::url($truck->image_path)}}" class="img-fluid"></td>
                            <td style="" class="">
                              <a href="{{ route('trucks.show', [$truck] ) }}" class="btn btn-secondary m-2">
                                View
                              </a>
                              <a href="{{ route('trucks.edit', $truck) }}" class="btn btn-warning m-2" >
                                Edit
                              </a>
                              <form method="post" action="{{ route('trucks.destroy', $truck) }}" style="display:inline-block">
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
@endsection