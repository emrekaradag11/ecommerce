<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'title',
        'text',
        'description',
        'keywords',
        'tags',
        'brand_id',
        'category_id',
        'product_unit_id',
        'status_id',
        'ord',
    ];

    public function getProductCategory(){
        return $this->hasOne('App\Models\categories','id','category_id');
    }

    public function getProductBrand(){
        return $this->hasOne('App\Models\brands','id','brand_id');
    }

    public function getProductDetail(){
        return $this->hasOne('App\Models\product_dtl','product_id','id')->where([
            ['type_id', '=', '1'],
        ]);
    }
    public function getProductVariantDetail($group = ''){
        if($group == '1'){
            //mevcut tanımlı olan varyantları listelemek ve arayüzde seçili varyantları selected yapmak için çekiliyor.
            $variants = $this->hasMany('App\Models\product_dtl','product_id','id')
                ->join('product_variant_group', 'product_variant_group.id', '=', 'product_dtl.variant_group_id')
                ->join('product_variant_group_option', 'product_variant_group_option.variant_group_id', '=', 'product_variant_group.id')
                ->where([
                    ['product_dtl.type_id','=','2'],
                    ['product_variant_group.status_id','!=','2'],
                ])
                ->groupBy('product_variant_group_option.variant_id')
                ->select('product_variant_group_option.variant_id')->get();
            $data = [];
            foreach ($variants as $v) {
                $data[] = $v->variant_id;
            }

            return $data;

        }else{
            return $this->hasMany('App\Models\product_dtl','product_id','id')
                ->join('product_variant_group', 'product_variant_group.id', '=', 'product_dtl.variant_group_id')
                ->where([
                    ['product_dtl.type_id','=','2'],
                    ['product_variant_group.status_id','!=','2'],
                ])
                ->select('product_dtl.*','product_variant_group.status_id');
        }
    }
}
