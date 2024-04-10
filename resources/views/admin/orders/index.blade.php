@extends('home')

@section('content-1')

<div class="content">
    <div class="row">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            Orders
                            <a href="{{route('trucks.create')}}" class="btn btn-info float-right">Create</a>
                        </h3>
                        
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>Mobile</th>
                                <th>Quantity</th>
                                <th>From</th>
                                <th>Destination</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($orders as $truck)
                                <tr>
                                    <td>{{$truck->id}}</td>
                                    <td>{{$truck->name}}</td>
                                    <td>{{$truck->mobile}}</td>
                                    <td>{{$truck->qty}}</td>
                                    <td>{{$truck->from_to}}</td>
                                    <td>{{$truck->to_to}}</td>
                                    <td>
                                        <a href="{{}}" class="btn btn-warning mr-1">Edit</a>
                                        <form method="post" action=" "
                                                    style="display:inline-block">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-sm btn-danger m-3">DELETE</button>
                                                </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $orders->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </div>
</div>
@endsection