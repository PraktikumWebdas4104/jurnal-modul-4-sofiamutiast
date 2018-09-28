<form method="post">
Gambar : <input type="file" name="gambar"> <br>
<input type="checkbox" name="hobi[]" alt="Checkbox" value="Futsal"> Futsal <br>
<input type="checkbox" name="hobi[]" alt="Checkbox" value="Memancing">  Memancing <br>
<input type="checkbox" name="hobi[]" alt="Checkbox" value="Membaca"> Membaca <br>
<input type="checkbox" name="hobi[]" alt="Checkbox" value="Berenang"> Berenang <br>
<input type="checkbox" name="hobi[]" alt="Checkbox" value="Menulis"> Menulis <br>
<input type="submit"   name="submit">
</form>

<?php
if(isset($_POST['submit'])){
	foreach($_POST['hobi'] as $data){
      
      echo $data ."<br/>";

	}
}
	
 
?>
