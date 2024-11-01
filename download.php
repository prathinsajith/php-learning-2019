
<?php
ob_start();
session_start(); 

$pth=$_REQUEST["file"];
$f=explode("/",$pth);
 if (file_exists($pth)&&is_readable($pth))
	 { 
			$size=filesize($pth);
		    header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename='.$f[1]);
            header('Content-Transfer-Encoding: binary');
           
            $file=@fopen($pth,rb);
			if($file)
			{
				fpassthru($file);
				exit();
			}
        	 header("location:imge.php");
    }
?>
