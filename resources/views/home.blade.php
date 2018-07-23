@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-8">
                            <form action="/user-profile" method="POST">
                                @csrf()
                                <div class="alert alert-info"><b>Note:</b> Complete your information</div>

                                <input type="hidden" name="studentID"
                                value="{{ array_get($student, 'id', '') }}">
                                <label for="">Full Name</label>
                                <input type="text" class="form-control" required
                                value="{{ array_get($student, 'student_info.name', '') }}">
                                <label for="">Email Address</label>
                                <input type="text" class="form-control" required
                                value="{{ array_get($student, 'student_info.email', '') }}" disabled>

                                <label for="">Student No.</label>
                                <input type="text" class="form-control" disabled name="student_no"
                                value="{{ array_get($student, 'student_no', '') }}">

                                <input type="hidden" value="{{ array_get($student, 'student_no', '') }}"
                                name="student_no">

                                <hr>


                                <label for="">Date of Birth</label>
                                <input type="date" class="form-control" placeholder="Select Date"
                                name="dob" value="{{ array_get($student, 'dob', '')}}">

                                <label for="">Phone Number</label>
                                <input type="text" class="form-control" required name="phone_number"
                                value="{{ array_get($student, 'phone', '')}}">

                                <label for="">Country</label>
                                <select name="country" id="" class="form-control" required>
                                    <option value="">select</option>
                                    <option value="nigeria" {{(array_get($student, 'country', '') == 'nigeria' ? 'selected': '')}}>Nigeria</option>
                                </select>
                                <label for="">State</label>
                                <select name="state" id="" class="form-control" required>
                                    <option value="">select</option>
                                    <option value="lagos" {{(array_get($student, 'state', '') == 'lagos' ? 'selected': '')}}>Lagos</option>
                                    <option value="ogun" {{(array_get($student, 'state', '') == 'ogun' ? 'selected': '')}}>Ogun</option>
                                    <option value="kaduna" {{(array_get($student, 'state', '') == 'kaduna' ? 'selected': '')}}>Kaduna</option>
                                </select>
                                <label for="">LGA</label>
                                <select name="lga" id="" class="form-control" required>
                                    <option value="">select</option>
                                    <option value="alimosho" {{(array_get($student, 'lga', '') == 'alimosho' ? 'selected': '')}}>Alimosho</option>
                                </select>

                                <label for="">Address</label>
                                <textarea name="address" id="" rows="2" class="form-control" required>{{ array_get($student, 'address', '')}}</textarea>
                                <p></p>
                                <button class="btn btn-success btn-lg">Submit</button>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class="profile-holder">
                                <h4>Image </h4>
                            </div>
                            <div class="profile-pix">
                                <a href="#" id="profile"><img src="{{ asset('images/plus.png')}}" alt="" class="image"></a>
                            </div>
                            <form method="POST" action="/ajax-photo" enctype="multipart/form-data">
                                <input type="file" name="photo" id="photo" style="visibility:hidden;height:1px;">
                            </form>
                            {{--  <div style="margin: auto;text-align:center">
                                <button class="btn btn-info btn-sm">Choose</button>
                            </div>  --}}
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

        @if($params == 'success')
            alert('Updated Successfully ');
            window.location = '/home'
        @endif
    </script>
@stop
