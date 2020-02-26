<?php

namespace App\Traits;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
trait ApiResponser
{

  private function  succcessResponse($data,$code){
      return response()->json($data,$code);
  }

  protected function errorResponse($message, $code){
      return response()->json(['error'=>$message,'code'=>$code],$code);
  }

  protected function showAll(Collection $collection,$code = 200){
     return response()->json(['data'=>$collection],$code);
  }

  protected function showOne(Model $instance,$code = 200){
    return response()->json(['data'=>$instance],$code);
 }





}