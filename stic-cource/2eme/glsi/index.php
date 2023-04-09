<?php


?>
<link rel="stylesheet" href="style.css" />
<br>
<br>
<br>
<br>
<br>
        <h4 class="logo"> stic-cource </h4>
    
        <a class="button" href="#niveau"> <button> Home </button></a>
    
    <br>
    <br>
    <br>
    
<form method="POST" action="upload.php" enctype="multipart/form-data">
    <input class="download" type="file" name="file">
    <input class="download"    type="submit" value="upload">
</form>
<div class="main">
    <p class="first"> 1ere annee lisi   </p>
<?php
 

$files = scandir("lisi");
 
for ($a = 2; $a < count($files); $a++)
{
    ?>
<p>
    <!-- Displaying file name !-->
   <a class="nameCourse" > <?php echo $files[$a]; ?> </a>

    <!-- href should be complete file path !-->
    <!-- download attribute should be the name after it downloads !-->
 <a class="download" href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
        Download
       
</a>


</p>


<?php

}

