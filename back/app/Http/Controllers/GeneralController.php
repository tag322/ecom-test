<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index() {
        return view('general.index');
    }

    public function about() {
        return view('general.about');
    }

    public function contact() {
        return view('general.contact');
    }

    public function delivery() {
        return view('general.delivery');
    }

    public function delivery_rules() {
        return view('general.delivery-rules');
    }

    public function documents() {
        return view('general.documents');
    }

    public function promotion_detail() {
        return view('general.promotion-detail');
    }

    public function promotion() {
        return view('general.promotion');
    }

    public function services() {
        return view('general.services');
    }
}
