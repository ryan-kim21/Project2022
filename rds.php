<!DOCTPYE>
<html>
 <head><meta charset="utf-8"></head>
  <body>
  <form action="rds_receiver.php" method="post">
    <p> Please input your data </p>
       <p>
         Number :
         <input type="text" name="number"  placeholder="number">
       </p>
       <p>
         Species :
         <input type="text" name="species">
       </p>
      <p>
         Name :
         <input type="text" name="name">
       </p>
       <p>
         Weight :
         <input type="text" name="weight">
       </p>
       <p>
         Description :
         <textarea name="description">
         </textarea>
       </p>
       <p><input type="submit"></p>
       <button type="button" onclick="location.href='https://ap-northeast-2.quicksight.aws.amazon.com/sn/dashboards/754e45f0-475c-4116-8bb3-ec75614cc5cf';"></button>
   </form>
   <ul>

<?php
include('db.php');
$sql="SELECT * FROM pet";
$result=mysqli_query($read,$sql);
while($row=mysqli_fetch_assoc($result)){
 $name=mysqli_real_escape_string($read,$row['name']);
 $species=mysqli_real_escape_string($read,$row['species']);
 $weight=mysqli_real_escape_string($read,$row['weight']);
 $description=mysqli_real_escape_string($read,$row['description']);
 print("<li>name: $name, species: $species, weight: $weight, description: $description </li>");
}