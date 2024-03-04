<?php

namespace App\Filters\Ctrl;

use App\Filters\ApiFilter;

class MediaFilter extends ApiFilter
{
    // Define an array of safe parameters with their allowed operators
    protected $safeParams = [
        'name' => ['eq', 'lk'],         // 'eq' and 'lk' operators are allowed for 'name'
        'category' => ['eq', 'lk'],     // 'eq' and 'lk' operators are allowed for 'category'
        'description' => ['eq', 'lk'], // 'eq' and 'lk' operators are allowed for 'description'
        'file' => ['eq', 'lk'],         // 'eq' and 'lk' operators are allowed for 'file'
    ];

    // Map the filterable column names to their corresponding database column names
    protected $columnMap = [
        'name' => 'name',
        'category' => 'category',
        'description' => 'description'
        // 'file' is not included in $columnMap, so it won't be used in the database query
    ];

    // Map the operators to their corresponding SQL operators
    protected $operatorMap = [
        'eq' => '=',
        'lk' => 'like'
    ];

}
