<?php 
/* PHP FUNCTION TO CALCULATE TIME DIFFERENCE IN MINUTE*/
function timedifference_in_minutes($start_time, $end_time,$para="") {
    /*$first_date = new DateTime("2012-11-30 " . $start_time);
    $second_date = new DateTime("2012-12-21 " . $end_time);
    $difference = $first_date->diff($second_date);
    //pr($difference);
    return $total_minutes = $difference->h * 60 + $difference->$i;*/
    $start_time = date("G:i", strtotime($start_time));
    $end_time = date("G:i", strtotime($end_time));
    $s_spit = explode(":",$start_time);
    $e_spit = explode(":",$end_time);

    $h1 = (int)($s_spit[0]);
    $m1 = (int)($s_spit[1]);

    $h2 = (int)($e_spit[0]);
    $m2 = (int)($e_spit[1]);

    //console.log($h1+' '+$m1+' '+$h2+' ' +$m2);
    $counter = 0;
    if(($h2-$h1)<0){
        for($i=$h1;$i<24;$i++) $counter++;
        for($i=1;$i<=$h2;$i++) $counter++;
    } else if(($h2-$h1)>0){
        $counter = $h2-$h1;
    } else {
        $counter = 24;
    }
    $minutes = 0;
    if(($m2-$m1)<0) {
        $minutes = 0-($m2-$m1);
        $counter--;
    } else {
        $minutes = $m2-$m1;
    }
   if ($para =='hours') {
       return ($counter . " hrs : " . $minutes . " mins");
   }
    return ($counter*60 + $minutes);
   
}