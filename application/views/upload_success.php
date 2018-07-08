<html>
<head>
<title>Upload Form</title>
</head>
<body>




<?php 
$url=$upload_data['file_name'];
?>
<p><?php echo redirect('upload/save_url/'.$url, 'Save File!'); ?></p>

</body>
</html>