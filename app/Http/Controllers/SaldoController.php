<?php

namespace App\Http\Controllers;

use App\Models\Saldo;
use Illuminate\Http\Request;

class SaldoController extends Controller
{
    //
    public function CreateSaldo() {
        return view('CreateSaldo');
    }

    public function StoreSaldo(Request $request) {

        Saldo::create([
            'JumlahSaldo' => $request->JumlahSaldo
        ]);
        return redirect('/create/bid');
    }

    public function ShowSaldo() {
        $Saldo = Saldo::all();
        return view('ShowSaldo', compact('Saldo'));
    }

    public function formUpdateSaldo($id){
        $Saldo = Saldo::findOrFail($id);   
        return view('UpdateSaldo', compact('Saldo'));
    }

    public function UpdateSaldo($id, Request $request){
        Saldo::findOrFail($id)->update([
            'JumlahSaldo' => $request->JumlahSaldo
        ]);
        return redirect('/show/bid');
    }

    public function GetSaldo(){
        $Saldo = Saldo::sum('JumlahSaldo');

        return $Saldo;
    }
}
