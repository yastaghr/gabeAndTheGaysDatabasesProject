<?php
try{
  //open the sqlite database file
  $db = new PDO('sqlite:./database/airport.db');
  // Set errormode to exceptions
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //prev page data
  $table = $_GET[table];
  $row = $_GET[row];
  $row1 = $_GET[row1];
  $row2 = $_GET[row2];
  if ($table == 'passengers'){
    $query = "SELECT * FROM passengers WHERE ssn = $row";
    $result = $db->query($query);
    echo "<form action = 'updateTable.php' method = 'post'>";
    echo "<input type='hidden' name='table' value='$table'/></br>";
    echo "<input type='hidden' name='prim' value='$row'/></br>";
    echo "<input type='text' name='f_name' value='$result[f_name]' required/></br>";
    echo "<input type='text' name='m_name' value='$result[m_name]'/></br>";
    echo "<input type='text' name='l_name' value='$result[l_name]' required/></br>";
    echo "<input type='text' name='ssn' pattern='\d{3}-?\d{2}-?\d{4}' value='$result[ssn]' required/></br>";
    echo "<input type='submit'></form>";
  }
  else if ($table == 'flights'){
      $query = "SELECT * FROM passengers WHERE ssn = $row";
      $result = $db->query($query);
      echo "<form action = 'updateTable.php' method = 'post'>";
      echo "<input type='hidden' name='table' value='$table'/></br>";
      echo "<input type='hidden' name='prim' value='$row'/></br>";
      echo "<input type='text' name='flight_no' value='$result[flight_no]' required/></br>";
      echo "<input type='text' name='m_name' value='$result[dep_loc]'/></br>";
      echo "<input type='text' name='dep_time' value='$result[dep_time]' required/></br>";
      echo "<input type='text' name='arr_loc' value='$result[arr_loc]' required/></br>";
      echo "<input type='text' name='arr_time' value='$result[arr_time]' required/></br>";
      echo "<input type='text' name='tail_no' value='$result[tail_no]' required/></br>";
      echo "<input type='submit'></form>";
  }
  else if ($table == 'planes'){
      $query = "SELECT * FROM passengers WHERE ssn = $row";
      $result = $db->query($query);
      echo "<form action = 'updateTable.php' method = 'post'>";
      echo "<input type='hidden' name='table' value='$table'/></br>";
      echo "<input type='hidden' name='prim' value='$row'/></br>";
      echo "<input type='text' name='tail_no' value='$result[tail_no]' required/></br>";
      echo "<input type='text' name='make' value='$result[make]'/></br>";
      echo "<input type='text' name='model' value='$result[model]' required/></br>";
      echo "<input type='text' name='capacity' value='$result[capacity]' required/></br>";
      echo "<input type='text' name='mph' value='$result[mph]' required/></br>";
      echo "<input type='submit'></form>";
  }
  else if ($table == 'onboard'){
      $query = "SELECT * FROM passengers WHERE ssn = $row";
      $result = $db->query($query);
      echo "<form action = 'updateTable.php' method = 'post'>";
      echo "<input type='hidden' name='table' value='$table'/></br>";
      echo "<input type='hidden' name='prim1' value='$row1'/></br>";
      echo "<input type='hidden' name='prim2' value='$row2'/></br>";
      echo "<input type='text' name='ssn' value='$result[ssn]' required/></br>";
      echo "<input type='text' name='flight_no' value='$result[flight_no]'/></br>";
      echo "<input type='text' name='seat' value='$result[seat]' required/></br>";
      echo "<input type='submit'></form>";
  }
}
catch (PDOException $e){
  die('Exception : '.$e->getMessage());
}
?>
