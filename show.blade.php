@extends('layouts.master')

@section('content')

<div class="table-responsive" id="season_stats_table">         
</div>

<script>      
    $('#season_year').change(function(){

        var season_year = this.value;
        
           
    $.ajax({

        type: "GET",
        url: "ajax.php?season_year="+season_year
        ,
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
