@extends('layouts.admin')
@section('content')
@if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
    </div>
@endif
<div class="row my-3">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route('admin.research-link.create') }}">
            {{ trans('global.add') }} {{ trans('cruds.research.link.title') }}
        </a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        {{ trans('cruds.research.link.title') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-Research-Basic">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.research.link.fields.research_link') }}
                        </th>
                        <th>
                            {{ trans('cruds.research.link.fields.research_file') }}
                        </th>
                        <th>
                            {{ trans('cruds.research.fields.main_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.research.fields.main_title_arabic') }}
                        </th>
                        <th>
                            &nbsp; Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($research_links as $key => $research)
                        <tr data-entry-id="{{ $research->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $research->research_link_url ?? '' }}
                            </td>
                            <td>
                                <embed src="{{ asset('file/research/'.$research->research_link_upload ) }}" width="800px" height="150px" />
                            </td>
                            <td>
                                {{ $research->research_title ?? '' }}
                            </td>
                            <td dir="rtl" class="text-right">
                                {{ $research->research_title_arabic ?? '' }}
                            </td>

                            <td>
                                <form action="{{ route('admin.research-link.destroy', $research->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
    url: "{{ route('admin.permissions.mass_destroy') }}",
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
  $('.datatable-Research-Basic:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection