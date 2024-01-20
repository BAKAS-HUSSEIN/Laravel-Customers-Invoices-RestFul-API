<?php 

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use illuminate\Http\Request;


class CustomerFilter extends ApiFilter {

    protected $safeParm = [
        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'postalCode' => ['eq', 'gt', 'lt']
    ];
    protected $columnMap = [
        'postalCode' => 'postal_code'
    ];
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];

   
 
}