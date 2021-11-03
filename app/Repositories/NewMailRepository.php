<?php

namespace App\Repositories;

use App\Contract\NewMailContract;
use App\Mail\NewMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewMailRepository implements NewMailContract
{
    public function newmailview()
    {
        return view('New.NewMail');
    }

    public function newmailsend(Request $request)
    {
        $user =array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        );

        $data = ['name'=>$user['name'],'phone'=>$user['phone'],'message'=>$user['message']];

        Mail::to($user['email'])->send(new NewMail($data));
        return redirect('newmail')->with('success','Mail Send SuccesFully');
    }
}
