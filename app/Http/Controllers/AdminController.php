<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function loginProcess(Request $request) {

        // error_log($request);
        $results = \App\Admin::where('name', $request->name)->where('email', $request->email)->where('password', $request->password)->get();
        // error_log($results);
        if (sizeOf($results)>0) {
            return response()->json(['message'=> "Successfully Login"]);
        }else {
            return response()->json(['error'=>"Login Error"]);
        }
    }
    public function loginAdminView() {
        return view('loginAdmin');
    }
    public function mainView() {
        return view('main');
    }
    public function adminHomeView() {
        return view('adminHome');
    }
    public function eventFormView() {
        return view('event');
    }
    public function addEvent(Request $request) {
        $event =new \App\Event;
        $event->title = $request->title;
        $event->content = $request->content;
        $event->event_date = $request->date;
        $event->event_time = $request->time;
        $event->location = $request->location;
        $event->save();
        // $event = \App\Event::where('title', $request->title)->where('content', $request->content)->where('event_date', $request->date)->where('evnet_time', $request->time)->where('location', $request->location)->get();

        return response()->json(['message'=> "Successful-Event"]);
    }
    public function retrieveEvent(Request $request) {
        $events = \App\Event::orderBy('created_at', 'DESC')->get();
        return response()->json(['events'=> $events]);
    }
    public function editEventView() {
        return view('edit');
    }
    public function takeEventFromDb(Request $request) {
        $event = \App\Event::find($request->id);
        // error_log($event->date);
        return view('editForm', ['id'=> $event->id, 'title'=> $event->title, 'date'=>$event->event_date, 'time'=>$event->event_time,'location'=>$event->location,'content'=>$event->content]);
    }

    public function editEvent(Request $request) {
        error_log($request->id);
        $event = \App\Event::find($request->id);
        $event->title = $request->title;
        $event->event_time = $request->time;
        $event->event_date = $request->date;
        $event->location = $request->location;
        $event->content = $request->content;
        $event->save();
        return response()->json(['message'=> "Edit Success"]);
    }
    public function deleteEvent(Request $request) {
        \App\Event::destroy($request->id);
        return response()->json(['message'=> "Delete Successful"]);
    }
    public function confirmForm(Request $request) {
        return view('confirm', ['id'=> $request->id]);
    }
    // public function adminEventView() {
    //     return view('adminEvent');
    // }
}
