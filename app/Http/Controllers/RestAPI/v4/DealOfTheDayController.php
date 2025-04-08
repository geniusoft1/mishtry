<?php

namespace App\Http\Controllers\RestAPI\v4;

use App\Http\Controllers\Controller;
use App\Models\DealOfTheDay;
use App\Models\Product;
use App\Utils\Helpers;
use Illuminate\Http\Request;

class DealOfTheDayController extends Controller
{
    public function get_deal_of_the_day_product(Request $request)
    {
        $dealOfTheDay = DealOfTheDay::where('deal_of_the_days.status', 1)->first();
        $product = null;
        if(isset($dealOfTheDay)){
<<<<<<< HEAD
            $product = Product::active()->withCount('reviews')->find($dealOfTheDay->product_id);
            if(!isset($product))
            {
                $product = Product::active()->withCount('reviews')->inRandomOrder()->first();
=======
            $product = Product::active()->find($dealOfTheDay->product_id);
            if(!isset($product))
            {
                $product = Product::active()->inRandomOrder()->first();
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            }
            $product = Helpers::product_data_formatting($product);
            $product['average_rating'] = $product->reviews ? $product->reviews->avg('rating') : 0;
        }

        return response()->json($product, 200);

    }
}
