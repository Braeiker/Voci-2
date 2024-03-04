<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter
{
    // Array to store allowed parameters and their corresponding operators
    protected $safeParams = [];

    // Array to map filterable parameters to their corresponding database columns
    protected $columnMap = [];

    // Array to map operators to their corresponding SQL operators
    protected $operatorMap = [];

    // Transform method to build Eloquent queries based on the request parameters
    public function transform(Request $request)
    {
        // Array to store the Eloquent query clauses
        $eloQuery = [];

        // Iterate through each safe parameter and its allowed operators
        foreach ($this->safeParams as $param => $operators) {
            // Get the query parameter from the request
            $query = $request->query($param);

            // Skip to the next iteration if the query parameter is not set
            if (!isset($query)) {
                continue;
            }

            // Get the corresponding database column or use the parameter itself
            $column = $this->columnMap[$param] ?? $param;

            // Iterate through each allowed operator for the parameter
            foreach ($operators as $operator) {
                // Check if the query parameter for the operator is set
                if (isset($query[$operator])) {
                    // Build and add a clause to the Eloquent query array
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }

        // Return the array of Eloquent query clauses
        return $eloQuery;
    }
}
