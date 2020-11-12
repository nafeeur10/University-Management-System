@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.faculty.title') }}
    </div>

    <div class="card-body">
        <form 
            action="{{ route('admin.faculty.store') }}" 
            method="POST" 
            enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="faculty-image-preview">{{ trans('cruds.faculty.fields.home_faculty_image') }} {{ trans('cruds.global.preview') }}</label>
                <img 
                    id="faculty-image-preview" 
                    class="d-block border-0 mt-1"  
                    style="height:100px; width:100px;" 
                    src="{{ asset('images/demo.jpg') }}"
                >
            </div>


            <div class="form-group">
                <label for="home_faculty_image">{{ trans('global.upload') }} {{ trans('cruds.faculty.title') }}</label>
                <input 
                    type="file" 
                    name="home_faculty_image" 
                    id="home_faculty_image" 
                    class="form-control"
                    accept="image/jpeg, image/png"
                    onchange="document.getElementById('faculty-image-preview').src = window.URL.createObjectURL(this.files[0])"
                >
            </div>

            
            <div class="form-group {{ $errors->has('home_faculty_title') ? 'has-error' : '' }}">
                <label for="home_faculty_title">{{ trans('cruds.faculty.fields.home_faculty_title') }}*</label>
                <input type="text" id="home_faculty_title" name="home_faculty_title" class="form-control" value="{{ old('home_faculty_title', isset($faculty) ? $faculty->home_faculty_title : '') }}" required>
                @if($errors->has('home_faculty_title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('home_faculty_title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.fields.home_faculty_title_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('home_faculty_title_arabic') ? 'has-error' : '' }}">
                <label for="home_faculty_title_arabic">{{ trans('cruds.faculty.fields.home_faculty_title_arabic') }}*</label>
                <input 
                    type="text" 
                    id="home_faculty_title_arabic" 
                    name="home_faculty_title_arabic" 
                    class="form-control text-right"
                    dir="rtl" 
                    value="{{ old('home_faculty_title_arabic', isset($faculty) ? $faculty->home_faculty_title_arabic : '') }}" 
                    required
                >
                @if($errors->has('home_faculty_title_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('home_faculty_title_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.fields.home_faculty_title_arabic_helper') }}
                </p>
            </div>


            <div class="form-group {{ $errors->has('home_faculty_description') ? 'has-error' : '' }}">
                <label for="home_faculty_description">{{ trans('cruds.faculty.fields.home_faculty_description') }}*</label>
                <textarea 
                    type="text" 
                    rows="5"
                    id="home_faculty_description" 
                    name="home_faculty_description" 
                    class="form-control"  
                    required
                >{{ old('home_faculty_description', isset($faculty) ? $faculty->home_faculty_description : '') }}</textarea>
                @if($errors->has('home_faculty_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('home_faculty_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.fields.home_faculty_description_helper') }}
                </p>
            </div>


            <div class="form-group {{ $errors->has('home_faculty_description_arabic') ? 'has-error' : '' }}">
                <label for="home_faculty_description_arabic">{{ trans('cruds.faculty.fields.home_faculty_description_arabic') }}*</label>
                <textarea
                    type="text" 
                    rows="5"
                    id="home_faculty_description_arabic" 
                    name="home_faculty_description_arabic" 
                    class="form-control text-right"
                    dir="rtl" 
                    required
                >{{ old('home_faculty_description_arabic', isset($faculty) ? $faculty->home_faculty_description_arabic : '') }}</textarea>
                @if($errors->has('home_faculty_description_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('home_faculty_description_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.fields.home_faculty_description_arabic_helper') }}
                </p>
            </div>


            <div class="form-group {{ $errors->has('home_faculty_link') ? 'has-error' : '' }}">
                <label for="home_faculty_link">{{ trans('cruds.faculty.fields.home_faculty_link') }}</label>
                <input 
                    type="text" 
                    id="home_faculty_link" 
                    name="home_faculty_link" 
                    class="form-control" 
                    required 
                    value="{{ old('home_faculty_link', isset($faculty) ? $faculty->home_faculty_link : '') }}"
                >
                @if($errors->has('home_faculty_link'))
                    <em class="invalid-feedback">
                        {{ $errors->first('home_faculty_link') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.fields.home_faculty_link_helper') }}
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