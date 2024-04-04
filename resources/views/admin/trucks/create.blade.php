@extends('home')

@section('content-1')
    <div class="content">
        <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">
                                Trucks
                                <a href="{{route('trucks.index')}}" class="btn btn-info float-right">Back</a>
                            </h3>

                        </div>      
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Create</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" class="m-auto">
                            <div class="box-body">
                                @include('admin.trucks.form')
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div><!-- /.box -->



                </div>
            
        </div>
    </div>
@endsection
