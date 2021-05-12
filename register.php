<!doctype html> 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>แข่งขันทักษะทางวิชาการ</title>
  </head>
  <body>
    <!-- Navigation -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
           
        <div class="navbar-header page-scroll">
            <a href="index.php"><img class="logo" src="img/logoconpol.png" height="50" alt="Logo"></a>
        </div>
        <!-- <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul> -->
<!-- 
        <nav class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                
                            
                <li><a href="index.php">เข้าสู่ระบบ</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ลงทะเบียน<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="register.php?project=1">นำเสนอผลงาน</a></li>
                        <li><a href="register.php?project=3">แข่งขันตอบปัญหาทางวิชาการ</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ผู้ลงทะเบียน<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="list.php">นำเสนอผลงาน</a></li>
                        <li><a href="list2.php">แข่งขันตอบปัญหาทางวิชาการ</a></li>
                    </ul>
                </li>
            </ul>
        </nav> -->
        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </div>

    <?php
        require_once('php/connect.php'); // ดึงไฟล์เชื่อมต่อ Database เข้ามาใช้งาน
        /**
         * ตรวจสอบเงื่อนไขที่ว่า ตัวแปร $_POST['submit'] ได้ถูกกำหนดขึ้นมาหรือไม่
         */
        if(isset($_POST['submit'])){
            /**
             * ตั้งชื่อไฟล์ภาพใหม่
             */
            // $temp = explode('.',$_FILES['fileUpload']['name']);
            // $new_name = round(microtime(true)) . '.' . end($temp);
            /**
             * ตรวจสอบเงื่อนไขที่ว่า สามารถย้ายไฟล์รูปภาพเข้าสู่ storage ของเราได้หรือไม่
             */
            // if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], 'uploads/' .$new_name)){
                /**
                 * สร้างตัวแปร $sql เพื่อเก็บคำสั่ง Sql
                 * จากนั้นให้ใช้คำสั่ง $conn->query($sql) เพื่อที่จะประมาณผลการทำงานของคำสั่ง sql
                 */
                // $sql = "INSERT INTO `users` (`id`, `idcard`, `username`, `password`, `first_name`, `last_name`, `address`, `email`, `phone`, `picture`, `status_user`) 
                //         VALUES (NULL, '".$_POST['idcard']."', '".$_POST['username']."', '".$_POST['password']."', '".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['address']."', '".$_POST['email']."', '".$_POST['phone']."', '". $new_name."', '".$_POST['status_user']."');";
                $sql =  "INSERT INTO `reg_skills` (`id`, `first1`, `name`, `mem_sex`, `mem_work`, `mem_fac`, `mem_pro`, `mem_add`, `phone`, `mem_phone`, `mem_food`, `name1`, `name2`, `name3`, `email`, `password`, `password_con`) 
                        VALUES (
                            NULL, 
                            '".$_POST['first1']."', 
                            '".$_POST['name']."', 
                            '".$_POST['mem_sex']."', 
                            '".$_POST['mem_work']."', 
                            '".$_POST['mem_fac']."', 
                            '".$_POST['mem_pro']."', 
                            '".$_POST['mem_add']."', 
                            '".$_POST['phone']."', 
                            '".$_POST['mem_phone']."', 
                            '".$_POST['mem_food']."', 
                            '".$_POST['name1']."', 
                            '".$_POST['name2']."', 
                            '".$_POST['name3']."', 
                            '".$_POST['email']."', 
                            '".$_POST['password']."', 
                            '".$_POST['password_con']."');";
                // echo $sql;
                // exit;
                $result = $conn->query($sql);
                /**
                 * ตรวจสอบเงื่อนไขที่ว่าการประมวณผลคำสั่งนี่สำเร็จหรือไม่
                 */                
                if($result){
                    echo '<script> alert("สมัครสมาชิกสำเร็จ")</script>';
                    header('Refresh:0; url=index.php');
                }else{
                    echo 'no';
                }
            // }
        }
    ?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="margin-bottom: 20px;font-size: 17px;font-weight: bold;"></div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data"> 
                            <table class="table table-responsive">
                                <tbody>
                                    <!-- <input name="project" type="hidden" value="3" >   
                                    <tr style="background-color:#223a5d;color: #fff;">                       
                                        <td colspan="2">ลงทะเบียนแข่งขันตอบปัญหาทางวิชาการ</td>
                                    </tr> -->
                                    <input name="project" type="hidden" value="3" >   
                                    <tr style="background-color:#223a5d;color: #fff;">                       
                                        <td colspan="2">ลงทะเบียนแข่งขันตอบปัญหาทางวิชาการ</td>
                                    </tr>
                                    <input name="project" type="hidden" value="3" >   
                                    <tr style="background-color:#91783c;color: #fff;">
                                        <td colspan="2">ผู้ควบคุมทีม</td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="30%">คำนำหน้าชื่อ :</td>
                                        <td><input type="text" style="width:25%" class="form-control" id="first1" name="first1" value="" required>เช่น นาย, นาง, นางสาว หรือ ยศ/ตำแหน่งทางวิชาการ (ถ้ามี)</td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="30%">ชื่อ-สกุล :</td>
                                        <td>
                                        <input id="name" type="text" style="width:25%" class="form-control" id="name" name="name" value="" required autocomplete="name">
                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="30%">เพศ :</td>
                                        <td>
                                        <input type="radio" name="mem_sex" id="mem_sex" value="ชาย"   required> ชาย
                                        <input type="radio" name="mem_sex" id="mem_sex" value="หญิง" > หญิง 
                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="30%">สังกัดหน่วยงาน :</td>
                                        <td>
                                        <input type="text" style="width:25%" class="form-control" name="mem_work" id="mem_work" value="" required > 
                                        เช่น มหาวิทยาลัยราชภัฏชัยภูมิ
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="30%">คณะ :</td>
                                        <td>  <input type="text" style="width:25%" class="form-control" name="mem_fac" id="mem_fac" value="" required >
                                    
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="30%">ภาควิชา/สาขา :</td>
                                        <td> <input type="text" style="width:25%" class="form-control" name="mem_pro" id="mem_pro" value="" required >     
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="30%">ที่อยู่ที่สามารถติดต่อได้ :</td>
                                        <td>  
                                        
                                        <textarea rows="4" name="mem_add" class="form-control" cols="50" id="mem_add" required ></textarea>      
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="30%">เบอร์โทรศัพท์ :</td>
                                        <td> <input type="text" style="width:25%" class="form-control" name="phone" id="phone" value="" required > 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="30%">เบอร์โทรศัพท์(มือถือ) :</td>
                                        <td> <input type="text" style="width:25%" class="form-control" name="mem_phone" id="mem_phone" value="" required > 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="30%">ประเภทอาหาร :</td>
                                        <td>  
                                        <input type="radio" name="mem_food" id="mem_food" value="ปกติ"  required> ปกติ 
                                        <input type="radio" name="mem_food" id="mem_food" value="อิสลาม" > อิสลาม 
                                        <input type="radio" name="mem_food" id="mem_food" value="มังสวิรัต" > มังสวิรัต
                                        </td>
                                    </tr>                     
                                    <tr style="background-color:#91783c;color: #fff;">                        
                                        <td colspan="2">ผู้เข้าแข่งขัน</td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="30%">ผู้แข่งขันที่ 1 คำนำหน้า ชื่อ-สกุล :</td>
                                        <td>
                                        <input id="name1" type="text" style="width:35%" class="form-control" name="name1" value="" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="30%">ผู้แข่งขันที่ 2 คำนำหน้า ชื่อ-สกุล :</td>
                                        <td>
                                        <input id="name2" type="text" style="width:35%" class="form-control" name="name2" value="" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="30%">ผู้แข่งขันที่ 3 คำนำหน้า ชื่อ-สกุล :</td>
                                        <td>
                                        <input id="name3" type="text" style="width:35%" class="form-control" name="name3" value="" required>
                                        </td>
                                    </tr>                                        
                                    <tr style="background-color:#91783c;color: #fff;">                        
                                        <td colspan="2">ข้อมูลสำหรับเข้าสู่ระบบ</td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="30%">อีเมล :</td>
                                        <td><input id="email" type="email" style="width:25%" class="form-control" name="email" value="" required autocomplete="email">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="30%">รหัสผ่าน :</td>
                                        <td> <input id="password" type="password" style="width:25%" class="form-control" name="password" required autocomplete="new-password">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="30%">ยืนยันรหัสผ่าน :</td>
                                        <td><input id="password-con" type="password" style="width:25%" class="form-control" name="password_con" required autocomplete="new-password"> 
                                        </td>
                                    </tr>
                                    <tr style="background-color:#91783c;color: #fff;    text-align: center;">                        
                                        <!-- <td colspan="2"> <button type="submit" class="btn btn-primary">ลงทะเบียน</button></td> -->
                                        <td colspan="2">
                                            <div class="card-footer text-center">
                                                <input type="submit" name="submit" class="btn btn-success" value="ลงทะเบียนแข่งขันตอบปัญหาทางวิชาการ">
                                                <a class="btn btn-primary" href="index.php">ย้อนกลับไป</a>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                    
                                    </div>
                                </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>



</body>

       <footer class="page-section-no-padding  footer2-container">
        <div class="container">
            <div class="row">
                <!-- Copyright -->
                <div class="col-xs-6">
                <a rel="license" target="_blank">
                   © 2022 ประชุมวิชาการราชภัฏรัฐศาสตร์และรัฐประศาสนศาสตร์แห่งชาติ ครั้งที่ 4
                </div>


            </div>
        </div>
    </footer>

    <script type="text/javascript">
        $(document).ready(function () {
            /*
             *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
             */
            $('.fancybox-media')
                .attr('rel', 'media-gallery')
                .fancybox({
                    openEffect: 'none',
                    closeEffect: 'none',
                    prevEffect: 'none',
                    nextEffect: 'none',
                    arrows: false,
                    helpers: {
                        media: {},
                        buttons: {}
                    }
                });
        });
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>