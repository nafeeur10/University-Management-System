@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.homepagecontent.welcomemessage.title_singular') }}
    </div>

    <div class="card-body">
        <form 
            action="{{ route('admin.welcomemessage.update', [$welcomemessage->id] ) }}" 
            method="POST" 
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Welcome Message Title -->
            <div class="form-group {{ $errors->has('welcome_message_title') ? 'has-error' : '' }}">
                <label for="welcome_message_title">{{ trans('cruds.welcomemessage.fields.welcome_message_title') }}*</label>
                <input type="text" id="welcome_message_title" name="welcome_message_title" class="form-control" value="{{ old('welcome_message_title', isset($welcomemessage) ? $welcomemessage->welcome_message_title : '') }}" required>
                @if($errors->has('welcome_message_title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('welcome_message_title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.welcomemessage.fields.welcome_message_title_helper') }}
                </p>
            </div>


            <!-- Welcome Message Title in Arabic -->
            <div class="form-group {{ $errors->has('welcome_message_title_arabic') ? 'has-error' : '' }}">
                <label for="welcome_message_title_arabic">{{ trans('cruds.welcomemessage.fields.welcome_message_title_arabic') }}*</label>
                <input 
                    type="text" 
                    id="welcome_message_title_arabic" 
                    name="welcome_message_title_arabic" 
                    class="form-control text-right"
                    dir="rtl" 
                    value="{{ old('welcome_message_title_arabic', isset($welcomemessage) ? $welcomemessage->welcome_message_title_arabic : '') }}" required>
                @if($errors->has('welcome_message_title_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('welcome_message_title_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.welcomemessage.fields.welcome_message_title_arabic_helper') }}
                </p>
            </div>


            <!-- Welcome Description -->
            <div class="form-group {{ $errors->has('welcome_description') ? 'has-error' : '' }}">
                <label for="welcome_description">{{ trans('cruds.welcomemessage.fields.welcome_description') }}</label>
                <textarea rows="5" type="text" id="welcome_description" name="welcome_description" class="form-control" required>{{ $welcomemessage->welcome_description }}</textarea>
                @if($errors->has('welcome_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('welcome_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.welcomemessage.fields.welcome_description_helper') }}
                </p>
            </div>

            <!-- Welcome Description in Arabic-->
            <div class="form-group {{ $errors->has('welcome_description_arabic') ? 'has-error' : '' }}">
                <label for="welcome_description_arabic">{{ trans('cruds.welcomemessage.fields.welcome_description_arabic') }}</label>
                <textarea 
                    rows="5" 
                    type="text" 
                    id="welcome_description_arabic" 
                    name="welcome_description_arabic" 
                    class="form-control text-right" 
                    dir="rtl"
                    required
                >{{ $welcomemessage->welcome_description_arabic}}</textarea>
                @if($errors->has('welcome_description_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('welcome_description_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.welcomemessage.fields.welcome_description_arabic_helper') }}
                </p>
            </div>


            <div class="form-group">
                <label for="sliderBackgroundImageId">Upload Signature: </label>
                <input 
                    type="file" 
                    name="welcome_signature" 
                    id="welcome_signature" 
                    class="form-control"
                    accept="image/jpeg, image/png"
                    onchange="document.getElementById('signature-image-preview').src = window.URL.createObjectURL(this.files[0])"
                >
            </div>

            <div class="form-group">
                <label for="signature-image-preview">Signature Image Preview: </label>
                <img 
                    id="signature-image-preview" 
                    class="d-block border-0 mt-1"  
                    style="height:100px; width:100px;" 
                    src="{{ asset('images/signature/'.$welcomemessage->welcome_signature) }}"
                >
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