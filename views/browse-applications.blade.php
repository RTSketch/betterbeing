@extends('base')

@section('browsertitle')
    Browse Applications
@stop

@section('content')
    <br>
    <br>
    <h2>Browse Applications</h2>


    @foreach($browseapplications as $item)
        <div class="row">
            <div class="user-post">
                <p class="post-time">{!! date("D d F, Y, g:ia", strtoTime($item->created_at)) !!}</p>
                <h2>{!! $item->title !!}</h2>
                <div class="row">
                    <div class="col span-2-of-3">
                        <img src="{!! $item->img_url !!}" class="post-image">
                    </div>
                    <div class="col span-1-of-3">
                        <div class="form-group">
                            <p>{!! $item->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@stop