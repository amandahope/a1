<?php require('./php/randomquote.php'); ?>
<!DOCTYPE html>

<html>

<head>
  <title>Amanda Wininger</title>
  <link rel="stylesheet" type="text/css" href="./css/a1.css" />
</head>

<body>
  <h1>Amanda Wininger</h1>
  <img src="" alt="Amanda Wininger" />
  <h2>About Me:</h2>
  <p>In my day job, I'm a librarian and a union leader. In my free time, I enjoy writing, cooking, and (apparently) building websites. I live with my husband, stepdaughter, two cats, and a turtle.</p>
  <h2>A Quote from a Favorite Poem:</h2>
  <blockquote><?php echo $quote; ?><br />
  &mdash;from "<?php echo $title; ?>" by <?php echo $author; ?></blockquote>
</body>

</html>
