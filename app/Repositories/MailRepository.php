<?php 

namespace App\Repositories;

use App\Contract\MailContract;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailRepository implements MailContract
{
    public function MailFrontView()
    { 
      return view('sendmail');
    }

    public function MailSendToGmail(Request $request)
    {
        $user =array (
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,  
        );
        $data = ['name'=>$user['name'], 'phone'=>$user['phone'], 'message'=>$user['message']];

        Mail::to($user['email'])->send(new TestMail($data));

        return redirect('mailview')->with($user);
    }
}