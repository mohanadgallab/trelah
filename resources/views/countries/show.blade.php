@extends('layouts.app')
<style>
    /* Profile */
.avatar-xxl {
  height: 7rem;
  width: 7rem;
}

.card {
  margin-bottom: 20px;
  -webkit-box-shadow: 0 2px 3px #eaedf2;
  box-shadow: 0 2px 3px #eaedf2;
}

.pb-0 {
  padding-bottom: 0!important;
}

.font-size-16 {
  font-size: 16px!important;
}
.avatar-title {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  background-color: #038edc;
  color: #fff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  font-weight: 500;
  height: 100%;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 100%;
}

.bg-soft-primary {
  background-color: rgba(3,142,220,.15)!important;
}
.rounded-circle {
  border-radius: 50%!important;
}

.nav-tabs-custom .nav-item .nav-link.active {
  color: #038edc;
}
.nav-tabs-custom .nav-item .nav-link {
  border: none;
}
.nav-tabs-custom .nav-item .nav-link.active {
  color: #038edc;
}

.avatar-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding-left: 12px;
}

.border-end {
  border-right: 1px solid #eff0f2 !important;
}

.d-inline-block {
  display: inline-block!important;
}

.badge-soft-danger {
  color: #f34e4e;
  background-color: rgba(243,78,78,.1);
}

.badge-soft-warning {
  color: #f7cc53;
  background-color: rgba(247,204,83,.1);
}

.badge-soft-success {
  color: #51d28c;
  background-color: rgba(81,210,140,.1);
}

.avatar-group .avatar-group-item {
  margin-left: -14px;
  border: 2px solid #fff;
  border-radius: 50%;
  -webkit-transition: all .2s;
  transition: all .2s;
}

.avatar-sm {
  height: 2rem;
  width: 2rem;
}

.nav-tabs-custom .nav-item {
  position: relative;
  color: #343a40;
}

.nav-tabs-custom .nav-item .nav-link.active:after {
  -webkit-transform: scale(1);
  transform: scale(1);
}

.nav-tabs-custom .nav-item .nav-link::after {
  content: "";
  background: #038edc;
  height: 2px;
  position: absolute;
  width: 100%;
  left: 0;
  bottom: -2px;
  -webkit-transition: all 250ms ease 0s;
  transition: all 250ms ease 0s;
  -webkit-transform: scale(0);
  transform: scale(0);
}

.badge-soft-secondary {
  color: #74788d;
  background-color: rgba(116,120,141,.1);
}

.badge-soft-secondary {
  color: #74788d;
}

.work-activity {
  position: relative;
  color: #74788d;
  padding-left: 5.5rem
}

.work-activity::before {
  content: "";
  position: absolute;
  height: 100%;
  top: 0;
  left: 66px;
  border-left: 1px solid rgba(3,142,220,.25)
}

.work-activity .work-item {
  position: relative;
  border-bottom: 2px dashed #eff0f2;
  margin-bottom: 14px
}

.work-activity .work-item:last-of-type {
  padding-bottom: 0;
  margin-bottom: 0;
  border: none
}

.work-activity .work-item::after,.work-activity .work-item::before {
  position: absolute;
  display: block
}

.work-activity .work-item::before {
  content: attr(data-date);
  left: -157px;
  top: -3px;
  text-align: right;
  font-weight: 500;
  color: #74788d;
  font-size: 12px;
  min-width: 120px
}

.work-activity .work-item::after {
  content: "";
  width: 10px;
  height: 10px;
  border-radius: 50%;
  left: -26px;
  top: 3px;
  background-color: #fff;
  border: 2px solid #038edc
}
</style>
@section('content')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css" integrity="sha512-LX0YV/MWBEn2dwXCYgQHrpa9HJkwB+S+bnBpifSOTO1No27TqNMKYoAn6ff2FBh03THAzAiiCwQ+aPX+/Qt/Ow==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
<div class="container">
<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body pb-0">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="text-center border-end">
                            <img src="{{ Storage::url($country->image_path)}}" class="img-fluid avatar-xxl rounded-circle" alt="">
                            <h4 class="text-primary font-size-20 mt-3 mb-2">{{ $country->name}}</h4>
                            {{-- <h5 class="text-muted font-size-13 mb-0">Web Designer</h5> --}}
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-9">
                        <div class="ms-3">
                            <div>
                                <h4 class="card-title mb-2">{{ $country->name}}</h4>
                                <p class="mb-0 text-muted">{{ $country->content}}</p>
                            </div>
                            <div class="row my-4">
                                <div class="col-md-12">
                                    <div>
                                        <p class="text-muted mb-2 fw-medium"><i class="mdi mdi-email-outline me-2"></i>{{ $country->created_at }}
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

        <div class="card">
            <div class="tab-content p-4">
                

                

                <div class="tab-pane active show" id="team-tab" role="tabpanel">
                    <h4 class="card-title mb-4">Team</h4>
                    <div class="row">
                        @foreach ($country->services as $service )
                        <div class="col-xl-4 col-md-6" id="team-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex mb-4">
                                        <div class="flex-grow-1 align-items-start">
                                            <img src="{{ Storage::url($service->image_path)}}" alt="" class="rounded-circle avatar-sm">
                                        </div>
                                        <div class="dropdown ms-2">
                                            <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript: void(0);">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger leave-team" data-id="3" data-bs-toggle="modal" data-bs-target=".bs-add-leave-team" href="javascript: void(0);">Leave
                                                    Team</a>
                                            </div>
                                        </div><!-- end dropdown -->
                                    </div>
                                    <div>
                                        <h5 class="mb-1 font-size-17">{{ $service->name}}</h5>
                                        <p class="text-muted  font-size-13 mb-0">{{ $service->desc}}</p>
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