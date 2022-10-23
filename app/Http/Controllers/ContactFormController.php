<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactUs = ContactForm::all();
        return view('admin.form_contact_us')->with(['contactUs' => $contactUs]);
    }


    public function store(Request $request)
    {
        $contactUs = new ContactForm;
        $contactUs->name = $request->post('username');
        $contactUs->email = $request->post('email');
        $contactUs->phone_number = $request->post('phone_number');
        $contactUs->subject = $request->post('subject');
        $contactUs->message = $request->post('message');
        $contactUs->save();
        session()->flash('contactSuccess', 'Updated Successfully');
        return redirect()->back();
    }

    public function visiters(){
        $visiter = Visitor::orderBy('id', 'DESC')->get();
        return view('admin.visiter')->with(['visiter' => $visiter]);
    }
}
