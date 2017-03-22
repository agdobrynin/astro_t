<?php
namespace Models;

use \Core\Model as Model;
use \Core\Db as Db;

class CalculateList extends Model{

    public function GetList()
    {
        /*
        SELECT id, name, body,
                (
                    SELECT GROUP_CONCAT(secret_code, "; ")
                    FROM CalcResults
        		    where CalcResults.calc_id = Calcs.id
        			and CalcResults.secret_code < 100
        		    Order by calc_id
               ) AS secret_code
               FROM Calcs
        	   Where secret_code not null
               Order by id

         */
        $sql = '
        SELECT id, name, body,
        (
            SELECT GROUP_CONCAT(secret_code, "; ")
            FROM CalcResults
		    where CalcResults.calc_id = Calcs.id
		    Order by calc_id
       ) AS secret_code
       FROM Calcs
       Order by id';

       $result = @Db::query($sql);

       if ( $result == false ){
           throw new \Exception(Db::getError());
       }
       $calculates=[];
       while( $row = $result->fetchArray() ){
           $calculates[] = [
               "id" => $row["id"],
               "name"=>$row["name"],
               "body"=>$row["body"],
               "secret_code"=>$row["secret_code"],
           ];
       }
       return $calculates;
    }

}
