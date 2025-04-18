<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php include('connexion_db.php'); ?>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>Equipe</th>
            <th>Coach</th>
        </tr>
    </thead>
    <tbody>
        <?php
                $query = "select team_name, manager from equipe";
                $resultat = mysqli_query($connect, $query);
                if($resultat)
                {
                while($row = mysqli_fetch_assoc($resultat))
                {
        ?>
                    <tr>
                        <td><?=$row['team_name']?> <img src="../images/<?=$row['team_name']?>.png" width="25"></td>
                        <td><?=$row['manager']?></td>
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
<?php include('footer.php'); ?>