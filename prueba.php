<?php
    function encriptar($cad){
        $len = strlen($cad);
        $new_cad = "";
        for($i = 0; $i < $len;$i++){
            $str = substr($cad,$i,1);
            $str = strtolower($str);
            if($str == 'a')  $new_cad = $new_cad."FNF";
            if($str == 'b')  $new_cad = $new_cad."VJP";
            if($str == 'c')  $new_cad = $new_cad."KIV";
            if($str == 'd')  $new_cad = $new_cad."XTF";
            if($str == 'e')  $new_cad = $new_cad."ZNM";
            if($str == 'f')  $new_cad = $new_cad."CXH";
            if($str == 'g')  $new_cad = $new_cad."UXH";
            if($str == 'h')  $new_cad = $new_cad."TOA";
            if($str == 'i')  $new_cad = $new_cad."OHM";
            if($str == 'j')  $new_cad = $new_cad."XPH";
            if($str == 'k')  $new_cad = $new_cad."CLN";
            if($str == 'l')  $new_cad = $new_cad."WOU";
            if($str == 'm')  $new_cad = $new_cad."PFV";
            if($str == 'n')  $new_cad = $new_cad."TJY";
            if($str == 'o')  $new_cad = $new_cad."JGL";
            if($str == 'p')  $new_cad = $new_cad."IHZ";
            if($str == 'q')  $new_cad = $new_cad."YZB";
            if($str == 'r')  $new_cad = $new_cad."UHV";
            if($str == 's')  $new_cad = $new_cad."BVG";
            if($str == 't')  $new_cad = $new_cad."VPB";
            if($str == 'u')  $new_cad = $new_cad."AGX";
            if($str == 'v')  $new_cad = $new_cad."MUK";
            if($str == 'w')  $new_cad = $new_cad."GRW";
            if($str == 'x')  $new_cad = $new_cad."YVH";
            if($str == 'y')  $new_cad = $new_cad."ABL";
            if($str == 'z')  $new_cad = $new_cad."JGC";
   
        }
        return $new_cad;
    }

    function desencriptar($cad){
        $len = strlen($cad);
        $new_cad = "";
         
        for($i = 0; $i < $len;$i++){
            $str = substr($cad,$i,3);
            if($str == 'FNF') $new_cad = $new_cad."a";
            if($str == 'VJP') $new_cad = $new_cad."b";
            if($str == 'KIV') $new_cad = $new_cad."c";
            if($str == 'XTF') $new_cad = $new_cad."d";
            if($str == 'ZNM') $new_cad = $new_cad."e";
            if($str == 'CXH') $new_cad = $new_cad."f";
            if($str == 'UXH') $new_cad = $new_cad."g";
            if($str == 'TOA') $new_cad = $new_cad."h";
            if($str == 'OHM') $new_cad = $new_cad."i";
            if($str == 'XPH') $new_cad = $new_cad."j";
            if($str == 'CLN') $new_cad = $new_cad."k";
            if($str == 'WOU') $new_cad = $new_cad."l";
            if($str == 'PFV') $new_cad = $new_cad."m";
            if($str == 'TJY') $new_cad = $new_cad."n";
            if($str == 'JGL') $new_cad = $new_cad."o";
            if($str == 'IHZ') $new_cad = $new_cad."p";
            if($str == 'YZB') $new_cad = $new_cad."q";
            if($str == 'UHV') $new_cad = $new_cad."r";
            if($str == 'BVG') $new_cad = $new_cad."s";
            if($str == 'VPB') $new_cad = $new_cad."t";
            if($str == 'AGX') $new_cad = $new_cad."u";
            if($str == 'MUK') $new_cad = $new_cad."v";
            if($str == 'GRW') $new_cad = $new_cad."w";
            if($str == 'YVH') $new_cad = $new_cad."x";
            if($str == 'ABL') $new_cad = $new_cad."y";
            if($str == 'JGC') $new_cad = $new_cad."z";
        }
        
        return $new_cad;
    }

    $cadena = $_POST['palabra'];

        if(isset($_POST['encriptar'])){
            $resultado = encriptar($cadena);
            include_once 'index.php';
        }
        
        if(isset($_POST['desencriptar'])){    
            $resultado = desencriptar($cadena);
            include_once 'index.php';
        }
  
?>
