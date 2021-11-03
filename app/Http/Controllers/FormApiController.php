<?php

namespace App\Http\Controllers;

use App\Http\Resources\FormResource;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class FormApiController extends Controller
{
    public function signup(Request $request)
    {
        $validate = Validate(            
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        );

        $user = new User;
        
        $user->name = $request->name;
        $user->detail = $request->email;
        $user->price = $request->password;
        
        $user->save();

        return "done";
    }
}
