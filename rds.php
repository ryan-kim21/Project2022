<!DOCTPYE>
<html>
 <head><meta charset="utf-8"></head>
  <body>
  <form action="rds_receiver.php" method="post">
       <p>
         Number :
         <input type="text" name="number">
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
 print("<li>{$name}</li>");
 $species=mysqli_real_escape_string($read,$row['species']);
 print("<li>{$species}</li>");
}
?>
    </ul>
   </body>
</html>