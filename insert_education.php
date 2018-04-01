<?php
//insert.php;

if(isset($_POST["achieved_year"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=cgs", "root", "");
 $student_id = 22;
 for($count = 0; $count < count($_POST["achieved_year"]); $count++)
 {
  $query = "INSERT INTO student_qualification
  (qualificationID, studentID,achievedYear)
  VALUES (:e_qualification,:student_id, :achieved_year )
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
     ':e_qualification'  => $_POST["e_qualification"][$count],
    ':student_id'   => $student_id,
    ':achieved_year'  => $_POST["achieved_year"][$count],

   )
  );
 }
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'ok';
 }
}
?>
