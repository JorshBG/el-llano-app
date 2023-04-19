<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{


    public function create(Request $request,  JsonResponse $response){
        $category = Category::create($request->all());
        if(!$category){
            $response->setData(['success' => false]);
            $response->setStatusCode(Response::HTTP_BAD_REQUEST);
            return $response;
        }
        return $response->setData(['success' => true]);
    }

    public function select(){
        return Category::all(['id', 'name']);
    }

}
