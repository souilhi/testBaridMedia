<?php

$rootPath = getcwd().'/';
echo $curdir . "<br>";
$curdir = $rootPath ;
//$location ='./';
$dir = "./";

//echo $mois .'<br>';
echo $rootPath.'<br>';
echo $curdir .'<br>';
//$mois ="uploads2";

if(
    isset($_GET['months']) && 
    isset($_GET['flux']) &&
    isset($_GET['produit']) &&
    isset($_GET['titre']) 
    ){
  
        $mois = $_GET['months'];
        $Date = date('m-d-Y');
        echo $Date;
        $flux = $_GET['flux'];
        $produit = $_GET['produit'];
        $titre = $_GET['titre'];
        $date = $days.$year;
    if(!file_exists($mois)){
        //@mkdir($rootPath.'/Files/'.$mois,0777,true);
        @mkdir($rootPath.$mois,0777,true);
        // fopen($rootPath. $mois);
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

/* 
$folder_name=$_POST['months'];
            if (!file_exists($location . $folder_name))// Check folder exists or not 
			{
				@mkdir($location . $folder_name, 0777);// Create folder by using mkdir function 
                echo '<br>';
                print_r(error_get_last());
                
	            echo "<br>Folder Created";// Success Message 
			}  */
/* 
$fi = new FilesystemIterator(__DIR__, FilesystemIterator::SKIP_DOTS);
printf("There were %d Files", iterator_count($fi));
echo "<br>"; */
/* if(!mkdir($mois,777,true)){
    print_r(error_get_last());
} */
 /* if (!file_exists($location.$mois)){
    print_r(error_get_last());
    mkdir($location.'jan', 0777, true);
   echo "fils not exist ".$mois;

} else{
   // print_r(error_get_last());
    echo "fils ". $mois. " exist " ;

}  */



/* 
if (!mkdir($structure, 0777, true)){
    mkdir('./'.$mois, 0777, true);
} else{
    die('Echec lors de la création des répertoires...');
}
 */
/* mkdir('/testBaridMedia'.$mois, 0777, true);
chmod('/testBaridMedia'.$mois, 0777); */