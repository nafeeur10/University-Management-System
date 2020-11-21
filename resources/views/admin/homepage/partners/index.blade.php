@extends('layouts.admin')
@section('content')

@if (\Session::has('error'))
    <div class="alert alert-danger">
        {!! \Session::get('error') !!}
    </div>
@endif

@if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
    </div>
@endif

@can(['editor_add_update'])
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.partners.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.partners.title') }}
            </a>
        </div>
    </div>
@endcan

<div class="card-body">
    <div class="table-responsive">
        <table class=" table table-bordered table-striped table-hover datatable datatable-Home-Our-Partners">
            <thead>
                <tr>
                    <th width="10">

                    </th>

                    <th>
                        {{ trans('cruds.partners.fields.id') }}
                    </th>

                    <th>
                        {{ trans('cruds.partners.fields.logo') }}
                    </th>

                    <th>
                        {{ trans('cruds.partners.fields.partner_name') }}
                    </th>

                    <th>
                        {{ trans('cruds.partners.fields.partner_link') }}
                    </th>
                    
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($partners as $key => $partner)
                    <tr data-entry-id="{{ $partner->id }}">
                        <td></td>
                        <td>{{ $partner->id }}</td>
                        <td>{{ $partner->partner_image }}</td>
                        <td>{{ $partner->partner_name }}</td>
                        <td>{{ $partner->partner_link }}</td>
                        <td>
                            <a href="{{ route('admin.partners.show', $partner->id) }}" class="btn btn-sm btn-primary">View</a>
                            <a href="{{ route('admin.partners.edit', $partner->id) }}" class="btn btn-sm btn-info">Edit</a>
                            
                            <form action="{{ route('admin.partners.destroy', $partner->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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


@endsection

@section('scripts')
@parent
<script type="text/javascript">


$(function () {
    let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
    @can("users_manage")
    let deleteButtonTrans = "{{ trans('global.datatables.delete') }}"
    let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.users.mass_destroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert("{{ trans('global.datatables.zero_selected') }}")

        return
      }

      if (confirm("{{ trans('global.areYouSure') }}")) {
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
  $('.datatable-Home-Our-Partners:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

let preloaded = [];

$.ajax({
    url: '/admin/partners/create',
    type: 'GET',
    success: function(res) {
        preloaded = res.images;
        //console.log("Partners: ", res.images)
        let previousImages = [];

        for(let i = 0; i < preloaded.length; i++) 
        {
            let obj = {
                id: preloaded[i].id,
                src: '/images/partners/' + preloaded[i].partner_image
            };
            previousImages.push(obj);
        }


        $('.input-images').imageUploader({
            preloaded: previousImages,
            imagesInputName: 'ourPartnersImages',
            preloadedInputName: 'old',
            label: 'Drag & Drop files here or click to browse'
        }); 
    }, 
    error: function(err) {
        console.log("Error: ", err);
    }
});
</script>
@endsection