<div class="row">
	<div class="col-lg-12">
		<div class="ibox">
			<div class="ibox-title">
				<h5>Create Exam</h5>
				<div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
			</div>

			<div class="ibox-content">
				<form method="POST" action="/exams" id="form" class="form-horizontal">
					{{ csrf_field() }}
					<div class="form-group">		
						<label class="col-lg-2 control-label" for="subject">Subject:</label>
						<div class="col-lg-6">
							<input type="text" name="subject" id="subject" class="form-control" value="{{ old('subject') }}" required>
						</div>
					</div>

					<div class="form-group">		
						<label class="col-lg-2 control-label" for="description">Description:</label>
						<div class="col-lg-6">
							<input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}" required>
						</div>
					</div>

					<div class="form-group">		
						<label class="col-lg-2 control-label" for="level">Level:</label>
						<div class="col-lg-6">
							<input type="text" name="level" id="level" class="form-control" value="{{ old('level') }}" required>
						</div>
					</div>

					<div class="form-group">		
						<label class="col-lg-2 control-label" for="year">Year:</label>
						<div class="col-lg-6">
							<input type="text" name="year" id="year" class="form-control" value="{{ old('year') }}" required>
						</div>
					</div>

					<div class="form-group">		
						<label class="col-lg-2 control-label" for="school">School:</label>
						<div class="col-lg-6">
							<input type="text" name="school" id="school" class="form-control" value="{{ old('school') }}" required>
						</div>
					</div>

					<div class="form-group">		
						<label class="col-lg-2 control-label" for="accessibility">Accessibility:</label>
						<div class="col-lg-6">
							<input type="text" name="accessibility" id="accessibility" class="form-control" value="{{ old('accessibility') }}" required>
						</div>
					</div>

					<div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            {{-- <button class="btn btn-white" type="submit">Cancel</button> --}}
                            <a href="/exams" class="btn btn-default btn-danger">Cancel</a>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
				</form>
				@include('errors.list')
			</div>
		</div>
	</div>
</div>