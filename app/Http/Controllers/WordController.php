<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class WordController extends Controller
{
    public function descargarDocx(Request $request){
        $phpWord = new \PhpOffice\PhpWord\PhpWord();


        $section = $phpWord->addSection();


        $description = $request->input('textoword');
        $imagenword = $request->input('imagenword');
        $marcaaguaword = $request->input('marcaaguaword');

        $section->addImage($imagenword);
        $section->addText($description);

        $header = $section->addHeader();
        $header->addWatermark($marcaaguaword, [
            'marginTop'=>200,
            "width" => 450,
        ]);

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('helloWorld.docx'));
        } catch (Exception $e) {
        }


        return response()->download(storage_path('helloWorld.docx'));
    }
}
