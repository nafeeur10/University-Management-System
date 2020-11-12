<!-- Modal -->
<div class="modal fade" id="addDepartmentModal" tabindex="-1" aria-labelledby="addDepartmentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

    <form id="contactDepartmentForm" class="form-social-media">


      <div class="modal-header bg-success white">
        <h5 class="modal-title" id="addSocialMediaModalLabel">{{ trans('global.add') }} {{ trans('cruds.contact.form.title_department') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="form-group">
            <label for="contactDepartmentTitle">{{ trans('cruds.contact.form.department.name') }} *</label>
            <input type="text" name="department_title" class="form-control" placeholder="Computer Science" required>
        </div>

        <div class="form-group">
            <label for="contactDepartmentEmail">{{ trans('cruds.contact.form.department.email') }} *</label>
            <input type="email" name="department_email" class="form-control" placeholder="email@example.com" required>
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
            <a class="btn btn-success" href="javascript:void(0)" type="button" data-toggle="modal" data-target="#addDepartmentModal">
                {{ trans('global.add') }} {{ trans('cruds.contact.form.title_department') }}
            </a>
        </div>
    </div>
@endcan

<div class="card" id="contactDepartmentTableDiv">
    <div class="card-header">
        {{ trans('cruds.contact.form.title_department') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-social">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.contact.form.department.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.contact.form.department.email') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contactDepartment as $key => $social)
                        <tr data-entry-id="{{ $social->id }}">
                            <td>
                                {{ $social->department_name ?? '' }}
                            </td>
                            <td>
                                {{ $social->department_email ?? '' }}
                            </td>
                            <td>
                                <form action="{{ route('admin.contactform.destroy', $social->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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

@section('scripts')
@parent
<script>

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#contactDepartmentForm").on('submit', function(e){
    e.preventDefault();

    var formdata = $(this).serialize();

    $.ajax({
        type: 'POST',
        url: "{{ route('admin.contactform.store') }}",
        data: formdata,
        success: function(res) {
            $('#addDepartmentModal').modal('hide');
            toastr.success('Department Added Successfully!');
            $("#contactDepartmentTableDiv").load(" #contactDepartmentTableDiv");
            $('#contactDepartmentForm').trigger("reset");
        },
        error: function(err) {
            console.log(err);
        }
    })
});
</script>
@endsection