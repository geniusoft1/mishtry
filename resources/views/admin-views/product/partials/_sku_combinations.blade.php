@if(count($combinations[0]) > 0)
    <table class="table physical_product_show table-borderless">
        <thead class="thead-light thead-50 text-capitalize">
        <tr>
            <th class="text-center">
                <label for="" class="control-label">
                    {{ translate('SL') }}
                </label>
            </th>
            <th class="text-center">
                <label for="" class="control-label">
                    {{ translate('attribute_Variation') }}
                </label>
            </th>
            <th class="text-center">
                <label for="" class="control-label">
                    {{ translate('variation_Wise_Price') }}
                    ({{ getCurrencySymbol() }})
                </label>
            </th>
            <th class="text-center">
                <label for="" class="control-label">{{ translate('SKU') }}</label>
            </th>
            <th class="text-center">
                <label for="" class="control-label">{{ translate('Variation_Wise_Stock') }}</label>
            </th>
        </tr>
        </thead>
        <tbody>

        @php
            $serial = 1;
        @endphp

        @foreach ($combinations as $key => $combination)
            @php
                $sku = '';
                foreach (explode(' ', $productName) as $value) {
                    $sku .= substr($value, 0, 1);
                }

                $str = '';
                foreach ($combination as $index => $item){
                    if($index > 0 ){
                        $str .= '-'.str_replace(' ', '', $item);
                        $sku .='-'.str_replace(' ', '', $item);
                    }
                    else{
                        if($colorsActive == 1){
                            $color_name = \App\Models\Color::where('code', $item)->first()->name;
                            $str .= $color_name;
                            $sku .='-'.$color_name;
                        }
                        else{
                            $str .= str_replace(' ', '', $item);
                            $sku .='-'.str_replace(' ', '', $item);
                        }
                    }
                }
            @endphp

            @if(strlen($str) > 0)
                <tr>
                    <td class="text-center">
                        {{ $serial++ }}
                    </td>
                    <td>
                        <label for="" class="control-label">{{ $str }}</label>
                    </td>
                    <td>
                        <input type="number" name="price_{{ $str }}" value="{{ $unitPrice }}" min="0" step="0.01"
<<<<<<< HEAD
                               class="form-control variation-price-input remove-symbol" required
                               placeholder="{{ translate('ex').': 100' }}">
                    </td>
                    <td>
                        <input type="text" name="sku_{{ $str }}" value="{{ strtoupper($sku) }}" class="form-control" required
                               placeholder="{{ translate('ex').': MCU-47-V593-M' }}">
                    </td>
                    <td>
                        <input type="number" name="qty_{{ $str }}" value="1" min="1"
                               max="1000000" step="1" class="form-control remove-symbol" required
=======
                               class="form-control variation-price-input" required
                               placeholder="{{ translate('ex') }}: 535">
                    </td>
                    <td>
                        <input type="text" name="sku_{{ $str }}" value="{{ $sku }}" class="form-control" required
                               placeholder="{{ translate('ex') }}: MCU47V593M">
                    </td>
                    <td>
                        <input type="number" name="qty_{{ $str }}" value="1" min="1"
                               max="1000000" step="1" class="form-control" required
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                               placeholder="{{ translate('ex') }}: 5">
                    </td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
@endif

