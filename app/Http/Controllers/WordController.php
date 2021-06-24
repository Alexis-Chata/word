<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class WordController extends Controller
{
    public function descargarDocx(Request $request){

        $description = $request->input('textoword');
        $imagenword = $request->input('imagenword');

        $templateProcessor = new TemplateProcessor(storage_path('doc1.docx'));
        $templateProcessor->setImageValue('logo', $imagenword);
        $templateProcessor->setValue('body', $description);
        $templateProcessor->saveAs(storage_path('helloWorld.docx'));

        return response()->download(storage_path('helloWorld.docx'));
    }
}
