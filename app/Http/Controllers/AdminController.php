<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function loginProcess(Request $request) {
        // error_log($request);
        $results = \App\Admin::where('name', $request->name)->where('email', $request->email)->where('password', $request->password)->get();

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
        //$events = \App\Event::orderBy('created_at', 'DESC')->paginate(2);
        return response()->json(['events'=> $events]);
    }
    public function editEventView() {
        return view('editEventView');
    }
    public function takeEventFromDb(Request $request) {
        $event = \App\Event::find($request->id);
        // error_log($event->date);
        return view('editForm', ['id'=> $event->id, 'title'=> $event->title, 'date'=>$event->event_date, 'time'=>$event->event_time,'location'=>$event->location,'content'=>$event->content]);
    }

    public function editEvent(Request $request) {
        //error_log($request->id);
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
    public function confirmEventForm(Request $request) {
        return view('confirmEventForm', ['id'=> $request->id]);
    }
    // public function adminEventView() {
    //     return view('adminEvent');
    // }
    public function announcementFormView() {
        return view('announcement');
    }
    public function addAnnouncement(Request $request) {
        $announcement =new \App\Announcement;
        $announcement->title = $request->title;
        $announcement->content = $request->content;
        $announcement->announcement_date = $request->date;
        $announcement->announcement_time = $request->time;
        $announcement->location = $request->location;
        $announcement->save();
        return response()->json(['message'=> "Successful"]);
    }
    public function retrieveAnnouncement(Request $request) {
        $announcements = \App\Announcement::orderBy('created_at', 'DESC')->get();
        // $interests = \App\Interested::orderBy('created_at', 'DESC')->get();
        // $joins = \App\Join::orderBy('created_at', 'DESC')->get();
        // $currentuserid = Auth::id();
        // error_log(Auth::id());
        //$announcements = \App\Announcement::orderBy('created_at', 'DESC')->paginate(2);

        return response()->json(['announcements'=> $announcements]);
    }
    public function takeAnnouncementFromDb(Request $request) {
        $announcement = \App\Announcement::find($request->id);
        // error_log($event->date);
        return view('editAnnouncementForm', ['id'=> $announcement->id, 'title'=> $announcement->title, 'date'=>$announcement->announcement_date, 'time'=>$announcement->announcement_time,'location'=>$announcement->location,'content'=>$announcement->content]);
    }
    public function editAnnouncementView() {
        return view('editAnnouncementView');
    }
    public function editAnnouncement(Request $request) {
        error_log($request->id);
        $announcement = \App\Announcement::find($request->id);
        $announcement->title = $request->title;
        $announcement->announcement_time = $request->time;
        $announcement->announcement_date = $request->date;
        $announcement->location = $request->location;
        $announcement->content = $request->content;
        $announcement->save();
        return response()->json(['message'=> "Edit Success"]);
    }
    public function deleteAnnouncement(Request $request) {
        \App\Announcement::destroy($request->id);
        return response()->json(['message'=> "Delete Successful"]);
    }
    public function confirmAnnouncementForm(Request $request) {
        return view('confirmAnnouncementForm', ['id'=> $request->id]);
    }
    // public function adminAnnouncement() {
    //     return view('adminAnnouncement');
    // }
}
