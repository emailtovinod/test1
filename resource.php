<?php
  $my_pod_name = getenv('my_pod_name');
  echo "My Name: $my_pod_name  \r\n";
  $my_cpu_request = getenv('my_cpu_request');
  echo "My CPU Request: $my_cpu_request  \r\n";
  $my_memory_request = getenv('my_memory_request');
  echo "My Memory Request: $my_memory_request  \r\n";
  $my_cpu_limit = getenv('my_cpu_limit');
  echo "My CPU Limit: $my_cpu_limit  \r\n";
  $my_memory_limit = getenv('my_memory_limit');
  echo "My Memory Limit: $my_memory_limit  \r\n"
?>   
