<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class CustomerFeedbackController extends Controller
{
    public function customerFeedback(Request $request)
    {
        $validated_data = Validator::make($request->all(),[
                'name' => 'required',
                'phone' => 'required',
                'question1' => 'required',
                'question2' => 'required',
                'question3' => 'required',
            ], [
                'name.required' => 'আপনার নাম লিখুন',
                'phone.required' => 'আপনার সঠিক মোবাইল নাম্বারটি লিখুন',
                'phone.unique' => 'আপনি এই মোবাইল নাম্বার দিয়ে একবার তথ্য পাঠিয়েছেন',
                'question1.required' => '০১ নাম্বার প্রশ্নটির সঠিক উত্তর দিন',
                'question2.required' => '০২ নাম্বার প্রশ্নটির সঠিক উত্তর দিন',
                'question3.required' => '০৩ নাম্বার প্রশ্নটির সঠিক উত্তর দিন',
            ]);

            if($validated_data->fails())
            {
                return back()->withErrors($validated_data)->withInput();
            }
           
            else {
                return redirect()->route('ovinondon');
            }
    }
}
