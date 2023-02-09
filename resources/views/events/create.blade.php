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
                            <form method='POST' action="{{ route('save_event') }}">
                                {{ csrf_field() }}
                                <h1> Create a new Event </h1>
                                <div class="form-group mb-3">
                                    <label for="name">Event Title</label>
                                    <input type="text" class="form-control" id="name" name='name' placeholder="Enter the title">
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mb-3">
                                            <label for="sel1">Select Event Type</label>
                                            <select class="form-control" name="category_id" id="sel1">
                                                <option value="1">Ground Breaking Event</option>
                                                <option value="2">Activation Event</option>
                                                <option value="3">Report Release</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col d-flex align-items-center justify-content-around">
                                        <div class="text-muted">Cant Find Category?</div>
                                        <a href="#" class="btn btn-outline-secondary">Add Category</a>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="exampleColorInput" class="form-label">Set Color</label>
                                    <input type="color" class="form-control form-control-color" name="color" id="exampleColorInput" value="#563d7c" title="Choose your color">
                                </div>

                                <div class="row mb-3">
                                    <div class="col form-group">
                                        <label for=""> Event Start </label>
                                        <input class="form-control" type="datetime-local" id="start_time" name="start_time" class="time" placeholder="Enter Start Date"/>
                                    </div>
                                    <div class="col form-group">
                                        <label for=""> Event End </label>
                                        <input class="form-control" type="datetime-local" id="end_time" name="end_time" class="time" placeholder="Enter Start Date"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="recurrence">Select Event Type</label>
                                        <select class="form-select" name="recurrence" id="recurrence" aria-label="Default select example">
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
                                        <input type="file" class="form-control" name="event_banner" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
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

                                <div class="form-group d-flex justify-content-between">
                                    <button type="submit" class="btn btn-primary ">Save Event</button>
                                    <a href="{{ route('events') }}" class="btn btn-success float-right">Go Back</a>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
