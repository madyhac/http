<?php
function authenticate () {
if($_server['PHP_AUTH_USER'] !== 'omar.sherif' && $_SERVER['PHP_AUTH_PW'] !== 'omar sherif 5827186')
{
header("WWW-authenticate: basic realm=\"thetutlage\"");
header("HTTP\ 1.0 401 unauthorized");
echo "there was an error";
exit;

}
}
authenticate();
  ?>
<html>
<head>
<title>GUC grades</title>
<directory'grades.html'>
AuthType basic
UthName 'admin area'

</head>
<body>
<script>
$(document).ready(function)(){alert(1);});
</script>
<script>
function myFunction() {
 prompt("jhkgjkhgujk")
  prompt("jhkgjkhgujk")
}
</script>
  </body>
</html>
