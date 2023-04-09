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
     <br>
    <br>

        <input type="text" class="container" class="form-control mb-5 p-3 "   placeholder="Search here ... " id="search-input"> 
        <br>
        <br>
</form>
<div class="main">
    <p class="first"> 1ere annee Glsi  </p>
<?php
 

$files = scandir("glsi");
 
for ($a = 2; $a < count($files); $a++)
{
    ?>
     <ul>
<p>
     <li class="nameCours">
    <!-- Displaying file name !-->
   <a class="nameCourse" > <?php echo $files[$a]; ?> </a>

    <!-- href should be complete file path !-->
    <!-- download attribute should be the name after it downloads !-->
 <a class="download" href="glsi/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
        Download
       
</a>
</li> 


</p>
</ul> 
<script>
document.querySelector('#search-input').addEventListener('input', filterlist);

function filterlist() {
  const searchInput = document.querySelector('#search-input');
  const filter = searchInput.value.toLowerCase();
  const listItems = document.querySelectorAll('.nameCours');
  listItems.forEach(item => {
    let text = item.textContent.toLowerCase();
    if (text.includes(filter)) {
      item.style.display = '';
    } else {
      item.style.display = 'none';
    }
  });
}
</script>


<?php

}

