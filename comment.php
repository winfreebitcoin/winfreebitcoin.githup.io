
<html>
<form action=""method="post">
<label> Name:<br><input type="text" name="name"><br></label>
<label> Message:<br><textarea cols="45" row="5" name="mes"></textarea></label><br>
<input type="submit" name="post" value="post"> 

</form>
</html>
<?php
$name=$_POST["name"];
$text=$_POST["mes"];
$post=$POST["post"];
if($post){
	#WRITE DOWN COMMENTS#
	$write=fopen("com.txt","a+");
	fwrite($write,"<u><b>$name</b></u><br>$text<br>");
	fclose($write);
	#DISPLAY COMMENTS#
	$read=fopen("com.txt","r+t");
	echo "All comments:"<br>;
	while(!feof($read){
		echo fread($read,1024);
	}
	fclose($read);
	else{
		#DISPLAY COMMENTS#
		$read=fopen("com.txt","r+t");
		echo "All comments:<br>";
		while(!feof($read))
		echo fread($read,1204);
	}
	fclose(read$);
}
		