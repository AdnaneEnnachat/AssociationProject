<?php

namespace App\Http\Controllers;

use App\Models\Condidat;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    public function index(){
        $condidats = Condidat::orderBy('created_at','DESC')->paginate(7);
        return view('admin.condidat',compact('condidats'));
    }
    public function adminPanel(){
        $now = Carbon::now();
        $twentyFourHoursAgo = $now->subHours(24);
        $condidatPerDay = Condidat::where('created_at', '>=', $twentyFourHoursAgo)->count();
        $visitors = Visitor::all()->count();
        $condidat = Condidat::all()->count();
        return view('admin.panel',compact('visitors','condidat','condidatPerDay'));
    }
}
