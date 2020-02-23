@extends('layouts.main')

@section('content')
<div class="col-md-12 padding-20">
    <div class="row">
        <!-- BREADCRUMBS -->
        <div class="breadcrumb-container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('home') }}">Inicio</a>
                </li>
                <li>
                    {{ $article->category->name }}
                </li>
                <li class="active">{{ $article->title }}</li>
            </ol>
        </div>
        <!-- END BREADCRUMBS -->
        <!-- ARTICLE  -->
        <div class="panel panel-default">
            <div class="article-heading margin-bottom-5">
                <i class="fa fa-pencil-square-o"></i> {{ $article->title }}
            </div>
            <div class="article-info">
                <div class="art-date">
                    <i class="fa fa-calendar-o"></i> {{ $article->created_at }}
                </div>
            </div>
            <div class="article-content">
                {!! $article->full_text !!}
            </div>
        </div>
    </div>
</div>
@endsection
