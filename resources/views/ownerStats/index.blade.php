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

<meta name="_token" content="{!! csrf_token() !!}" />
<script type ="text/javascript">      
    $('#season_year').change(function(){

        var season_year = this.value;
        
           
    $.ajax({

        type: "GET",
        url: "/ownerstats/"+season_year,
        data: {'season_year':season_year},
        success: function(data){


        $('#season_stats_table').html(data);

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