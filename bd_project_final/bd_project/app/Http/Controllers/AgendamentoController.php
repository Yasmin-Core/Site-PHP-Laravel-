<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;

use App\Products;


class AgendamentoController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function agendamento (Request $request){
        //O que está no formulario
        $validationInput = Validator::make($request->all(),
        [
            'first_name'=>'required|string',
            'last_name'=>'required|string',
            'email'=>'required|string',
            'data'=>'required|string',
            'horario'=>'required|string',
            'servico'=>'required|string',
        ]);
        if(!$validationInput->fails()){
            $user = new Products();
            $user->p_name = $request->first_name;
            $user->s_name = $request->last_name;
            $user->email = $request->email;
            $user->data = $request->data;
            $user->horario = $request->horario;
            $user->servico = $request->email;
            $user->save();
        }
        return view('site.home');
    }
    public function viewAgendamento(){
        return view('site.agendamento');

    }
}