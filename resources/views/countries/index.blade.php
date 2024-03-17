@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Countries') }}
                    <a href="{{ route('countries.create')}}" class="btn btn-info float-end">Create</a>
                </div>
        
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-image">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Content</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($countries as $country)
                                <tr>
                                    <th>1</th>
                                    <td>{{ $country->name }}</td>
                                    <td style="width:100px; height: 50px">{{ substr($country->content,0,50) }}</td>
                                    <td style="width:150px"><img src="{{ Storage::url($country->image_path) }}"
                                            class="img-fluid img-thumbnail"></td>
                                    <td style="" class="">
                                        <a href="{{ route('countries.show', [$country]) }}"
                                            class="btn btn-secondary m-2">
                                            View
                                        </a>
                                        <a href="{{ route('countries.edit', $country) }}" class="btn btn-warning m-2">
                                            Edit
                                        </a>
                                        <form method="post" action="{{ route('countries.destroy', $country) }}"
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