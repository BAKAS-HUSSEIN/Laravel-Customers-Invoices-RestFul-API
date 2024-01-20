<?php 

namespace App\Filters;

use illuminate\Http\Request;


class ApiFilter {

    protected $safeParm = [];
    protected $columnMap = [];
    protected $operatorMap = [];

    public function transform(Request $reqeust) {
        
        $eloQuery = [];
        
        foreach($this->safeParm as $parm => $operators) {
        $query = $reqeust->query($parm);

        if(!isset($query)) {
            continue;
        }
        $column = $this->columnMap[$parm] ?? $parm;
        foreach($operators as $operator) {
            if(isset($query[$operator])) {
                $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
            }
        } 
    }        

    return $eloQuery;
}
 
}