@extends('layouts.app')
</style>
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('items.index')}}" class="btn btn-info float-right mb-3">Back</a>
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body pb-0">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="text-center border-end">
                            <img src="{{ asset('items/'.$item->image_path)}}" class="img-fluid avatar-xxl rounded-circle" alt="">
                            <h4 class="text-primary font-size-20 mt-3 mb-2">{{ $item->name}}</h4>
                            {{-- <h5 class="text-muted font-size-13 mb-0">Web Designer</h5> --}}
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-9">
                        <div class="ms-3">
                            <div>
                                <h4 class="card-title mb-2">{{ $item->name}}</h4><br/>
                                <p class="mb-0 text-muted">{{ $item->desc}}</p>
                            </div>
                            <div class="row my-4">
                                <div class="col-md-12">
                                    <div>
                                        <p class="text-muted mb-2 fw-medium"><i class="mdi mdi-email-outline me-2"></i>{{ $item->created_at }}
                                        </p>
                                        <p class="text-muted fw-medium mb-0"><i class="mdi mdi-phone-in-talk-outline me-2"></i>418-955-4703
                                        </p>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end card body -->
        </div><!-- end card -->
        <a href="{{ route('details.create', $item)}}" class="btn btn-warning mb-3">Create Details</a>
        <div class="card">
            <div class="tab-content p-4">
                

                

                <div class="tab-pane active show" id="team-tab" role="tabpanel">
                    <h4 class="card-title mb-4">Team</h4>
                    <div class="row">
                         @foreach ($item->details as $detail )
                        <div class="col-xl-4 col-md-6" id="team-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex mb-4">
                                       
                                        <div class="dropdown ms-2">
                                            <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <form class="dropdown-item" action="{{ route('details.delete',[$item ,$detail] )}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn inline" type="submit">Delete</button>
                                                </form>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger leave-team" data-id="3" data-bs-toggle="modal" data-bs-target=".bs-add-leave-team" href="javascript: void(0);">Leave
                                                    Team</a>
                                            </div>
                                        </div><!-- end dropdown -->
                                    </div>
                                    <div>
                                        <h5 class="mb-1 font-size-17">{{ $detail->main_title}}</h5>
                                        <p class="text-muted  font-size-13 mb-0">{{ $detail->paragraph}}</p>
                                    </div>
                                </div>
                                <!-- end card-body -->
                            </div><!-- end card -->
                            
                        </div> 
                        @endforeach
                        <!-- end col -->
                    </div><!-- end row -->
                </div><!-- end tab pane -->
            </div>
        </div><!-- end card -->
    </div><!-- end col -->

</div>
</div>
@endsection