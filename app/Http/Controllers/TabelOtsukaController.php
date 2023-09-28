<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TabelOtsuka;
use Dotenv\Parser\Entry;

class TabelOtsukaController extends Controller
{
    public function index()
    {
        $tabels = TabelOtsuka::all();
        return view('tabel.tabel', compact('tabels'));
    }
    public function create()
    {
        $tabel = TabelOtsuka::all();
        return view('tabel.tabel-entry', compact('tabel'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'ItemCode' => 'required',
            'description1' => 'required',
            'description2' => 'required',
            'volume' => 'required',
            'destination' => 'required',
            'GTINNumbers' => 'required',
            'Pabrik' => 'required',
            'Kemasan' => 'required',
        ]);
        TabelOtsuka::create([
            'ItemCode' => $request->ItemCode,
            'description1' => $request->description1,
            'description2' => $request->description2,
            'volume' => $request->volume,
            'destination' => $request->destination,
            'GTINNumbers' => $request->GTINNumbers,
            'Pabrik' => $request->Pabrik,
            'Kemasan' => $request->Kemasan
        ]);
    return redirect('/tabel');
    }

    public function edit($id_table)
    {
        $tabel = TabelOtsuka::all();
        $tabel = TabelOtsuka::find($id_table);
        return view('tabel.tabel-edit', compact('tabel'));
    }

    public function update(Request $request, $id_table)
    {
        $this->validate($request, [
            'ItemCode' => 'required',
            'description1' => 'required',
            'description2' => 'required',
            'volume' => 'required',
            'destination' => 'required',
            'GTINNumbers' => 'required',
            'Pabrik' => 'required',
            'Kemasan' => 'required',
        ]);

        $tabel = TabelOtsuka::find($id_table);

        $tabel->update([
            'ItemCode' => $request->ItemCode,
            'description1' => $request->description1,
            'description2' => $request->description2,
            'volume' => $request->volume,
            'destination' => $request->destination,
            'GTINNumbers' => $request->GTINNumbers,
            'Pabrik' => $request->Pabrik,
            'Kemasan' => $request->Kemasan
        ]);

        return redirect('/tabel');
    }

    public function delete($id_table)
    {
        $tabel = TabelOtsuka::find($id_table);
        return view('tabel.tabel-hapus', compact('tabel'));
    }

    public function destroy($id_table)
    {
        $tabel = TabelOtsuka::find($id_table);
        $tabel->delete();
        return redirect('/tabel');
    }
    public function search(Request $request){
        $query = $request->input('query');

        $tabels = TabelOtsuka::where(function ($queryBuilder) use ($query) {
        $queryBuilder->where('ItemCode', 'like', "%$query%")
                     ->orWhere('description1', 'like', "%$query%")
                     ->orWhere('description2', 'like', "%$query%")
                     ->orWhere('volume', 'like', "%$query%")
                     ->orWhere('destination', 'like', "%$query%")
                     ->orWhere('GTINNumbers', 'like', "%$query%")
                     ->orWhere('Pabrik', 'like', "%$query%")
                     ->orWhere('Kemasan', 'like', "%$query%");
        // Add more columns as needed
    })->get();

    return view('tabel.tabel', compact('tabels'));
    }
}
