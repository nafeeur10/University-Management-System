@extends('layouts.admin')
@section('content')

@if (\Session::has('error'))
    <div class="alert alert-danger">
        {!! \Session::get('error') !!}
    </div>
@endif

@if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
    </div>
@endif


<div class="card">

    <div class="card-body">
        <form 
            action="{{ route('admin.partners.store') }}" 
            method="POST" 
            enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="our-partners-image-preview">{{ trans('global.upload') }} {{ trans('cruds.partners.fields.images') }}</label>
                <div class="input-images"></div>
            </div>

            <!-- Partner Name -->
            <div class="form-group {{ $errors->has('partner_name') ? 'has-error' : '' }}">
                <label for="partner_name">{{ trans('cruds.partners.fields.partner_name') }}*</label>
                <input type="text" id="partner_name" name="partner_name" class="form-control" value="{{ old('partner_name', isset($news) ? $news->partner_name : '') }}" required>
                @if($errors->has('partner_name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('partner_name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.partners.fields.partner_name_helper') }}
                </p>
            </div>


            <!-- Partner Link -->
            <div class="form-group {{ $errors->has('partner_link') ? 'has-error' : '' }}">
                <label for="partner_link">{{ trans('cruds.partners.fields.partner_link') }}*</label>
                <input type="text" id="partner_link" name="partner_link" class="form-control" value="{{ old('partner_link', isset($news) ? $news->partner_link : '') }}" required>
                @if($errors->has('partner_link'))
                    <em class="invalid-feedback">
                        {{ $errors->first('partner_link') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.partners.fields.partner_link_helper') }}
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

$('.input-images').imageUploader({
    preloaded: preloaded,
    imagesInputName: 'ourPartnersImages',
    preloadedInputName: 'old',
    label: 'Drag & Drop files here or click to browse'
}); 


</script>
@endsection