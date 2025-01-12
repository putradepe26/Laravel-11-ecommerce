<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;


class ShopController extends Controller
{
    public function index(Request $request)
    {
        $size = $request->query('size') ? $request->query('size') : 12;
        $sorting = $request->query('sorting') ? $request->query('sorting'):'default';               
        $f_brands = $request->query('brands');
        $f_categories = $request->query('categories');
        $min_price = $request->query('min') ? $request->query('min') : 1 ;
        $max_price = $request->query('max') ? $request->query('max') : 5000 ;
        if($sorting=='date')   
        {
            $products = Product::orderBy('created_at','DESC')->paginate($size);  
        }
        else if($sorting=="price")
        {
            $products = Product::orderBy('regular_price','ASC')->paginate($size); 
        }
        else if($sorting=="price-desc")
        {
            $products = Product::orderBy('regular_price','DESC')->paginate($size); 
        }
        else{
            $products = Product::paginate($size);  
        }  

        
        $brands = Brand::orderBy('name','ASC')->get();
        $categories = Category::orderBy('name','ASC')->get();
                             //Filter pada Brand / Merk
        $products = Product::where(function($query) use ($f_brands){
            $query->whereIn('brand_id',explode(',',$f_brands))->orWhereRaw("'".$f_brands."' = ''");
        })
        //Filter pada kategori
        ->where(function($query) use ($f_categories){
            $query->whereIn('category_id',explode(',',$f_categories))->orWhereRaw("'".$f_categories."' = ''");
        })
        //Filter pada harga murah ke mahal
        ->where(function($query) use ($min_price, $max_price){
            $query->whereBetween('regular_price',[$min_price, $max_price])
            ->orWhereBetween('sale_price',[$min_price, $max_price]);
        })														
        ->orderBy('created_at','DESC')->paginate($size);
        return view('shop',compact('products','size','sorting','brands','f_brands','categories','f_categories','min_price','max_price'));
    }

    public function product_details($product_slug)
    {
    $product = Product::where("slug",$product_slug)->first();
    $rproducts = Product::where("slug","<>",$product_slug)->get()->take(8);
    return view('details',compact("product","rproducts"));
    }
}
