<?php
  session_start();
  $file = $_SESSION['file'];

  // Compile file
  opcache_compile_file($file);

  // Get cache file
  $cache_file = glob("/tmp/opcache/*$file.bin")[0];

  // Serve file
  header("Content-Type: application/octet-stream");
  header('Content-Disposition: attachment; filename="payload.php.bin"');
  echo file_get_contents($cache_file);

  // Cleanup
  unlink($file);
  unlink($cache_file);
?>
