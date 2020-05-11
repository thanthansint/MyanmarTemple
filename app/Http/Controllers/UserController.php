<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function userAnnouncementView() {
        return view('userAnnouncement');
    }
    public function userEventView() {
        return view('userEvent');
    }
    public function userAboutView() {
        return view('userAbout');
    }
    public function userRetrieveAnnouncement(Request $request) {
        $announcements = \App\Announcement::orderBy('created_at', 'DESC')->get();
        $interests = \App\Interested::orderBy('created_at', 'DESC')->get();
        $joins = \App\Join::orderBy('created_at', 'DESC')->get();
        error_log($announcements);
        error_log(Auth::user()->id);
        error_log(Auth::id());
        //$announcements = \App\Announcement::orderBy('created_at', 'DESC')->paginate(2);

        return response()->json(['announcements'=> $announcements, 'interests'=> $interests, 'joins'=> $joins, 'currentuserid'=> Auth::user()->id]);
    }
    public function getForInteresting(Request $request) {
        $find = \App\Interested::where('user_id', Auth::user()->id)->where('announcement_id', $request->announcementid)->get();
        error_log(Auth::user()->id);
        $count = sizeOf(\App\Announcement::find($request->announcementid)->interested);
        return response()->json(['find'=> $find, 'count'=> $count]);
    }
    public function interestedCountPlus(Request $request) {
        $find = \App\Interested::where('user_id', Auth::user()->id)->where('announcement_id', $request->announcementid)->get();
        if (Auth::check()) {
            if (sizeOf($find)==0) {
                $interested = new \App\Interested;
                $interested->user_id = Auth::user()->id;
                $interested->announcement_id = $request->announcementid;
                $interested->save();
                $count = sizeOf(\App\Announcement::find($request->announcementid)->interested);
                error_log($count);
                return response()->json(['message'=> "Success", 'count'=> $count]);
            }
        }else {
            return response()->json(['error'=>"Error"]);
        }
    }
    public function interestedCountMinus(Request $request){
        $interestedUsers = \App\Interested::where('user_id', Auth::user()->id)->where('announcement_id', $request->announcementid)->get();
        if (Auth::check()) {
            if (sizeOf($interestedUsers)>0) {
                foreach ($interestedUsers as $interestedUser){
                    \App\Interested::destroy($interestedUser->id);
                }
            }
                return response()->json(['message'=> "Successfully Remove"]);
        }else {
            return response()->json(['error'=>"Error"]);
        }
    }
    public function getForGoing(Request $request) {
        $find = \App\Join::where('user_id', Auth::user()->id)->where('announcement_id', $request->announcementid)->get();
        error_log(Auth::user()->id);
        $count = sizeOf(\App\Announcement::find($request->announcementid)->join);
        return response()->json(['find'=> $find, 'count'=> $count]);
    }
    public function goingCountPlus(Request $request) {
        $find = \App\Join::where('user_id', Auth::user()->id)->where('announcement_id', $request->announcementid)->get();
        if (Auth::check()) {
            if (sizeOf($find)==0) {
                $join = new \App\Join;
                $join->user_id = Auth::user()->id;
                $join->announcement_id = $request->announcementid;
                $join->save();
                return response()->json(['message'=> "Success"]);
            }
        }else {
            return response()->json(['error'=>"Error"]);
        }
    }
    public function goingCountMinus(Request $request){
        $joinUsers = \App\Join::where('user_id', Auth::user()->id)->where('announcement_id', $request->announcementid)->get();
        if (Auth::check()) {
            if (sizeOf($joinUsers)>0) {
                foreach ($joinUsers as $joinUser){
                    \App\Join::destroy($joinUser->id);
                }
            }
                return response()->json(['message'=> "Successfully Remove"]);
        }else {
            return response()->json(['error'=>"Error"]);
        }
    }

}
