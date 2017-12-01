<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php print $subject_message;?></title>
</head>

<body>

<p><?php print $subject_message;?></p>

<p><?php print $name;?>,</p>
<p>Thank you for registering with Cooking Good. Just one final step to verify your account</p>
<p>Please click on the following link to verify your email address:</p>
<p><a href="<?php print $activation_link;?>" target="_blank"><?php print $activation_link;?></a></p>
<p>Thank you</p>
<p>Cooking Good</p>

</body>
</html>