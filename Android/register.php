<?php

$response = array();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $username = mysql_real_escape_string($_POST['username']);
  $password = mysql_real_escape_string($_POST['password']);
  $sex= mysql_real_escape_string($_POST['sex']);
    $bool = true;

  mysql_connect("localhost", "id2079965_admin","963147") or die(mysql_error()); //Connect to server
  mysql_select_db("id2079965_first_db") or die("Cannot connect to database"); //Connect to database
  
  if(!($username ==="") and !($password ===""))
  {
    $query = mysql_query("SELECT * from cleaners"); //Query the users table
    
    while($row = mysql_fetch_array($query)) //display all rows from query
    {
      $table_users = $row['name']; // the first usrename row is passed on to $table_users, and so on until the query is finished
      if($username == $table_users) // checks if there are any matching fields
      {
        $response['error'] = true; 
        $response['message'] = "It seems you are already registered, please choose a different Username"; 
        $bool = false; // sets bool to false
        /*Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
        Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php*/
      }
    }
    if($bool) // checks if bool is true
    {
      mysql_query("INSERT INTO cleaners (name, password, sex) VALUES ('$username','$password','$sex')"); //Inserts the value to table users
      $response['error'] = false; 
      $response['message'] = "User registered successfully";
      /*Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
      Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php*/
    }
  }
  else
  {
    $response['error'] = true; 
    $response['message'] = "Required fields are missing";
  }
}
else
{
  $response['error'] = true; 
  $response['message'] = "Invalid Request";
}
echo json_encode($response);
?>
