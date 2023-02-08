@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="row">
            <div class="col d-flex flex-row w-100 justify-content-center fs-1" style="border: 1px solid red">
                    Event Management System
            </div>
        </div>
        <div class="row d-flex mt-3">
            <div class="col" style="border: 1px solid red">
                <div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Event Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="event name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="starttime" class="form-label">Start time</label>
                            <input type="text" id="starttime" class="form-control" placeholder="start time" aria-label="start time">
                        </div>
                        <div class="col">
                            <label for="endtime" class="form-label">End time</label>
                            <input type="text" id="endtime" class="form-control" placeholder="start time" aria-label="start time">
                        </div>
                    </div>

                </div>
            </div>
            <div class="col">
                <div>
                    Add Event Category
                </div>
                <div>
                    Add User
                </div>
            </div>
        </div>


{{--        <div class="col-md-8" style="border: 1px solid red">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


    </div>
</div>
@endsection
