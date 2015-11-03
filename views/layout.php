<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $this->e($title) ?></title>
  <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/styles.css" rel="stylesheet">
  <script src="/assets/jquery-1.11.3.min.js"></script>
  <script src="/assets/bootstrap-3.3.5/js/bootstrap.min.js"></script>
  <script src="/assets/script.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div id="page-content">
  <?= $this->section('content') ?>
</div>

<footer>
  <a href="http://microformats.org/wiki/jf2">what is jf2?</a>
</footer>

</body>
</html>
