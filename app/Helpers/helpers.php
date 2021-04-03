<?php

if (! function_exists('fileUpload')) {
    function fileUpload($img,$path,$newName,$oldImage)
    {
        if(!isset($path))
            $path = "uploads";

        if(isset($oldImage) && file_exists(public_path($path . "\\" . $oldImage)) && !empty(trim($oldImage)))
            unlink(public_path($path . "\\" . $oldImage));

        $imageName = Str::slug($newName) . "_" . uniqid();
        $img_type = explode(".",$img->getClientOriginalName());
        $upload_name = $imageName.".".end($img_type);
        $move = $img->move(public_path($path),$upload_name);
        if($move){
            return $upload_name;
        }
    }
}

if (! function_exists('databasePriceFormat')) {
    //database'e kaydederken
    function databasePriceFormat($price)
    {
        if(is_numeric(str_replace([".",","],"",$price))){
            $price = str_replace([".",","],["","."],$price);
            $price = number_format($price,2, '.', '');
            return $price;
        }else{
            return false;
        }
    }
}

if (! function_exists('priceFormat')) {
    //arayüzde görüntülerken
    function priceFormat($price)
    {
        if(is_numeric(str_replace([".",","],"",$price))){

            if(strpos($price,","))
                $price = str_replace([".",","],["","."],$price);

            $price = number_format($price,2, ',', '.');
            return $price;
        }else{
            return false;
        }
    }
}
