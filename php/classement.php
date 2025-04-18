<?php include('header.php'); ?>
<?php include('connexion_db.php'); ?>
<?php include('navbar.php'); ?>

<div>
    <h2 style="text-align: center;"><span style="background-color: white; color: purple; font-weight: bold">CLASSEMENT</span></h2>
</div>
<div>
</div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>Position</th>
            <th>Equipe</th>
            <th>Matchs joués</th>
            <th>Points</th>
            <th>Victoire</th>
            <th>Défaite</th>
            <th>Nul</th>
            <th>Goal Difference</th>
            <th>Buts Marqués</th>
            <th>Buts Concédés</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query = "select team_name, matches_played,points, wins, losses, draws, goal_difference, goals_scored, goals_conceded from equipe order by points desc";
            $resultat = mysqli_query($connect, $query);
            if($resultat)
            {
            $rang = 1;
            while($row = mysqli_fetch_assoc($resultat))
            {
        ?>
                <tr>
                    <td><?=$rang?></td>
                    <td><?=$row['team_name']?> <img src="../images/<?=$row['team_name']?>.png" width="25"></td>
                    <td><?=$row['matches_played']?></td>
                    <td><?=$row['points']?></td>
                    <td><?=$row['wins']?></td>
                    <td><?=$row['losses']?></td>
                    <td><?=$row['draws']?></td>
                    <td><?=$row['goal_difference']?></td>
                    <td><?=$row['goals_scored']?></td>
                    <td><?=$row['goals_conceded']?></td>
                </tr>
        <?php $rang++;
            }
            }
            else
            {
                die("Erreur de connexion");
            }
        ?>
    </tbody>
</table>
</div>
<?php include('footer.php'); ?>