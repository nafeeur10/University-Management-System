@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.faculty.dept.title') }}
        <hr>
    </div>

    <div class="card-body">
        <form id="facultyDeptUpdateFrom" enctype="multipart/form-data"> 

            <input type="hidden" value="{{ $dept_details->id }}" id="DeptID">

            <!-- Select Faculty -->
            <div class="form-group">
                <label for="faculty_selection">{{ trans('cruds.faculty.dept.fields.faculty_selection') }}*</label>
                <select class="form-control" name="faculty_selection" id="faculty_selection">
                <option>Select a Faculty</option>
                @foreach($allFaculty as $faculty)
                    <option value="{{ $faculty->id }}" {{ ( $faculty->id == $dept_details->dept_faculty ) ? 'selected' : '' }}>{{ $faculty->home_faculty_title }}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group" id="faculty_dept_image_preview_block">
                <label for="faculty_dept_image_preview">{{ trans('cruds.faculty.dept.fields.image_on_faculty_preview') }}</label>
                <img 
                    id="faculty_dept_image_preview" 
                    class="d-block border-0 mt-1"  
                    style="width:150px;" 
                    src="{{ asset('images/faculty/dept/'.$dept_details->dept_faculty_image )}}">
            </div>

            <div class="form-group">
                <label for="faculty_dept_image">{{ trans('cruds.faculty.dept.fields.upload_dept_image_on_faculty') }}</label>
                <input 
                    type="file" 
                    name="faculty_dept_image" 
                    id="faculty_dept_image" 
                    class="form-control"
                    accept="image/jpeg, image/png"
                    onchange="document.getElementById('faculty_dept_image_preview_block').style.display = 'block';document.getElementById('faculty_dept_image_preview').src = window.URL.createObjectURL(this.files[0])"
                >
            </div>

            <!-- Faculty Dept Title -->
            <div class="form-group {{ $errors->has('faculty_dept_title') ? 'has-error' : '' }}">
                <label for="faculty_dept_title">{{ trans('cruds.faculty.dept.fields.faculty_dept_title') }}*</label>
                <input type="text" id="faculty_dept_title" name="faculty_dept_title" class="form-control" value="{{ old('faculty_dept_title', isset($dept_details) ? $dept_details->dept_name : '') }}" required>
                @if($errors->has('faculty_dept_title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('faculty_dept_title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.dept.fields.faculty_dept_title_helper') }}
                </p>
            </div>

            <!-- Faculty Dept Title in Arabic -->
            <div class="form-group {{ $errors->has('faculty_dept_title_arabic') ? 'has-error' : '' }}">
                <label for="faculty_dept_title_arabic">{{ trans('cruds.faculty.dept.fields.faculty_dept_title_arabic') }}*</label>
                <input 
                    type="text" 
                    id="faculty_dept_title_arabic" 
                    name="faculty_dept_title_arabic" 
                    class="form-control text-right"
                    dir="rtl" 
                    value="{{ old('faculty_dept_title_arabic', isset($dept_details) ? $dept_details->dept_name_arabic : '') }}" 
                    required
                >
                @if($errors->has('faculty_dept_title_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('faculty_dept_title_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.dept.fields.faculty_dept_title_arabic_helper') }}
                </p>
            </div>

            <!-- Faculty Dept Short Description -->
            <div class="form-group {{ $errors->has('faculty_dept_short_description') ? 'has-error' : '' }}">
                <label for="faculty_dept_short_description">{{ trans('cruds.faculty.dept.fields.faculty_dept_short_description') }}</label>
                <textarea 
                    type="text" 
                    id="faculty_dept_short_description" 
                    name="faculty_dept_short_description" 
                    class="form-control" >{{ old('faculty_dept_short_description', isset($dept_details) ? $dept_details->dept_short_description : '') }}</textarea>
                @if($errors->has('faculty_dept_short_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('faculty_dept_short_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.dept.fields.faculty_dept_short_description_helper') }}
                </p>
            </div>

            <!-- Faculty Dept Short Description in Arabic -->
            <div class="form-group {{ $errors->has('faculty_dept_short_description_arabic') ? 'has-error' : '' }}">
                <label for="faculty_dept_short_description_arabic">{{ trans('cruds.faculty.dept.fields.faculty_dept_short_description_arabic') }}</label>
                <textarea 
                    type="text" 
                    id="faculty_dept_short_description_arabic" 
                    name="faculty_dept_short_description_arabic" 
                    class="form-control text-right"
                    dir="rtl"
                >{{ old('faculty_dept_short_description_arabic', isset($dept_details) ? $dept_details->dept_short_description_arabic : '') }}</textarea>
                @if($errors->has('faculty_dept_short_description_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('faculty_dept_short_description_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.dept.fields.faculty_dept_short_description_arabic_helper') }}
                </p>
            </div>

            <div class="form-group" id="dept_image_preview_block">
                <label for="dept_image_preview">{{ trans('cruds.faculty.dept.fields.dept_image_preview') }}</label>
                <img 
                    id="dept_image_preview" 
                    class="d-block border-0 mt-1"  
                    style="width:150px;" 
                    src="{{ asset('images/faculty/dept/'.$dept_details->dept_image )}}">
            </div>

            <div class="form-group">
                <label for="dept_image">{{ trans('cruds.faculty.dept.fields.dept_image_upload') }}</label>
                <input 
                    type="file" 
                    name="dept_image" 
                    id="dept_image" 
                    class="form-control"
                    accept="image/jpeg, image/png"
                    onchange="document.getElementById('dept_image_preview_block').style.display = 'block'; document.getElementById('dept_image_preview').src = window.URL.createObjectURL(this.files[0]);"
                >
            </div>


            <!-- Faculty Tab Description -->
            <div class="form-group {{ $errors->has('faculty_dept_description') ? 'has-error' : '' }}">
                <label for="faculty_dept_description">{{ trans('cruds.faculty.dept.fields.faculty_dept_description') }}*</label>
                    <div class="editor-full">
                        <input name="faculty_dept_description" type="hidden" id="faculty_dept_description_Input" value="{{ old('faculty_dept_description', isset($dept_details) ? $dept_details->dept_main_description : '') }}">
                        <div id="faculty_dept_description" class="ql-scroll-y" style="height: 300px;">
                            
                        </div>
                    </div>
                @if($errors->has('faculty_dept_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('faculty_dept_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.dept.fields.faculty_dept_description_helper') }}
                </p>
            </div>

            <!-- Faculty Tab Description in Arabic -->
            <div class="form-group {{ $errors->has('faculty_dept_description_arabic') ? 'has-error' : '' }}">
                <label for="faculty_dept_description_arabic">{{ trans('cruds.faculty.dept.fields.faculty_dept_description_arabic') }}*</label>
                <div class="editor-full">
                    <input name="faculty_dept_description_arabic" id="faculty_dept_description_arabic_Input" type="hidden" value="{{ old('faculty_dept_description_arabic', isset($dept_details) ? $dept_details->dept_main_description_arabic : '') }}">
                    <div id="faculty_dept_description_arabic" dir="ltr" class="ql-scroll-y text-right" style="height: 300px;">
                        {{ old('faculty_dept_description_arabic', isset($dept_details) ? $dept_details->dept_main_description_arabic : '') }}
                    </div>
                </div>
                @if($errors->has('faculty_dept_description_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('faculty_dept_description_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.dept.fields.faculty_dept_description_arabic_helper') }}
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

    var facultyTabDes = new Quill('#faculty_dept_description', {
        theme: 'snow'
    });

    var facultyTabDesArab = new Quill('#faculty_dept_description_arabic', {
        theme: 'snow'
    });

    facultyTabDes.root.innerHTML = $("#faculty_dept_description_Input").val();
    facultyTabDesArab.root.innerHTML = $("#faculty_dept_description_arabic_Input").val();

    facultyTabDesArab.format('direction', 'rtl');
    facultyTabDesArab.format('align', 'right');

    var form = document.querySelector('form');
    
    
    $("#facultyDeptUpdateFrom").on('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
       
        var facultyTabDescription = document.querySelector('input[name=faculty_dept_description]');
        facultyTabDescription.value = facultyTabDes.root.innerHTML;

        var ftda = document.querySelector('input[name=faculty_dept_description_arabic]');
        ftda.value = facultyTabDesArab.root.innerHTML;


        formData.append('faculty_dept_description_append', facultyTabDescription.value);
        formData.append('faculty_dept_description_arabic_append', ftda.value);

        let id = $("#DeptID").val();
        formData.append('id', id);

        $.ajax({
            url: "/admin/dept/update/",
            type: 'POST',
            data: formData,
            dataType:'JSON',
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                toastr.success(response.success);
                setTimeout(function(){
                    window.location.href = "/admin/department";
                }, 5000);
            },
            error: function(error) {
                console.log("Error: ", error.response);
            }
        })

    });
</script>
@endsection