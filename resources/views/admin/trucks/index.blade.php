@extends('home')

@section('content-1')

<div class="content">
    <div class="row">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            Trucks
                            <a href="{{route('trucks.create')}}" class="btn btn-info float-right">Create</a>
                        </h3>
                        
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>Lang</th>
                                <th>Length</th>
                                <th>Width</th>
                                <th>Weight</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($trucks as $truck)
                                <tr>
                                    <td>{{$truck->id}}</td>
                                    <td>{{$truck->name}}</td>
                                    <td>{{$truck->lang}}</td>
                                    <td>{{$truck->long}}</td>
                                    <td>{{$truck->width}}</td>
                                    <td>{{$truck->weight}}</td>
                                    <td>
                                        <a href="{{ route('trucks.edit', $truck)}}" class="btn btn-warning mr-1">Edit</a>
                                        <form method="post" action="{{ route('trucks.destroy', $truck) }}"
                                                    style="display:inline-block">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-sm btn-danger m-3">DELETE</button>
                                                </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $trucks->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </div>
</div>
@endsection