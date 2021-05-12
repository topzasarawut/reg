<?php  
include_once('../php/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN REG Office By Neverdie ๘ Studio</title>
    <!-- ติดตั้งการใช้งาน CSS ต่างๆ -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <style>body,section{font-family: 'Prompt', sans-serif;}</style>
    
</head>
<body>
    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>
	
	<?php
        // นับจำนวน สมาชิก
        $sql = "SELECT COUNT(*) AS topza FROM `reg_skills`";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $countusers= $row["topza"];

        // นับจำนวน รถยนต์
        // $sql = "SELECT COUNT(*) AS topza FROM `cars`";
        // $result = $conn->query($sql);
        // $row = $result->fetch_assoc();
        // $countcars= $row["topza"]
  ?>
   <?php

		// นับจำนวน การเช่ารถยนต์
		// $sql = "SELECT COUNT(*) AS topza FROM `rental`";
		// $result = $conn->query($sql);
		// $row = $result->fetch_assoc();
		// $countrental= $row["topza"]
		// ?>
  <?php

		// นับจำนวน จำนวนเงิน
        // $sql = "SELECT SUM(money) AS topza FROM `rental`";
        // $result = $conn->query($sql);
        // $row = $result->fetch_assoc();
        // $countmoney= $row["topza"]
  ?>

    <section class="bg-light min-vh-100">
		<br><br><br>
		<div class="container-fluid">
			<div class="row mt-3">
				<div class="col-sm-3 col-md-2">
					<div class="list-group">

						<!-- Section sidebar -->
				 		<?php include_once('includes/sidebar.php') ?>
				 
						<!-- <a href="index.php" class="list-group-item list-group-item-action active">Home</a>
						<a href="car" class="list-group-item list-group-item-action">รถยนต์</a>
						<a href="user" class="list-group-item list-group-item-action">สมาชิก</a>
						<a href="rental" class="list-group-item list-group-item-action">การเช่ารถ</a>
						<a href="../index.php" class="list-group-item list-group-item-action">ไปยังหน้าประกาศรายชื่อ</a> -->
					</div>
				</div>
				<div class="col">
					<!-- <div class="alert alert-primary" role="alert">
						A simple primary alert—check it out!
					</div> -->
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<!-- <li class="breadcrumb-item active" aria-current="page">Library</li> -->
						</ol>
					</nav>
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<!-- <div class="row">
										<div class="col-sm-4">
											<img src="img/073-robot.png" class="w-100 rounded-circle">
										</div>
										<div class="col-sm">
											<h3 class="my-4">Sarawut Kedtrawon</h3>
											<p>สำนักงานให้เช่ารถ</p>
											<p>information technology (IT)</p>
											<p>Mahasarakham University | คณะวิทยาการสารสนเทศ</p>
										</div>
									</div> -->
									<div class="row mt-3">
										<div class="col-sm bg-info text-white">
											<div class="text-center p-4">
												<h2><?php echo $countusers; ?></h2>
												<p>จำนวนสมาชิก</p>
											</div>
										</div>
										<div class="col-sm bg-success text-white">
											<div class="text-center p-4">
												<h2></h2>
												<p>จำนวน #</p>
											</div>
										</div>
										<div class="col-sm bg-warning text-white">
											<div class="text-center p-4">
												<h2></h2>
												<p>จำนวน #</p>
											</div>
										</div>
										<div class="col-sm bg-danger text-white">
											<div class="text-center p-4">
												<h2></h2>
												<p>จำนวน #</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="col-sm-4">
							<div class="card h-100">
								<div class="card-body">
									<h3 class="my-4">Your goals this month</h3>
									<h5 class="mt-3">จำนวนรถยนต์</h5>
									<div class="progress">
										<div class="progress-bar w-50" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h5 class="mt-3">จำนวนสมาชิก</h5>
									<div class="progress">
										<div class="progress-bar bg-success w-50" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h5 class="mt-3">จำนวนการเช่ารถยนต์</h5>
									<div class="progress">
										<div class="progress-bar bg-danger w-50" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h5 class="mt-3">จำนวนรายได้</h5>
									<div class="progress">
										<div class="progress-bar bg-warning w-50" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
					<div class="row mt-3"> 
						<div class="col">
						<div class="card">
								<div class="card-header d-flex justify-content-between align-items-center">
									<h4>Reg Manager</h4>
									<div class="d-flex">
									<!-- <a class="btn btn-success" href="create.php" role="button">+ Add Rental</a> -->
									</div>
								</div>
								<div class="card-body">
									<p>ผู้ลงทะเบียนแข่งขันตอบปัญหาทางวิชาการ</p>

									<?php
										$sql = "SELECT * FROM `reg_skills`";
										$result = $conn->query($sql);
									?>
									<!-- /.card-header -->
									<div class="card-body">
										<table id="dataTable" class="table table-bordered table-striped">
											<thead>
											<h5 class="card-title">ผู้ลงทะเบียนแข่งขันตอบปัญหาทางวิชาการ</h5>
											<tr>
												<th scope="col">#</th>
												<th scope="col">ผู้ลงทะเบียน</th>
												<th scope="col">ผู้เข้าแข่งขััน</th>
												<th scope="col">สาขาวิชา</th>
												<th scope="col">มหาวิทยาลัย</th>
											</tr>
											</thead>

											<tbody>
											<?php 
											$num = 0;
											while ($row = $result->fetch_assoc()) {
											$num++;
											?>
											<tr>
												<td><?php echo $num; ?></td>
												<td><?php echo $row['name']; ?></td>
												<td><?php echo $row['name1']; echo "<br/>"; echo $row['name2']; echo "<br/>"; echo $row['name3']; ?></td>
												<td><?php echo $row['mem_fac']; ?></td>
												<td><?php echo $row['mem_work']; ?></td>
												<!-- <td>
												<a href="form-create.php" class="btn btn-sm btn-warning text-white">
													<i class="fas fa-edit"></i> ยืนยัน
												</a> 
												</td> -->
											</tr>
											<?php } ?>
											</tbody>
										</table>
										</div>
										<!-- /.card-body -->
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="row mt-3">
						<div class="col-sm">
							<div class="card">
								<div class="card-body">
									<img src="https://picsum.photos/id/267/400/300" class="w-100">
									<h3 class="my-3">Lorem ipsum dolor sit amet.</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta deleniti officia expedita, ea similique incidunt doloremque. Dolor ullam suscipit ipsum sint quas voluptatibus nisi. Nisi sequi laudantium molestias libero dignissimos mollitia hic, illum omnis ullam suscipit deleniti aperiam labore veritatis alias accusamus deserunt officiis in natus, architecto consectetur fuga incidunt?</p>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<div class="card">
								<div class="card-body">
									<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img src="https://picsum.photos/id/270/400/300" class="d-block w-100" alt="...">
											</div>
											<div class="carousel-item">
												<img src="https://picsum.photos/id/271/400/300" class="d-block w-100" alt="...">
											</div>
											<div class="carousel-item">
												<img src="https://picsum.photos/id/272/400/300" class="d-block w-100" alt="...">
											</div>
											<div class="carousel-item">
												<img src="https://picsum.photos/id/274/400/300" class="d-block w-100" alt="...">
											</div>
										</div>
										<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>									
									<h3 class="my-3">Lorem ipsum dolor sit amet.</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta deleniti officia expedita, ea similique incidunt doloremque. Dolor ullam suscipit ipsum sint quas voluptatibus nisi. Nisi sequi laudantium molestias libero dignissimos mollitia hic, illum omnis ullam suscipit deleniti aperiam labore veritatis alias accusamus deserunt officiis in natus, architecto consectetur fuga incidunt?</p>
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="row mt-3">
						<div class="col-sm">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-sm">
											<div class="row">
												<div class="col-sm-3">
													<img src="https://picsum.photos/id/237/400/300" class="w-100">
												</div>
												<div class="col-sm">
													<h3>Lorem, ipsum dolor.</h3>
													<p>Lorem ipsum dolor sit amet consectetur.</p>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-sm-3">
													<img src="https://picsum.photos/id/257/400/300" class="w-100">
												</div>
												<div class="col-sm">
													<h3>Lorem, ipsum dolor.</h3>
													<p>Lorem ipsum dolor sit amet consectetur.</p>
												</div>
											</div>
										</div>
										<div class="col-sm">
											<div class="row">
												<div class="col-sm-3">
													<img src="https://picsum.photos/id/244/400/300" class="w-100">
												</div>
												<div class="col-sm">
													<h3>Lorem, ipsum dolor.</h3>
													<p>Lorem ipsum dolor sit amet consectetur.</p>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-sm-3">
													<img src="https://picsum.photos/id/260/400/300" class="w-100">
												</div>
												<div class="col-sm">
													<h3>Lorem, ipsum dolor.</h3>
													<p>Lorem ipsum dolor sit amet consectetur.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>	
	</section>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Modal content</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

    <!-- Section Footer -->
    <?php include_once('../includes/footer.php') ?>


    <!-- ติดตั้งการใช้งาน Javascript ต่างๆ -->
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


     
</body>
</html>
