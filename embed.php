<meta content="<?php if(isset($_GET["description"])){  echo(htmlspecialchars($_GET["description"])); }?>" name="description">
<title><?php if(isset($_GET["title"])){  echo(htmlspecialchars($_GET["title"])); } ?></title>
<meta content="<?php if(isset($_GET["image"])){  echo(htmlspecialchars($_GET["image"])); } ?>" property='og:image'>
<meta name="theme-color" content="#<?php echo(htmlspecialchars($_GET["color"])); ?>"> 
