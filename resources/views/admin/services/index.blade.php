@extends('home')

@section('content-1')

<div class="content">
    <div class="row">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            Countries
                            <a href="{{route('services.create')}}" class="btn btn-info float-right">Create</a>
                        </h3>
                        
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>Lang</th>
                                <th>Subtitle</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($services as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->lang}}</td>
                                    <td>{{$item->subtitle}}</td>
                                    <td><img src="{{ asset('services/'.$item->image_path )}}" alt="" class="img-fluid" style="width: 100px"></td>
                                    <td>{{ substr($item->desc,0,50)}}</td>
                                    <td>
                                        <a href="{{ route('services.show', [$item])}}" class="btn btn-secondary mr-1">Show</a>
                                        <a href="{{ route('services.edit', $item)}}" class="btn btn-warning mr-1">Edit</a>
                                        <form method="post" action="{{ route('services.destroy', $item) }}"
                                                    style="display:inline-block">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-sm btn-danger m-3">DELETE</button>
                                                </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $services->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </div>
</div>
@endsection