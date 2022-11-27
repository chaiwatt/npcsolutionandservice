<?php

namespace App\Http\Controllers;

use App\Models\SubScriber;
use Illuminate\Http\Request;

class SubScriberController extends Controller
{
    public function createsave(Request $request){
        $this->validate(request(), [
            'email' => 'required|email'
        ]);
        $check = SubScriber::where('email',$request->email)->first();
        if (empty($check)) {
            $subscriber = new SubScriber();
            $subscriber->email = $request->email;
            $subscriber->save(); 
        }
        return redirect()->back()->withSubscribe('done');
   }
}
