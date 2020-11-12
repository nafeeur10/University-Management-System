@extends('layouts.admin')
@section('content')

@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

<form action="{{ route("admin.contact.store") }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('admin.contact._contact_partials.general_contact')
    @include('admin.contact._contact_partials.map')
    <button type="submit" class="btn btn-success btn-lg">Update</button>
</form>


@endsection
@section('scripts')
@parent
<script>

  
    var loadFile = function(event, id) 
    {
        var reader = new FileReader();
        reader.onload = function(){
        var output = document.getElementById(id);
        output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
  
  
</script>
@endsection