<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $Contact = Contact::all();
        return response()->json(
            [
                'status' => 200,
                'ContactDetail' => $Contact
            ]
        );
    }
    public function create(Request $request)
    {
        $Contact = new Contact;
        $Contact->name = $request->name;
        $Contact->email = $request->email;
        $Contact->message = $request->message;
        $Contact->save();

        return response()->json(
            [
                'status' => true,
                'message' => 'successfully'
            ]
        );
    }
}