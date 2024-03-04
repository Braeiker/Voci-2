<?php

namespace App\Filters\Ctrl;

use App\Filters\ApiFilter;

class PostsFilter extends ApiFilter
{
    // Define an array of safe parameters with their allowed operators
    protected $safeParams = [
        'post_name' => ['eq', 'lk'],  // 'eq' and 'lk' operators are allowed for 'post_name'
        'author_id' => ['eq'],         // 'eq' operator is allowed for 'author_id'
        'media_id' => ['eq'],          // 'eq' operator is allowed for 'media_id'
    ];

    // Map the filterable column names to their corresponding database column names
    protected $columnMap = [
        'post_name' => 'post_name',
        'author_id' => 'author_id',
        'media_id' => 'media_id'
    ];

    // Map the operators to their corresponding SQL operators
    protected $operatorMap = [
        'eq' => '=',
        'lk' => 'like'
    ];

}
