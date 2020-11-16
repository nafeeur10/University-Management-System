@extends('layouts.admin')
@section('content')

@if (\Session::has('error'))
    <div class="alert alert-danger">
        {!! \Session::get('error') !!}
    </div>
@endif

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.event.title') }}
    </div>

    <div class="card-body">
        <form 
            action="{{ route('admin.events.update', [$event->id]) }}" 
            method="POST" 
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="event-image-preview">{{ trans('global.upload') }} {{ trans('cruds.event.fields.images') }}</label>
                <div class="input-images"></div>
            </div>

            <input type="hidden" id="event_id" value="{{ $event->id }}">
            
            <div class="form-group {{ $errors->has('event_title') ? 'has-error' : '' }}">
                <label for="event_title">{{ trans('cruds.event.fields.event_title') }}*</label>
                <input type="text" id="event_title" name="event_title" class="form-control" value="{{ old('event_title', isset($event) ? $event->event_title : '') }}" required>
                @if($errors->has('event_title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('event_title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.event_title_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('event_title_arabic') ? 'has-error' : '' }}">
                <label for="event_title_arabic">{{ trans('cruds.event.fields.event_title_arabic') }}*</label>
                <input 
                    type="text" 
                    id="event_title_arabic" 
                    name="event_title_arabic" 
                    class="form-control text-right"
                    dir="rtl" 
                    value="{{ old('event_title_arabic', isset($event) ? $event->event_title_arabic : '') }}" 
                    required
                >
                @if($errors->has('event_title_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('event_title_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.event_title_arabic_helper') }}
                </p>
            </div>


            <div class="form-group {{ $errors->has('event_description') ? 'has-error' : '' }}">
                <label for="event_description">{{ trans('cruds.event.fields.event_description') }}*</label>
                <textarea 
                    type="text" 
                    rows="5"
                    id="event_description" 
                    name="event_description" 
                    class="form-control"  
                    required
                >{{ old('event_description', isset($event) ? $event->event_description : '') }}</textarea>
                @if($errors->has('event_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('event_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.event_description_helper') }}
                </p>
            </div>


            <div class="form-group {{ $errors->has('event_description_arabic') ? 'has-error' : '' }}">
                <label for="event_description_arabic">{{ trans('cruds.event.fields.event_description_arabic') }}*</label>
                <textarea
                    type="text" 
                    rows="5"
                    id="event_description_arabic" 
                    name="event_description_arabic" 
                    class="form-control text-right"
                    dir="rtl" 
                    required
                >{{ old('event_description_arabic', isset($event) ? $event->event_description_arabic : '') }}</textarea>
                @if($errors->has('event_description_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('event_description_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.event_description_arabic_helper') }}
                </p>
            </div>


            <div class="form-group {{ $errors->has('event_date') ? 'has-error' : '' }}">
                <label for="event_date">{{ trans('cruds.event.fields.event_date') }}</label>
                <input 
                    type="date" 
                    id="event_date" 
                    name="event_date" 
                    class="form-control" 
                    required 
                    value="{{ old('event_date', isset($event) ? $event->event_date : '') }}"
                >
                @if($errors->has('event_date'))
                    <em class="invalid-feedback">
                        {{ $errors->first('event_date') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.event_date_helper') }}
                </p>
            </div> 


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('event_start_time') ? 'has-error' : '' }}">
                        <label for="event_start_time">{{ trans('cruds.event.fields.event_start_time') }}</label>
                        <input 
                            type="time" 
                            id="event_start_time" 
                            name="event_start_time" 
                            class="form-control" 
                            required 
                            value="{{ old('event_start_time', isset($event) ? $event->event_start_time : '') }}"
                        >
                        @if($errors->has('event_start_time'))
                            <em class="invalid-feedback">
                                {{ $errors->first('event_start_time') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            {{ trans('cruds.event.fields.event_start_time_helper') }}
                        </p>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('event_end_time') ? 'has-error' : '' }}">
                        <label for="event_end_time">{{ trans('cruds.event.fields.event_end_time') }}</label>
                        <input 
                            type="time" 
                            id="event_end_time" 
                            name="event_end_time" 
                            class="form-control" 
                            required 
                            value="{{ old('event_end_time', isset($event) ? $event->event_end_time : '') }}"
                        >
                        @if($errors->has('event_end_time'))
                            <em class="invalid-feedback">
                                {{ $errors->first('event_end_time') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            {{ trans('cruds.event.fields.event_end_time_helper') }}
                        </p>
                    </div> 
                </div>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
@parent
<script type="text/javascript">
    let preloaded = [];

    let id = $("#event_id").val();
  
    $.ajax({
        url: '/admin/event/images/' + id,
        type: 'GET',
        success: function(res) {
            preloaded = res.images;

            let previousImages = [];

            for(let i = 0; i < preloaded.length; i++) {
                let obj = {
                    id: preloaded[i].id,
                    event_id: preloaded[i].event_id,
                    src: '/images/event/' + preloaded[i].event_image
                };
                previousImages.push(obj);
            }


            $('.input-images').imageUploader({
                preloaded: previousImages,
                imagesInputName: 'eventimages',
                preloadedInputName: 'old',
                label: 'Drag & Drop files here or click to browse'
            }); 
        }, 
        error: function(err) {
            console.log("Error: ", err);
        }
    });


    $(".delete-image").on('click', function(){
        console.log("Delete: ", $(this).parent());
    });
</script>
@endsection