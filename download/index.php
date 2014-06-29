<?php
define('IN_FRAME', true);
$langues = array(
  'en' => array(
    'title' => 'AOSC - Downloads',
    'download-title' => 'Downloads / <span class="text-muted">Community Projects</span>',
    'anthonos-title' => 'AnthonOS <span class="text-muted">Release Candidate</span>',
    'anthonos-ad' => 'Simple, while feature rich.',
    'anthonos-relnote' => 'Release Notes &raquo;',
    'anthonos-download' => '<a class="btn btn-default" href="http://mirror.anthonos.org/os2-releases/anthonos/june-2014/anthonos_rc0-lycanthropy_kde_pc+mac_en-US.iso" role="button">Download &raquo;</a>',
    'awesome-title' => 'Awesome Spin',
    'awesome-desc' => 'An Awesome spin (that is awesome), from Zhanlin Shang. Awesome is a highly customizable window manager.',
    'download-button' => 'Download &raquo;',
    'xfce-title' => 'Xfce Spin',
    'xfce-desc' => 'A Xfce spin based on AnthonOS.',
    'cp-title' => 'CentralPoint <span class="text-muted">Radio Noise</span>',
    'cp-download' => 'Announcement and Download &raquo;',
    'cp-ad' => '===================TODO=======================',
    'ast-title' => 'Anthon Starter <span class="text-muted">Start Me Up!',
    'ast-ad' => 'The world of open source starts here.',
    'src-button' => 'Source Code &raquo;',
  ),
  'zh-CN' => array(
    'title' => 'AOSC - Downloads',
    'download-title' => 'Downloads / <span class="text-muted">Community Projects</span>',
    'anthonos-title' => 'AnthonOS <span class="text-muted">Release Candidate</span>',
    'anthonos-ad' => 'Simple, while feature rich.',
    'anthonos-relnote' => 'Release Notes &raquo;',
    'anthonos-download' => '<a class="btn btn-default" href="http://mirror.anthonos.org/os2-releases/anthonos/june-2014/anthonos_rc0-lycanthropy_kde_pc+mac_en-US.iso" role="button">Download &raquo;</a>',
    'awesome-title' => 'Awesome Spin',
    'awesome-desc' => 'An Awesome spin (that is awesome), from Zhanlin Shang. Awesome is a highly customizable window manager.',
    'download-button' => 'Download &raquo;',
    'xfce-title' => 'Xfce Spin',
    'xfce-desc' => 'A Xfce spin based on AnthonOS.',
    'cp-title' => 'CentralPoint <span class="text-muted">Radio Noise</span>',
    'cp-ad' => '===================TODO=======================',
    'cp-download' => 'Announcement and Download &raquo;',
    'ast-title' => 'Anthon Starter <span class="text-muted">Start Me Up!',
    'ast-ad' => 'The world of open source starts here.',
    'src-button' => 'Source Code &raquo;',
  ),
  'zh-TW' => array(
    'title' => 'AOSC - Downloads',
    'download-title' => 'Downloads / <span class="text-muted">Community Projects</span>',
    'anthonos-title' => 'AnthonOS <span class="text-muted">Release Candidate</span>',
    'anthonos-ad' => 'Simple, while feature rich.',
    'anthonos-relnote' => 'Release Notes &raquo;',
    'anthonos-download' => '<a class="btn btn-default" href="http://mirror.anthonos.org/os2-releases/anthonos/june-2014/anthonos_rc0-lycanthropy_kde_pc+mac_en-US.iso" role="button">Download &raquo;</a>',
    'awesome-title' => 'Awesome Spin',
    'awesome-desc' => 'An Awesome spin (that is awesome), from Zhanlin Shang. Awesome is a highly customizable window manager.',
    'download-button' => 'Download &raquo;',
    'xfce-title' => 'Xfce Spin',
    'xfce-desc' => 'A Xfce spin based on AnthonOS.',
    'cp-title' => 'CentralPoint <span class="text-muted">Radio Noise</span>',
    'cp-ad' => '===================TODO=======================',
    'cp-download' => 'Announcement and Download &raquo;',
    'ast-title' => 'Anthon Starter <span class="text-muted">Start Me Up!',
    'ast-ad' => 'The world of open source starts here.',
    'src-button' => 'Source Code &raquo;',
  ),
);
include '../modules/langue.php';?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jeff Bai <jeffbaichina@gmail.com>, YeXiaoxing <ye@xiaoxing.us>">
    <link rel="shortcut icon" href="/img/favicon.png">

    <title><?php echo $langues[$langue]['title'];?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/carousel.css" rel="stylesheet"> 
    <link href="/css/common.css" rel="stylesheet"> 
  </head>
  <body>
  <!-- NAVBAR
  ================================================== -->
  <?php include '../templates/navbar.php';?>
  <div class="container marketing"   
    <h1 class="featurette-heading"><?php echo $langues[$langue]['download-title'];?></h1>
    <hr class="featurette-divider">  
    <div class="row featurette">
    <div class="col-md-3">
      <img src="/img/anos.png" height=200 width=200>
    </div>
    <div class="col-md-9">
      <h2 class="heading"><?php echo $langues[$langue]['anthonos-title'];?></h2>
      <p class="lead"><?php echo $langues[$langue]['anthonos-ad'];?>
      <p><a class="btn btn-default" href="http://wenda.anthonos.org/article/13" role="button"><?php echo $langues[$langue]['anthonos-relnote'];?></a></p>
      <p><?php echo $langues[$langue]['anthonos-download'];?></p>
    </div>
    </div>

    <div class="panel-group" id="accordion">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          <?php echo $langues[$langue]['awesome-title'];?>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
    <div class="panel-body">
        <b><?php echo $langues[$langue]['awesome-desc'];?></b>
        <p><a class="btn btn-default" href="http://mirror.anthonos.org/os2-releases/aosc-os2-spins/awesome/" role="button"><?php echo $langues[$langue]['download-button'];?></a></p> 
      </div>
    </div>
    </div>
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
          <?php echo $langues[$langue]['xfce-title'];?>
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">
        <b><?php echo $langues[$langue]['xfce-desc'];?></b>
        <p><a class="btn btn-default" href="http://mirror.anthonos.org/os2-releases/aosc-os2-spins/xfce/" role="button"><?php echo $langues[$langue]['download-button'];?></a></p> 
      </div>
    </div>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-3">
      <img src="/img/cp.png" height=200 width=200>
    </div>
    <div class="col-md-9">
      <h2 class="heading"><?php echo $langues[$langue]['cp-title'];?></h2>
      <p class="lead"><?php echo $langues[$langue]['cp-ad'];?></p>
      <p><a class="btn btn-default" href="http://wenda.anthonos.org/question/9" role="button"><?php echo $langues[$langue]['cp-download'];?></a></p>
    </div>
  </div>

  <hr class="featurette-divider">
      
  <div class="row featurette">
    <div class="col-md-3">
      <img src="/img/ast.png" height=200 width=200>
    </div>
    <div class="col-md-9">
      <h2 class="heading"><?php echo $langues[$langue]['ast-title'];?></span></h2>
      <p class="lead"><?php echo $langues[$langue]['ast-ad'];?></p>
      <p><a class="btn btn-default" href="https://github.com/AOSC-Dev/Anthon-Starter" role="button"><?php echo $langues[$langue]['src-button'];?></a></p>
    </div>
  </div>

  <hr class="featurette-divider">

  <!-- FOOTER -->
  <?php include '../templates/footer.php';?>
  
  </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://lib.sinaapp.com/js/jquery/2.0.3/jquery-2.0.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    
  </body>
</html>
