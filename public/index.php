<?php

$meta=[];
$meta['title']='My Website';
$meta['description']='Stuff about me';

$content = <<<EOT
<div class="jumbotron">
  <h1>Hello, world!</h1>
  <p class="lead">I build things and I do stuff.</p>
</div>
EOT;

require '../core/layout.php';

