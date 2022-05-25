
<?php

include __DIR__.'/data.php';
$risultato = [];

if(isset($_GET['genre'])){
    foreach($dischi as $disco){
        if($disco['genre'] == $_GET['genre']){
            $risultato[]=$disco;
        }
    }

}else{
    $risultato = $dischi;
}

header('Content-Type: application/json');

echo json_encode($risultato);



?>