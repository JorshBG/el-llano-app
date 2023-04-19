<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PresentationController extends Controller
{
    public function create(Request $request,  JsonResponse $response){
        $presentation = Presentation::create($request->all());
        if(!$presentation){
            $response->setData(['success' => false]);
            $response->setStatusCode(Response::HTTP_BAD_REQUEST);
            return $response;
        }
        return $response->setData(['success' => true]);
    }

    public function select(){
        return Presentation::all(['id', 'name']);
    }
}
