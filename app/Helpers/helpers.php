<?php

if (! function_exists('fileUpload')) {
    function fileUpload($img,$path,$newName,$oldImage)
    {
        if(!isset($path))
            $path = 'uploads';

        if(isset($oldImage) && file_exists(public_path($path . '\\' . $oldImage)) && !empty(trim($oldImage)))
            unlink(public_path($path . '\\' . $oldImage));

        $imageName = Str::slug($newName) . '_' . uniqid();
        $img_type = explode('.',$img->getClientOriginalName());
        $upload_name = $imageName.'.'.end($img_type);
        $move = $img->move(public_path($path),$upload_name);
        if($move){
            return $upload_name;
        }
    }
}

if (! function_exists('deleteImg')) {
    function deleteImg($img, $path = 'uploads')
    {
        $deleted = unlink(public_path($path . '\\' . $img));
        if($deleted)
            return true;
        else
            return false;
    }
}


if (! function_exists('priceFormat')) {
    function priceFormat($price,$format = '1')
    {
        //@$format => 1 arayüzde görüntülerken, 2 database'e kaydederken kullanılır

        if(is_numeric(str_replace(['.',','],'',$price))){

            if($format == '1'){
                if(strpos($price,','))
                    $price = str_replace(['.',','],['','.'],$price);

                $price = number_format($price,2, ',', '.');
            }else{
                $price = str_replace(['.',','],['','.'],$price);
                $price = number_format($price,2, '.', '');
            }
            return $price;
        }else{
            return false;
        }
    }
}

if (! function_exists('topCategories')) {
    function topCategories($limit = 9)
    {
        /*return cache()->remember('categories',now()->addDay(),function () use ($limit) {
            return \App\Models\categories::where('parent_id' , '0')->limit($limit)->get();
        });*/
        return \App\Models\categories::where('parent_id' , '0')->limit($limit)->get();
    }
}
