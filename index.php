<?php 
  include_once('php/connect.php');
  session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <!-- ติดตั้งการใช้งาน CSS ต่างๆ -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <style>body,section{font-family: 'Prompt', sans-serif;}</style>
</head>
<body>

    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>
    <br><br>
    <!-- <section id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1553260168-69b041873e65?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&h=500&q=80" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1536617621572-1d5f1e6269a0?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&h=500&q=80" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1554744512-d6c603f27c54?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&h=500&q=80" alt="Third slide">
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
    </section> -->

    <!-- <section class="jumbotron">
        <div class="container text-center">
            <h1 class="display-4">Welcome to page</h1>
            ตรวจสอบเงื่อนไขที่ว่า ตัวแปร $_SESSION['id'] ได้ถูกกำหนดขึ้นมาหรือไม่
            <?php if ( isset($_SESSION['id']) ){ ?>
            <figure class="figure">
                   <img src="uploads/<?php echo $_SESSION['picture'];?>" class="figure-img img-fluid rounded" alt="">
                   <figcaption class="figure-caption"><?php echo $_SESSION['first_name'].' '.$_SESSION['last_name'];?></figcaption>
            </figure>
            <?php } ?>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate harum accusamus placeat temporibus magnam dolorem corporis sint repellat architecto est asperiores, veritatis iste laboriosam numquam iure illum dolor, optio officiis!</p>
        </div>
    </section> -->

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

    <!-- Section Footer -->
    <?php include_once('includes/footer.php') ?>


    <!-- ติดตั้งการใช้งาน Javascript ต่างๆ -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>