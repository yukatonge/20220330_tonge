<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\contact;


class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'name' => 'required|max:10',
            'gender' => 'required',
            'email' => 'required|email',
            'zipcode' => 'required|nullable|regex:/^\d{3}-\d{4}$/',
            'address' => 'required|max:10',
            'contents' => 'required|max:120',
        ]);
        $inputs = $request->all();

        return view('contacts.confirm', ['inputs' => $inputs]);
    }

    public function process(Request $request)
    {
        $action = $request->get('action', 'return');
        $input = $request->except('action');

        if($action === 'submit') {
            $contact = new Contact();
            $contact->fill($input);
            $contact->save();

            return redirect()->route('complete');
        }else {
            return redirect()->route('contact')->withInput($input);
        }

    }
    
    public function complete()
    {
        return view('contacts.complete');
    }
/*
    public function search(Reqest $requset)
    {


    }
*/
}
