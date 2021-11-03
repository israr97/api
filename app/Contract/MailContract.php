<?php 

namespace App\Contract;

use Illuminate\Http\Request;

Interface MailContract
{ 
    public function MailFrontView();
    
    public function MailSendToGmail(Request $request);

}
