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
       <p><input type="submit"> submit</p>
      
   </form>
   <ul>
   <p> Status </p>
   <iframe width="850" height="550" src="https://ap-northeast-2.quicksight.aws.amazon.com/sn/embed/share/accounts/648975347655/dashboards/936c0d40-fce6-47a5-8cf6-63b7b2432a8f/sheets/936c0d40-fce6-47a5-8cf6-63b7b2432a8f_92feb398-1ae0-4654-8eb1-ec8a7bca96c8/visuals/936c0d40-fce6-47a5-8cf6-63b7b2432a8f_200b1fc4-ab4e-4173-98da-2d659c3b4ddd?directory_alias=project2022-test"></iframe>
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