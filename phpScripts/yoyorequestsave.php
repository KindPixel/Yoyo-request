<?php  
$message = '';  
$error = '';  

$path = "../data/data.json";

if(file_exists($path))  
{  
    $current_data = file_get_contents($path);  
    $array_data = json_decode($current_data, true);  
    $extra = array(  
            'name'               =>     $_POST['name'],  
            'request'          =>     $_POST['request']
    );  
    $array_data[] = $extra;  
    $final_data = json_encode($array_data);  
    if(file_put_contents($path, $final_data))  
    {  
            $message = "<label class='text-success'>File Appended Success fully</p>";  
    }  
}  
else  
{  
    $error = 'JSON File not exits';  
}  


?>  