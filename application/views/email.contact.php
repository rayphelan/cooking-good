<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cooking Good: Contact</title>
</head>

<body>

<p>Contact from <?php print $mood;?> customer</p>

<?php if($eaten=='no') {?>
  <p>Attention: Hungry Person</p>
<?php } ?>

<table width="600" border="0" cellspacing="1" cellpadding="4">
  <tr>
    <td width="143" align="left" bgcolor="#f4f4f4">Date</td>
    <td width="438" align="left"><?php print date("Y-m-d H:i:s",time());?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#f4f4f4">Name</td>
    <td align="left"><?php print $first_name." ".$last_name;?></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#f4f4f4">mail</td>
    <td align="left"><?php print $mail;?></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#f4f4f4">Message</td>
    <td align="left" valign="top"><?php print $message;?></td>
  </tr>
</table>

<?php if($love) {?>
  <p>Sent with love...</p>
<?php } ?>

<?php if($reply=='yes') {?>
  <p>Please Reply!</p>
<?php } ?>

</body>
</html>