<?php

namespace App\Http\Controllers;

use App\Interfaces\EventRepositoryInterface;
use App\Models\Event;
use App\Repositories\EventRepository;
use Illuminate\Http\Request;
//use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class EventController extends Controller
{
    private EventRepositoryInterface $eventRepository;

    public function __construct(EventRepositoryInterface $eventRepository)
    {
        $this->middleware('auth');
        $this->eventRepository = $eventRepository;
    }
    public function index(Request $request)
    {
        $events = array();
        $get_events = $this->eventRepository->getAllEvents();
        foreach ($get_events as $get_event){
            $events[] = [
                'title' => $get_event-> name,
                'start' => $get_event-> start_time,
                'end' => $get_event-> end_time,
            ];
        }
        return view('events.index', ['events' => $events]);

//        if($request->ajax()) {
//
//            $data = Event::whereDate('start', '>=', $request->start)
//                ->whereDate('end',   '<=', $request->end)
//                ->get(['id', 'title', 'start', 'end']);
//
//            dd(response());
//
//            return response()->json($data);
//
//
//        }

//        return view('events.index');
    }
//    public function index()
//    {
//        $event = $this->eventRepository->getAllEvents();
//        return view('events.index', ['events' => $event]);
//    }
    public function create()
    {
//        return Auth::guard('guard-name');
        return view('events.create');
    }
    public function store(Request $request)
    {
        dd(request()->all());
        //Remember to validate
        $user = Auth::user()->id;
//        $eventId = $this->eventRepository->getEventById($eventId);
//
//        dd(request()->all());
        $eventDetails = [
            'name' => $request->name,
            'category_id' => $request->category_id,
            'color' => $request->color,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'recurrence' => $request->recurrence,
            'event_banner' => $request->event_banner,
            'event_creator_id' => $user,
//            'attendee_id' => $request->attendee_id,
//            'event_id'=> $request->event_id,
//            'start_date'=> $request->start_date,
//            'lead_date'=> $request-> lead_date
        ];

//        dd($eventDetails);

        $this->eventRepository->createEvent($eventDetails);


        return redirect() -> Route('events');





//        $request->validate([
//            'title'=>'required',
//            'color'=>'required',
//            'start_date'=>'required',
//            'end_date'=>'required',
//        ]);
//        $events=new Event;
//        $events->title=$request->input('title');
//        $events->color=$request->input('color');
//        $events->start_date=$request->input('start_date');
//        $events->end_date=$request->input('end_date');
//        $events->save();
//        return redirect('eventpage')->with('success','Event Added');
    }


    public function show(Request $request)
    {
        $eventId = $request->route('eventId');

        $event = $this->eventRepository->getEventById($eventId);

        if(empty($event)){
            return back();
        }

        return view('events.show', ['event'=>$event]);
    }


    public function edit(Request $request)
    {
        $eventId = $request->route('eventId');

        $event = $this->eventRepository->getEventById($eventId);

        if(empty($event)){
            return back();
        }

        return view('events.edit', ['event'=>$event]);
    }

    public function update(Request $request, $id)
    {
        $eventId = $request->route('eventId');

        //Remember to validate

        $eventDetails = [
            'name' => $request->name,
            'category_id' => $request->category_id,
            'color' => $request->color,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'recurrence' => $request->recurrence,
            'event_banner' => $request->event_banner,
            'attendee_id' => $request->attendee_id,
            'event_id'=> $request->event_id,
            'start_date'=> $request->start_date,
            'lead_date'=> $request-> lead_date
        ];

        $this->eventRepository->updateEvent($eventId, $eventDetails);

        return redirect()->Route('events');
    }

    public function destroy(Request $request)
    {
        $eventId = $request->route('eventId');
        $this->eventRepository->deleteEvent($eventId);
        return back();
    }
}



