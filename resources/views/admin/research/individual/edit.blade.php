@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.update') }} {{ trans('cruds.research.individual.title') }}
        <hr>
    </div>

    <div class="card-body">

        <form id="ResearchIndividualUpdateForm" enctype="multipart/form-data"> 

            <input type="hidden" id="researchIndividualID" value="{{ $research->id }}">

            <div class="form-group" id="research_individual_image_preview_block">
                <label for="research_image_preview">{{ trans('cruds.research.individual.fields.image') }}</label>
                <img 
                    id="research_individual_image_preview" 
                    class="d-block border-0 mt-1"  
                    style="height:150px; width:150px;" 
                    src="{{ asset('images/research/individual/'. $research->research_individual_image ) }}"
                >
            </div>

            <div class="form-group">
                <label for="research_individual_image">{{ trans('cruds.research.individual.fields.upload_individual_image') }}</label>
                <input 
                    type="file" 
                    name="research_individual_image" 
                    id="research_individual_image" 
                    class="form-control"
                    accept="image/jpeg, image/png"
                    onchange="document.getElementById('research_individual_image_preview').src = window.URL.createObjectURL(this.files[0])"
                >
            </div>

            <!-- Research Title -->
            <div class="form-group {{ $errors->has('research_individual_title') ? 'has-error' : '' }}">
                <label for="research_individual_title">{{ trans('cruds.research.individual.fields.title') }}*</label>
                <input type="text" id="research_individual_title" name="research_individual_title" class="form-control" value="{{ old('research_individual_title', isset($research) ? $research->research_individual_title : '') }}" required>
                @if($errors->has('research_individual_title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('research_individual_title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.research.individual.fields.title_helper') }}
                </p>
            </div>

            <!-- Research Title in Arabic -->
            <div class="form-group {{ $errors->has('research_individual_title_arabic') ? 'has-error' : '' }}">
                <label for="research_individual_title_arabic">{{ trans('cruds.research.individual.fields.title_arabic') }}*</label>
                <input 
                    type="text" 
                    id="research_individual_title_arabic" 
                    name="research_individual_title_arabic" 
                    class="form-control text-right"
                    dir="rtl" 
                    value="{{ old('research_individual_title_arabic', isset($research) ? $research->research_individual_title_arabic : '') }}" 
                    required
                >
                @if($errors->has('research_individual_title_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('research_individual_title_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.research.individual.fields.title_arabic_helper') }}
                </p>
            </div>


            <!-- Research Description -->
            <div class="form-group {{ $errors->has('research_individual_description') ? 'has-error' : '' }}">
                <label for="research_individual_description">{{ trans('cruds.research.individual.fields.description') }}*</label>
                    <div class="editor-full">
                        <input 
                            name="research_individual_description" 
                            type="hidden" 
                            value="{{ $research->research_individual_description }}"
                            id="research_individual_description_input"
                        >
                        <div id="research_individual_description" class="ql-scroll-y" style="height: 300px;">
                            {{ old('research_individual_description', isset($research) ? $research->research_individual_description : '') }}
                        </div>
                    </div>
                @if($errors->has('research_individual_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('research_individual_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.research.individual.fields.description_helper') }}
                </p>
            </div>

            <!-- Research Description in Arabic -->
            <div class="form-group {{ $errors->has('research_individual_description_arabic') ? 'has-error' : '' }}">
                <label for="research_individual_description_arabic">{{ trans('cruds.research.individual.fields.description_arabic') }}*</label>
                <div class="editor-full">
                    <input 
                        name="research_individual_description_arabic" 
                        type="hidden" 
                        value="{{ $research->research_individual_description_arabic }}"
                        id="research_individual_description_arabic_input"
                    >
                    <div id="research_individual_description_arabic" dir="ltr" class="ql-scroll-y text-right" style="height: 300px;">
                        {{ old('research_individual_description_arabic', isset($faculty) ? $faculty->research_individual_description_arabic : '') }}
                    </div>
                </div>
                @if($errors->has('research_individual_description_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('research_individual_description_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.research.individual.fields.description_arabic_helper') }}
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

    $("#research_individual_image").on("change", function(){
        $("#research_individual_image_preview_block").css("display", "block");
    });

    var researchDes = new Quill('#research_individual_description', {
        theme: 'snow'
    });

    var researchDesArab = new Quill('#research_individual_description_arabic', {
        theme: 'snow'
    });

    researchDesArab.format('direction', 'rtl');
    researchDesArab.format('align', 'right');

    researchDes.root.innerHTML = $("#research_individual_description_input").val();
    researchDesArab.root.innerHTML = $("#research_individual_description_arabic_input").val();

    var form = document.querySelector('form');
    
    
    $("#ResearchIndividualUpdateForm").on('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
       
        var researchDescription = document.querySelector('input[name=research_individual_description]');
        researchDescription.value = researchDes.root.innerHTML;

        var researchDescriptionArabic = document.querySelector('input[name=research_individual_description_arabic]');
        researchDescriptionArabic.value = researchDesArab.root.innerHTML;


        formData.append('research_individual_description_append', researchDescription.value);
        formData.append('research_individual_description_arabic_append', researchDescriptionArabic.value);

        let id = $("#researchIndividualID").val();
        formData.append('id', id);

        $.ajax({
            url: "{{ route('admin.research-individual.update-ri')}}",
            type: 'POST',
            data: formData,
            dataType:'JSON',
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                //console.log(response);
                toastr.success("Research Information saved successfully");
                setTimeout(function(){
                    window.location.href = "/admin/research-individual";
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