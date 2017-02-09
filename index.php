<?php require('./php/randomquote.php'); ?>
<!DOCTYPE html>

<html>

<head>
  <title>Amanda Wininger</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="./css/a1.css" />
</head>

<body class="container">
  <div class="row">
    <div class="twelve columns">
      <h1>Amanda Wininger</h1>
      <img src="./images/amanda_and_cat.jpg" alt="Amanda and her cat" />
    </div>
  </div>
  <div class="row">
    <div class="offset-by-two eight columns">
      <h2>About Me:</h2>
      <p>In my day job, I'm a librarian and a union leader. In my free time, I enjoy writing, cooking, and (apparently) building websites. I live with my husband, stepdaughter, two cats, and a turtle.</p>
    </div>
  </div>
  <div class="row">
    <div class="offset-by-two eight columns">
      <h2>A Quote from a Favorite Poem:</h2>
      <blockquote><?php echo $quote; ?><br />&mdash;from "<?php echo $title; ?>" by <?php echo $author; ?></blockquote>
    </div>
  </div>
</body>

</html>
