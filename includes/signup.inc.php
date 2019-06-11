<?php
if(issete($_POST['submit'])){
  include_once 'dbh.php';
  
  $first = mysqli_real_escape_strint($conn,$_POST['first'];)
  $last = mysqli_real_escape_strint($conn,$_POST['last'];)
  $email = mysqli_real_escape_strint($conn,$_POST['email'];)
  $uis = mysqli_real_escape_strint($conn,$_POST['uid'];)
  $pwd = mysqli_real_escape_strint($conn,$_POST['pwd'];)
  
  // #error handlers
  //check for empty fields
  if(empty(first) || empty(last) || empty(email) || empty(uid)|| empty(pwd)){
    header("Location: ../signup.php?sign=empty");
    exit();
  }else{
    //check if input charactors are valid
    if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last){
       header("Location: ../signup.php?sign=invalid");
       exit();     
    }else{
      //check if email is valid
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      header("Location: ../signup.php?sign=EMAIL ");
       exit(); 
      }else{
        $sql = "SELECT * FROM users where user_id='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck > 0){
          header("Location: ../signup.php?sign=usertaken");
          exit(); 
        }else{
            //hashing the password
           $hashedPwd = password_hash($pwd, PASSWORD_DEFUALT);
            //Insert the user into the datababse
            $sql = "INSERT INTO users (user_first, user_last, user_uid, user_pwd) VALUES('$first', '$last', 'email', 'uid', '$hashedPwd')";
          myslqi_query($conn, $sql);
          header("Location: ../signup.php?sign=SUCCESS");
          exit(); 
        }
      }
    }
  }
  
  
}else{
  header("Location: ../signup.php");
  exit();
}
