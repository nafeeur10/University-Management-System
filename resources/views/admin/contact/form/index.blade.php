@extends('layouts.admin')
@section('content')

@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

<div class="row">
    <div class="col-md-6">
        @include('admin.contact.form._form_partials.department')
    </div>
    <div class="col-md-6">
        @include('admin.contact.form._form_partials.issue')
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