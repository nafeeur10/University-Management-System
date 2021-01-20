@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.research.link.title') }}
        <hr>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.research-link.store') }}" method="POST" enctype="multipart/form-data">
            @csrf 

            <div class="form-group">
                <label for="research_file">{{ trans('global.upload') }} {{ trans('cruds.research.link.fields.research_file') }}</label>
                <input 
                    type="file" 
                    name="research_file" 
                    id="research_file" 
                    class="form-control"
                >
            </div>

            <!-- Research Link -->
            <div class="form-group {{ $errors->has('research_link') ? 'has-error' : '' }}">
                <label for="research_link">{{ trans('cruds.research.link.fields.research_link') }} </label>
                <input 
                    type="text" 
                    id="research_link" 
                    name="research_link" 
                    class="form-control" 
                    value="{{ old('research_link', isset($research_link) ? $research_link->research_link : '') }}"
                >
                @if($errors->has('research_link'))
                    <em class="invalid-feedback">
                        {{ $errors->first('research_link') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.research.link.fields.research_link_helper') }}
                </p>
            </div>

            <!-- Research Title -->
            <div class="form-group {{ $errors->has('research_title') ? 'has-error' : '' }}">
                <label for="research_title">{{ trans('cruds.research.fields.main_title') }}*</label>
                <input type="text" id="research_title" name="research_title" class="form-control" value="{{ old('research_title', isset($research_link) ? $research_link->research_title : '') }}" required>
                @if($errors->has('research_title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('research_title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.research.fields.main_title_helper') }}
                </p>
            </div>

            <!-- Research Title in Arabic -->
            <div class="form-group {{ $errors->has('research_title_arabic') ? 'has-error' : '' }}">
                <label for="research_title_arabic">{{ trans('cruds.research.fields.main_title_arabic') }}*</label>
                <input 
                    type="text" 
                    id="research_title_arabic" 
                    name="research_title_arabic" 
                    class="form-control text-right"
                    dir="rtl" 
                    value="{{ old('research_title_arabic', isset($research_link) ? $research_link->research_title_arabic : '') }}" 
                    required
                >
                @if($errors->has('research_title_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('research_title_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.research.fields.main_title_arabic_helper') }}
                </p>
            </div>


            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>


        </form>

    </div>

</div>




@endsection