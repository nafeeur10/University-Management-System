@extends('layouts.admin')
@section('content')

@if (\Session::has('error'))
    <div class="alert alert-danger">
        {!! \Session::get('error') !!}
    </div>
@endif

@if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
    </div>
@endif


<div class="card">
    <div class="card-header">
        {{ trans('global.update') }} {{ trans('cruds.latest_news.title') }}
    </div>

    <div class="card-body">
        <form 
            action="{{ route('admin.latest_news.update', [$news->id]) }}" 
            method="POST" 
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="latest-news-image-preview">{{ trans('global.upload') }} {{ trans('cruds.latest_news.fields.images') }}</label>
                <div class="input-images"></div>
            </div>

            <input type="hidden" id="news_id" value="{{ $news->id }}">
            
            <!-- Hompage Title for Every Latest News -->
            <div class="form-group {{ $errors->has('news_home_title') ? 'has-error' : '' }}">
                <label for="news_home_title">{{ trans('cruds.latest_news.fields.news_home_title') }}*</label>
                <input type="text" id="news_home_title" name="news_home_title" class="form-control" value="{{ old('news_home_title', isset($news) ? $news->news_home_title : '') }}" required>
                @if($errors->has('news_home_title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('news_home_title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.latest_news.fields.news_home_title_helper') }}
                </p>
            </div>

            <!-- Hompage Title in Arabic for Every Latest News -->
            <div class="form-group {{ $errors->has('news_home_title_arabic') ? 'has-error' : '' }}">
                <label for="news_home_title_arabic">{{ trans('cruds.latest_news.fields.news_home_title_arabic') }}*</label>
                <input 
                    type="text" 
                    id="news_home_title_arabic" 
                    name="news_home_title_arabic" 
                    class="form-control text-right"
                    dir="rtl" 
                    value="{{ old('news_home_title_arabic', isset($news) ? $news->news_home_title_arabic : '') }}" 
                    required
                >
                @if($errors->has('news_home_title_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('news_home_title_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.latest_news.fields.news_home_title_arabic_helper') }}
                </p>
            </div>


            <!-- Latest News Description for Homepage -->
            <div class="form-group {{ $errors->has('news_home_description') ? 'has-error' : '' }}">
                <label for="news_home_description">{{ trans('cruds.latest_news.fields.news_home_description') }}*</label>
                <textarea 
                    type="text" 
                    rows="5"
                    id="news_home_description" 
                    name="news_home_description" 
                    class="form-control"  
                    required
                >{{ old('news_home_description', isset($news) ? $news->news_home_description : '') }}</textarea>
                @if($errors->has('news_home_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('news_home_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.latest_news.fields.news_home_description_helper') }}
                </p>
            </div>


            <!-- Latest News Description for Homepage in Arabic -->
            <div class="form-group {{ $errors->has('news_home_description_arabic') ? 'has-error' : '' }}">
                <label for="news_home_description_arabic">{{ trans('cruds.latest_news.fields.news_home_description_arabic') }}*</label>
                <textarea
                    type="text" 
                    rows="5"
                    id="news_home_description_arabic" 
                    name="news_home_description_arabic" 
                    class="form-control text-right"
                    dir="rtl" 
                    required
                >{{ old('news_home_description_arabic', isset($news) ? $news->news_home_description_arabic : '') }}</textarea>
                @if($errors->has('news_home_description_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('news_home_description_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.latest_news.fields.news_home_description_arabic_helper') }}
                </p>
            </div>


            <!-- Single Latest News Title for Every Latest News -->
            <div class="form-group {{ $errors->has('news_single_title') ? 'has-error' : '' }}">
                <label for="news_single_title">{{ trans('cruds.latest_news.fields.news_single_title') }}*</label>
                <input type="text" id="news_single_title" name="news_single_title" class="form-control" value="{{ old('news_single_title', isset($news) ? $news->news_single_title : '') }}" required>
                @if($errors->has('news_single_title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('news_single_title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.latest_news.fields.news_single_title_helper') }}
                </p>
            </div>

            <!-- Single Latest News Title in Arabic for Every Latest News -->
            <div class="form-group {{ $errors->has('news_single_title_arabic') ? 'has-error' : '' }}">
                <label for="news_single_title_arabic">{{ trans('cruds.latest_news.fields.news_single_title_arabic') }}*</label>
                <input 
                    type="text" 
                    id="news_single_title_arabic" 
                    name="news_single_title_arabic" 
                    class="form-control text-right"
                    dir="rtl" 
                    value="{{ old('news_single_title_arabic', isset($news) ? $news->news_single_title_arabic : '') }}" 
                    required
                >
                @if($errors->has('news_single_title_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('news_single_title_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.latest_news.fields.news_single_title_arabic_helper') }}
                </p>
            </div>


            <!-- Latest News Description -->
            <div class="form-group {{ $errors->has('news_description') ? 'has-error' : '' }}">
                <label for="news_description">{{ trans('cruds.latest_news.fields.news_description') }}*</label>
                <textarea 
                    type="text" 
                    rows="5"
                    id="news_description" 
                    name="news_description" 
                    class="form-control"  
                    required
                >{{ old('news_description', isset($news) ? $news->news_description : '') }}</textarea>
                @if($errors->has('news_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('news_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.latest_news.fields.news_description_helper') }}
                </p>
            </div>


            <!-- Latest News Description in Arabic -->
            <div class="form-group {{ $errors->has('news_description_arabic') ? 'has-error' : '' }}">
                <label for="news_description_arabic">{{ trans('cruds.latest_news.fields.news_description_arabic') }}*</label>
                <textarea
                    type="text" 
                    rows="5"
                    id="news_description_arabic" 
                    name="news_description_arabic" 
                    class="form-control text-right"
                    dir="rtl" 
                    required
                >{{ old('news_description_arabic', isset($news) ? $news->news_description_arabic : '') }}</textarea>
                @if($errors->has('news_description_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('news_description_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.latest_news.fields.news_description_arabic_helper') }}
                </p>
            </div>

            <!-- Latest News Description besiders Slider -->
            <div class="form-group {{ $errors->has('news_slider_description') ? 'has-error' : '' }}">
                <label for="news_slider_description">{{ trans('cruds.latest_news.fields.news_slider_description') }}*</label>
                <textarea 
                    type="text" 
                    rows="5"
                    id="news_slider_description" 
                    name="news_slider_description" 
                    class="form-control"  
                    required
                >{{ old('news_slider_description', isset($news) ? $news->news_slider_description : '') }}</textarea>
                @if($errors->has('news_slider_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('news_slider_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.latest_news.fields.news_slider_description_helper') }}
                </p>
            </div>


            <!-- Latest News Description besiders Slider in Arabic -->
            <div class="form-group {{ $errors->has('news_slider_description_arabic') ? 'has-error' : '' }}">
                <label for="news_slider_description_arabic">{{ trans('cruds.latest_news.fields.news_slider_description_arabic') }}*</label>
                <textarea
                    type="text" 
                    rows="5"
                    id="news_slider_description_arabic" 
                    name="news_slider_description_arabic" 
                    class="form-control text-right"
                    dir="rtl" 
                    required
                >{{ old('news_slider_description_arabic', isset($news) ? $news->news_slider_description_arabic : '') }}</textarea>
                @if($errors->has('news_slider_description_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('news_slider_description_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.latest_news.fields.news_slider_description_arabic_helper') }}
                </p>
            </div>


            <div class="form-group {{ $errors->has('news_date') ? 'has-error' : '' }}">
                <label for="news_date">{{ trans('cruds.latest_news.fields.news_date') }}</label>
                <input 
                    type="date" 
                    id="news_date" 
                    name="news_date" 
                    class="form-control" 
                    required 
                    value="{{ old('news_date', isset($news) ? $news->news_date : '') }}"
                >
                @if($errors->has('news_date'))
                    <em class="invalid-feedback">
                        {{ $errors->first('news_date') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.latest_news.fields.news_date_helper') }}
                </p>
            </div> 


            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
@parent
<script type="text/javascript">
    let preloaded = [];

    let id = $("#news_id").val();

    $.ajax({
        url: '/admin/news/images/' + id,
        type: 'GET',
        success: function(res) {
            preloaded = res.images;
            let previousImages = [];

            for(let i = 0; i < preloaded.length; i++) 
            {
                let obj = {
                    id: preloaded[i].id,
                    event_id: preloaded[i].latest_news_id,
                    src: '/images/news/' + preloaded[i].latest_news_image
                };
                previousImages.push(obj);
            }


            $('.input-images').imageUploader({
                preloaded: previousImages,
                imagesInputName: 'latestNewsImages',
                preloadedInputName: 'old',
                label: 'Drag & Drop files here or click to browse'
            }); 
        }, 
        error: function(err) {
            console.log("Error: ", err);
        }
    });


    $(".delete-image").on('click', function(){
        console.log("Delete: ", $(this).parent());
    });
</script>
@endsection