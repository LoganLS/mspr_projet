<?php
    session_start();
    $title='Accueil';
    $description='';

    include_once('php/db.php');
    $sql= 'SELECT id, name, picture
    FROM events
    WHERE is_published=1
    AND date_start>=NOW()
    ORDER BY date_start
    LIMIT 5';

    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $evenements=$stmt->fetchAll();
?>
<?php include_once('layouts/header.php');?>
<main class="container">
    <h1 id="h1_accueil">EVENEMENTS NANTES</h1>
    <h2 id="h2_accueil">Spectacles, concerts, festivals et sorties</h2>
    <div id="bloc_parent_images_accueil">
        <?php
        foreach ($evenements as $evenement) { ?>
            <div class="bloc_images_accueil">
                <img src="images/<?php echo $evenement->picture; ?>" alt="" onclick="location.href='event_detail.php?id=<?php echo $evenement->id; ?>'">
                <p><?php echo $evenement->name;?></p>
            </div>
        <?php } ?>
    </div>
    <div id="bloc_paragraphes_index">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam neque dui, commodo ac volutpat vel, imperdiet efficitur augue. Cras sollicitudin, mauris in cursus imperdiet, ligula arcu tempor risus, et malesuada erat velit in turpis. Vivamus rhoncus vel mi eget consectetur. Sed mollis rutrum ex, eu pellentesque augue scelerisque sit amet. Mauris sit amet nisi mattis, efficitur neque vitae, maximus justo. Etiam ipsum lectus, aliquam quis tincidunt vel, hendrerit quis erat. Nulla facilisi. Phasellus nulla nulla, ultrices sit amet lorem at, rhoncus euismod arcu. Pellentesque vehicula lobortis volutpat.</p>

        <p>Ut vitae viverra dui, in aliquet neque. Morbi et varius ante. Integer non interdum orci, at placerat neque. Maecenas arcu diam, pretium vitae risus quis, fringilla ultricies arcu. Donec luctus leo ut aliquam viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lacinia tellus justo, in pretium libero consectetur eleifend. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed condimentum aliquam nisl, vel vehicula arcu. Quisque in lacus urna. Integer vel dui mollis, lacinia turpis a, placerat lorem. Proin sodales massa vel massa sagittis, at iaculis eros feugiat. Nunc luctus nunc in felis ultrices malesuada. In sapien massa, pharetra a libero id, accumsan semper dui. Sed cursus ante at pulvinar euismod. Phasellus tristique arcu ut ex commodo sollicitudin quis et odio.</p>

        <p>Quisque convallis, ex at pulvinar posuere, mi odio venenatis urna, non semper risus sem eu risus. Aliquam felis ipsum, egestas vel tempus nec, sollicitudin in nisl. Morbi a ullamcorper massa, a varius sem. Fusce pharetra tempus erat, at viverra mi ultrices sit amet. Sed congue non ipsum sit amet dictum. Fusce turpis neque, pretium et massa ut, porta volutpat odio. Sed ut efficitur nisi. Nullam sagittis aliquet eros, quis ullamcorper tellus rutrum et. Cras finibus mauris augue, vel egestas diam euismod sed. Donec eu scelerisque tellus, sed euismod diam. Aliquam vestibulum erat sagittis, placerat lorem ac, mattis nunc.</p>
    </div>
</main>
<?php include_once('layouts/footer.php');?>

