<?php

  $response = array(); 
  session_start();
  
  $username = mysql_real_escape_string($_POST['username']);//sql injection
  $password = mysql_real_escape_string($_POST['password']);
  $bool = true;

  mysql_connect("localhost", "id2079965_admin", "963147") or die (mysql_error()); //Connect to server
  mysql_select_db("id2079965_first_db") or die ("Cannot connect to database"); //Connect to database
  
  if(!($username === "") and !($password === ""))
  {
    $query = mysql_query("SELECT * from cleaners WHERE name='$username'"); // Query the users table
    $exists = mysql_num_rows($query); //Checks if username exists
    
    $table_users = "";
    $table_password = "";
    
    if($exists > 0) //IF there are no returning rows or no existing username
    {
       while($row = mysql_fetch_assoc($query)) // display all rows from query
       {
          $table_users = $row['name']; // the first username row is passed on to $table_users, and so on until the query is finished
          $table_password = $row['password']; // the first password row is passed on to $table_password, and so on until the query is finished
       }
       if(($username == $table_users) && ($password == $table_password))// checks if there are any matching fields
       {
          if($password == $table_password)
          {
             $_SESSION['user'] = $username;
             //echo $_SESSION['user'];
             $query = mysql_query("SELECT * from cleaners WHERE name='$username'"); //set the username in a session. This serves as a global define_syslog_variables(oid)
             $user = mysql_fetch_array($query);
             $response['error'] = false; 
             $response['id'] = $user['id'];
             $response['username'] = $user['name']; // redirects the user to the authenticated home page
          }
       }
       else
       {
          $response['error'] = true; 
          $response['message'] = "Invalid username or password";      
        //Print '<script>alert("Incorrect Password!");</script>'; // Prompts the user
        //Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
       }
    }
    else
    {     $response['error'] = true; 
          $response['message'] = "Invalid username or password";      
        //Print '<script>alert("Incorrect username!");</script>'; // Prompts the user
       // Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
    }
  }
  else
  {
    $response['error'] = true; 
    $response['message'] = "Required fields are missing";
  }

  echo json_encode($response);
?>
