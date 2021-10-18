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
                            <li class="breadcrumb-item"><a href="{{route('admin.blogs')}}">{{ trans('dashboard.blogs') }}</a>
                            </li>
                            <li class="breadcrumb-item active">{{ trans('dashboard.add_new_blog') }}
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
                                <h4 class="card-title" id="basic-layout-form">{{ trans('dashboard.add_new_blog') }}</h4>
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
                                          action="{{route('admin.blogs.store')}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf

                                        

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i>{{ trans('dashboard.add_new_blog') }}</h4>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.blog_title_ar') }}
                                                             </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('blog_title_ar')}}"
                                                               name="blog_title_ar">
                                                        @error("blog_title_ar")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.blog_title_en') }}
                                                             </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('blog_title_en')}}"
                                                               name="blog_title_en">
                                                        @error("blog_title_en")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.short_description_ar') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('short_description_ar')}}"
                                                               name="short_description_ar">
                                                        @error("short_description_ar")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.short_description_en') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('short_description_en')}}"
                                                               name="short_description_en">
                                                        @error("short_description_en")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.long_description_ar') }}
                                                        </label>
                                                        <textarea type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('long_description_ar')}}"
                                                               name="long_description_ar"></textarea>
                                                        @error("long_description_ar")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.long_description_en') }}
                                                        </label>
                                                        <textarea type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('long_description_en')}}"
                                                               name="long_description_en"></textarea>
                                                        @error("long_description_en")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.blog_video') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('blog_video')}}"
                                                               name="blog_video">
                                                        @error("blog_video")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>{{ trans('dashboard.blog_photo') }}</label>

                                                    <input type="file" name="blog_photo" class="form-control image">

                                                     @error('blog_photo')
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

@section('script')

<script>
    $('input:radio[name="type"]').change(
        function(){
            if (this.checked && this.value == '2') {  // 1 if main cat - 2 if related cat
                $('#cats_list').removeClass('hidden');
            }else{
                $('#cats_list').addClass('hidden');
            }
        });
</script>

@stop