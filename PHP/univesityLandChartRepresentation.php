<?php
	/* Database connection settings */
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'UGC';
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

	$universityNames = '';
	$universityLandArea = '';
	$universityOwnLandArea = '';
	$universityRentLandArea = '';



	//query to get data from the table
	$sql = "SELECT *  FROM `UNIVERSITY` ";
    $result = mysqli_query($mysqli, $sql);
    //echo  $result;

	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {

		$universityNames = $universityNames . '"'. $row['UniversityName'] .'",';
		
		$universityLandArea = $universityLandArea . '"'. $row['UniversityLand'] .'",';

		$universityOwnLandArea = $universityOwnLandArea . '"'. $row['UniversityOwnLand'] .'",';
		
		$universityRentLandArea = $universityRentLandArea . '"'. $row['UniversityRentLand'] .'",';

		
	}

	$universityNames = trim($universityNames,",");
	$universityLandArea = trim($universityLandArea,",");
	$universityOwnLandArea = trim($universityOwnLandArea,",");
	$universityRentLandArea = trim($universityRentLandArea,",");

	echo $universityNames;
	echo $universityLandArea;
	echo $universityOwnLandArea;
	echo $universityRentLandArea;


?>


<!DOCTYPE html>
<html>
<head>
	<title>Chart Representation</title>
	<meta charset="UTF-8">
  	<meta name="description" content="UGC Final Report">
  	<meta name="keywords" content="UGC">
 	<meta name="Mousumi" content="UGC">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  	<!-- <meta http-equiv="refresh" content="30"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet"  href="../css/style.css">
	

	<style type="text/css">			
			/*body{
				font-family: Arial;
			    margin: 80px 100px 10px 100px;
			    padding: 0;
			    color: white;
			    text-align: center;
			    background: #555652;
			}

			.container {
				color: #E8E9EB;
				background: #222;
				border: #555652 1px solid;
				padding: 10px;
			}*/
		</style>




</head>
<body>
	<h1 id="title">Graphical Representation OF Land</h1>

	<br><br><br>
	
	<h2>Total Land Representation </h2>

	

	<div class="container">	
			<canvas id="chartBarTotalLand" style="width: 1000; height:400; background: #FFFFFF; border: 1px solid #555652; margin-top: 10px;"></canvas>
			<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

			<script>
				var ctx = document.getElementById("chartBarTotalLand").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'bar',
		        data: {
		            labels: [<?php echo $universityNames ?>],
		            datasets: 
		            [{
		                label: 'Total Lands',
		                data: [<?php echo $universityLandArea ?>],
		                backgroundColor: 'aqua',
		                borderColor:'rgba(255,99,132)',
		                borderWidth: 3
		            }]
		        },
		     options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>






	    </div>

	    <br><br><br>

	    <div class="container">	
			<canvas id="chartHorizontalBarTotalLand" style="width: 1000; height:400; background: #FFFFFF; border: 1px solid #555652; margin-top: 10px;"></canvas>
			
			

			<script>
				var ctx = document.getElementById("chartHorizontalBarTotalLand").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'horizontalBar',
		        data: {
		            labels: [<?php echo $universityNames ?>],
		            datasets: 
		            [{
		                label: 'Total Lands',
		                data: [<?php echo $universityLandArea ?>],
		                backgroundColor: 'aqua',
		                borderColor:'rgba(255,99,132)',
		                borderWidth: 3
		            }]
		        },
		      options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
	    </div>


	    <br><br><br>
	    <h1>Own Land Representation</h1>

	    <div class="container">	
			<canvas id="chartBarOwnLand" style="width: 1000; height:400; background: #FFFFFF; border: 1px solid #555652; margin-top: 10px;"></canvas>
			<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
			

			<script>
				var ctx = document.getElementById("chartBarOwnLand").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'bar',
		        data: {
		            labels: [<?php echo $universityNames ?>],
		            datasets: 
		            [{
		                label: 'Own Lands',
		                data: [<?php echo $universityOwnLandArea ?>],
		                backgroundColor: 'aqua',
		                borderColor:'rgba(255,99,132)',
		                borderWidth: 3
		            }]
		        },
		      options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
	    </div>




	    <br><br><br>

	    <div class="container">	
			<canvas id="chartHorizontalBarOwnLand" style="width: 1000; height:400; background: #FFFFFF; border: 1px solid #555652; margin-top: 10px;"></canvas>
			<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
			

			<script>
				var ctx = document.getElementById("chartHorizontalBarOwnLand").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'horizontalBar',
		        data: {
		            labels: [<?php echo $universityNames ?>],
		            datasets: 
		            [{
		                label: 'Own Lands',
		                data: [<?php echo $universityOwnLandArea ?>],
		                backgroundColor: 'aqua',
		                borderColor:'rgba(255,99,132)',
		                borderWidth: 3
		            }]
		        },
		      options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
	    </div>

	    	    <br><br><br>

<h2>Rent Land Representation </h2>




	    <div class="container">	
			<canvas id="chartBarRentLand" style="width: 1000; height:400; background: #FFFFFF; border: 1px solid #555652; margin-top: 10px;"></canvas>
			<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
			

			<script>
				var ctx = document.getElementById("chartBarRentLand").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'bar',
		        data: {
		            labels: [<?php echo $universityNames ?>],
		            datasets: 
		            [{
		                label: 'Rent Lands',
		                data: [<?php echo $universityRentLandArea ?>],
		                backgroundColor: 'aqua',
		                borderColor:'rgba(255,99,132)',
		                borderWidth: 3
		            }]
		        },
		      options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
	    </div>




	    <br><br><br>

	    <div class="container">	
			<canvas id="chartHorizontalBarRentLand" style="width: 1000; height:400; background: #FFFFFF; border: 1px solid #555652; margin-top: 10px;"></canvas>
			<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
			

			<script>
				var ctx = document.getElementById("chartHorizontalBarRentLand").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'horizontalBar',
		        data: {
		            labels: [<?php echo $universityNames ?>],
		            datasets: 
		            [{
		                label: 'Rent Lands',
		                data: [<?php echo $universityRentLandArea ?>],
		                backgroundColor: 'aqua',
		                borderColor:'rgba(255,99,132)',
		                borderWidth: 3
		            }]
		        },
		      options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
	    </div>

	    	    <br><br><br>

	  
	    



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	


</body>
</html>