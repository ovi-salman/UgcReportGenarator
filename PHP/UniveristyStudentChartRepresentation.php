<?php
	/* Database connection settings */
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'UGC';
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

	$universityNames = '';
	$admitedStudent = '';
	$femaleStudent = '';
	$totalStudentStudying = '';
	$totalFemaleStudentStuding = '';



	//query to get data from the table
	$sql = "SELECT *  FROM `STUDENT` ";
    $result = mysqli_query($mysqli, $sql);
    //echo  $result;

	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {

		$universityNames = $universityNames . '"'. $row['UniversityName'] .'",';
		
		$admitedStudent = $admitedStudent . '"'. $row['AdmittedStudent'] .'",';

		$femaleStudent = $researchExpence . '"'. $row['FemaleStudent'] .'",';
		
		$totalStudentStudying = $totalStudentStudying . '"'. $row['TotalStudentStudying'] .'",';

		$totalFemaleStudentStuding = $totalFemaleStudentStuding . '"'. $row['TotalFemaleStudentStudying'] .'",';




		
	}

	$universityNames = trim($universityNames,",");
	$admitedStudent = trim($educationExpences,",");
	$femaleStudent = trim($researchExpence,",");
	$totalStudentStudying = trim($salaryExpence,",");
	$totalFemaleStudentStuding = trim($scolarshipExpence,",");




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
	<h1 id="title">Graphical Representation OF Expense</h1>

	<br><br><br>
	
	<h2>Student Representation </h2>

	<h2>Representation of Student Admitted </h2>

	<div class="container">	
			<canvas id="chartBarEducationExpences" style="width: 1000; height:400; background: #FFFFFF; border: 1px solid #555652; margin-top: 10px;"></canvas>
			<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

			<script>
				var ctx = document.getElementById("chartBarEducationExpences").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'bar',
		        data: {
		            labels: [<?php echo $universityNames ?>],
		            datasets: 
		            [{
		                label: 'Education Expense',
		                data: [<?php echo $admitedStudent ?>],
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
			<canvas id="chartHorizontalBarEducationExpences" style="width: 1000; height:400; background: #FFFFFF; border: 1px solid #555652; margin-top: 10px;"></canvas>
			<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
			

			<script>
				var ctx = document.getElementById("chartHorizontalBarEducationExpences").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'horizontalBar',
		        data: {
		            labels: [<?php echo $universityNames ?>],
		            datasets: 
		            [{

		                label: 'Education Expense',
		                data: [<?php echo $admitedStudent ?>],
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

	    <h2>Expense Representation of Female Student </h2>

	    <div class="container">	
			<canvas id="chartBarresearchExpence" style="width: 1000; height:400; background: #FFFFFF; border: 1px solid #555652; margin-top: 10px;"></canvas>
			<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
			

			<script>
				var ctx = document.getElementById("chartBarresearchExpence").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'bar',
		        data: {
		            labels: [<?php echo $universityNames ?>],
		            datasets: 
		            [{
		                label: 'Research Expense',
		                data: [<?php echo $femaleStudent ?>],
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
			<canvas id="chartHorizontalBarchartBarresearchExpence" style="width: 1000; height:400; background: #FFFFFF; border: 1px solid #555652; margin-top: 10px;"></canvas>
			<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
			

			<script>
				var ctx = document.getElementById("chartHorizontalBarchartBarresearchExpence").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'horizontalBar',
		        data: {
		            labels: [<?php echo $universityNames ?>],
		            datasets: 
		            [{
		                label: 'Research Expense',
		                data: [<?php echo $femaleStudent ?>],
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

	  <br><br><br>



	  <h2>Expense Representation of Total Student Studing</h2>

	    <div class="container">	
			<canvas id="chartBarsalaryExpence" style="width: 1000; height:400; background: #FFFFFF; border: 1px solid #555652; margin-top: 10px;"></canvas>
			<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
			

			<script>
				var ctx = document.getElementById("chartBarsalaryExpence").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'bar',
		        data: {
		            labels: [<?php echo $universityNames ?>],
		            datasets: 
		            [{
		                label: 'Salary Expense',
		                data: [<?php echo $totalStudentStudying ?>],
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
			<canvas id="chartHorizontalBarsalaryExpence" style="width: 1000; height:400; background: #FFFFFF; border: 1px solid #555652; margin-top: 10px;"></canvas>
			<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
			

			<script>
				var ctx = document.getElementById("chartHorizontalBarsalaryExpence").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'horizontalBar',
		        data: {
		            labels: [<?php echo $universityNames ?>],
		            datasets: 
		            [{
		                label: 'Salary Expense',
		                data: [<?php echo $totalStudentStudying ?>],
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


				 <br><br><br>

	    	    <h2>Expense Representation of Female Student Studing </h2>


	    <div class="container">	
			<canvas id="chartBarscolarshipExpence" style="width: 1000; height:400; background: #FFFFFF; border: 1px solid #555652; margin-top: 10px;"></canvas>
			<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
			

			<script>
				var ctx = document.getElementById("chartBarscolarshipExpence").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'bar',
		        data: {
		            labels: [<?php echo $universityNames ?>],
		            datasets: 
		            [{
		                label: 'ScolarShip Expense',
		                data: [<?php echo $totalFemaleStudentStuding ?>],
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







	    



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	


</body>
</html>