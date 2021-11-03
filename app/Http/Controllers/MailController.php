<?php

namespace App\Http\Controllers;

use App\Contract\MailContract;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    private $MailRepository;

    public function __construct(MailContract $MailRepository)
    {
        $this->MailRepository = $MailRepository;
    }

    public function view()
    {
        return $this->MailRepository->MailFrontView();
        
    }

    public function store(Request $request)
    {
        return $this->MailRepository->MailSendToGmail($request);
        
    }
}
