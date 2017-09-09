@extends('layouts.master')

@section('content')

<div class="table-responsive" id="season_stats_table">         
</div>

<script>      
    $('#selected_season_id').change(function(){

        var season_id = this.value;
        var league_id = <?php echo $league_id; ?>;
               
           
            //if(season_id){
    $.ajax({

        type: "GET",
        url: "ajax.php?season_id="+season_id+"&league_id="+league_id,
        success: function(response){

        $('#season_stats_table').html(response);

            }

        });

    });
           
        
</script>
<script>

    $(document).ready(function() {

        $('.table').DataTable();

        });

</script>

@endsection
