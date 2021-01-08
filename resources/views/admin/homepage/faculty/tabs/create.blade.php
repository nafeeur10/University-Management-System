@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.faculty.tabs.title') }}
        <hr>
    </div>

    <div class="card-body">

    <!-- action="{{ route('admin.faculty_tabs.store') }}" 
            method="POST" 
            enctype="multipart/form-data" -->

        <form id="facultyTabForm" enctype="multipart/form-data"> 
            <!-- Select Faculty -->
            <div class="form-group">
                <label for="faculty_selection">{{ trans('cruds.faculty.tabs.fields.faculty_selection') }}*</label>
                <select class="form-control" name="faculty_selection" id="faculty_selection">
                <option>Select a Faculty</option>
                @foreach($allFaculty as $faculty)
                    <option value="{{ $faculty->id }}">{{ $faculty->home_faculty_title }}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="faculty_tab_image_preview">Faculty Tabs Image Preview: </label>
                <img 
                    id="faculty_tab_image_preview" 
                    class="d-block border-0 mt-1"  
                    style="height:150px; width:150px;" 
                    src="{{ asset('images/demo.jpg') }}">
            </div>

            <div class="form-group">
                <label for="faculty_tab_image">Upload Faculty Tabs Image: </label>
                <input 
                    type="file" 
                    name="faculty_tab_image" 
                    id="faculty_tab_image" 
                    class="form-control"
                    accept="image/jpeg, image/png"
                    onchange="document.getElementById('faculty_tab_image_preview').src = window.URL.createObjectURL(this.files[0])"
                >
            </div>

            <!-- <div class="form-group">
                <label for="faculty-tab-image-preview">{{ trans('global.upload') }} {{ trans('cruds.faculty.tabs.fields.tab_image') }}</label>
                <div class="input-image-faculty-tab"></div>
            </div> -->

            <!-- Faculty Tab Title -->
            <div class="form-group {{ $errors->has('faculty_tab_title') ? 'has-error' : '' }}">
                <label for="faculty_tab_title">{{ trans('cruds.faculty.tabs.fields.faculty_tab_title') }}*</label>
                <input type="text" id="faculty_tab_title" name="faculty_tab_title" class="form-control" value="{{ old('faculty_tab_title', isset($faculty) ? $faculty->faculty_tab_title : '') }}" required>
                @if($errors->has('faculty_tab_title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('faculty_tab_title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.tabs.fields.faculty_tab_title_helper') }}
                </p>
            </div>

            <!-- Faculty Tab Title in Arabic -->
            <div class="form-group {{ $errors->has('faculty_tab_title_arabic') ? 'has-error' : '' }}">
                <label for="faculty_tab_title_arabic">{{ trans('cruds.faculty.tabs.fields.faculty_tab_title_arabic') }}*</label>
                <input 
                    type="text" 
                    id="faculty_tab_title_arabic" 
                    name="faculty_tab_title_arabic" 
                    class="form-control text-right"
                    dir="rtl" 
                    value="{{ old('faculty_tab_title_arabic', isset($faculty) ? $faculty->faculty_tab_title_arabic : '') }}" 
                    required
                >
                @if($errors->has('faculty_tab_title_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('faculty_tab_title_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.tabs.fields.faculty_tab_title_arabic_helper') }}
                </p>
            </div>


            <!-- Faculty Tab Description -->
            <div class="form-group {{ $errors->has('faculty_tab_description') ? 'has-error' : '' }}">
                <label for="faculty_tab_description">{{ trans('cruds.faculty.tabs.fields.faculty_tab_description') }}*</label>
                    <div class="editor-full">
                        <input name="faculty_tab_description" type="hidden">
                        <div id="faculty_tab_description" class="ql-scroll-y" style="height: 300px;">
                            {{ old('faculty_tab_description', isset($faculty) ? $faculty->faculty_tab_description : '') }}
                        </div>
                    </div>
                @if($errors->has('faculty_tab_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('faculty_tab_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.tabs.fields.faculty_tab_description_helper') }}
                </p>
            </div>

            <!-- Faculty Tab Description in Arabic -->
            <div class="form-group {{ $errors->has('faculty_tab_description_arabic') ? 'has-error' : '' }}">
                <label for="faculty_tab_description_arabic">{{ trans('cruds.faculty.tabs.fields.faculty_tab_description_arabic') }}*</label>
                <div class="editor-full">
                    <input name="faculty_tab_description_arabic" type="hidden">
                    <div id="faculty_tab_description_arabic" dir="ltr" class="ql-scroll-y text-right" style="height: 300px;">
                        {{ old('faculty_tab_description_arabic', isset($faculty) ? $faculty->faculty_tab_description_arabic : '') }}
                    </div>
                </div>
                @if($errors->has('faculty_tab_description_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('faculty_tab_description_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.faculty.tabs.fields.faculty_tab_description_arabic_helper') }}
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

    var facultyTabDes = new Quill('#faculty_tab_description', {
        theme: 'snow'
    });

    var facultyTabDesArab = new Quill('#faculty_tab_description_arabic', {
        theme: 'snow'
    });

    facultyTabDesArab.format('direction', 'rtl');
    facultyTabDesArab.format('align', 'right');

    var form = document.querySelector('form');
    
    
    $("#facultyTabForm").on('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
       
        var facultyTabDescription = document.querySelector('input[name=faculty_tab_description]');
        facultyTabDescription.value = facultyTabDes.root.innerHTML;

        var ftda = document.querySelector('input[name=faculty_tab_description_arabic]');
        ftda.value = facultyTabDesArab.root.innerHTML;


        formData.append('faculty_tab_description_append', facultyTabDescription.value);
        formData.append('faculty_tab_description_arabic_append', ftda.value);

        $.ajax({
            url: "{{ route('admin.faculty_tabs.store')}}",
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
                window.location.href = "/admin/faculty";
                // console.log("Success: ",response.success);
            },
            error: function(error) {
                console.log("Error: ", error);
            }
        })

    });
</script>
@endsection