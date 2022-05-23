<?php 
namespace App\Models;
class inscription extends User {
    
    public function etudiant():Etudiant{
        return new Etudiant;
    }
    public function classe():classe{
        return new classe;
    }
    public function __construct()
    {
        
        
    }

    public static  function selectAll(){
        $sql="select *  from  ".parent::$table." where role like ? ";
       return parent::database()->executeSelect($sql,[parent::$role]);
     }


}