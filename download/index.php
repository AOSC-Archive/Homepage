<?php
define('IN_FRAME', true);

$anthonos_download_urls = array(
  'en' => array(
    'name' => 'Download Engilsh Version',
    'url' => 'http://mb.anthonos.org/os2-releases/anthonos/july-2014/anthonos_final-doge_kde_pc+mac_en-US.iso',
    'cs' => 'ac86675ef81f029e58318d762b25897e',
    ),
  'zh-CN' => array(
    'name' => '下载简体中文版',
    'url' => 'http://mb.anthonos.org/os2-releases/anthonos/july-2014/anthonos_final-doge_kde_pc+mac_zh-CN.iso',
    'cs' => '96b33bab563fd3cfd3a76e23cbf7ca6d',
    ),
  'zh-TW' => array(
    'name' => '下載正體中文版',
    'url' => 'http://mb.anthonos.org/os2-releases/anthonos/july-2014/anthonos_final-doge_kde_pc+mac_zh-TW.iso',
    'cs' => '3c2ec987eb0044b7493403c36f39bf78',
    ),
);

$langues = array(
  'en' => array(
    'title' => 'Downloads - AOSC',
    'download-title' => 'Downloads / <span class="text-muted">Community Projects</span>',
    'anthonos-title' => 'AnthonOS <span class="text-muted">Final Release</span>',
    'anthonos-ad' => 'Simple, while feature rich.',
    'anthonos-relnote' => 'Release Notes &raquo;',
    'anthonos-download' => 'Download English Version',
    'anthonos-download-other' => 'Other Languages\'',
    'anthonos-checksum' => 'MD5 Checksum : ',
    'anthonos-password' => 'Password of Live CD: ',
    'spins' => 'Spins',
    'screenshot' => 'Screenshots',
    'close-modal' => 'Close',
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
    'anthonos-title' => 'AnthonOS <span class="text-muted">正式版本</span>',
    'anthonos-ad' => '简而不减的桌面发行版',
    'anthonos-relnote' => '发行注记 &raquo;',
    'anthonos-download' => '下载简体中文版',
    'anthonos-download-other' => '其它语言',
    'anthonos-checksum' => 'MD5 校验码 : ',
    'anthonos-password' => 'Live CD 登陆密码为: ',
    'spins' => '//TODO: spins',
    'screenshot' => '系统界面截图',
    'close-modal' => '返回',
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
    'anthonos-title' => 'AnthonOS <span class="text-muted">正式版本</span>',
    'anthonos-ad' => '簡而不剪的桌面發行版.',
    'anthonos-relnote' => '發行注記 &raquo;',
    'anthonos-download' => '下載正體中文版',
    'anthonos-download-other' => '其它語言',
    'anthonos-checksum' => 'MD5 校驗碼 : ',
    'anthonos-password' => 'Live CD 登陸密碼為: ',
    'spins' => '//TODO: spins',
    'screenshot' => '系統界面截屏',
    'close-modal' => '返回',
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
    <script type="application/javascript">
      var anthonos_download_urls = new Array(
      '<?php echo $anthonos_download_urls['en']['cs'];?>', 'Download Engilsh Version', '<?php echo $anthonos_download_urls['en']['url'];?>',
      '<?php echo $anthonos_download_urls['en']['cs'];?>', '下载简体中文版', '<?php echo $anthonos_download_urls['zh-CN']['url'];?>',
      '<?php echo $anthonos_download_urls['en']['cs'];?>','下載正體中文版', '<?php echo $anthonos_download_urls['zh-TW']['url'];?>'
      );
    </script>
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
            <a class="btn btn-default" href="http://wenda.anthonos.org/article/17" role="button"><?php echo $langues[$langue]['anthonos-relnote'];?></a><span style="margin: 5px;"></span>
            <div class="btn-group">
              <a id="download-button" class="btn btn-primary" href="<?php echo $anthonos_download_urls[$langue]['url'] ?>" role="button"><?php echo $langues[$langue]['anthonos-download'];?></a>
              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <?php echo $langues[$langue]['anthonos-download-other'];?><span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a herf="#" class="download-handle" id="dl-0" role="button">English</a></li>
                  <li><a herf="#" class="download-handle" id="dl-1" role="button">简体中文</a></li>
                  <li><a herf="#" class="download-handle" id="dl-2" role="button">正體中文</a></li>
                </ul>
              </div>
            </div>
          </div>
        </p>
        <p>
          <span class="label label-default"><?php echo $langues[$langue]['anthonos-checksum'];?><span id="checksum"><?php echo $anthonos_download_urls[$langue]['cs'] ?></span></span>
          <span class="label label-danger"><?php echo $langues[$langue]['anthonos-password'];?><em>live</em></span>
        </p>
        <button class="btn btn-default" data-toggle="modal" data-target="#myModal">
          <?php echo $langues[$langue]['spins'];?>
        </button>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
            <?php echo $langues[$langue]['screenshot'];?>
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="my_gallery">
            <?php
              for ($a=1;$a<=11;$a++)
                echo '<a target="_blank" href="/img/screenshot/'.$a.'.png"><img src="/img/screenshot/'.$a.'_small.png" id="img'.$a.'" alt="img'.$a.'" width="250"></a>';
            ?>
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
        <h2 class="heading"><?php echo $langues[$langue]['ast-title'];?></h2>
        <p class="lead"><?php echo $langues[$langue]['ast-ad'];?></p>
        <p><a class="btn btn-default" href="http://ast.projects.anthonos.org/" role="button"><?php echo $langues[$langue]['src-button'];?></a></p>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- FOOTER -->
    <?php include '../templates/footer.php';?>
  
  </div><!-- /.container -->
  
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $langues[$langue]['close-modal'];?></span></button>
            <h3 class="modal-title" id="myModalLabel"><?php echo $langues[$langue]['spins'];?></h3>
          </div>
          <div class="modal-body">
            <h4>
              <?php echo $langues[$langue]['awesome-title'];?>
            </h4>
            <p>
                <b><?php echo $langues[$langue]['awesome-desc'];?></b>
                <p><a class="btn btn-default" href="http://mb.anthonos.org/os2-releases/aosc-os2-spins/awesome/" role="button"><?php echo $langues[$langue]['download-button'];?></a></p> 
            </p>
            <hr>
            <h4>
              <?php echo $langues[$langue]['xfce-title'];?>
            </h4>
            <p>
              <b><?php echo $langues[$langue]['xfce-desc'];?></b>
              <p><a class="btn btn-default" href="http://mb.anthonos.org/os2-releases/aosc-os2-spins/xfce/" role="button"><?php echo $langues[$langue]['download-button'];?></a></p> 
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $langues[$langue]['close-modal'];?></button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://lib.sinaapp.com/js/jquery/2.0.3/jquery-2.0.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script type="application/javascript">
    $(document).ready(function() { 
      var $img = $("img"); 
      $img.hover(function() { 
        $(this).attr("src",$(this).attr("src").replace("_normal","_hover")); 
      },function() { 
        $(this).attr("src",$(this).attr("src").replace("_hover","_normal")); 
      });
      $(".download-handle").click(function(){
        $("#download-button").html(anthonos_download_urls[parseInt(this.id.substr(3))*3+1]);
        $("#download-button").attr("href",anthonos_download_urls[parseInt(this.id.substr(3))*3+2]);
        $("#checksum").html(anthonos_download_urls[parseInt(this.id.substr(3))*3]);
      });
    });
    </script>
  </body>
</html>
