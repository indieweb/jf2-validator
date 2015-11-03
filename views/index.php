<?php $this->layout('layout', ['title' => $title]); ?>

<div id="header">
  <h1>jf2 validator</h1>
</div>

<div id="validator">
  <div id="main-left">
    <h2>jf2 input</h2>
    <div>
      <input id="validate-url" type="url" placeholder="Enter jf2 URL">
    </div>
    <div>
      <textarea id="validate-json" placeholder="Enter your jf2 JSON here"></textarea>
    </div>
  </div>
  <div id="main-right">
    <h2>Results</h2>
    <div id="validate-results"></div>
  </div>
</div>
