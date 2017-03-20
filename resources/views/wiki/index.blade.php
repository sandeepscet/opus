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
                                	<a href="#"><i class="fa fa-eye icon"></i> Watch</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-tasks icon"></i> Add to Read list</a>
                                </li>
                                <li>
									<a href="#"><i class="fa fa-check-square-o icon"></i> Insert into Shortcut</a>
								</li>
                            </ul>
                            <ul class="list-unstyled list-inline pull-right">
                                <li>
                                    <a href="{{ route('wikis.edit', [$team->slug, $space->slug, $wiki->slug, ]) }}"><i class="fa fa-pencil icon"></i> Edit</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear icon"></i> Settings</a>
                                    <ul class="dropdown-menu dropdown-menu-right" style="margin-top: 8px; padding: 4px 5px;">
                                        <li><a href="#" style="padding: 5px 6px;"><i class="fa fa-info-circle fa-fw"></i> Page Overview</a></li>
				                        <li><a href="#" style="padding: 5px 6px;"><i class="fa fa-history fa-fw"></i> Page History</a></li>
										<li class="divider" style="margin: 0;"></li>
										<li><a target="_blank" href="{{ route('wikis.exportToPdf', [$team->slug, $space->slug, $wiki->slug, ]) }}" style="padding: 5px 6px;"><i class="fa fa-file-pdf-o fa-fw"></i> Export to PDF</a></li>
				                        <li><a href="#" style="padding: 5px 6px;"><i class="fa fa-file-word-o fa-fw"></i> Export to Word</a></li>
										<li class="divider" style="margin: 0;"></li>
										<li>
											<a href="#" onclick="if(confirm('Are you sure you want to delete wiki?')) {event.preventDefault(); document.getElementById('delete-wiki').submit();}" style="padding: 5px 6px;"><i class="fa fa-trash-o fa-fw"></i> Delete</a>
											<form id="delete-wiki" action="{{ route('wikis.destroy', [$team->slug, $wiki->space->slug, $wiki->slug]) }}" method="POST" class="hide">
												{!! method_field('delete') !!}
												{!! csrf_field() !!}
											</form>
										</li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </nav>
                    </div>
                    <div class="markdown-body" style="padding: 0px 25px;">
                        @if($wiki->description)
                            {!! $wiki->description !!}
                        @else 
                            <span style="font-size: 22px; font-weight: 700; line-height: 26px;">...</span>
                        @endif
                    </div>
                </div>
			</div>
		</div>
		<div class="row no-container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @include('wiki.partials.comment')
            </div>
        </div>
	</div>
@endsection