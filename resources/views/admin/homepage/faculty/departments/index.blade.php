@extends('layouts.admin')
@section('content')
@if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
    </div>
@endif
@if(Auth::user()->can('users_manage') && Auth::user()->can('editor_add_update'))
    <div style="margin-bottom: 10px;" class="row">
        <div class="d-flex py-2">
            <a class="btn btn-success mx-2" href="{{ route("admin.department.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.faculty.dept.title') }}
            </a>
        </div>
    </div>
@endif

<div class="card">
    <div class="card-header">
        {{ trans('cruds.faculty.dept.title') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Department">
                <thead>
                    <tr>
                        <th>
                            {{ trans('cruds.faculty.dept.fields.faculty') }}
                        </th>

                        <th>
                            {{ trans('cruds.faculty.dept.fields.faculty_dept_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.faculty.dept.fields.faculty_dept_title_arabic') }}
                        </th>
                        <th>
                            {{ trans('cruds.faculty.dept.fields.dept_url') }}
                        </th>
                        
                        <th>
                            &nbsp; Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alldepts as $key => $dept)
                        <tr data-entry-id="{{ $dept->id }}">                          
                            <td>
                                @php
                                    $facultyID = $dept->dept_faculty;
                                    $faculty = App\HomeFaculty::find($facultyID);
                                @endphp
                                {{ $faculty->home_faculty_title }}
                            </td>
                            <td>{{ $dept->dept_name }}</td>
                            <td>{{ $dept->dept_name_arabic }}</td>
                            <td>{{ $dept->dept_url }}</td>
                            <td>
                                <a href="{{ route('admin.department.show', $dept->id) }}" class="btn btn-sm btn-primary">View</a>
                                <a href="{{ route('admin.department.edit', $dept->id) }}" class="btn btn-sm btn-info">Edit</a>
                                @if(Auth::user()->can('users_manage') && Auth::user()->can('editor_add_update'))
                                <form action="{{ route('admin.department.destroy', $dept->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-sm btn-danger" value="{{ trans('global.delete') }}">
                                </form>
                                @endif
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
    
$(function () {
    let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
    @can('users_manage')
    let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
    let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.users.mass_destroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 5,
    lengthMenu: [5, 10, 15, 20, 50, 100]
  });
  $('.datatable-Department:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection