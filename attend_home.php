<?php
/*
session_start();

$admin_fatch = $_SESSION['admin_log']['name'];
include('conn.php');
if(empty($_SESSION['admin_log']))
{
  header('location:admin_log.php');
}
if(isset($_POST["submit"])){
  $student_id = $_POST["s_id"];
  $sql = "SELECT * FROM student_info WHERE student_id = '$student_id'";
  $quary = $conn->query($sql);
  if($quary-> num_rows > 0)
  {
    if(!empty($student_id)){
      $fatch = $quary-> FETCH_ASSOC();
      $_SESSION['fatch_data']= $fatch;
      header("location:confirm_student.php");
    }
    
  }else{
      $search_error_mgs = "No Data Found From Database !";
    }
    
  }
  */

?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin_Home</title>
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
        <div id="welcome-message">
        <h2 style="color:rgb(47, 218, 176);">Welcome <label style="color:red;display:inline;font-weight:bolder">Mr. <?php echo $admin_fatch;?> !</label></h2>
        <div id="container">
          <h3 style="padding:10px;border-bottom:2px solid rgb(17, 143, 143);color:rgb(17, 143, 143);">Class Attendence Info</h3>
          <form action="admin_conform.php" method="POST">
            <div  id="pro_border" class="attend_sec_1">
              <div class="attend_box_middle">
                <label id="search_label"  for="username">Batch ID : </label>
                <select id="course_box" name="batch">
                  <option value="Select">Select Batch </option>
                  <option value="201">201</option>
                  <option value="202">202</option>
                  <option value="203">203</option>
                  <option value="211">211</option>
                  <option value="212">212</option>
                  <option value="213">213</option>
                  <option value="221">221</option>
                  <option value="222">222</option>
                  <option value="223">223</option>
                  <option value="231">231</option>
                  <option value="232">232</option>
                  <option value="233">233</option>
                </select>
                <label id="search_label"  for="username">Section : </label>
                <select id="course_box" name="batch">
                  <option value="Select">Section </option>
                  <option value="DA">DA</option>
                  <option value="DB">DB</option>
                  <option value="DC">DC</option>
                  <option value="DD">DD</option>
                  <option value="DE">DE</option>
                  <option value="DF">DF</option>
                  <option value="DG">DG</option>
                  <option value="DH">DH</option>
                </select>
                <input style="display:block;margin:20px auto;" type="submit" id="search_sub submit_shadow" name="submit" value="Search">
              </div>
            </div>
            <label style="color:red;display:inline;margin-left:20px"><?php if(isset($_POST['submit'])){echo $search_error_mgs;}?></label>
          </form>
        </div>
          </div>
    </div>
  </div>
  
  <div id="footer">
    &copy; 2023 Student Portal. All rights reserved.
  </div>
</body>
</html>
