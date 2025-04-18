<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php include('connexion_db.php'); ?>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>Position</th>
            <th>Equipe</th>
            <th>Stade</th>
            <th>Capacité</th>
        </tr>
    </thead>
    <tbody>
        <?php
                $query = "select distinct e.team_name as equipe, m.stadium_name, m.attendance from matches m join equipe e on m.home_team_name = e.team_name group by e.team_name";
                $resultat = mysqli_query($connect, $query);
                if($resultat)
                {
                    $pos = 1;
                while($row = mysqli_fetch_assoc($resultat))
                {
        ?>
                    <tr>
                        <td><?=$pos?></td>
                        <td><?=$row['equipe']?> <img src="../images/<?=$row['equipe']?>.png" width="25"></td>
                        <td><?=$row['stadium_name']?></td>
                        <td><?=$row['attendance']?></td>
                    </tr>
        <?php $pos++;
                }
                }
                else
                {
                    die("Erreur de connexion");
                }
        ?>
    </tbody>
</table>
<?php include('footer.php'); ?>