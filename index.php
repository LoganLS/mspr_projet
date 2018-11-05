<?php
    session_start();
    $title='Accueil';
    $description='';

    include_once('php/get_all_events_published.php');
?>
<?php include_once('layouts/header.php');?>
<main>
    <div id='calendar-container'>
        <div id='calendar'></div>
    </div>
</main>
<?php include_once('layouts/footer.php');?>