<?php
  session_start();
  if (isset($_POST['source'])) {
    $uniq_id = uniqid();
    $temp_file = "/var/www/html/tmp/$uniq_id.php";
    $result = file_put_contents($temp_file, $_POST['source']);

    if ($result !== False) {
      $_SESSION['file'] = $temp_file;
      sleep(2); // For some reason, this has to be there, if not the compilation won't work.
      header("Location: /compile.php");
      die();
    } else {
      die("File upload failed. I might have fucked up somewhere... See me :)<br>- Corb3nik");
    }
  }
?>
<html>
  <head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="text-center container-fluid">
    <h1>PHP 7.0 OPCache Generator</h1>
    <br>
    <form class="form" action="index.php" method="POST" target="compile">
      <textarea name="source" class="form-control" rows="10"></textarea>
      <br>
      <input type="submit" class="btn btn-success btn-lg" value="Submit">
    </form>
    </div>

    <iframe name="compile" class="hidden"></iframe>
  </body>
</html>
