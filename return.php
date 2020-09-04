
<?php
header ("Access-Control-Allow-Origin: *"); 
header ("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header ("Content-Type: application/json");
// Essas linhas é necessária para que outros sites façam a 
//requisição via Ajax para a aminha API.


echo json_encode($array); //a funcao json_encode tranforma o array em um arquivo json
exit;
