@extends('layouts.app')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ trans('dashboard.dashboard') }} </a>
                            </li>
                        
                            <li class="breadcrumb-item active"> {{ trans('dashboard.edit_user_profile') }}
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
                                <h4 class="card-title" id="basic-layout-form"> {{ trans('dashboard.edit_user_profile') }}</h4>
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
                                        action="{{route('site.profile.user.update')}}"
                                        method="POST"
                                        enctype="multipart/form-data">

                                        @csrf

                                        <input name="id" value="{{$user -> id}}" type="hidden">
                                        


                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i> {{ trans('front.edit_user_profile') }}   </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> {{ trans('front.phone') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                            class="form-control"
                                                            placeholder="  "
                                                            value="{{ $user->mobile }}"
                                                            name="mobile">
                                                        @error("mobile")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> {{ trans('front.password') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                            class="form-control"
                                                            placeholder="*********************"
                                                            value=""
                                                            name="password">
                                                        @error("password")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> {{ trans('front.name') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                            class="form-control"
                                                            placeholder="  "
                                                            value="{{ $profile->user_name }}"
                                                            name="user_name">
                                                        @error("user_name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> {{ trans('front.email') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                            class="form-control"
                                                            placeholder="  "
                                                            value="{{ $profile->user_email }}"
                                                            name="user_email">
                                                        @error("user_email")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('front.photo') }}
                                                        </label>
                                                        <input type="file" name="user_photo" value="{{ $profile->user_photo }}" class="form-control image">
                                                        @error("user_photo")
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
                                                <i class="la la-check-square-o"></i> {{ trans('dashboard.edit') }}
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
