@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">{{ trans('dashboard.replies') }} </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                            
                                <li class="breadcrumb-item active"> {{ trans('dashboard.replies') }}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
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
                            
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered scroll-horizontal">
                                            <thead class="">
                                            <tr>
                                                <th>#</th>
                                                <th>@lang('dashboard.replier_name')</th>
                                                <th>@lang('dashboard.replier_email')</th>
                                                <th>@lang('dashboard.replier_phone')</th>
                                                <th>@lang('dashboard.replier_comment')</th>
                                                <th>@lang('dashboard.comment')</th>
                                                <th>@lang('dashboard.actions')</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach( $replies as $reply )
                                                <tr>
                                                    <th>{{ $loop ->iteration }}</th>
                                                    <th>{{ $reply->replier_name }}</th>
                                                    <th>{{ $reply->replier_email }}</th>
                                                    <th>{{ $reply->replier_phone }}</th>
                                                    <th>{{ $reply->replier_comment }}</th>
                                                    <th>{{ $reply->comment->user_comment }}</th>
                                                    <th>
                                                        <div class="btn-group" role="group"
                                                                aria-label="Basic example">

                                                            <a href="{{route('admin.replies.delete',$reply->id)}}"
                                                            class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">{{ trans('dashboard.delete') }}</a>
                                                        </div>
                                                    </th>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@stop