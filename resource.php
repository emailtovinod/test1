<html>
<title>PoD Resource Management</title>
<body>
<h1>Current Resource Settings</h1>

<?php
  $my_pod_name = getenv('my_pod_name');
  echo nl2br("<b><font color=blue><center>My Name: $my_pod_name</font></center></b> \r\n");
  $my_cpu_request = getenv('my_cpu_request');
  echo nl2br ("<b><font color=green><center>My CPU Request: $my_cpu_request</font></center></b>  \r\n");
  $my_memory_request = getenv('my_memory_request');
  echo nl2br ("<b><font color=green><center>My Memory Request: $my_memory_request</font></center></b>  \r\n");
  $my_cpu_limit = getenv('my_cpu_limit');
  echo nl2br ("<b><font color=red><center>My CPU Limit: $my_cpu_limit</font></center></b>  \r\n");
  $my_memory_limit = getenv('my_memory_limit');
  echo nl2br ("<b><font color=red><center>My Memory Limit: $my_memory_limit</font></center></b>  \r\n")
?> 
</body>
</html>  
