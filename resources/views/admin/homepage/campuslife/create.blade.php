@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.campuslife.title') }}
        <hr>
    </div>

    <div class="card-body">

        <form 
            action="{{ route('admin.campuslife.store') }}" 
            method="POST" 
            enctype="multipart/form-data"
        > 
        @csrf
            <div class="form-group">
                <label for="campus_life_icon_preview">Campus Life Icon Preview: </label>
                <img 
                    id="campus_life_icon_preview" 
                    class="d-block border-0 mt-1"  
                    style="height:150px; width:150px;" 
                    src="{{ asset('images/demo.jpg') }}">
            </div>

            <div class="form-group">
                <label for="campus_life_icon">Upload Campus Life Icon: </label>
                <input 
                    type="file" 
                    name="campus_life_icon" 
                    id="campus_life_icon" 
                    class="form-control"
                    accept="image/jpeg, image/png"
                    onchange="document.getElementById('campus_life_icon_preview').src = window.URL.createObjectURL(this.files[0])"
                >
            </div>


            <!-- campus_life Tab Title -->
            <div class="form-group {{ $errors->has('campus_life_title') ? 'has-error' : '' }}">
                <label for="campus_life_title">{{ trans('cruds.campuslife.fields.campus_life_title') }}*</label>
                <input type="text" id="campus_life_title" name="campus_life_title" class="form-control" value="{{ old('campus_life_title', isset($campus_life) ? $campus_life->campus_life_title : '') }}" required>
                @if($errors->has('campus_life_title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('campus_life_title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.campuslife.fields.campus_life_title_helper') }}
                </p>
            </div>

            <!-- campus_life Tab Title in Arabic -->
            <div class="form-group {{ $errors->has('campus_life_title_arabic') ? 'has-error' : '' }}">
                <label for="campus_life_title_arabic">{{ trans('cruds.campuslife.fields.campus_life_title_arabic') }}*</label>
                <input 
                    type="text" 
                    id="campus_life_title_arabic" 
                    name="campus_life_title_arabic" 
                    class="form-control text-right"
                    dir="rtl" 
                    value="{{ old('campus_life_title_arabic', isset($campus_life) ? $campus_life->campus_life_title_arabic : '') }}" 
                    required
                >
                @if($errors->has('campus_life_title_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('campus_life_title_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.campuslife.fields.campus_life_title_arabic_helper') }}
                </p>
            </div>


            <div class="form-group {{ $errors->has('campus_life_description') ? 'has-error' : '' }}">
                <label for="campus_life_description">{{ trans('cruds.campuslife.fields.campus_life_description') }}*</label>
                <textarea 
                    type="text" 
                    rows="5"
                    id="campus_life_description" 
                    name="campus_life_description" 
                    class="form-control"  
                    required
                >{{ old('campus_life_description', isset($campus_life) ? $campus_life->campus_life_description : '') }}</textarea>
                @if($errors->has('campus_life_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('campus_life_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.campuslife.fields.campus_life_description_helper') }}
                </p>
            </div>

            <!-- campus_life Description for campus_life Details Page in Arabic -->
            <div class="form-group {{ $errors->has('campus_life_description_arabic') ? 'has-error' : '' }}">
                <label for="campus_life_description_arabic">{{ trans('cruds.campuslife.fields.campus_life_description_arabic') }}*</label>
                <textarea
                    type="text" 
                    rows="5"
                    id="campus_life_description_arabic" 
                    name="campus_life_description_arabic" 
                    class="form-control text-right"
                    dir="rtl" 
                    required
                >{{ old('campus_life_description_arabic', isset($campus_life) ? $campus_life->campus_life_description_arabic : '') }}</textarea>
                @if($errors->has('campus_life_description_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('campus_life_description_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.campuslife.fields.campus_life_description_arabic_helper') }}
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

</script>
@endsection