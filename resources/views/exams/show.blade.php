@extends('layout')

@section('content')
	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-success">
	            <div class="panel-heading">
	                Exam Details
	            </div>
	            <div class="panel-body">
	                <dl class="dl-horizontal">
                        <dt>Level:</dt> <dd>{{ $exam->level }}</dd>
                        <dt>Year:</dt> <dd>{{ $exam->year }}</dd>
                        <dt>School:</dt> <dd>{{ $exam->school }}</dd>
                        <dt>Accessibility:</dt> <dd>{{ $exam->accessibility }}</dd>
                        <dt>Description:</dt><dd>{{ $exam->description }}</dd>
                    </dl>

                    @if($user && $user->owns($exam))
						<div class="hr-line-dashed"></div>
		                <div class="row m-t-sm">
		                	<div class="col-lg-12">
		                		<form id="addPapersForm"
		                			  action="/exams/{{ $exam->id }}/papers" 
		                			  method="POST"
		                			  class="dropzone"
		        			  	>
		        			  		{{ csrf_field() }}
		        			  	</form>
		                	</div>
		                </div>
		            @endif		            
	            </div>
	        </div>	        
		</div>

		<div class="col-lg-6">
			<div class="panel panel-success">
	            <div class="panel-heading">
	                Exam Papers
	            </div>
	            <div class="panel-body">
	            	<ul class="folder-list m-b-md" style="padding: 0">
	            		@if(! $exam->papers->count())
	            			<li>No papers uploaded for this exam</li>
	            		@else
		            		@foreach($exam->papers as $paper)
		            			<li>
		            				<div class="row">
		            					<div class="col-sm-10">
		            						<a href="/{{ $paper->path }}" target="_blank">
												<i class="fa fa-cloud-download"></i> {{ $paper->name }}
				            				</a>
		            					</div>
		            					<div class="col-sm-2" style="margin-top:3px">
		            						@if($user && $user->owns($exam))
		            							{!! link_to('Delete', "/papers/{$paper->id}", 'DELETE') !!}
		            						@endif
	            						</div>
		            				</div>
		            			</li>
	                        @endforeach
                        @endif
                    </ul>
		            <a href="/exams" class="btn btn-primary">Back</a>
	            </div>
	        </div>
		</div>
	</div>
@stop

@section('scripts.footer')
	<script>
		Dropzone.options.addPapersForm = {
			paramName: 'paper',
			acceptedFiles: '.pdf'
		};
	</script>
@stop