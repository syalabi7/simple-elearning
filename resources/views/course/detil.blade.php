@extends('layouts.master')

@section('content')
<br>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Nama Kursus
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
                            <div class="col-xs-12 col-md-12">
                                <table class=" table table-borderless table-bordered">
                                    <tr>
                                        <td>Date</td>
                                        <td>30 June 2018</td>
                                    </tr>
                                    <tr>
                                        <td>Duration</td>
                                        <td>2 Hours</td>
                                    </tr>
                                    <tr>
                                        <td>Pemateri</td>
                                        <td>Prof. Dr. Orang Pinter, S.Kom.</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div><!--End .article-->
            </div>
        </div>
    </div>
</div>
@stop

