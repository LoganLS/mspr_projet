<?php
include_once('db.php');
$sql="SELECT id,name,date_start,date_end FROM events WHERE is_published=1";
$stmt=$conn->prepare($sql);
$stmt->execute();
$events=$stmt->fetchAll();

$tableauAllEvents=array();
foreach($events as $event){
    $tableauEvent=array(
        'id'=>$event->id,
        'title'=>$event->name,
        'start'=>$event->date_start,
        'end'=>date('Y-m-d',strtotime($event->date_end.' +1 day')),
        'url'=>'./event_detail.php?id='.$event->id
    );
    array_push($tableauAllEvents,$tableauEvent);
}

$fp = fopen('./json/all_events_published.json', 'w');
fwrite($fp, json_encode($tableauAllEvents));
fclose($fp);
?>