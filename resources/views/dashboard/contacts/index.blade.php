@extends('layouts.admin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">{{ trans('dashboard.dashboard') }} </a>
                            </li>
                            
                            <li class="breadcrumb-item active">{{ trans('dashboard.contact') }}
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="heading-elements-toggle"><i
                                        class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            @include('dashboard.includes.alerts.success')
                            @include('dashboard.includes.alerts.errors')
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form"
                                          action="{{route('contact.update')}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i>{{ trans('dashboard.contact') }}</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.address_ar') }}
                                                             </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{$contact->getTranslation('address','ar')}}"
                                                               name="address_ar">
                                                        @error("address_ar")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.address_en') }}
                                                             </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{$contact->getTranslation('address','en')}}"
                                                               name="address_en">
                                                        @error("address_en")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.phone_one') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{$contact->phone_one}}"
                                                               name="phone_one">
                                                        @error("phone_one")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.phone_two') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               
                                                               value="{{$contact->phone_two}}"
                                                               name="phone_two">
                                                        @error("phone_two")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.email_one') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               
                                                               value="{{$contact->email_one}}"
                                                               name="email_one">
                                                        @error("email_one")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.email_two') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               
                                                               value="{{$contact->email_two}}"
                                                               name="email_two">
                                                        @error("email_two")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.map') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               
                                                               value="{{$contact->map}}"
                                                               name="map">
                                                        @error("map")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>{{ trans('dashboard.photo') }}</label>
                                                    <label id="projectinput7" class="file center-block">
                                                        <input type="file" id="file" name="photo"
                                                        value="{{$contact->photo}}">
                                                        <span class="file-custom"></span>
                                                        
                                                    </label>
                                                    @error('photo')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>                                                

                                            </div>
                                        </div>


                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning mr-1"
                                                    onclick="history.back();">
                                                <i class="ft-x"></i> {{ trans('dashboard.back') }}
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> {{ trans('dashboard.update') }}
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>
@stop

