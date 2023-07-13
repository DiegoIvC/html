<?php

namespace MyApp\Query;
use PDO;
use PDOException;
use MyApp\Data\Database;

class Ejecuta
{
    public function ejecuta($qry)
    {
        try
        {
            $con = new Database("instrumentales","root","");
            $objetoPDO=$con->getPDO();
            $objetoPDO->query($qry);
            $con->desconectarDB();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}

?>