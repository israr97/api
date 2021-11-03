<?php

namespace App\Repositories\Eapi;

use App\Contract\Eapi\EapiContract;
use App\Models\Product;
use App\Models\Review;
use App\Traits\EapiTrait;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRegisterRequest;

class EapiRepository implements EapiContract
{
    use EapiTrait;
    
    public function all()
    {
        $product = Product::paginate(10);
        $review = Review::get();
        return view('Eapi.home', compact('product', 'review'));
    }

    public function show($id)
    {
        $product = Product::findById($id)->get();
        $rates = Review::findByProductId($id)->sum('star');
        $result = $rates / 5;
        $price = Product::where('id', $id)->first();
        
        $base_discount = $price->discount/100;
        $discount = $price->price*$base_discount;
        $total = $price->price-$discount;

        return view('/Eapi.show', compact('product', 'result','total'));
    }

    public function create(Request $request)
    {
    }


    public function update(Request $request, $id)
    {
    }

    public function delete(Request $request)
    {
        if($request->ajax()){

        $product = Product::find($request->p_id);
        $product->delete();
        return redirect('eapihome');
        }
        else
        {
            return 'not Del';
        }
    }


    public function statuschange(Request $request)
    {
       $product = Product::find($request->id);
       if($request->status == 1)
       {
            $product->status = 0;
            $product->save();
            return $product;
       }
       else
       {
        $product->status = 1;
        $product->save();
        return $product;
       }
    }
}
