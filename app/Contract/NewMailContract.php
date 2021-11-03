<?php

namespace App\Contract;

use Illuminate\Http\Request;

interface NewMailContract
{
    public function newmailview();

    public function newmailsend(Request $request);
}
