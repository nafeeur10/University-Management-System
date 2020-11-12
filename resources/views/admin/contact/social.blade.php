@extends('layouts.admin')
@section('content')

@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

<!-- Modal -->
<div class="modal fade" id="addSocialMediaModal" tabindex="-1" aria-labelledby="addSocialMediaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

    <form id="socialMediaInformationForm" class="form-social-media">


      <div class="modal-header bg-success white">
        <h5 class="modal-title" id="addSocialMediaModalLabel">Add Social Media Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="form-group">
            <label for="socialMediaTitle">{{ trans('cruds.contact.social.fields.title') }} *</label>
            <input type="text" name="social_title" class="form-control" placeholder="eg. Facebook" required>
        </div>

        <div class="form-group">
            <label for="socialMediaIcon">{{ trans('cruds.contact.social.fields.icon') }} *</label>
            <input type="text" name="social_icon" class="form-control" placeholder="fab fa-facebook-square" required>
        </div>

        <div class="form-group">
            <label for="socialMediaLink">{{ trans('cruds.contact.social.fields.link') }} *</label>
            <input type="text" id="socialMediaLink" name="social_link" class="form-control" placeholder="https://www.facebook.com/eru" required>
            <span id="showErrorForSocialMediaLink" class="text-danger"></span>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="socialMediaInformationFormSubmitButton" class="btn btn-primary">Save changes</button>
      </div>

      </form>
    </div>
  </div>
</div>

@can('editor_add_update')
    <div class="row mb-2">
        <div class="col-lg-12">
            <a class="btn btn-success" href="javascript:void(0)" type="button" data-toggle="modal" data-target="#addSocialMediaModal">
                {{ trans('global.add') }} {{ trans('cruds.contact.social.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card" id="socailMediaInfoTableDiv">
    <div class="card-header">
        {{ trans('cruds.contact.social.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-social">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.contact.social.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.contact.social.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.contact.social.fields.icon') }}
                        </th>
                        <th>
                            {{ trans('cruds.contact.social.fields.link') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($socialContacts as $key => $social)
                        <tr data-entry-id="{{ $social->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $social->id ?? '' }}
                            </td>
                            <td>
                                {{ $social->title ?? '' }}
                            </td>
                            <td>
                                {{ $social->icon ?? '' }}
                            </td>
                            <td>
                                {{ $social->link ?? '' }}
                            </td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.contact.socials.show', $social->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-sm btn-info" href="{{ route('admin.contact.socials.edit', $social->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.contact.socials.destroy', $social->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-sm btn-danger" value="{{ trans('global.delete') }}">
                                </form>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>


@endsection
@section('scripts')
@parent
<script>

function isValidHttpUrl(string) {
  let url;

  try {
    url = new URL(string);
  } catch (_) {
    return false;  
  }

  return url.protocol === "http:" || url.protocol === "https:";
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#socialMediaInformationForm").on('submit', function(e){
    e.preventDefault();

    let link = $("#socialMediaLink").val();
    let isValidLink = isValidHttpUrl(link);

    console.log(isValidLink);

    if(!isValidLink) {
        $("#showErrorForSocialMediaLink").text("Please Enter valid URL!");
    }
    else {

        $("#showErrorForSocialMediaLink").text("");
        var formdata = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: "{{ route('admin.contact.social-media.store') }}",
            data: formdata,
            success: function(res) {
                $('#addSocialMediaModal').modal('hide');
                toastr.success('Social Media Added Successfully!');
                $("#socailMediaInfoTableDiv").load(" #socailMediaInfoTableDiv");
            },
            error: function(err) {
                console.log(err);
            }
        })
    }
    
});
</script>
@endsection