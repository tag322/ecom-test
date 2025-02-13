<?php

use function Pest\Stressless\stress;

test('should be not that slow', function() {
    $result = stress('http://localhost:8000/api/products_in_cat_count/1-2-3-4-5-6-7-8-9-10-11-12-13-14-15')->for(20)->seconds()->dump();

    $result->requests()->duration()->med();
});