@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                {{ $title }}
                <div id="md-text">
                    {{ $content_md }}
                </div>
            </div>
            <div class="col-sm-3">
                <div class="markdown-body editormd-preview-container" id="custom-toc-container">#custom-toc-container</div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('/script/frontend/article.js') }}" ></script>
@stop

