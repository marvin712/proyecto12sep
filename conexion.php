<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bmzkvzeourcpgbbebdn0-mysql.services.clever-cloud.com","ubvejt2t3yc7ijdg","bfzSAmRLcruNj9v3dzWX","bmzkvzeourcpgbbebdn0");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }