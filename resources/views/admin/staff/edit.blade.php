@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.staff.title') }}
    </div>

    <div class="card-body">
        <form action="{{ route('admin.staff.update', [$staff->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="dept_selection">{{ trans('cruds.staff.fields.dept_name') }}*</label>
                <select class="form-control" name="dept_selection" id="dept_selection">
                <option>Select a Department</option>
                @foreach($allDept as $dept)
                    <option value="{{ $dept->id }}" {{ ( $dept->id == $staff->dept_id ) ? 'selected' : '' }}>{{ $dept->dept_name }}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group {{ $errors->has('staff_name') ? 'has-error' : '' }}">
                <label for="staff_name">{{ trans('cruds.staff.fields.staff_name') }}*</label>
                <input 
                    type="text" 
                    id="staff_name" 
                    name="staff_name" 
                    class="form-control" 
                    value="{{ old('staff_name', isset($staff) ? $staff->staff_name : '') }}" required
                >
                @if($errors->has('staff_name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('staff_name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.staff.fields.staff_name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('staff_name_arabic') ? 'has-error' : '' }}">
                <label for="staff_name_arabic">{{ trans('cruds.staff.fields.staff_name_arabic') }}*</label>
                <input 
                    type="text"
                    id="staff_name_arabic" 
                    name="staff_name_arabic" 
                    class="form-control text-right"
                    dir="rtl" 
                    value="{{ old('staff_name_arabic', isset($staff) ? $staff->staff_name_arabic : '') }}" required
                >
                @if($errors->has('staff_name_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('staff_name_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.staff.fields.staff_name_arabic_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('staff_designation') ? 'has-error' : '' }}">
                <label for="staff_designation">{{ trans('cruds.staff.fields.staff_designation') }}*</label>
                <input 
                    type="text" 
                    id="staff_designation" 
                    name="staff_designation" 
                    class="form-control" 
                    value="{{ old('staff_designation', isset($staff) ? $staff->staff_designation : '') }}" required
                >
                @if($errors->has('staff_designation'))
                    <em class="invalid-feedback">
                        {{ $errors->first('staff_designation') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.staff.fields.staff_designation_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('staff_designation_arabic') ? 'has-error' : '' }}">
                <label for="staff_designation_arabic">{{ trans('cruds.staff.fields.staff_designation_arabic') }}*</label>
                <input 
                    type="text" 
                    id="staff_designation_arabic" 
                    name="staff_designation_arabic" 
                    class="form-control text-right"
                    dir="rtl"
                    value="{{ old('staff_designation_arabic', isset($staff) ? $staff->staff_designation_arabic : '') }}" required
                >
                @if($errors->has('staff_designation_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('staff_designation_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.staff.fields.staff_designation_arabic_helper') }}
                </p>
            </div>


            <div class="form-group">
                <label for="staff_resume_preview">{{ trans('cruds.staff.fields.preview_staff_resume') }} </label>
                <embed src="{{ asset('images/staff/'.$staff->staff_resume ) }}" height="500px" width="100%"/>
            </div>

            <div class="form-group {{ $errors->has('staff_resume') ? 'has-error' : '' }}">
                <label for="staff_resume">{{ trans('cruds.staff.fields.upload_staff_resume') }}*</label>
                <input 
                    type="file" 
                    id="staff_resume" 
                    name="staff_resume" 
                    class="form-control"
                >
                @if($errors->has('staff_resume'))
                    <em class="invalid-feedback">
                        {{ $errors->first('staff_resume') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.staff.fields.upload_staff_resume_helper') }}
                </p>
            </div>
            
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.update') }}">
            </div>
        </form>
    </div>
</div>
@endsection