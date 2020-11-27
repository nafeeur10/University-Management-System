@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.faculty.title') }}
        <hr>
    </div>

    <div class="card-body">


        <h2>Faculty Main Information</h2>
        <hr>

        <form 
            action="{{ route('admin.faculty.store') }}" 
            method="POST" 
            enctype="multipart/form-data">
            @csrf


            <div class="form-group">
                <label for="faculty-homepage-image-preview">{{ trans('global.upload') }} {{ trans('cruds.faculty.fields.homepage_image') }}</label>
                <div class="input-images-faculty-homepage"></div>
            </div>

            <div class="form-group">
                <label for="faculty-banner-image-preview">{{ trans('global.upload') }} {{ trans('cruds.faculty.fields.slider_image') }}</label>
                <div class="input-images-faculty-banner"></div>
            </div>

            <!-- Faculty Title for Homepage -->
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

            <!-- Faculty Title for Homepage in Arabic -->
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


            <!-- Faculty Description for Homepage -->
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

            <!-- Faculty Description for Homepage in Arabic -->
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


            <!-- Link of Single Faculty -->
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


            <!-- Faculty Details: Title of Faculty -->
            <div class="form-group {{ $errors->has('faculty_details_title') ? 'has-error' : '' }}">
                <label for="faculty_details_title">{{ trans('cruds.faculty.fields.faculty_details_title') }}</label>
                <input 
                    type="text" 
                    id="faculty_details_title" 
                    name="faculty_details_title" 
                    class="form-control" 
                    required 
                    value="{{ old('faculty_details_title', isset($faculty) ? $faculty->faculty_details_title : '') }}"
                >
                @if($errors->has('faculty_details_title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('faculty_details_title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.fields.faculty_details_title_helper') }}
                </p>
            </div>


            <!-- Faculty Details: Title of Faculty in Arabic -->
            <div class="form-group {{ $errors->has('faculty_details_title_arabic') ? 'has-error' : '' }}">
                <label for="faculty_details_title_arabic">{{ trans('cruds.faculty.fields.faculty_details_title_arabic') }}</label>
                <input 
                    type="text" 
                    id="faculty_details_title_arabic" 
                    name="faculty_details_title_arabic" 
                    class="form-control text-right" 
                    dir="rtl"
                    required 
                    value="{{ old('faculty_details_title_arabic', isset($faculty) ? $faculty->faculty_details_title_arabic : '') }}"
                >
                @if($errors->has('faculty_details_title_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('faculty_details_title_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.fields.faculty_details_title_arabic_helper') }}
                </p>
            </div>

            <!-- Faculty Description for Faculty Details Page -->
            <div class="form-group {{ $errors->has('faculty_details_description') ? 'has-error' : '' }}">
                <label for="faculty_details_description">{{ trans('cruds.faculty.fields.faculty_details_description') }}*</label>
                <textarea 
                    type="text" 
                    rows="5"
                    id="faculty_details_description" 
                    name="faculty_details_description" 
                    class="form-control"  
                    required
                >{{ old('faculty_details_description', isset($faculty) ? $faculty->faculty_details_description : '') }}</textarea>
                @if($errors->has('faculty_details_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('faculty_details_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.fields.faculty_details_description_helper') }}
                </p>
            </div>

            <!-- Faculty Description for Faculty Details Page in Arabic -->
            <div class="form-group {{ $errors->has('faculty_details_description_arabic') ? 'has-error' : '' }}">
                <label for="faculty_details_description_arabic">{{ trans('cruds.faculty.fields.faculty_details_description_arabic') }}*</label>
                <textarea
                    type="text" 
                    rows="5"
                    id="faculty_details_description_arabic" 
                    name="faculty_details_description_arabic" 
                    class="form-control text-right"
                    dir="rtl" 
                    required
                >{{ old('faculty_details_description_arabic', isset($faculty) ? $faculty->faculty_details_description_arabic : '') }}</textarea>
                @if($errors->has('faculty_details_description_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('faculty_details_description_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.fields.faculty_details_description_arabic_helper') }}
                </p>
            </div>

            <!-- PDF upload for Student Guide -->
            <div class="form-group {{ $errors->has('faculty_details_student_guide') ? 'has-error' : '' }}">
                <label for="faculty_details_student_guide">{{ trans('cruds.faculty.fields.faculty_details_student_guide') }}*</label>
                <input
                    type="file"
                    id="faculty_details_student_guide" 
                    name="faculty_details_student_guide" 
                    class="form-control"
                    required
                    value="{{ old('faculty_details_student_guide', isset($faculty) ? $faculty->faculty_details_student_guide : '') }}" />
                @if($errors->has('faculty_details_student_guide'))
                    <em class="invalid-feedback">
                        {{ $errors->first('faculty_details_student_guide') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.fields.faculty_details_student_guide_helper') }}
                </p>
            </div>


            <!-- PDF upload for Organizational Strucutre -->
            <div class="form-group {{ $errors->has('faculty_details_organizational_structure') ? 'has-error' : '' }}">
                <label for="faculty_details_organizational_structure">{{ trans('cruds.faculty.fields.faculty_details_organizational_structure') }}*</label>
                <input
                    type="file"
                    id="faculty_details_organizational_structure" 
                    name="faculty_details_organizational_structure" 
                    class="form-control"
                    required
                    value="{{ old('faculty_details_organizational_structure', isset($faculty) ? $faculty->faculty_details_organizational_structure : '') }}" />
                @if($errors->has('faculty_details_organizational_structure'))
                    <em class="invalid-feedback">
                        {{ $errors->first('faculty_details_organizational_structure') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.fields.faculty_details_organizational_structure_helper') }}
                </p>
            </div>


            <!-- PDF upload for Course PDF -->
            <div class="form-group {{ $errors->has('faculty_details_course') ? 'has-error' : '' }}">
                <label for="faculty_details_course">{{ trans('cruds.faculty.fields.faculty_details_course') }}*</label>
                <input
                    type="file"
                    id="faculty_details_course" 
                    name="faculty_details_course" 
                    class="form-control"
                    required
                    value="{{ old('faculty_details_course', isset($faculty) ? $faculty->faculty_details_course : '') }}" />
                @if($errors->has('faculty_details_course'))
                    <em class="invalid-feedback">
                        {{ $errors->first('faculty_details_course') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.fields.faculty_details_course_helper') }}
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

    $('.input-images-faculty-homepage').imageUploader({
        preloaded: preloaded,
        imagesInputName: 'facultyHompageImage',
        preloadedInputName: 'old',
        label: 'Drag & Drop files here or click to browse'
    }); 

    $('.input-images-faculty-banner').imageUploader({
        preloaded: preloaded,
        imagesInputName: 'facultyBannerImages',
        preloadedInputName: 'old',
        label: 'Drag & Drop files here or click to browse'
    }); 
    //console.log(preloaded);
</script>
@endsection