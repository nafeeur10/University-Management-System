@extends('layouts.admin')
@section('content')
@if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
    </div>
@endif
@can('editor_add_update')
    <div style="margin-bottom: 10px;" class="row">
        <div class="d-flex py-2">
            <a class="btn btn-success mx-2" href="{{ route("admin.campuslife.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.campuslife.title') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.campuslife.title') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Campus-Life">
                <thead>
                    <tr>
                        <th width="10">

                        </th>

                        <th>
                            {{ trans('cruds.campuslife.fields.id') }}
                        </th>

                        <th>
                            {{ trans('cruds.campuslife.fields.campus_life_icon') }}
                        </th>

                        <th>
                            {{ trans('cruds.campuslife.fields.campus_life_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.campuslife.fields.campus_life_title_arabic') }}
                        </th>
                        <th>
                            {{ trans('cruds.campuslife.fields.campus_life_description') }}
                        </th>
                        <th>
                            {{ trans('cruds.campuslife.fields.campus_life_description_arabic') }}
                        </th>
                        
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($campuslifes as $key => $campuslife)
                        <tr data-entry-id="{{ $campuslife->id }}">
                            <td></td>
                            <td>{{ $campuslife->id }}</td>
                            <td><img src="{{ asset('images/campuslife/'.$campuslife->campus_life_icon) }}" style="width: 100px;"/></td>                            
                            <td>{{ $campuslife->campus_life_title }}</td>
                            <td>{{ $campuslife->campus_life_title_arabic }}</td>
                            <td>{{ $campuslife->campus_life_home_description }}</td>
                            <td>{{ $campuslife->campus_life_home_description_arabic }}</td>
                            
                            <td>
                                <a href="{{ route('admin.campuslife.show', $campuslife->id) }}" class="btn btn-sm btn-primary">View</a>
                                <a href="{{ route('admin.campuslife.edit', $campuslife->id) }}" class="btn btn-sm btn-info">Edit</a>
                                @can('user_manage')
                                <form action="{{ route('admin.campuslife.destroy', $campuslife->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-sm btn-danger" value="{{ trans('global.delete') }}">
                                </form>
                                @endcan
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
  $('.datatable-Campus-Life:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection