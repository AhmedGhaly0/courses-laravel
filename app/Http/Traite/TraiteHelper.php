<?php
namespace App\Http\Traite;

trait TraiteHelper
{
public function saveImage ($request,$path){
    $imageName = time().'.'.$request->extension();
    $request->move(public_path($path), $imageName);
    return $imageName;
}

}

