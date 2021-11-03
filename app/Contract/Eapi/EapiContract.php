<?php

namespace App\Contract\Eapi;
use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterRequest;

interface EapiContract
{
    public function all();

    public function show($id);
    
    public function create(Request $request);

    public function update(Request $request, $id);

    public function delete(Request $request);

    public function statuschange(Request $request);

}

