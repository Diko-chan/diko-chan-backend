<?php

namespace App\Http\Controllers;

//use App\Http\Resources\Commission;
use App\Models\Commission;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $userCount = User::count();
        $commissionCount = Commission::count();
        $commissionFemChar = Commission::where('com_gender',"female")->count();
        $commissionMaleChar = Commission::where('com_gender', 'male')->count();
        $commissionUnkChar = Commission::where('com_gender', 'unknown')->count();
        $commissionOtherChar = Commission::where('com_gender', 'other')->count();

        return view('stats',[
            'userCount' => $userCount,
            'commissionCount' => $commissionCount,
            'commissionFemChar' => $commissionFemChar,
            'commissionMaleChar' => $commissionMaleChar,
            'commissionUnkChar' => $commissionUnkChar,
            'commissionOtherChar' => $commissionOtherChar,
        ]);
    }
}
