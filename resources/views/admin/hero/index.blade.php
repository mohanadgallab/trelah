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
                            {{-- <a href="{{route('countries.create')}}" class="btn btn-info float-right">Create</a> --}}
                        </h3>
                        
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Span Title</th>
                                <th>Subtitle</th>
                                <th>Lang</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($hero as $message)
                                <tr>
                                    <td>{{$message->id}}</td>
                                    <td>{{$message->h1}}</td>
                                    <td>{{$message->spanh1}}</td>
                                    <td>{{ $message->h2 }}</td>
                                    <td>{{ $message->lang }}</td>
                                    <td>
                                        {{-- <a href="{{ route('messages.edit', $message)}}" class="btn btn-warning mr-1">Edit</a> --}}
                                        <form method="post" action="{{ route('admin.messages.delete', $message) }}"
                                                    style="display:inline-block">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-sm btn-danger m-3">DELETE</button>
                                                </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $hero->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </div>
</div>
@endsection