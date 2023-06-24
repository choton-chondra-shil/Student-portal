<?php
session_start();
include("conn.php");
$admin_fatch = $_SESSION['admin_log']['name'];
if(empty($_SESSION['admin_log']))
{
  header('location:admin_log.php');
}
$sql = "SELECT * FROM student_info";
$query = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Attendence</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="header">
    <div class="admin_class"><a href="admin_logout.php">Logout</a></div>
    <h1>Student Portal</h1>
  </div>

  <div class="body_section">
    <div id="container" class="left_part">
        <div class="list_item_home_content">
            <a href="admin_home.php" class="list_item_home">Home</a>
            <a href="insert_result_home.php" class="list_item_home">Insert Result</a>
            <a href="add_course.php" class="list_item_home">Add Course</a>
            <a href="admin_conform.php" class="list_item_home">Verify</a>
            <a href="reg.php" class="list_item_home">Registration</a>
            <a href="attend_home.php" class="list_item_home">Attendance</a>
            <a href="admin_reset_pass.php" class="list_item_home">Change Password</a>
        </div>
    </div>
    <div id="container" class="right_part">
        <div id="attendence_body">
        <h3 style="padding:10px;border-bottom:2px solid rgb(17, 143, 143);color:rgb(17, 143, 143);text-align:center;font-size:25px">Student Attendence</h3>
        <div class="student_list">
                    <center>
                        <label style="display:block;padding:10px;text-align:center;font-size:18px;color:#b90000;text-shadow:3px 2px 8px #b90033"><?php echo"Date : ".date("d-m-Y");?></label>
                      <table>
                          <tr>
                            <th style="padding:10px 15px;background-color:#ccc;"> Student ID </th>
                            <th style="padding:10px 15px;background-color:#f1f1f1;"> Student Name </th>
                            <th style="padding:10px 15px;background-color:#90d98952;"> Attendence Section </th>
                          </tr>
                        
                        <?php 
                            if(mysqli_num_rows($query) > 0){
                                while($course_fatch = mysqli_fetch_assoc($query) ){
                          ?>
                          
                          <tr >
                            <td style="padding:10px 45px;background-color:#ccc;"><?php echo $course_fatch['student_id'];?></td>
                            <td style="padding:10px 45px;background-color:#f1f1f1;"><?php echo $course_fatch['first_name']."  ".$course_fatch['last_name'];?></td>
                            <td style="padding:10px 35px;background-color:#90d98952;"><input style="cursor:pointer" type="radio" name="present" value="Present"> Present <input style="cursor:pointer" type="radio" name="absent" value="Absent"> Absent </td>
                          </tr>
                          <?php
                          }
                        }
                          ?>
                      </table>
                    </center>
        </div>

        </div>
    </div>
  </div>
  
  <div id="footer">
    &copy; 2023 Student Portal. All rights reserved.
  </div>
</body>
</html>
