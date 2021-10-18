@extends('layouts.admin')

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
                                <li class="breadcrumb-item"><a href="{{route('admin.coupons')}}"> {{ trans('dashboard.coupons') }} </a>
                                </li>
                                <li class="breadcrumb-item active"> {{ trans('dashboard.add_new_coupon') }}
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
                                    <h4 class="card-title" id="basic-layout-form"> {{ trans('dashboard.coupons') }} </h4>
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
                                            action="{{route('admin.coupons.store')}}"
                                            method="POST"
                                            enctype="multipart/form-data">
                                            @csrf



                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i> {{ trans('dashboard.add_new_coupon') }} </h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> {{ trans('dashboard.coupon_code') }}
                                                                </label>
                                                            <input type="text" id="coupon_code"
                                                                class="form-control"
                                                                placeholder="  "
                                                                value="{{old('coupon_code')}}"
                                                                name="coupon_code">
                                                            @error("coupon_code")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="projectinput1"> {{ trans('dashboard.coupon_value') }}
                                                                </label>
                                                            <input type="text" id="coupon_value"
                                                                class="form-control"
                                                                placeholder="  "
                                                                value="{{old('coupon_value')}}"
                                                                name="coupon_value">
                                                            @error("coupon_value")
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
                                                    <i class="la la-check-square-o"></i> {{ trans('dashboard.save') }}
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