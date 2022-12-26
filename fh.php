<?php
// $my_file='testfile.txt';
// fopen($my_file,'w') or die('cannot open file:'.$my_file);
// echo "your file has been created";
// $myfile=fopen("testfile.txt","r") or die ("unable to open file!");
// echo fread($myfile,filesize("testfile.txt"));
// fclose($myfile);

// $myfile=fopen('testfile.txt','w') or die ("unable to open file!");
// $txt="hi my name is priya";
// fwrite($myfile,$txt);
// fclose($myfile);
// $myfile='testfile.txt';
// $handle=fopen($myfile, 'a') or die ('cannot open file:'.$myfile);
// $data='hi';
// fwrite($handle,$data);
// $new_data="\n".'i m from chennai';
// fwrite($handle,$new_data);

// $myfile = fopen("testfile.txt", "a") or die("Unable to open file!");
// $txt = "hi";
// fwrite($myfile, "\n". $txt);
// fclose($myfile);
      
    // $fp = fopen('testfile.txt', 'a');//opens file in append mode  
    // fwrite($fp, ' this is additional text ');  
    // fwrite($fp, 'appending data');  
    // fclose($fp);  
      
    // echo "File appended successfully";  
     
	  
	  unlink('emp.txt');  
   
echo "File deleted successfully";
?>