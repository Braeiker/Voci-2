<?php

namespace App\Filters\Ctrl;

use App\Filters\ApiFilter;

class AuthorsFilter extends ApiFilter
{
    // Define an array of safe parameters with their allowed operators
    protected $safeParams = [
        'name' => ['eq', 'lk'],     // 'eq' and 'lk' operators are allowed for 'name'
        'surname' => ['eq', 'lk'],  // 'eq' and 'lk' operators are allowed for 'surname'
    ];

    // Map the filterable column names to their corresponding database column names
    protected $columnMap = [
        'name' => 'name',
        'surname' => 'surname'
    ];

    // Map the operators to their corresponding SQL operators
    protected $operatorMap = [
        'eq' => '=',
        'lk' => 'like'
    ];
}
