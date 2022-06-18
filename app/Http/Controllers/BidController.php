<?php

namespace App\Http\Controllers;

use App\Models\Adds;
use App\Models\Bid;
use App\Models\Saldo;
use Illuminate\Http\Request;

class BidController extends Controller
{
    //
    public function CreateBid() {
        $Adds = Adds::all();
        $Saldo = Saldo::sum('JumlahSaldo');
        return view('CreateBid', compact('Adds', 'Saldo'));
    }

    public function StoreBid(Request $request) {
        // $Adds = Adds::where("NamaBarang", $request->NamaBarang)->first(); // fetch -> ngambil data dari database ke program kita
        // dd($Adds->toArray());
        $Saldo = Saldo::sum('JumlahSaldo');
        
        if($request->HargaLelang > $Saldo) {
            return redirect('/');
        }

        Bid::create([
            'NamaBarang' => $request->NamaBarang,
            'HargaLelang' => $request->HargaLelang
        ]);
            return redirect('/show/bid');
    }

    public function ShowBid() {
        $Bid = Bid::all();
        return view('ShowBid', compact('Bid'));
    }

    // public function formUpdateBid($id){
    //     $Bid = Bid::findOrFail($id);   
    //     return view('UpdateBid', compact('Bid'));
    // }

    // public function UpdateBid($id, Request $request){
    //     Bid::findOrFail($id)->update([
    //         'HargaLelang' => $request->HargaLelang
    //     ]);
    //     return redirect('/show/bid');
    }

    // public function GetBid(){
    //     $Bid = Bid::all();

    //     return $Bid;
    // }
// }
