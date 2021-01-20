@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.research.title') }} {{ trans('cruds.research.basic') }}
        <hr>
    </div>

    <div class="card-body">

        <form id="ResearchBasicForm" enctype="multipart/form-data"> 

            <div class="form-group" style="display: none;" id="research_details_image_preview_block">
                <label for="research_details_image_preview">{{ trans('cruds.research.fields.home_image_preview') }}</label>
                <img 
                    id="research_details_image_preview" 
                    class="d-block border-0 mt-1"  
                    style="height:150px; width:150px;" 
                    src="{{ asset('images/demo.jpg') }}">
            </div>

            <div class="form-group">
                <label for="research_details_image">{{ trans('global.upload') }} {{ trans('cruds.research.fields.home_image') }}</label>
                <input 
                    type="file" 
                    name="research_details_image" 
                    id="research_details_image" 
                    class="form-control"
                    accept="image/jpeg, image/png"
                    onchange="document.getElementById('research_details_image_preview').src = window.URL.createObjectURL(this.files[0])"
                >
            </div>

            <div class="form-group" style="display: none;" id="research_main_image_preview_block">
                <label for="research_image_preview">{{ trans('cruds.research.fields.preview_details_image') }}</label>
                <img 
                    id="research_main_image_preview" 
                    class="d-block border-0 mt-1"  
                    style="height:150px; width:150px;" 
                    src="{{ asset('images/demo.jpg') }}">
            </div>

            <div class="form-group">
                <label for="research_main_image">{{ trans('cruds.research.fields.upload_details_image') }}</label>
                <input 
                    type="file" 
                    name="research_main_image" 
                    id="research_main_image" 
                    class="form-control"
                    accept="image/jpeg, image/png"
                    onchange="document.getElementById('research_main_image_preview').src = window.URL.createObjectURL(this.files[0])"
                >
            </div>

            <!-- Research Title -->
            <div class="form-group {{ $errors->has('research_title') ? 'has-error' : '' }}">
                <label for="research_title">{{ trans('cruds.research.fields.main_title') }}*</label>
                <input type="text" id="research_title" name="research_title" class="form-control" value="{{ old('research_title', isset($faculty) ? $faculty->research_title : '') }}" required>
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
                    value="{{ old('research_title_arabic', isset($faculty) ? $faculty->research_title_arabic : '') }}" 
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


            <!-- Research Description -->
            <div class="form-group {{ $errors->has('research_description') ? 'has-error' : '' }}">
                <label for="research_description">{{ trans('cruds.research.fields.main_description') }}*</label>
                    <div class="editor-full">
                        <input name="research_description" type="hidden">
                        <div id="research_description" class="ql-scroll-y" style="height: 300px;">
                            {{ old('research_description', isset($faculty) ? $faculty->research_description : '') }}
                        </div>
                    </div>
                @if($errors->has('research_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('research_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.research.fields.main_description_helper') }}
                </p>
            </div>

            <!-- Research Description in Arabic -->
            <div class="form-group {{ $errors->has('research_description_arabic') ? 'has-error' : '' }}">
                <label for="research_description_arabic">{{ trans('cruds.research.fields.main_description_arabic') }}*</label>
                <div class="editor-full">
                    <input name="research_description_arabic" type="hidden">
                    <div id="research_description_arabic" dir="ltr" class="ql-scroll-y text-right" style="height: 300px;">
                        {{ old('research_description_arabic', isset($faculty) ? $faculty->research_description_arabic : '') }}
                    </div>
                </div>
                @if($errors->has('research_description_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('research_description_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.research.fields.main_description_arabic_helper') }}
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


    $("#research_details_image").on("change", function(){
        $("#research_details_image_preview_block").css("display", "block");
    });

    $("#research_main_image").on("change", function(){
        $("#research_main_image_preview_block").css("display", "block");
    });

    var researchDes = new Quill('#research_description', {
        theme: 'snow'
    });

    var researchDesArab = new Quill('#research_description_arabic', {
        theme: 'snow'
    });

    researchDesArab.format('direction', 'rtl');
    researchDesArab.format('align', 'right');

    var form = document.querySelector('form');
    
    
    $("#ResearchBasicForm").on('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
       
        var researchDescription = document.querySelector('input[name=research_description]');
        researchDescription.value = researchDes.root.innerHTML;

        var researchDescriptionArabic = document.querySelector('input[name=research_description_arabic]');
        researchDescriptionArabic.value = researchDesArab.root.innerHTML;


        formData.append('research_description_append', researchDescription.value);
        formData.append('research_description_arabic_append', researchDescriptionArabic.value);

        $.ajax({
            url: "{{ route('admin.research.store')}}",
            type: 'POST',
            data: formData,
            dataType:'JSON',
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                toastr.success("Research Basic Information saved successfully");
                setTimeout(function(){
                    window.location.href = "/admin/research";
                }, 3000);
                // console.log("Success: ",response.success);
            },
            error: function(error) {
                console.log("Error: ", error);
            }
        })

    });
</script>
@endsection