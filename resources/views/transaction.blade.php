@extends('layouts.data')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table" style="font-size: 12px;">
                                <tr>
                                    <th>#</th>
                                    <th>Student No. </th>
                                    <th>Full Name</th>
                                    <th>Email Address</th>
                                    <th>Date</th>
                                </tr>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    <script>
        /*$(function() {
            const elem = $('#profile')
            elem.click(function() {
                const photo = $('#photo').click();
            })
        })*/

        {{--  @if($params == 'success')
            alert('Updated Successfully ');
            window.location = '/home'
        @endif  --}}
    </script>
@stop
