<?php

namespace Neuroiff\Http\Controllers;

use Illuminate\Http\Request;

class QuestionariosController extends Controller
{
    /**
     * Testando formulário de endereço
     */
    public function endereco()
    {
        return view('neuroiff.pacientes.formularios.endereco');
    }

    /**
     * Testando formulário de moradia
     */
    public function moradia()
    {
        return view('neuroiff.pacientes.formularios.dados-moradia');
    }

    /**
     * Testando formulário de social
     */
    public function social()
    {
        return view('neuroiff.pacientes.formularios.questionario-social');
    }

    /**
     * Testando formulário de beneficios
     */
    public function beneficios()
    {
        return view('neuroiff.pacientes.formularios.endereco');
    }

    /**
     * Testando formulário de responsavel
     */
    public function responsavel()
    {
        return view('neuroiff.pacientes.formularios.responsavel');
    }
}
