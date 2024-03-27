@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Services
                    <a href="{{ route('others.create')}}" class="btn btn-info float-end">Add New</a>
                </div>
        
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-image">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($others as $other)
                                <tr>
                                    <th>1</th>
                                    <td>{{ $other->title }}</td>
                                    <td style="width:100px">{{ substr($other->desc,0,100) }}</td>
                                    <td style="" class="">
                                        <a href="{{ route('others.show', [$other]) }}"
                                            class="btn btn-secondary m-2">
                                            View
                                        </a>
                                        <a href="{{ route('others.edit', $other) }}" class="btn btn-warning m-2">
                                            Edit
                                        </a>
                                        <form method="post" action="{{ route('others.destroy', $other) }}"
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