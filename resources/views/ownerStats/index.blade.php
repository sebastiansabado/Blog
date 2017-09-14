@extends('layouts.master')

@section('content')
<div class="row">
	<div class="form-group">
	    <label>Select League Year</label>
	        <select class="form-control" id="season_year">
	                <option value="" >Select League Year</option>
	                 	@foreach ($seasonYear as $year)

	                          <option value="{{ $year->season_id }}"> {{ $year->season_id }}</option>

	                    @endforeach
	                 </select>
	</div>
</div>

<div class="row">
	<div class="col-8">
		<div class="table-responsive" id="season_stats_table"> 

			<table class="table table-striped table-bordered table-condensed" id="stats_table">
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
	   
	                  <tr>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td></td>

	                  </tr>

	                </tbody>
	            </table>

		</div>     

	</div>
</div>

<meta name="_token" content="{!! csrf_token() !!}" />
<script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script type ="text/javascript">      
    $('#season_year').change(function(){

        var season_year = this.value;
        
           
    $.ajax({

        type: "GET",
        url: "/ownerstats/seasonstats",
        data: {'season_year':season_year},
        success: function(data){


        $('#season_stats_table').html(data);

            }

        });

    });           
        
</script>


  	
    


@endsection