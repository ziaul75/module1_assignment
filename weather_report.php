<?php
$temperature = -5;
if($temperature < 0){
    echo "It's Freezing";
}
else if($temperature >= 0 && $temperature <= 15){
    echo "It's Cool";
}
else if($temperature > 15){
    echo "It's Warm";
}
