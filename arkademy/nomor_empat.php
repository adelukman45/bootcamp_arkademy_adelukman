<?php
 
$fruit_preferences = ["ade" => "lengkeng", "lukman" => "anggur", "al" => "jeruk", "windi" => "mangga", "amelia" => "nanas"];
 
echo "Sebelum diurutkan — \n";
foreach($fruit_preferences as $person=>$preference) {
    echo $person." suka ".$preference."\n";
}
 

sort($fruit_preferences);
 echo '<br>';
echo "Setelah diurutkan  — \n";
foreach($fruit_preferences as $person=>$preference) {
    echo $person." suka ".$preference."\n";
}
 
 
?>