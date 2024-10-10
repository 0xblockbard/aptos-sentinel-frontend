<?php

namespace App\Http\Controllers;

use Auth;
use Redirect;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home(){
        try {
            return view('home');
        } catch(\Exception $e){
            abort(400);
        }
    }

    public function about(){
        try {
            return view('pages.about');
        } catch(\Exception $e){
            abort(400);
        }
    }

    public function transactionPolicies(){
        try {
            return view('pages.transaction_policies');
        } catch(\Exception $e){
            abort(400);
        }
    }

    public function guide(){
        try {
            return view('pages.guide');
        } catch(\Exception $e){
            abort(400);
        }
    }

    public function kyc(){
        try {
            return view('pages.kyc');
        } catch(\Exception $e){
            abort(400);
        }
    }

    public function connected(){
        try {
            return view('pages.connected');
        } catch(\Exception $e){
            abort(400);
        }
    }

}
