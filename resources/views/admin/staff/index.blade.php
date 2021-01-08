@extends('layouts.admin')
@section('content')

@if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
    </div>
@endif

<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route("admin.staff.create") }}">
            {{ trans('global.add') }} {{ trans('cruds.staff.title') }}
        </a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        {{ trans('cruds.staff.title') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Staff">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.staff.fields.staff_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.staff.fields.staff_name_arabic') }}
                        </th>
                        <th>
                            {{ trans('cruds.staff.fields.staff_designation') }}
                        </th>
                        <th>
                            {{ trans('cruds.staff.fields.staff_designation_arabic') }}
                        </th>
                        <th>
                            &nbsp; Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allStaff as $key => $staff)
                        <tr data-entry-id="{{ $staff->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $staff->staff_name ?? '' }}
                            </td>
                            <td>
                                {{ $staff->staff_name_arabic ?? '' }}
                            </td>
                            <td>
                                {{ $staff->staff_designation ?? '' }}
                            </td>
                            <td>
                                {{ $staff->staff_designation_arabic ?? '' }}
                            </td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.staff.show', $staff->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-sm btn-info" href="{{ route('admin.staff.edit', $staff->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.staff.destroy', $staff->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.staff.mass_destroy') }}",
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

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Staff:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection