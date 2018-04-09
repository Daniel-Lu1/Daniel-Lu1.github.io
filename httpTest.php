<!DOCTYPE HTML>
<head></head>
<body>
  <form method="get">
    <input type=text name="URL" placeholder="Enter a URL">
    <button type=submit name="go">Get HTTP Headers</button>
  </form>

  <?php
  if (isset($_GET['go'])) {
  print_r(get_headers($_GET['URL'],1));
  }
  ?>
</body>
</html>
