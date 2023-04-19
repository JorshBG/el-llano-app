<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;


class UserController extends Controller
{
    public function create(Request $request,  JsonResponse $response){
        $category = User::create($request->all());
        if(!$category){
            $response->setData(['success' => false]);
            $response->setStatusCode(Response::HTTP_BAD_REQUEST);
            return $response;
        }
        return $response->setData(['success' => true]);
    }
}
