<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function index(Request $request)
    {
        //data geting from contactus page of user
        $fullname = $request->get('name');
        $email = $request->get('email');
        $message = $request->get('message');

        // data insert into thirdparty api
        Http::post('http://127.0.0.1:8000/api/contact', [
            'name' => $fullname,
            'email' => $email,
            'message' => $message
        ]);
        return redirect('/contactus');
    }
}
