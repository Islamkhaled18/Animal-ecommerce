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
                            <li class="breadcrumb-item"><a href="{{route('admin.categories')}}">{{ trans('dashboard.categories') }}</a>
                            </li>
                            <li class="breadcrumb-item active">{{ trans('dashboard.add_new_category') }}
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
                                <h4 class="card-title" id="basic-layout-form">{{ trans('dashboard.add_new_category') }}</h4>
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
                                          action="{{route('admin.categories.store')}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf

                                        

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i>{{ trans('dashboard.category_detlais') }}</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.category_name_ar') }}
                                                             </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('category_name_ar')}}"
                                                               name="category_name_ar">
                                                        @error("category_name_ar")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.category_name_en') }}
                                                             </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('category_name_en')}}"
                                                               name="category_name_en">
                                                        @error("category_name_en")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.slug_ar') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('slug_ar')}}"
                                                               name="slug_ar">
                                                        @error("slug_ar")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ trans('dashboard.slug_en') }}
                                                        </label>
                                                        <input type="text" id="name"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('slug_en')}}"
                                                               name="slug_en">
                                                        @error("slug_en")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>



                                                <div class="row hidden" id="cats_list">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput1">
                                                                {{trans('dashboard.related_categories')}}
                                                            </label>
                                                            <select name="parent_id" class="select2 form-group">
                                                                <optgroup label="{{trans('dashboard.choose_category')}}">
                                                                     @if($categories && $categories -> count() > 0)
                                                                        @foreach ($categories as $category)
                                                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                                        @endforeach
                                                                    @endif 
                                                                   
                                                                </optgroup>
                                                            </select>
                                                            @error('parent_id')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            
                                                <div class="col-md-3">
                                                    <div class="form-group mt-1">
                                                        <input
                                                            type="radio"
                                                            name="type"
                                                            value="1"
                                                            class="switchery"
                                                            data-color="success"
                                                        />
                                                        <label class="card-title ml-1">{{ trans('dashboard.main_category') }}</label>

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group mt-1">
                                                        <input
                                                            type="radio"
                                                            name="type"
                                                            value="2"
                                                            class="switchery"
                                                            data-color="success"
                                                        />
                                                        <label class="card-title ml-1">{{ trans('dashboard.related_category') }}</label>

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