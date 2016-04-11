<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Nate Test</title>
   <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="/css/styles.css?v=1.0">
  <link rel="stylesheet" href="/css/textillate-animate.css">
  
 
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
    <div id="main-stage">
        <div id="centered-box">
            
            <?php 
            $row = 1;
            if (($handle = fopen("lesson_1.csv", "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    ?>
                    <div class="item">
                      <div class="french"><?php echo $data[1]; ?></div>
                      <div class="english"><?php echo $data[0]; ?></div>                 
                    </div>
                    <?php 
                   
                }
                fclose($handle);
            }
            
            ?>                 
        </div>
    </div>
  <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="/js/main.js"></script>
   <script type="text/javascript" src="/js/jquery.lettering.js"></script>
  <script type="text/javascript" src="/js/jquery.textillate.js"></script>

</body>
</html>