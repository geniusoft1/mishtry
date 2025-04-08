<?php
<<<<<<< HEAD

use App\Models\Product;
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
use App\Models\Review;

if (!function_exists('getOverallRating')) {
    function getOverallRating(object|array $reviews): array
    {
        $totalRating = count($reviews);
        $rating = 0;
        foreach ($reviews as $key => $review) {
            $rating += $review->rating;
        }
        if ($totalRating == 0) {
            $overallRating = 0;
        } else {
            $overallRating = number_format($rating / $totalRating, 2);
        }

        return [$overallRating, $totalRating];
    }
}

if (!function_exists('getRating')) {
    function getRating(object|array $reviews): array
    {
        $rating5 = 0;
        $rating4 = 0;
        $rating3 = 0;
        $rating2 = 0;
        $rating1 = 0;
        foreach ($reviews as $key => $review) {
            if ($review->rating == 5) {
                $rating5 += 1;
            }
            if ($review->rating == 4) {
                $rating4 += 1;
            }
            if ($review->rating == 3) {
                $rating3 += 1;
            }
            if ($review->rating == 2) {
                $rating2 += 1;
            }
            if ($review->rating == 1) {
                $rating1 += 1;
            }
        }
        return [$rating5, $rating4, $rating3, $rating2, $rating1];
    }
}

if (!function_exists('getProductDiscount')) {
    /**
     * @param object|array $product
     * @param string|float|int $price
     * @return float
     */
    function getProductDiscount(object|array $product, string|float|int $price): float
    {
        $discount = 0;
        if ($product['discount_type'] == 'percent') {
            $discount = ($price * $product['discount']) / 100;
        } elseif ($product['discount_type'] == 'flat') {
            $discount = $product['discount'];
        }

        return floatval($discount);
    }
}

if (!function_exists('getPriceRangeWithDiscount')) {
    function getPriceRangeWithDiscount(array|object $product): float|string
    {
<<<<<<< HEAD
        $productUnitPrice = $product->unit_price;
        foreach (json_decode($product->variation) as $key => $variation) {
            if ($key == 0) {
                $productUnitPrice = $variation->price;
            }
        }

        if ($product->discount > 0) {
            $productDiscountedPrice = webCurrencyConverter(amount: $productUnitPrice - getProductDiscount(product: $product, price: $productUnitPrice));
            return '<span class="discounted_unit_price fs-24 font-bold">' . $productDiscountedPrice . '</span>' . '<del class="total_unit_price align-middle text-muted fs-18 font-semibold">' . webCurrencyConverter(amount: $productUnitPrice) . '</del>';
        } else {
            return '<span class="discounted_unit_price fs-24 font-bold">' . webCurrencyConverter(amount: $productUnitPrice) . '</span>';
=======
        $lowestPrice = $product->unit_price;
        $highestPrice = $product->unit_price;

        foreach (json_decode($product->variation) as $key => $variation) {
            if ($lowestPrice > $variation->price) {
                $lowestPrice = round($variation->price, 2);
            }
            if ($highestPrice < $variation->price) {
                $highestPrice = round($variation->price, 2);
            }
        }

        if($product->discount > 0){
            $discountedLowestPrice = webCurrencyConverter(amount: $lowestPrice - getProductDiscount(product: $product, price: $lowestPrice));
            $discountedHighestPrice = webCurrencyConverter(amount: $highestPrice - getProductDiscount(product: $product, price: $highestPrice));

            if ($discountedLowestPrice == $discountedHighestPrice) {
                if($discountedLowestPrice == webCurrencyConverter(amount: $lowestPrice)){
                    return $discountedLowestPrice;
                }else{
                    return theme_root_path() === "default" ? $discountedLowestPrice." <del class='align-middle text-muted'>".webCurrencyConverter(amount: $lowestPrice)."</del> " : $discountedLowestPrice." <del>".webCurrencyConverter(amount: $lowestPrice)."</del> ";
                }
            }
            return  theme_root_path() === "default" ? '<span class="fs-16">'.$discountedLowestPrice.'</span>'." <del class='align-middle text-muted'>".webCurrencyConverter(amount: $lowestPrice)."</del> ". ' - ' .'<span class="fs-16">'.$discountedHighestPrice.'</span>'." <del class='align-middle text-muted'>".webCurrencyConverter(amount: $highestPrice)."</del> " : $discountedLowestPrice." <del>".webCurrencyConverter(amount: $lowestPrice)."</del> ". ' - ' .$discountedHighestPrice." <del>".webCurrencyConverter(amount: $highestPrice)."</del> ";
        }else if ($lowestPrice == $highestPrice){
            return  theme_root_path() === "default" ? '<span class="fs-16">'.webCurrencyConverter(amount: $highestPrice).'</span>' : webCurrencyConverter(amount: $highestPrice);
        }else{
            return  theme_root_path() === "default" ? '<span class="fs-16">'.webCurrencyConverter(amount: $lowestPrice).'</span>'.' - ' ."<span>".webCurrencyConverter(amount: $highestPrice)."</span>" : webCurrencyConverter(amount: $lowestPrice). ' - ' .webCurrencyConverter(amount: $highestPrice);
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        }
    }
}

if (!function_exists('getRatingCount')) {
    function getRatingCount($product_id, $rating)
    {
        return Review::where(['product_id' => $product_id, 'rating' => $rating])->whereNull('delivery_man_id')->count();
    }
}

if (!function_exists('units')) {
    function units(): array
    {
<<<<<<< HEAD
        return ['kg', 'pc', 'gms', 'ltrs','pair','oz','lb'];
    }
}
if (!function_exists('getVendorProductsCount')) {
    function getVendorProductsCount(string $type):int
    {
        $products = Product::where(['added_by'=>'seller'])->get();
        return match ($type) {
            'new-product' => $products->where('request_status', 0)->count(),
            'product-updated-request' => $products->whereNotNull('is_shipping_cost_updated')->where('is_shipping_cost_updated', 0)->count(),
            'approved' => $products->where('request_status', 1)->count(),
            'denied' => $products->where('request_status', 2)->where('status' , 0)->count(),
        };
    }
}
if (!function_exists('getAdminProductsCount')) {
    function getAdminProductsCount(string $type):int
    {
        $products = Product::where(['added_by'=>'admin'])->get();
        return match ($type) {
            'all' => $products->count(),
            'new-product' => $products->where('request_status', 0)->count(),
            'product-updated-request' => $products->whereNotNull('is_shipping_cost_updated')->where('is_shipping_cost_updated', 0)->count(),
            'approved' => $products->where('request_status', 1)->count(),
            'denied' => $products->where('request_status', 2)->where('status' , 0)->count(),
        };
=======
        return ['kg', 'pc', 'gms', 'ltrs'];
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    }
}
