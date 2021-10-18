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
                            
                            <li class="breadcrumb-item active">{{ trans('dashboard.about_us') }}
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
                                          action="{{route('about_us.update')}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i>{{ trans('dashboard.about_us') }}</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.main_title_ar') }}
                                                             </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{$about_us->getTranslation('main_title','ar')}}"
                                                               name="main_title_ar">
                                                        @error("main_title_ar")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.main_title_en') }}
                                                             </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{$about_us->getTranslation('main_title','en')}}"
                                                               name="main_title_en">
                                                        @error("main_title_en")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.main_text_ar') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               
                                                               value="{{$about_us->getTranslation('main_text','ar')}}"

                                                               name="main_text_ar">
                                                        @error("main_text_ar")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.main_text_en') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               
                                                               value="{{$about_us->getTranslation('main_text','en')}}"
                                                               name="main_text_en">
                                                        @error("main_text_en")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>



                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.sub_title_ar') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               
                                                               value="{{$about_us->getTranslation('sub_title','ar')}}"
                                                               name="sub_title_ar">
                                                        @error("sub_title_ar")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.sub_title_en') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{$about_us->getTranslation('sub_title','en')}}"
                                                               name="sub_title_en">
                                                        @error("sub_title_en")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.sub_text_ar') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{$about_us->getTranslation('sub_text','ar')}}"
                                                               name="sub_text_ar">
                                                        @error("sub_text_ar")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.sub_text_en') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{$about_us->getTranslation('sub_text','en')}}"
                                                               name="sub_text_en">
                                                        @error("sub_text_en")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>{{ trans('dashboard.main_photo') }}</label>

                                                    <input type="file" name="main_photo" value="{{$main_photo}}" class="form-control image">

                                                     @error('main_photo')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>{{ trans('dashboard.sub_photo') }}</label>
                                                    <input type="file" name="sub_photo" value="{{$sub_photo}}" class="form-control image">
                                                    @error('sub_photo')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Youtube
                                                        </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{$about_us->youtube}}"
                                                               name="youtube">
                                                        @error("youtube")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
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

