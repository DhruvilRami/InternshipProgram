<?php
	if(isset($_POST['submit'])){
	$n=$_POST['str'];
	$rev=strrev($n);
	
	if($n==$rev){
		echo "$n is palindrome";
	}else{
		echo "$n is not palindrome";
	}
}
?>
<form method="post">
	<input type="textbox" name="str" required/>
	<input type="submit" name="submit"/>
</form>

