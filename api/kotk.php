<?php

$db = simplexml_load_file("db_kotk.xml");
$category = $db->Category;

foreach($category->Name as $name)
{
    $menu = (string)$name;
    $i = 0;
    if ($menu == "CAT1" )
{
        echo $category->Location->Room[$i];
        $i++;       
}
else 
{
        echo "No result";
}
}
?>
