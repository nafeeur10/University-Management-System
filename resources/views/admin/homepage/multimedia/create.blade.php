@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ trans('cruds.multimedia.upload_image') }}</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form action="{{ route('admin.multimedia.store') }}" enctype="multipart/form-data" method="POST" class="dropzone" id="dropzone">
                        @csrf
                        <div class="dz-message">Drop Files Here To Upload</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@parent
<script>

    Dropzone.options.dropzone = {
        maxFilesize: 12,
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
            return time+file.name;
        },
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        timeout: 5000,
        success: function(file, response) {
            toastr.success("Image uploaded Successfully");
            setTimeout(function() {
                window.location = '/admin/multimedia';
            }, 3000)
            
            console.log(response);
        },
        error: function(file, response) {
            return false;
        }
    };

</script>
@endsection