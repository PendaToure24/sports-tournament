<?php include ('header.php'); ?>
<?php include ('navbar.php'); ?>
<?php include('connexion_db.php'); ?>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>Equipe</th>
            <th>Joueurs</th>
        </tr>
    </thead>
    <tbody>
        <?php
                $query = "select distinct current_club from joueur";
                $resultat = mysqli_query($connect, $query);
                if($resultat)
                {
                while($row = mysqli_fetch_assoc($resultat))
                {
        ?>
                    <tr>
                        <td><?=$row['current_club']?> <img src="../images/<?=$row['current_club']?>.png" width="25"></td>
                        <td><a href='joueur.php?club="<?=$row['current_club']?>"'>composition <?=$row['current_club']?></a>
                        </td>
                    </tr>
        <?php
                }
                }
                else
                {
                    die("Erreur de connexion");
                }
        ?>
    </tbody>
</table>
<?php include ('footer.php'); ?>