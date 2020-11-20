@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.latest_newstitle') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.latest_news.fields.id') }}
                        </th>
                        <td>
                            {{ $news->id }}
                        </td>
                    </tr>


                    <tr>
                        <th>
                            {{ trans('cruds.latest_news.fields.news_home_title') }}
                        </th>
                        <td>
                            {{ $news->news_home_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.latest_news.fields.news_home_title_arabic') }}
                        </th>
                        <td class="text-right" dir="rtl">
                            {{ $news->news_home_title_arabic }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.latest_news.fields.news_home_description') }}
                        </th>
                        <td>
                            {{ $news->news_home_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.latest_news.fields.news_home_description_arabic') }}
                        </th>
                        <td class="text-right" dir="rtl">
                            {{ $news->news_home_description_arabic }}
                        </td>
                    </tr>



                    <tr>
                        <th>
                            {{ trans('cruds.latest_news.fields.news_single_title') }}
                        </th>
                        <td>
                            {{ $news->news_single_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.latest_news.fields.news_single_title_arabic') }}
                        </th>
                        <td class="text-right" dir="rtl">
                            {{ $news->news_single_title_arabic }}
                        </td>
                    </tr>


                    <tr>
                        <th>
                            {{ trans('cruds.latest_news.fields.news_description') }}
                        </th>
                        <td>
                            {{ $news->news_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.latest_news.fields.news_description_arabic') }}
                        </th>
                        <td class="text-right" dir="rtl">
                            {{ $news->news_description_arabic }}
                        </td>
                    </tr>


                    <tr>
                        <th>
                            {{ trans('cruds.latest_news.fields.news_slider_description') }}
                        </th>
                        <td>
                            {{ $news->news_slider_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.latest_news.fields.news_slider_description_arabic') }}
                        </th>
                        <td class="text-right" dir="rtl">
                            {{ $news->news_slider_description_arabic }}
                        </td>
                    </tr>



                    <tr>
                        <th>
                            {{ trans('cruds.latest_news.fields.news_date') }}
                        </th>
                        <td>
                            {{ $news->news_date }}
                        </td>
                    </tr>


                </tbody>
            </table>

            <div class="my-2">
                @foreach($latestNewsImages as $key => $image)
                    <img src="{{ asset('images/news/' . $image->latest_news_image ) }}" 
                        class="mr-2" 
                        style="width: 250px; object-fit:cover;"/>
                @endforeach
            </div>
            <a style="margin-top:20px;" class="btn btn-primary" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection