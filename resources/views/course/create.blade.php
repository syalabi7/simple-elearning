@extends('layouts.master')

@section('content')
<br>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create Course
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{ route('course.store') }}" method="post">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Course Name</label>
                            <div class="col-md-9">
                                <input name="coursename" type="text" placeholder="Course Name" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Duration</label>
                            <div class="col-md-9">
                                <input name="duration" type="text" placeholder="Duration" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="description" placeholder="Please enter the description here..." rows="5"></textarea>
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                            <div class="col-md-11 widget-right">
                                <button type="submit" class="btn btn-default btn-md pull-right">Create Course</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

