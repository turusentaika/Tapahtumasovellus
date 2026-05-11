<?php require "./header.php"; ?>

<h1 class="centered">Tapahtumat</h1>

<div class="events">
<?php
    foreach($allEvents as $eventItem): ?>
        <div class='eventItem'>
        <h3><?=$eventItem["title"] ?></h3>
        <p><?=$eventItem["text"]?></p>
        <p><?=$eventItem["startDate"]?>
        <p><?=$eventItem["signupDeadline"]?>
        <?php
        if(isLoggedIn() && ($eventItem["userid"] == $_SESSION["userid"])):
            $id = $eventItem['eventid'];
            $eventId = 'deleteEvent' . $id; ?>
            <a id=<?=$eventId ?> onClick='confirmDelete(<?=$id?>)' href='/delete_event?id=<?=$id?>'>Poista Tapahtuma</a> | 
            <a href='/update_event?id=<?=$id?>'>Päivitä Tapahtuman tietoja</a>
        <?php endif; ?>
        </div>
    <?php endforeach ?>
</div>

<?php require "./footer.php"; ?>