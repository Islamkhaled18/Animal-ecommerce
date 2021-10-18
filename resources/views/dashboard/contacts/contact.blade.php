@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">{{ trans('dashboard.messages') }} </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                            
                                <li class="breadcrumb-item active"> {{ trans('dashboard.messages') }}
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
                                                <th>@lang('dashboard.sender_name')</th>
                                                <th>@lang('dashboard.sender_email')</th>
                                                <th>@lang('dashboard.sender_phone')</th>
                                                <th>@lang('site.sender_message')</th>
                                                <th>@lang('site.view')</th>
                                                <th>@lang('site.action')</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach( $contacts as $index=>$contact )
                                                <tr>
                                                    <th>{{ $loop ->iteration }}</th>
                                                    <th>{{ $contact->sender_name }}</th>
                                                    <th>{{ $contact->sender_email }}</th>
                                                    <th>{{ $contact->sender_phone }}</th>
                                                    <th>{{ $contact->sender_message }}</th>
                                                    <th>
                                                        @if($contact->view == 1)
                                                            <button disabled class="btn btn-default">{{ trans('dashboard.read') }}</button>
                                                        @elseif($contact->view == 0)
                                                            <button disabled class="btn btn-danger">{{ trans('dashboard.unread') }}</button>
                                                        @endif
                                                    </th>
                                                    <th>
            
                                                        <div class="btn-group" role="group"
                                                                aria-label="Basic example">
                                                            <a href="{{route('messages' ,$contact->id)}}"
                                                            class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">{{ trans('dashboard.edit') }}</a>


                                                            {{-- <a href="{{route('admin.contacts.delete',$contact->id)}}"
                                                            class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">{{ trans('dashboard.delete') }}</a> --}}
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