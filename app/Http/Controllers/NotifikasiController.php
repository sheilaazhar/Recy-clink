<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class NotifikasiController extends Controller
{
    public function index()
    {
        return view('notifikasi', [
            "title" => "Notifikasi",
            'active'=> 'notifikasi',
            'user' => User::where('id', Auth::user()->id)->first(),
            'notifications' => Auth()->user()->unreadNotifications
        ]);
    }

    public function markNotification($id)
    {
        //auth()->user()->unreadNotifications->where('id', $request->id)->markAsRead();
        // auth()->user()
        //     ->unreadNotifications
        //     ->when($request->input('id'), function ($query) use ($request) {
        //         return $query->where('id', $request->input('id'));
        //     })
        //     ->markAsRead();
        $notification = auth()->user()->unreadNotifications->find($id);
        $notification->markAsRead();

	    return redirect()->back();
    }
}
