@extends('layouts.master')

@section('content')


<div class="form-group">
    <label>Select League Year</label>
        <select class="form-control" id="season_year">
                <option value="" >Select League Year</option>
                 	@foreach ($seasonYear as $year)

                          <option value="{{ $year->season_id }}"> {{ $year->season_id }}</option>

                    @endforeach
                 </select>
</div>

<div class="table-responsive" id="season_stats_table">         
</div>

<script type ="text/javascript">      
    $('#season_year').change(function(){

        var season_year = this.value;
        
           
    $.ajax({

        type: "GET",
        url: "ajax.php?season_year="+season_year,
        dataType:'html',
        success: function(response){

        $('#season_stats_table').html(response);

            }

        });

    });
           
        
</script>
<!-- <script>

    $(document).ready(function() {

        $('.table').DataTable();

        });

</script> -->

  	
    


@endsection