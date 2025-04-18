<?php include('header.php'); ?>
<?php include('connexion_db.php'); ?>
<?php include('navbar.php'); ?>
<div class="titre">
    <h2 style="text-align: center;"><span style="background-color: white; color: purple; font-weight: bold">RESULTATS J-<?=$_GET['j']?></span></h2>
</div>
<div>
</div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>Domicile</th>
            <th>Extérieur</th>
            <th>Score</th>
            <th>Possession (%)</th>
            <th>Corners (Domicile)</th>
            <th>Corners (Extérieur)</th>
            <th>Carton Jaune (Domicile)</th>
            <th>Carton Rouge (Domicile)</th>
            <th>Carton Jaune (Extérieur)</th>
            <th>Carton Rouge (Extérieur)</th>
            <th>Tirs (Domicile)</th>
            <th>Tirs (Extérieur)</th>
            <th>Tirs Cadrés (Domicile)</th>
            <th>Tirs Cadrés (Extérieur)</th>
            <th>Fautes (Domicile)</th>
            <th>Fautes (Extérieur)</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if(isset($_GET['j'])){
                $game_week = (int)$_GET['j'];
                $query = "select home_team_name, away_team_name, home_team_goal_count, away_team_goal_count, home_team_possession, away_team_possession, home_team_corner_count, away_team_corner_count, home_team_yellow_cards, home_team_red_cards, away_team_yellow_cards, away_team_red_cards, home_team_shots, away_team_shots, home_team_shots_on_target, away_team_shots_on_target, home_team_fouls, away_team_fouls from matches where Game_Week=$game_week";
                $resultat = mysqli_query($connect, $query);
                if($resultat)
                {
                while($row = mysqli_fetch_assoc($resultat))
                {
        ?>
                    <tr>
                        <td><?=$row['home_team_name']?> <img src="../images/<?=$row['home_team_name']?>.png" width="25"></td>
                        <td><?=$row['away_team_name']?> <img src="../images/<?=$row['away_team_name']?>.png" width="25"></td>
                        <td><?=$row['home_team_goal_count']?> - <?=$row['away_team_goal_count']?></td>
                        <td><?=$row['home_team_possession']?> - <?=$row['away_team_possession']?></td>
                        <td><?=$row['home_team_corner_count']?></td>
                        <td><?=$row['away_team_corner_count']?></td>
                        <td><?=$row['home_team_yellow_cards']?></td>
                        <td><?=$row['home_team_red_cards']?></td>
                        <td><?=$row['away_team_yellow_cards']?></td>
                        <td><?=$row['away_team_red_cards']?></td>
                        <td><?=$row['home_team_shots']?></td>
                        <td><?=$row['away_team_shots']?></td>
                        <td><?=$row['home_team_shots_on_target']?></td>
                        <td><?=$row['away_team_shots_on_target']?></td>
                        <td><?=$row['home_team_fouls']?></td>
                        <td><?=$row['away_team_fouls']?></td>
                    </tr>
        <?php
                }
                }
                else
                {
                    die("Erreur de connexion");
                }
            }   
        ?>
    </tbody>
</table>
</div>

<?php include('footer.php'); ?>