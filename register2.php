<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>สมัครสมาชิก</title>
    <!-- ติดตั้งการใช้งาน CSS ต่างๆ -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

    <?php
        require_once('php/connect.php'); // ดึงไฟล์เชื่อมต่อ Database เข้ามาใช้งาน
        /**
         * ตรวจสอบเงื่อนไขที่ว่า ตัวแปร $_POST['submit'] ได้ถูกกำหนดขึ้นมาหรือไม่
         */
        if(isset($_POST['submit'])){
            /**
             * ตั้งชื่อไฟล์ภาพใหม่
             */
            $temp = explode('.',$_FILES['fileUpload']['name']);
            $new_name = round(microtime(true)) . '.' . end($temp);
            /**
             * ตรวจสอบเงื่อนไขที่ว่า สามารถย้ายไฟล์รูปภาพเข้าสู่ storage ของเราได้หรือไม่
             */
            if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], 'uploads/' .$new_name)){
                /**
                 * สร้างตัวแปร $sql เพื่อเก็บคำสั่ง Sql
                 * จากนั้นให้ใช้คำสั่ง $conn->query($sql) เพื่อที่จะประมาณผลการทำงานของคำสั่ง sql
                 */
                $sql = "INSERT INTO `users` (`id`, `idcard`, `username`, `password`, `first_name`, `last_name`, `address`, `email`, `phone`, `picture`, `status_user`) 
                        VALUES (NULL, '".$_POST['idcard']."', '".$_POST['username']."', '".$_POST['password']."', '".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['address']."', '".$_POST['email']."', '".$_POST['phone']."', '". $new_name."', '".$_POST['status_user']."');";
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
            }
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
                                                <input type="submit" name="submit" class="btn btn-success" value="สมัครการแข่ขัน">
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

    <!-- ติดตั้งการใช้งาน Javascript ต่างๆ -->       
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <script>
        /**
         * ประกาศ function readURL()
         * เพื่อทำการตรวจสอบว่า มีไฟล์ภาพที่กำหนดถูกอัพโหลดหรือไม่
         * ถ้ามีไฟล์ภาพที่กำหนดถูกอัพโหลดอยู่ ให้แสดงไฟล์ภาพนั้นผ่าน elements ที่มี id="imgUpload"
         */
        function readURL(input){
            if(input.files[0]){
                var reader = new FileReader();
                $('.figure').addClass('d-block');
                reader.onload = function (e) {
                    console.log(e.target.result)
                    $('#imgUpload').attr('src',e.target.result).width(240);
                }  
                reader.readAsDataURL(input.files[0]);
            }         
        }
    </script>
</body>
</html>