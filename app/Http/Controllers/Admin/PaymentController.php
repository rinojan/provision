<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Payment;


class PaymentController extends Controller
{
    public function index(){

        return view('admin.payment.index');
    }

    public function create(){

        return view('admin.payment.create');
    }
}
