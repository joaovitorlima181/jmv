<?php

namespace App\Http\Controllers;

use App\Exports\PacketsExport;
use App\Models\PacketHistory;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PacketController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function upload(Request $request)
    {
        if(empty($request->hasFile('formFile'))){
            return redirect()->back()->withErrors('Nenhum arquivo selecionado.');
        };

        $nameFile = null;

        if ($request->hasFile('formFile') && $request->file('formFile')->isValid()) {

            $extension = '.json';
            $nameFile = "packets{$extension}";

            $upload = $request->formFile->storeAs('files', $nameFile);

            if ( !$upload )
            return redirect()->back()->withErrors('Falha ao fazer upload');
        }

        $json = json_decode(file_get_contents(storage_path('app\\files\\packets.json')));
        $this->jsonStore($json);
        return redirect()->back();
    }

    public function jsonStore($json)
    {
        $erros = 0;
        foreach ($json as $packet) {
            for ($i=0; $i < count($packet); $i++) {

                if(property_exists($packet[$i], 'isNew')){
                    PacketHistory::create([
                        'packetType' => $packet[$i]->packetType,
                        'createdAt' => $packet[$i]->createdAt,
                        'hexData' => $packet[$i]->hexData,
                        'isNew' => $packet[$i]->isNew,
                        'packetData' => $packet[$i]->packetData,
                ]);
                }else
                    $erros++;
            }
        }

        return redirect()->back()->withErrors("{$erros} registros não foram importados.");
    }

    public function export()
    {
        return Excel::download(new PacketsExport, 'packets.xlsx');
    }
}
