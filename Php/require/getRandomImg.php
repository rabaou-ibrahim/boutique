<?php

// $dir_path = "/boutique-en-ligne/Img"; // On détermine l'emplacement des images

// $files = scandir($dir_path);

// On sélectionne un fichier image aléatoirement à partir du tableau. 
// Pour ça, on doit créer un index en utilisant la fonction rand() et prendre le nom du fichier

// $count = count($files);
// $index = rand(2, ($count-1));
// $filename = $files[$index];

// Et enfin on affiche l'image choisie. On doit utiliser la balise <img>..

// echo '<img src="'.$dir_path."/".$filename.'" alt="'.$filename.'">';

function getRandomImage($dir_path = NULL){
    if(!empty($dir_path)){
        $files = scandir($dir_path);
        $count = count($files);
        if($count > 2){
            $index = rand(2, ($count-1));
            $filename = $files[$index];
            return '<img src="'.$dir_path."/".$filename.'" alt="'.$filename.'" height="250px" width="250px">';
        }
    }
}
?>