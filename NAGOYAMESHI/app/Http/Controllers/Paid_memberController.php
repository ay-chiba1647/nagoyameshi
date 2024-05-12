<?php

namespace App\Http\Controllers;

use App\Models\Paid_member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Paid_memberController extends Controller
{
    public function success(){
        return view('paid_members.success');
    }

    public function store(Request $request)
    {
        $paid_member = new Paid_member();
        $paid_member->user_id = Auth::user()->id;
        $paid_member->continue_flag = 1;
        $paid_member->save();
        return view('users.mypage');
    }

    public function destroy(Paid_member $paid_member)
    {
        $paid_member->delete();
        return redirect()->route('paid_members.register');
    }
}
