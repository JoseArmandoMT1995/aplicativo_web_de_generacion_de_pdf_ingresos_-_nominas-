<?php 
    $dir=opendir("ruta"); 
    while($archivo=readdir($dir)) 
    { 
?> 
<input type="checkbox" name="archivo[]" value="<?php echo $archivo;?>"> 
<label><?php echo $archivo;?></label> 
<?php 
    } 
?>