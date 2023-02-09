@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="row">
            <div class="col d-flex flex-row w-100 justify-content-center fs-1" style="border: 1px solid">
                    Event Management System
            </div>
        </div>
        <div class="row d-flex mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Create an Event
                    </div>
                    <div class="card-body">
{{--                        <form method='POST' action="{{ route('save_task') }}">--}}
                        <form method="POST">
                            <div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Event Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="event name">
                                </div>
                                <div class="row mb-3 d-flex align-items-center">
                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Event Category</option>
                                            <option value="1">Ground Breaking Event</option>
                                            <option value="2">Activation Event</option>
                                            <option value="3">Report Release</option>
                                        </select>
                                    </div>
                                    <div class="col d-flex align-items-center justify-content-around">
{{--                                        <div class="text-muted">Cant Find Category?</div>--}}
                                        <a href="#" class="btn btn-outline-secondary">Add Category</a>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="exampleColorInput" class="form-label">Set Color</label>
                                    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <label for=""> Event Start </label>
                                        <input class="form-control" type="datetime-local" name="start_time" class="time" placeholder="Enter Start Date"/>
                                    </div>
                                    <div class="col">
                                        <label for=""> Event End </label>
                                        <input class="form-control" type="datetime-local" name="start_time" class="time" placeholder="Enter Start Date"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div> Recurrence</div>
                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>One time Event</option>
                                            <option value="1">Daily</option>
                                            <option value="2">Weekly</option>
                                            <option value="3">Biweekly</option>
                                            <option value="3">Monthly</option>
                                            <option value="3">Bimonthly</option>
                                            <option value="3">Annually</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div> Event Banner</div>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
                                    </div>
                                </div>

                                <div class="row mb-3 d-flex justify-content-between">
                                    <div class="col d-flex justify-content-start">
                                        <button type="button" class="btn btn-secondary">Set Reminders</button>
                                    </div>
                                    <div class="col d-flex justify-content-center">
                                        <button type="button" class="btn btn-secondary">Add Attendees</button>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <button type="button" class="btn btn-secondary">Assign Roles</button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="d-grid">
                                        <button class="btn btn-secondary" type="button">Save Event</button>
                                    </div>
                                </div>



                            </div>
                        </form>
                    </div>
                </div>

            </div>
{{--            <div class="col">--}}
{{--                <div>--}}
{{--                    Add Event Category--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    Add User--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
@endsection
