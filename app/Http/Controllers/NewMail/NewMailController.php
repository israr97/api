<?php

namespace App\Http\Controllers\NewMail;

use App\Contract\NewMailContract;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\NewMail;
use Illuminate\Support\Facades\Mail;

class NewMailController extends Controller
{
    private $NewMailRepository;

    public function __construct(NewMailContract $NewMailRepository)
    {
        return $this->NewMailRepository = $NewMailRepository;
    }


    public function newmilview()
    {
        return $this->NewMailRepository->newmailview();
    }

    public function newmailstore(Request $request)
    {
        return $this->NewMailRepository->newmailsend($request);
    }
}
