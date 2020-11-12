@extends('layouts.admin')
@section('content')

@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.contact.social.title_singular') }}
    </div>

    <form class="form-social-media-edit" action="{{ route("admin.contact.socials.update", [$social_media_details->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf

      <div class="card-body">
        
        <div class="form-group">
            <label for="socialMediaTitle">{{ trans('cruds.contact.social.fields.title') }} *</label>
            <input type="text" name="social_title" class="form-control" value="{{ $social_media_details->title }}" required>
        </div>

        <div class="form-group">
            <label for="socialMediaIcon">{{ trans('cruds.contact.social.fields.icon') }} *</label>
            <input type="text" name="social_icon" class="form-control" value="{{ $social_media_details->icon }}" required>
        </div>

        <div class="form-group">
            <label for="socialMediaLink">{{ trans('cruds.contact.social.fields.link') }} *</label>
            <input type="text" name="social_link" class="form-control" value="{{ $social_media_details->link }}" required>
            <span id="showErrorForSocialMediaLinkUpdate" class="text-danger"></span>
        </div>

      </div>

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>

    </form>

</div>
@endsection