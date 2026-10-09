<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Illuminate\support\Facades\Mail;

class SendEmailController extends Controller
{   
    public function loadForm(){
        return view ("formm");
    }
    public function send(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'email' => 'required|email',
            'body' => 'required',
            'footer' => 'required',
        ]);

        
      try {
        $mailData = [
            'title' => $request->title,
            'body' => $request->body,
            'footer' => $request->footer,
        ];

        Mail::to($request->email)->send(new SendEmail($mailData));
        return redirect('/formm')->with('success','email was sent successfully!');
      } catch (\Exception $e) {
        return redirect('/formm')->with('error',$e->getMessage());
      }
    }





    public function loadFormm(){
      return view ("emailencadrant");
  }
  public function sendd(Request $request)
  {
      $request->validate([
          'title' => 'required',
          'email' => 'required|email',
          'body' => 'required',
          'footer' => 'required',
      ]);

      // send email
    try {
      $mailData = [
          'title' => $request->title,
          'body' => $request->body,
          'footer' => $request->footer,
      ];

      Mail::to($request->email)->send(new SendEmail($mailData));
      return redirect('/emailencadrant')->with('success','email was sent successfully!');
    } catch (\Exception $e) {
      return redirect('/emailencadrant')->with('error',$e->getMessage());
    }
  }




  public function loadFormmm(){
    return view ("emailadmin");
}
public function senddd(Request $request)
{
    $request->validate([
        'title' => 'required',
        'email' => 'required|email',
        'body' => 'required',
        'footer' => 'required',
    ]);

    // send email
  try {
    $mailData = [
        'title' => $request->title,
        'body' => $request->body,
        'footer' => $request->footer,
    ];

    Mail::to($request->email)->send(new SendEmail($mailData));
    return redirect('/emailadmin')->with('success','email was sent successfully!');
  } catch (\Exception $e) {
    return redirect('/emailadmin')->with('error',$e->getMessage());
  }
}



public function loadFormmmm(){
  return view ("contact2");
}
public function sendddd(Request $request)
{
  $request->validate([
      'title' => 'required',
      'email' => 'required|email',
      'body' => 'required',
      'footer' => 'required',
  ]);

  // send email
try {
  $mailData = [
      'title' => $request->title,
      'body' => $request->body,
      'footer' => $request->footer,
  ];

  Mail::to($request->email)->send(new SendEmail($mailData));
  return redirect('/contact2')->with('success','email was sent successfully!');
} catch (\Exception $e) {
  return redirect('/contact2')->with('error',$e->getMessage());
}
}
}

