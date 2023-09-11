<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    //Método Actions
    public function index(){

        $fornecedores = ['Fornecedor 01'];

        //no método compact ira receber a variável $fornecedores sem o $
        return view('admin.fornecedores.index', compact('fornecedores'));
        //echo 'controller sobre nos';
    }
}