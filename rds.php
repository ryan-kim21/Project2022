<!DOCTPYE>
<html>
 <head><meta charset="utf-8"></head>
  <body>
  <form action="rds_receiver.php" method="post">
    <p> Please input your Animal info data </p>
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
?>