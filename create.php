<?php

$rootPath = getcwd().'/';
$curdir = $rootPath ;

echo $rootPath.'<br>';
echo $curdir .'<br>';

if(
    isset($_GET['months']) && 
    isset($_GET['flux']) &&
    isset($_GET['produit']) &&
    isset($_GET['titre']) 
    ){
  
        $mois = $_GET['months'];
        $Date = date('m-d-Y');
       
        $flux = $_GET['flux'];
        $produit = $_GET['produit'];
        $titre = $_GET['titre'];
        $date = $days.$year;
    if(!file_exists($mois)){
        
        @mkdir($rootPath.$mois,0777,true);
      
         if(file_exists($mois)){
            @mkdir($rootPath.$mois.'/'. $flux,0777,true);
            echo "folder created Successfuly";
           if(file_exists($rootPath.$mois.'/'. $flux)){
            @mkdir($rootPath.$mois.'/'. $produit,0777,true);
           }else{
            echo "can't created Directory";
            print_r(error_get_last());
           }
        }else {
            echo "can't created Directory";
            print_r(error_get_last());

        } 
        
    }else{
        echo "faild to create dir";
    }
}
