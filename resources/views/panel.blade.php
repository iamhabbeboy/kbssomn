@extends('layouts.data')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert-info alert">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos similique iure odit aspernatur laboriosam dolor a.</p>
                            </div>
                            <form action="{{ route('auth') }}" method="POST">
                                @csrf
                                <label for="">Email Address</label>
                                <input type="text" class="form-control" name="email" required>
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" required>
                                <p></p>
                                <button class="btn btn-success btn-lg">Submit</button>
                            </form>
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
