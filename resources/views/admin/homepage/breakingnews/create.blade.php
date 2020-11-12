@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.homepagecontent.breakingnews.title_singular') }}
    </div>

    <div class="card-body">
        <form 
            action="{{ route('admin.breakingnews.store') }}" 
            method="POST" 
            enctype="multipart/form-data">
            @csrf

            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.breakingnews.fields.title') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($breakingnews) ? $breakingnews->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.breakingnews.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('name_arabic') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.breakingnews.fields.title_arabic') }}*</label>
                <input 
                    type="text" 
                    id="name_arabic" 
                    name="name_arabic" 
                    class="form-control" 
                    value="{{ old('name', isset($breakingnews) ? $breakingnews->name_arabic : '') }}" 
                    required
                    dir="rtl"
                >
                @if($errors->has('name_arabic'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name_arabic') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.breakingnews.fields.name_arabic_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('news_link') ? 'has-error' : '' }}">
                <label for="news_link">{{ trans('cruds.breakingnews.fields.news_link') }}</label>
                <input type="text" id="news_link" name="news_link" class="form-control" value="{{ old('news_link', isset($breakingNews) ? $breakingNews->news_link : '') }}">
                @if($errors->has('news_link'))
                    <em class="invalid-feedback">
                        {{ $errors->first('news_link') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.breakingnews.fields.news_link_helper') }}
                </p>
            </div>


            <div class="form-group {{ $errors->has('breaking_news_start_time') ? 'has-error' : '' }}">
                <label for="breaking_news_start_time">{{ trans('cruds.breakingnews.fields.start_time') }}*</label>
                <input type="date" id="breaking_news_start_time" name="breaking_news_start_time" class="form-control" value="{{ old('breaking_news_start_time', isset($breakingNews) ? $breakingNews->breaking_news_start_time : '') }}">
                @if($errors->has('breaking_news_start_time'))
                    <em class="invalid-feedback">
                        {{ $errors->first('breaking_news_start_time') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.breakingnews.fields.start_time_helper') }}
                </p>
            </div>


            <div class="form-group {{ $errors->has('breaking_news_end_time') ? 'has-error' : '' }}">
                <label for="breaking_news_end_time">{{ trans('cruds.breakingnews.fields.end_time') }}</label>
                <input type="date" id="breaking_news_end_time" name="breaking_news_end_time" class="form-control" value="{{ old('breaking_news_start_time', isset($breakingNews) ? $breakingNews->news_end_time : '') }}">
                @if($errors->has('breaking_news_end_time'))
                    <em class="invalid-feedback">
                        {{ $errors->first('breaking_news_end_time') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.breakingnews.fields.end_time_helper') }}
                </p>
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
</script>
@endsection