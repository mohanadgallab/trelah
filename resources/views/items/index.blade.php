@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    About
                    <a href="{{ route('items.create')}}" class="btn btn-info float-end">Create</a>
                </div>
        
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-image">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">icon</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items  as $item)
                                <tr>
                                    <th>1</th>
                                    <td>{{ $item->title }}</td>
                                    <td style="width:100px; height: 50px">{{ substr($item->desc,0,50) }}</td>
                                    <td style="width:150px"><img src="{{ asset('items/'.$item->image_path) }}"
                                            class="img-fluid img-thumbnail"></td>
                                    <td style="" class="">
                                        <a href="{{ route('countries.show', [$item]) }}"
                                            class="btn btn-secondary m-2">
                                            View
                                        </a>
                                        <a href="{{ route('items.edit', $item) }}" class="btn btn-warning m-2">
                                            Edit
                                        </a>
                                        <form method="post" action="{{ route('items.destroy', $item) }}"
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