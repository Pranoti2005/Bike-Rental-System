<?php
$con=mysqli_connect("localhost","root","","project");
if($con)
{
	echo "connect";

}
else
{
	echo "error";
}
if(isset($_POST['btn']))
{
	$bike_name=$_POST['bike_name'];
	$bike_number=$_POST['bike_number'];
	$bike_color=$_POST['bike_color'];
	$bike_milege=$_POST['bike_milege'];
	$charges=$_POST['charges'];
	$imagename=$_FILES['image']['name'];
	$imagesize=$_FILES['image']['size'];
	$filetemp=$_FILES['image']['tmp_name'];
	$filetype=$_FILES['image']['type'];
	$filestore="image/".$imagename;
	if(move_uploaded_file($filetemp,$filestore))
	{
	$sql="insert into bike(bike_name,bike_number,bike_color,bike_milege,charges,image)values('$bike_name','$bike_number','$bike_color','$bike_milege','$charges','$imagename')";
	if(mysqli_query($con,$sql))
		{
			echo "file store";
		}
		else
		{
			echo "error".mysqli_error($con);
		}
	}
	else
	{
		echo "error";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Bike id</th>
												<th>Bike name</th>
												<th>Bike number</th>
												<th>Bike colour</th>
												<th>Bike mileage</th>
												<th>Bike model</th>
												<th>charges</th>
												<th>delete</th>
												<th>update</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
								$con=mysqli_connect("localhost","root","","project");
								$sql="select * from bike";
								$rs=mysqli_query($con,$sql);
								while($rw=mysqli_fetch_row($rs))
								{
								?>
											<tr align="center">
												<td ><?php echo $rw[0]; ?></td>
												<td ><?php echo $rw[1]; ?></td>
												<td ><?php echo $rw[2]; ?></td>
												<td ><?php echo $rw[3]; ?></td>
												<td ><?php echo $rw[4]; ?></td>
												<td ><?php echo $rw[5]; ?></td>
												<td ><?php echo $rw[6]; ?></td>
												<td><img src="image/<?php echo $rw[7];?>" height="120px" width="120px"></td>
												<td><a href="bikedelete.php?b_id=<?php echo $rw[0];?>">Delete</td>
												<td><a href="bike_update.php?b_id=<?php echo $rw[0];?>">Edit</td>
												
												</tr>
												<?php
								                }
												?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- USER DATA-->
                                <!-- END USER DATA-->
                            </div>
                            <div class="col-lg-6">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                               </div>
                        </div>
                       

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
