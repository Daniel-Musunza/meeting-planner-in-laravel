@extends('layouts.app')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            <noscript>
                <div class="alert alert-icon-left alert-danger alert-dismissible mb-2" id="no-script" role="alert">
                    <span class="alert-icon"><i class="fa fa-info"></i></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    For full functionality of this site, it is necessary to enable JavaScript.
                    Here are the <a href="">instructions on how to enable JavaScript in your web browser</a>.
                </div>
            </noscript>
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-5 box-shadow-2 p-0 plain-container">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <div class="p-1">
                                        <h3>New Meeting</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body login">
                                    @auth
                                    <form class="form-horizontal form-simple" action="{{ route('posts.store') }}" method="post">
                                        @csrf
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" name="title" class="form-control form-control-lg input-lg rounded-lg @error('title') border-red-500 @enderror" placeholder="Title" required>
                                            @error('title')
                                                <div class="text-red-500 mt-2 text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" name="platform" class="form-control form-control-lg input-lg rounded-lg @error('platform') border-red-500 @enderror" placeholder="Platform (zoom, Google meet, etc)">
                                            @error('platform')
                                                <div class="text-red-500 mt-2 text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" name="link" class="form-control form-control-lg input-lg rounded-lg @error('link') border-red-500 @enderror" placeholder="Link">
                                            @error('link')
                                                <div class="text-red-500 mt-2 text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="date" name="date" class="form-control form-control-lg input-lg rounded-lg @error('date') border-red-500 @enderror" required placeholder="Select a date">
                                            @error('date')
                                                <div class="text-red-500 mt-2 text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="time" name="time" class="form-control form-control-lg input-lg rounded-lg @error('time') border-red-500 @enderror" required placeholder="Select a time">
                                            @error('time')
                                                <div class="text-red-500 mt-2 text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </fieldset>
                                        <button type="submit" class="btn blue-bg btn-lg btn-block">
                                            Add
                                        </button>
                                    </form>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection

