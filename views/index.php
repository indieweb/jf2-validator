<?php $this->layout('layout', ['title' => $title]); ?>

<div id="header">
  <h1>jf2 validator</h1>
</div>

<div id="validator">
  <div id="main-left">
    <h2>Input</h2>
    <form>
      <div class="form-group">
        <input class="form-control" id="validate-url" type="url" value="<?= $url ?>" placeholder="Enter jf2 URL">
      </div>
      <button type="submit" class="btn btn-default" id="validate-submit">Validate</button>
      <div class="form-group">
        <textarea class="form-control" id="validate-json" placeholder="Enter your jf2 JSON here"></textarea>
      </div>
    </form>
  </div>
  <div id="main-right">
    <h2>Results</h2>
    <div id="validate-results"></div>
  </div>
</div>
