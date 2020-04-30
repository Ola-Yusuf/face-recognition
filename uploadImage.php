<?php
// Check for empty fields
if( !isset($_POST['name']) || !isset($_FILES['image2'] ) || !isset($_FILES['image1']))
{
   echo false;
   return;
}
   

if( is_uploaded_file($_FILES['image1']['tmp_name']) &&  is_uploaded_file($_FILES['image2']['tmp_name'])) 
{
   $name = strip_tags(htmlspecialchars($_POST['name']));
   $dir = "labeled_images/" . ucwords(strtolower($name));

   $sourcePath1 = $_FILES['image1']['tmp_name'];
   $ext1 = pathinfo($_FILES['image1']['name'], PATHINFO_EXTENSION);
   $targetPath1 = $dir."/1.".$ext1;

   $sourcePath2 = $_FILES['image2']['tmp_name'];
   $ext2 = pathinfo($_FILES['image2']['name'], PATHINFO_EXTENSION);
   $targetPath2 = $dir."/2.".$ext2;

   if($ext1 != "jpg" || $ext2 != "jpg"){
      echo false;
      return;
   }

   mkdir($dir);

   if (move_uploaded_file($sourcePath1,$targetPath1) && move_uploaded_file($sourcePath2,$targetPath2))
   { 
      echo true; 
   }

   return; 
   
}else{
   echo false;

   return;
}
        
?>

