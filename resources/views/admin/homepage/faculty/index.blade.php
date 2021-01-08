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
            <a class="btn btn-success mx-2" href="{{ route("admin.faculty.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.faculty.title') }}
            </a>
            <a class="btn btn-primary mr-2" href="{{ route('admin.faculty_tabs.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.faculty.tabs.title') }}
            </a>
        </div>
    </div>
@endif

<div class="card">
    <div class="card-header">
        {{ trans('cruds.faculty.title') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Home-Faculty">
                <thead>
                    <tr>

                        <th>
                            {{ trans('cruds.faculty.fields.home_faculty_image') }}
                        </th>

                        <th>
                            {{ trans('cruds.faculty.fields.home_faculty_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.faculty.fields.home_faculty_title_arabic') }}
                        </th>
                        <th>
                            {{ trans('cruds.faculty.fields.home_faculty_description') }}
                        </th>
                        <th>
                            {{ trans('cruds.faculty.fields.home_faculty_description_arabic') }}
                        </th>

                        <th>
                            {{ trans('cruds.faculty.fields.home_faculty_link') }}
                        </th>
                        
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($faculties as $key => $faculty)
                        <tr data-entry-id="{{ $faculty->id }}">
                            
                            <td><img src="{{ asset('images/faculty/'.$faculty->home_faculty_image) }}" style="width: 100px;"/></td>                            
                            <td>{{ $faculty->home_faculty_title }}</td>
                            <td>{{ $faculty->home_faculty_title_arabic }}</td>
                            <td>{{ $faculty->home_faculty_description }}</td>
                            <td>{{ $faculty->home_faculty_description_arabic }}</td>
                            <td>{{ $faculty->home_faculty_link }}</td>
                            <td>
                                <a href="{{ route('admin.faculty.show', $faculty->id) }}" class="btn btn-sm btn-primary">View</a>
                                <a href="{{ route('admin.faculty.edit', $faculty->id) }}" class="btn btn-sm btn-info">Edit</a>
                                @if(Auth::user()->can('users_manage') && Auth::user()->can('editor_add_update'))
                                <form action="{{ route('admin.faculty.destroy', $faculty->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
    pageLength: 100,
  });
  $('.datatable-Home-Faculty:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection