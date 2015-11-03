<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $this->e($title) ?></title>
  <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/styles.css" rel="stylesheet">
  <script src="/assets/jquery-1.11.3.min.js"></script>
  <script src="/assets/bootstrap-3.3.5/cs/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
      </div>
    </div><!-- /.container-fluid -->
  </nav>


<div id="container-fluid">
  <div id="content">
    <?= $this->section('content') ?>
  </div>
</div>

<footer>

</footer>

</body>
</html>
