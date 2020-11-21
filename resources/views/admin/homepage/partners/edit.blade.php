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
            action="{{ route('admin.partners.update', [$partner->id]) }}" 
            method="POST" 
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="our-partners-image-preview">{{ trans('global.upload') }} {{ trans('cruds.partners.fields.images') }}</label>
                <div class="input-images"></div>
            </div>

            <input type="hidden" value="{{ $partner->id }}" id="partner_id">

            <!-- Partner Name -->
            <div class="form-group {{ $errors->has('partner_name') ? 'has-error' : '' }}">
                <label for="partner_name">{{ trans('cruds.partners.fields.partner_name') }}*</label>
                <input type="text" id="partner_name" name="partner_name" class="form-control" value="{{ old('partner_name', isset($partner) ? $partner->partner_name : '') }}" required>
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
                <input type="text" id="partner_link" name="partner_link" class="form-control" value="{{ old('partner_link', isset($partner) ? $partner->partner_link : '') }}" required>
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
let partnerID = $("#partner_id").val();

$.ajax({
    url: '/admin/partners/get-image/' + partnerID,
    type: 'GET',
    success: function(res) {
        preloaded = res.images;
        let previousImages = [];

        console.log("Image: ", preloaded);
        
        let obj = {
            id: partnerID,
            src: '/images/partners/' + preloaded
        };
        previousImages.push(obj);
        
        $('.input-images').imageUploader({
            preloaded: previousImages,
            imagesInputName: 'ourPartnersImages',
            preloadedInputName: 'old',
            label: 'Drag & Drop files here or click to browse'
        });
    }, 
    error: function(err) {
        console.log("Error: ", err);
    }
});


</script>
@endsection