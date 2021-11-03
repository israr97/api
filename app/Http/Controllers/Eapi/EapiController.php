<?php

namespace App\Http\Controllers\Eapi;

use App\Contract\Eapi\EapiContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\Product;
use App\Models\User;
use App\Repositories\Eapi\EapiRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EapiController extends Controller
{
    private $EapiRepository; 

    public function __construct(EapiContract $EapiRepository)
    {
        $this->EapiRepository = $EapiRepository;
    }
    
    public function eapihome()
    {
        return $this->EapiRepository->all();
    }

    public function eapishow(Request $request, $id)
    {
        return $this->EapiRepository->show($id);
    }

    public function eapidelete(Request $request)
    {
        return $this->EapiRepository->delete($request);
    }

    public function sign()
    {
        return view('Eapi.signup');
    }
    
    public function statuschange(Request $request)
    {
        return $this->EapiRepository->statuschange($request);
    }


}
