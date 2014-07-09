<?php
define('IN_FRAME', true);

$anthonos_download_urls = array(
  'en' => array(
    'name' => 'Engilsh',
    'url' => 'http://mirror.anthonos.org/os2-releases/anthonos/june-2014/anthonos_rc0-lycanthropy_kde_pc+mac_en-US.iso'
    ),
  'zh-CN' => array(
    'name' => '简体中文',
    'url' => 'http://mirror.anthonos.org/os2-releases/anthonos/june-2014/anthonos_rc0-lycanthropy_kde_pc+mac_zh-CN.iso'
    ),
  'zh-TW' => array(
    'name' => '正體中文',
    'url' => 'http://mirror.anthonos.org/os2-releases/anthonos/june-2014/anthonos_rc0-lycanthropy_kde_pc+mac_zh-TW.iso'
    ),
);

$langues = array(
  'en' => array(
    'title' => 'Downloads - AOSC',
    'download-title' => 'Downloads / <span class="text-muted">Community Projects</span>',
    'anthonos-title' => 'AnthonOS <span class="text-muted">Release Candidate</span>',
    'anthonos-ad' => 'Simple, while feature rich.',
    'anthonos-relnote' => 'Release Notes &raquo;',
    'anthonos-download' => 'Download English Version',
    'anthonos-download-other' => 'Other Languages\'',
    'anthonos-password' => 'Password of Live CD: ',
    'awesome-title' => 'Awesome Spin',
    'awesome-desc' => 'An Awesome spin (that is awesome), from Zhanlin Shang. Awesome is a highly customizable window manager.',
    'download-button' => 'Download &raquo;',
    'xfce-title' => 'Xfce Spin',
    'xfce-desc' => 'A Xfce spin based on AnthonOS.',
    'cp-title' => 'CentralPoint <span class="text-muted">Radio Noise</span>',
    'cp-download' => 'Announcement and Download &raquo;',
    'cp-ad' => 'A lightweight Turn-key style server release.',
    'ast-title' => 'Anthon Starter <span class="text-muted">Start Me Up!',
    'ast-ad' => 'Installation helper for AOSC Linux distributions.',
    'src-button' => 'Homepage &raquo;',
  ),
  'zh-CN' => array(
    'title' => '下载 - 安同开源社区',
    'download-title' => '下载 / <span class="text-muted">社区项目</span>',
    'anthonos-title' => 'AnthonOS <span class="text-muted">候选发布</span>',
    'anthonos-ad' => '简而不减的桌面发行版',
    'anthonos-relnote' => '发行注记 &raquo;',
    'anthonos-download' => '下载简体中文版',
    'anthonos-download-other' => '其它语言',
    'anthonos-password' => 'Live CD 登陆密码为: ',
    'awesome-title' => 'Awesome 版',
    'awesome-desc' => '一个非常赞的 Awesome 定制版本, 来自 Zhanlin Shang. Awesome 是一个高度可定制的窗口管理器',
    'download-button' => '下载 &raquo;',
    'xfce-title' => 'Xfce 版',
    'xfce-desc' => '基于 AnthonOS 制作的 Xfce Spin.',
    'cp-title' => 'CentralPoint <span class="text-muted">"缺陷电气"</span>', //此处注意使用半角引号
    'cp-ad' => '轻量化的 Turn-key 型服务器发行版',
    'cp-download' => '发布及下载 &raquo;',
    'ast-title' => '安同开始程序 <span class="text-muted">Start Me Up!', //不要翻译 Start Me Up!
    'ast-ad' => '安同开源社区发行版硬盘安装助手',
    'src-button' => '项目主页 &raquo;',
  ),
  'zh-TW' => array(
    'title' => '下載 - 安同開源社區',
    'download-title' => '下載 / <span class="text-muted">社區項目</span>',
    'anthonos-title' => 'AnthonOS <span class="text-muted">候選發佈</span>',
    'anthonos-ad' => '簡而不剪的桌面發行版.',
    'anthonos-relnote' => '發行注記 &raquo;',
    'anthonos-download' => '下載正體中文版',
    'anthonos-download-other' => '其它語言',
    'anthonos-password' => 'Live CD 登陸密碼為: ',
    'awesome-title' => 'Awesome 版',
    'awesome-desc' => '一個非常贊的 Awesome 定製版本, 來自 Zhanlin Shang. Awesome 是一個可以高度定製的窗口管理器.',
    'download-button' => '下載 &raquo;',
    'xfce-title' => 'Xfce 版',
    'xfce-desc' => '基於 AnthonOS 製作的Xfce Spin.',
    'cp-title' => 'CentralPoint <span class="text-muted">代號 "Radio Noise"</span>',
    'cp-ad' => '輕量化的 turn-key 類型的伺服器發行版.',
    'cp-download' => '發佈及下載 &raquo;',
    'ast-title' => '安同開始程式 <span class="text-muted">Start Me Up!',
    'ast-ad' => '安同開源社區發行版安裝助手',
    'src-button' => '項目主頁 &raquo;',
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
      <img src="/img/anos.png" height=200 width=200>
    </div>
    <div class="col-md-9">
      <h2 class="heading"><?php echo $langues[$langue]['anthonos-title'];?></h2>
      <p class="lead">
        <?php echo $langues[$langue]['anthonos-ad'];?>
        <div class="btn-toolbar">
          <a class="btn btn-default" href="http://wenda.anthonos.org/article/13" role="button"><?php echo $langues[$langue]['anthonos-relnote'];?></a><span style="margin: 5px;"></span>
          <div class="btn-group">
            <a class="btn btn-primary" href="<?php echo $anthonos_download_urls[$langue]['url'] ?>" role="button"><?php echo $langues[$langue]['anthonos-download'];?></a>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <?php echo $langues[$langue]['anthonos-download-other'];?><span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
              <?php
                foreach ($anthonos_download_urls as $anthonos_download_urls_key => $anthonos_download_urls_value){
                  if ($anthonos_download_urls_key == $langue)
                  echo '<li><a href="' . $anthonos_download_urls_value['url'] . '" role="button">&raquo;' . $anthonos_download_urls_value['name'] . '</a></li>';
                  else
                  echo '<li><a href="' . $anthonos_download_urls_value['url'] . '" role="button">' . $anthonos_download_urls_value['name'] . '</a></li>';
                }
              ?>
              </ul>
            </div>
          </div>
        </div>
      </p>
      <h4><span class="label label-danger"><?php echo $langues[$langue]['anthonos-password'];?><em>live</em></span></h4>
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
      <p><a class="btn btn-default" href="http://ast.projects.anthonos.org/" role="button"><?php echo $langues[$langue]['src-button'];?></a></p>
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
      $
    });
    </script>
  </body>
</html>
