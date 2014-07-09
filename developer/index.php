<?php
define('IN_FRAME', true);

$anthonos_download_url = 'http://mirror.anthonos.org/os2-releases/anthonos/june-2014/anthonos_rc0-lycanthropy_kde_pc+mac_en-US.iso';

$langues = array(
  'en' => array(
    'title' => 'Developer - AOSC',
    'download-title' => 'Previews / <span class="text-muted">Developers Center</span>',
    'anthonos-title' => 'AOSC OS3 <span class="text-muted">Developer Preview</span>',
    'anthonos-ad' => 'Foo, while feature bar.',
    'anthonos-relnote' => 'Release Notes &raquo;',
    'anthonos-download' => 'Download &raquo;',
    'anthonos-password' => 'Password of Live CD: '
  ),
  'zh-CN' => array(
    'title' => '开发人员中心 - 安同开源社区',
    'download-title' => '下载 / <span class="text-muted">社区项目</span>',
    'anthonos-title' => 'AnthonOS <span class="text-muted">候选发布</span>',
    'anthonos-ad' => '简而不减的桌面发行版',
    'anthonos-relnote' => '发行注记 &raquo;',
    'anthonos-download' => '下载 &raquo;',
    'anthonos-password' => 'Live CD 登陆密码为: '
  ),
  'zh-TW' => array(
    'title' => '開發人員中心 - 安同開源社區',
    'download-title' => '下載 / <span class="text-muted">社區項目</span>',
    'anthonos-title' => 'AnthonOS <span class="text-muted">候選發佈</span>',
    'anthonos-ad' => '簡而不剪的桌面發行版.',
    'anthonos-relnote' => '發行注記 &raquo;',
    'anthonos-download' => '下載 &raquo;',
    'anthonos-password' => 'Live CD 登陸密碼為: '
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
  <div class="container marketing">
    <h1 class="featurette-heading"><?php echo $langues[$langue]['download-title'];?></h1>
    <hr class="featurette-divider">  
    <div class="row featurette">
    <div class="col-md-3">
      <img src="/img/os3.png" height=200 width=200>
    </div>
    <div class="col-md-9">
      <h2 class="heading"><?php echo $langues[$langue]['anthonos-title'];?></h2>
      <p class="lead"><?php echo $langues[$langue]['anthonos-ad'];?>
      <p>
      <a class="btn btn-default" href="http://wenda.anthonos.org/article/13" role="button">&nbsp;&nbsp;<?php echo $langues[$langue]['anthonos-relnote'];?>&nbsp;&nbsp;</a><span style="margin: 5px;"></span>
      <a class="btn btn-primary" href="<?php echo $anthonos_download_url ?>" role="button">&nbsp;&nbsp;<?php echo $langues[$langue]['anthonos-download'];?>&nbsp;&nbsp;</a>
      </p>
      <h4></span><span class="label label-danger"><?php echo $langues[$langue]['anthonos-password'];?><em>live</em></span></h4>
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
    <script type="application/javascript">
    $(function() { 
      var $img = $("img"); 
      $img.hover(function() { 
        $(this).attr("src",$(this).attr("src").replace("_normal","_hover")); 
      },function() { 
        $(this).attr("src",$(this).attr("src").replace("_hover","_normal")); 
      });
    });
    </script>
    
  </body>
</html>
