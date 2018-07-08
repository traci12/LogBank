<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>LOGBANK - UPLOAD FORM</title>
<link rel="stylesheet" href="/logbank/Resources/css/style.default.css" type="text/css" />

<link rel="stylesheet" href="/logbank/Resources/css/responsive-tables.css">
<link rel="stylesheet" href="./Resources/css/style.palegreen.css" type="text/css" />
<script type="text/javascript" src="/logbank/Resources/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/modernizr.min.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/jquery.smartWizard.min.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/responsive-tables.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/jquery.autogrow-textarea.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/charCount.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/colorpicker.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/ui.spinner.min.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/modernizr.min.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/custom.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/forms.js"></script>
<script type="text/javascript" src="/logbank/Resources/js/jquery.jgrowl.js"></script>
</head>
<body>
<div class="widgetbox box-inverse">
                <h4 class="widgettitle">Upload Picture</h4>
                <div class="widgetcontent wc1">
<?php echo $error;?>
<label><font color="red"><em>* Image Resolution 1024 x 768</em></font></label>
<?php echo form_open_multipart('upload');?>
<div class="par control-group">
<input type="file" name="userfile" size="20" />
</div>
<div class="par control-group">
<input type="submit" value="upload" />
</div>
</form>
</div>
</div>
</body>
</html>