@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Trucks') }}
                        <a href="{{ route('trucks.create') }}" class="btn btn-info float-end">Create</a>
                    </div>

                    <div class="card-body">
                        <style>
                            .container {
  padding: 2rem 0rem;
}

h4 {
  margin: 2rem 0rem 1rem;
}

.table-image {
  td, th {
    vertical-align: middle;
  }
}
                        </style>
                        <div class="table-responsive">
                            <table class="table table-image">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trucks as $truck)
                                        <tr>
                                            <th>1</th>
                                            <td>{{ $truck->name }}</td>
                                            <td style="width:150px"><img src="{{ Storage::url($truck->image_path) }}"
                                                    class="img-fluid img-thumbnail"></td>
                                            <td style="" class="">
                                                <a href="{{ route('trucks.show', [$truck]) }}"
                                                    class="btn btn-secondary m-2">
                                                    View
                                                </a>
                                                <a href="{{ route('trucks.edit', $truck) }}" class="btn btn-warning m-2">
                                                    Edit
                                                </a>
                                                <form method="post" action="{{ route('trucks.destroy', $truck) }}"
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
