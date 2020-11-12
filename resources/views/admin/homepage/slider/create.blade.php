@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.homepagecontent.slider.title_singular') }}
    </div>

    <div class="card-body">
        <form 
            action="{{ route('admin.slider.store') }}" 
            method="POST" 
            enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="slider-main-image-preview">Slider Image Preview</label>
                <img 
                    id="slider-main-image-preview" 
                    class="d-block border-0 mt-1"  
                    style="height:100px; width:100px;" 
                    src="{{ asset('images/demo.jpg') }}"
                >
            </div>


            <div class="form-group">
                <label for="sliderBackgroundImageId">Upload Slider Image: </label>
                <input 
                    type="file" 
                    name="sliderMainImage" 
                    id="sliderBackgroundImageId" 
                    class="form-control"
                    accept="image/jpeg, image/png"
                    onchange="document.getElementById('slider-main-image-preview').src = window.URL.createObjectURL(this.files[0])"
                >
            </div>

            <div class="form-group">
                <label for="slider-text-image-preview">Slider Text Image</label>
                <img 
                    id="slider-text-image-preview" 
                    class="d-block border-0 mt-1"  
                    style="height:100px; width:100px;" 
                    src="{{ asset('images/demo.jpg') }}"
                >
            </div>

            <div class="form-group">
                <label for="sliderFrontImageId">Upload Slider Text Image: </label>
                <input 
                    type="file" 
                    name="sliderFrontImage" 
                    id="sliderFrontImageId" 
                    accept="image/jpeg, image/png"
                    class="form-control"
                    onchange="document.getElementById('slider-text-image-preview').src = window.URL.createObjectURL(this.files[0])"
                >
            </div>

            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.homepagecontent.slider.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($slider) ? $slider->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.homeslider.fields.name_helper') }}
                </p>
            </div>


            <div class="form-group {{ $errors->has('button_text') ? 'has-error' : '' }}">
                <label for="button_text">{{ trans('cruds.homepagecontent.slider.fields.button_text') }}*</label>
                <input type="text" id="button_text" name="button_text" class="form-control" value="{{ old('button_text', isset($slider) ? $slider->button_text : '') }}" required>
                @if($errors->has('button_text'))
                    <em class="invalid-feedback">
                        {{ $errors->first('button_text') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.homeslider.fields.button_text_helper') }}
                </p>
            </div>


            <div class="form-group {{ $errors->has('button_link') ? 'has-error' : '' }}">
                <label for="button_link">{{ trans('cruds.homepagecontent.slider.fields.button_link') }}</label>
                <input type="text" id="button_link" name="button_link" class="form-control" required>
                @if($errors->has('button_link'))
                    <em class="invalid-feedback">
                        {{ $errors->first('button_link') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.homeslider.fields.button_link_helper') }}
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
    function HandleBrowseClick(input_image)
    {
        var fileinput = document.getElementById(input_image);
        fileinput.click();
    }     
</script>
@endsection