@extends('layouts.master')

@section('content')
    @include('wiki.partials.menu')
    <div class="aside-content">
        <div class="row no-container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div style="border: 1px solid #eee; border-radius: 3px; margin-bottom: 20px; box-shadow: 0 1px 1px rgba(0,0,0,.05);">
                    <div class="wiki-nav">
                        <nav>
                            <ul class="list-unstyled list-inline pull-left">
                                <li>
                                    <a href="#"><i class="fa fa-tasks fa-lg icon"></i> Add to Read list</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-check-square-o icon"></i> Insert into Shortcut</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled list-inline pull-right">
                                <li>
                                    <a href="{{ route('pages.edit', [$team->slug, $space->slug, $wiki->slug, $page->slug]) }}"><i class="fa fa-pencil fa-lg icon"></i> Edit</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear fa-lg icon"></i> Settings</a>
                                    <ul class="dropdown-menu dropdown-menu-right" style="margin-top: 8px; padding: 4px 5px;">
                                        <li><a href="#" style="padding: 5px 6px;"><i class="fa fa-info-circle fa-fw"></i> Page Overview</a></li>
                                        <li><a href="#" style="padding: 5px 6px;"><i class="fa fa-history fa-fw"></i> Page History</a></li>
                                        <li class="divider" style="margin: 0;"></li>
                                        <li><a href="#" style="padding: 5px 6px;"><i class="fa fa-file-pdf-o fa-fw"></i> Export to PDF</a></li>
                                        <li><a href="#" style="padding: 5px 6px;"><i class="fa fa-file-word-o fa-fw"></i> Export to Word</a></li>
                                        <li class="divider" style="margin: 0;"></li>
                                        <li>
                                            <a href="{{ route('pages.destroy', [$team->slug, $space->slug, $wiki->slug, $page->slug]) }}" style="padding: 5px 6px;" data-method="delete" data-confirm="Are you sure?"><i class="fa fa-trash-o fa-fw"></i> Delete</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </nav>
                    </div>
                    <div class="markdown-body" style="padding: 0px 25px;">
                        @if($page->description)
                            {!! $page->description !!}
                        @else 
                            <span style="font-size: 22px; font-weight: 700; line-height: 26px;">...</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div style="border: 1px solid #eee; border-radius: 3px; margin-bottom: 20px; box-shadow: 0 1px 1px rgba(0,0,0,.05); padding: 12px 15px;">
                    <div class="media">
                        <div class="pull-left" style="padding-right: 12px;">
                            <p class="media-object"><i class="fa fa-tag fa-fw"></i> Tags:</p>
                        </div>
                        <div class="media-body" style="line-height: 26px;">
                            @if($pageTags->count() > 0)
                                <ul class="list-unstyled list-inline page-tags pull-left">                                
                                    @foreach($pageTags as $tag)
                                        <li>
                                            <a href="#">{{ $tag->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <h1 class="nothing-found" style="margin: 0px; line-height: 20px;"><i class="fa fa-exclamation-triangle fa-fw icon"></i> Nothing found</h1>
                            @endif  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @include('page.partials.comment')
            </div>
        </div>
    </div>
@endsection