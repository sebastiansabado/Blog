<!DOCTYPE html>
<table class="display table-bordered table-striped cell-border nowrap" id="prepared_stats">
                <thead>
                  <tr>
                    <th>Ranks</th>
                    <th>Team Name</th>
                    <th>Owner Name</th>
                    <th>Wins</th>
                    <th>Losses</th>
                    <th>Tie</th>
                    <th>Points Forced</th>
                    <th>Points Allowed</th>
                    <th>Points Forced </th>
                    <th>Points Allowed</th>
                    <th>Differnce of points</th>
                  </tr>
                </thead>
                <tbody>
    @foreach ($seasonStats as $stats)
                  <tr>
                    <td>{{ $stats->rank }}</td>
                    <td>{{ $stats->team_name }}</td>
                    <td>{{ $stats->owner_name }}</td>
                    <td>{{ $stats->wins }}</td>
                    <td>{{ $stats->losses }}</td>
                    <td>{{ $stats->tie }}</td>
                    <td>{{ $stats->points_forced }}</td>
                    <td>{{ $stats->points_allowed }}</td>
                    <td>{{ $stats->points_forced_per_game }}</td>
                    <td>{{ $stats->points_allowed_per_game }}</td>
                    <td>{{ $stats->difference }}</td>

                  </tr>
    @endforeach
                </tbody>
            </table>
<script>
        $(document).ready(function() {
            $('#prepared_stats').DataTable();
            });
</script>
