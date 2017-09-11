<!DOCTYPE html>
<table class="table table-striped table-bordered dt-responsive no-wrap" id="stats_table">
                <thead>
                  <tr>
                    <th>Ranks</th>
                    <th>Team Name</th>
                    <th>Owner Name</th>
                    <th>Wins</th>
                    <th>Loses</th>
                    <th>Tie</th>
                    <th>Points Forced</th>
                    <th>Points Allowed</th>
                    <th>Points Forced </th>
                    <th>Points Allowed</th>
                    <th>Differnce of points</th>
                  </tr>
                </thead>
                <tbody>
  <?php foreach($season_stats as $season_stat) : ?>
                  <tr>
                  <td><?php echo $season_stat['rank']; ?></td>
                     <td><?php echo $season_stat['team_name']; ?></td>
                     <td><?php echo $season_stat['owner_name']; ?></td>
                     <td><?php echo $season_stat['wins']; ?></td>
                     <td><?php echo $season_stat['loses']; ?></td>
                     <td><?php echo $season_stat['tie']; ?></td>
                     <td><?php echo $season_stat['points_forced']; ?></td>
                     <td><?php echo $season_stat['points_allowed']; ?></td>
                     <td><?php echo $season_stat['points_forced_per_game']; ?></td>
                     <td><?php echo $season_stat['points_allowed_per_game']; ?></td>
                     <td><?php echo $season_stat['difference']; ?></td>
                  </tr>
  <?php endforeach; ?>
                </tbody>
            </table>
<!-- <script>
        $(document).ready(function() {
            $('.table').DataTable();
            });
    </script> -->