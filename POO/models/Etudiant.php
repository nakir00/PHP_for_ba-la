<?php 
namespace App\Models;
class Etudiant extends User {
    
    public function inscriptions():array{
        return [];
    }
    public function __construct()
    {
        parent::__construct();
        parent::$role="ROLE_ET";
        
    }

    public static  function selectAll(){
        $sql="select *  from  ".parent::$table." where role like ? ";
       return parent::database()->executeSelect($sql,[parent::$role]);
     }


}