<?php

namespace App\Http\Controllers;

use App\Models\Adds;
use Illuminate\Http\Request;

class AddsController extends Controller
{
    //
    public function CreateAdds() {
        return view('CreateAdds');
    }

    public function StoreAdds(Request $request) {
        $extension = $request->file('FotoBarang')->getClientOriginalExtension();
        $fileName = $request->Kategori.'_'.$request->NamaBarang.'.'.$extension;
        $request->file('FotoBarang')->storeAs('public/image', $fileName);

        $request->validate([
            'FotoBarang' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'HargaLimit' => 'required|numeric'
        ]);

        Adds::create([
            'NamaBarang' => $request->NamaBarang,
            'HargaLimit' => $request->HargaLimit,
            'FotoBarang' => $fileName
        ]);

        return redirect('/create/bid');
    }

    public function ShowAdds() {
        $Adds = Adds::all();
        return view('ShowAdds', compact('Adds'));
    }

    public function formUpdateAdds($id){
        $Adds = Adds::findOrFail($id);   
        return view('UpdateAdds', compact('Adds'));
    }

    public function UpdateAdds($id, Request $request){
        Adds::findOrFail($id)->update([
            'NamaBarang' => $request->NamaBarang,
            'HargaLimit' => $request->HargaLimit
            // 'FotoBarang' => $fileName
        ]);
        return redirect('/show/adds');
    }

    public function GetAdds(){
        $Adds = Adds::all();

        return $Adds;
    }
}
