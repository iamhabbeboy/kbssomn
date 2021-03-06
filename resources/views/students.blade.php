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

                            @if(count( $students) > 0)

                                <table class="table" style="font-size: 12px;">
                                    <tr>
                                        <th>#</th>
                                        <th>Student No. </th>
                                        <th>Full Name</th>
                                        <th>Email Address</th>
                                        <th>Phone Number </th>
                                        <th>Address</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>Date</th>
                                    </tr>
                                    @foreach ($students as $key => $student)
                                        <tr>
                                            <td> {{ $key+1 }}</td>
                                            <td> {{ array_get($student, 'student_no', '') }}</td>
                                            <td> {{ array_get($student, 'student_info.name', '') }}</td>
                                            <td> {{ array_get($student, 'student_info.email', '') }}</td>
                                            <td> {{ array_get($student, 'phone', '') }}</td>
                                            <td> {{ array_get($student, 'address', '') }}</td>
                                            <td> {{ array_get($student, 'country', '') }} </td>
                                            <td> {{ array_get($student, 'state', '') }}</td>
                                            <td> {{ array_get($student, 'student_info.created_at', '') }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            @endif
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
