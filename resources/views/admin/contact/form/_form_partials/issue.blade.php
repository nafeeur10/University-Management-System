<!-- Modal -->
<div class="modal fade" id="contactIssueFormModal" tabindex="-1" aria-labelledby="contactIssueFormModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

    <form id="contactIssueForm" class="form-social-media">


      <div class="modal-header bg-success white">
        <h5 class="modal-title" id="contactIssueFormModalLabel">{{ trans('global.add') }} {{ trans('cruds.contact.form.title_issue') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="form-group">
            <label for="contactIssueTitle">{{ trans('cruds.contact.form.issue.name') }} *</label>
            <input type="text" name="issue_title" class="form-control" placeholder="eg. Blocking" required>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="contactIssueFormSubmitButton" class="btn btn-primary">Save changes</button>
      </div>

      </form>
    </div>
  </div>
</div>


@can('editor_add_update')
    <div class="row mb-2">
        <div class="col-lg-12">
            <a class="btn btn-success" href="javascript:void(0)" type="button" data-toggle="modal" data-target="#contactIssueFormModal">
                {{ trans('global.add') }} {{ trans('cruds.contact.form.title_issue') }}
            </a>
        </div>
    </div>
@endcan

<div class="card" id="contactIssueTableDiv">
    <div class="card-header">
        {{ trans('cruds.contact.form.title_issue') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-social">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.contact.form.issue.name') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contactIssues as $key => $social)
                        <tr data-entry-id="{{ $social->id }}">
                            <td>
                                {{ $social->contact_issues ?? '' }}
                            </td>
                            <td>

                                <form action="{{ route('admin.contactform_issue.destroy', $social->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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

$("#contactIssueForm").on('submit', function(e){
    e.preventDefault();

    var formdata = $(this).serialize();

    $.ajax({
        type: 'POST',
        url: "{{ route('admin.contactform_issue') }}",
        data: formdata,
        success: function(res) {
            $('#contactIssueFormModal').modal('hide');
            toastr.success('Department Added Successfully!');
            $("#contactIssueTableDiv").load(" #contactIssueTableDiv");
            $('#contactIssueForm').trigger("reset");
        },
        error: function(err) {
            console.log(err);
        }
    })
});
</script>
@endsection