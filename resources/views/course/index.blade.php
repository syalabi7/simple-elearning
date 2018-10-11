@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">My Course</h1>
            <a href="{{ route('course.create') }}" class="btn btn-primary">+ Create Course</a><br><br>
        </div>
</div>
<div class="row">
    @foreach($courses as $course)
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ $course->name }}
                <ul class="pull-right panel-settings panel-button-tab-right">
                    <li class="dropdown">
                        <a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                            <em class="fa fa-chevron-down"></em>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <ul class="dropdown-settings">
                                    <li><a href="#">
                                            <em class="fa fa-pencil"></em> Edit this course
                                        </a></li>
                                </ul>
                                <ul class="dropdown-settings">
                                    <li><a href="#">
                                            <em class="fa fa-trash"></em> Delete this course
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="panel-body articles-container">
                <div class="article border-bottom">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-2 col-md-2 date">
                                <div class="large">30</div>
                                <div class="text-muted">Jun</div>
                                <div class="medium">2018</div>
                            </div>
                            <div class="col-xs-10 col-md-10">
                                <h4>{{ $course->duration }}</h4>
                                <h4>Oleh: Prof. Dr. Orang Pinter, S.Kom</h4>
                                <a href="#" class="btn btn-primary right">View Course</a>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div><!--End .article-->
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection

