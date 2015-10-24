@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-2">
            <div class="ibox float-e-margins">
                <div class="ibox-content mailbox-content">
                    <div class="file-manager">
                        <a class="btn btn-block btn-primary compose-mail" href="/exams/create">Upload Exam</a>
                        <div class="space-25"></div>
                        <h5>Grades</h5>
                        <ul class="folder-list m-b-md" style="padding: 0">
                            <li><a href="mailbox.html"> <i class="fa fa-envelope-o"></i> Grade 10</a></li>
                            <li><a href="mailbox.html"> <i class="fa fa-inbox "></i> Grade 12</a></li>
                            <li><a href="mailbox.html"> <i class="fa fa-envelope-o"></i> College 1st Year</a></li>
                            <li><a href="mailbox.html"> <i class="fa fa-certificate"></i> College 2nd Year</a></li>
                            <li><a href="mailbox.html"> <i class="fa fa-file-text-o"></i> College 3rd Year</a></li>
                            <li><a href="mailbox.html"> <i class="fa fa-trash-o"></i> College 4th Year</a></li>
                        </ul>

                        <h5>Categories</h5>
                        <ul class="category-list" style="padding: 0">
                            <li><a href="#"> <i class="fa fa-circle text-navy"></i> Midterm </a></li>
                            <li><a href="#"> <i class="fa fa-circle text-danger"></i> Final</a></li>
                            <li><a href="#"> <i class="fa fa-circle text-primary"></i> Worksheets</a></li>
                            <li><a href="#"> <i class="fa fa-circle text-info"></i> Solutions</a></li>
                            <li><a href="#"> <i class="fa fa-circle text-warning"></i> Assignments</a></li>
                        </ul>

                        <h5 class="tag-title">Tags</h5>
                        <ul class="tag-list" style="padding: 0">
                            <li><a href=""><i class="fa fa-tag"></i> English</a></li>
                            <li><a href=""><i class="fa fa-tag"></i> Maths</a></li>
                            <li><a href=""><i class="fa fa-tag"></i> Physics</a></li>
                            <li><a href=""><i class="fa fa-tag"></i> Chemistry</a></li>
                            <li><a href=""><i class="fa fa-tag"></i> Law</a></li>
                            <li><a href=""><i class="fa fa-tag"></i> Music</a></li>
                            <li><a href=""><i class="fa fa-tag"></i> Photography</a></li>
                            <li><a href=""><i class="fa fa-tag"></i> Film</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-10 animated fadeInRight">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>All Exams List</h5>
                    <div class="ibox-tools">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Clear Filter</a></li>
                            <li><a href="#">Suggestions</a></li>
                            <li><a href="#">Report</a></li>
                        </ul>
                    </div>
                </div>

                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-6 m-b-xs">
                            <div data-toggle="buttons" class="btn-group">
                                <label class="btn btn-sm btn-white active">
                                    <input type="radio" id="option2" name="options"> Grade 10
                                </label>
                                <label class="btn btn-sm btn-white">
                                    <input type="radio" id="option3" name="options"> Grade 12
                                </label>
                                <label class="btn btn-sm btn-white">
                                    <input type="radio" id="option3" name="options"> College
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="text" placeholder="Search" class="input-sm form-control">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-sm btn-primary"> Go!</button>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Subject </th>
                                    <th>Year </th>
                                    <th>Level </th>
                                    <th>Date </th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($exams as $exam)
                                    <tr>
                                        <td>
                                            <a href="{{ URL::to('exams/'.$exam->id) }}">{!! $exam->subject !!}</a>
                                        </td>
                                        <td>{!! $exam->year !!}</td>
                                        <td>{!! $exam->level !!}</td>
                                        <td>{!! $exam->created_at->diffForHumans() !!}</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop