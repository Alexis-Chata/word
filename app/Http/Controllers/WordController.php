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

        $header = $section->addHeader();
        $header->addWatermark(asset('/storage/Sintulo-1.png'), array(
            'width' => 452,
            'height' => 734,
        ));
        $section->addText($description);
        //$section->addImage($imagenword);

        $section = $phpWord->addSection();


        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('helloWorld.docx'));
        } catch (Exception $e) {
        }


        return response()->download(storage_path('helloWorld.docx'));
    }
}
