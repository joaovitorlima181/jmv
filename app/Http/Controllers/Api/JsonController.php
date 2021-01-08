<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Packet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JsonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // {
        //     // Define o valor default para a variável que contém o nome da imagem 
        //     $nameFile = null;
         
        //     // Verifica se informou o arquivo e se é válido
        //     if ($request->hasFile('file') && $request->file('file')->isValid()) {
                 
        //         // Define um aleatório para o arquivo baseado no timestamps atual
        //         // $name = uniqid(date('HisYmd'));
         
        //         // Recupera a extensão do arquivo
        //         // $extension = $request->file->extension();
        //         $extension = '.json';

        //         // Define finalmente o nome
        //         // $nameFile = "{$name}.{$extension}";
        //         $nameFile = "deucerto{$extension}";
        //         // Faz o upload:
        //         $upload = $request->file->storeAs('files', $nameFile);
        //         // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
         
        //         // Verifica se NÃO deu certo o upload (Redireciona de volta)
        //         if ( !$upload )
        //             return redirect()
        //                         ->with('error', 'Falha ao fazer upload');
         
        //     }
            
        // }
        
        $packet =Packet::create([
            'packetHistory' => json_decode(file_get_contents(storage_path('app\files\deucerto.json'))),
        ]);

        dd($packet);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
