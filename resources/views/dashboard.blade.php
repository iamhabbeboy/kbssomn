@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-md-offset-3">
                        <div class="card">
                            <div class="card-header">
                                Welcome
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8" style="font-size:12px">

                                        @if( ! array_get($students, 'dob'))
                                            <div class="alert-info alert"><b>Please complete your information  </b></div>
                                        @endif
                                        <p>
                                            <b>Name: </b> {{ array_get($students, 'student_info.name') }}
                                        </p>
                                        <p>
                                            <b> Email Address: </b> {{ array_get($students, 'student_info.email') }}
                                        </p>

                                        <p>
                                            <b> Student No.: </b> <span style="color: green;">
                                            {{ array_get($students, 'student_no') }}
                                            </span>
                                        </p>

                                        <a href="{{ route('home') }}">Edit Information </a> &nbsp;
                                        <a href="{{ route('form') }}" class="btn btn-info btn-sm" style="color: #FFF;font-size:12px;">Obtain Form</a>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="profile-holder">
                                            <h4>Image </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop