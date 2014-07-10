<?php
define('IN_FRAME', true);
$langues = array(
  'en' => array(
    'title' => 'AOSC - Home',
    'anthonos-getit' => 'Get It',
    'community' => 'Community',
    'community-p' => 'AOSC is an open source community founded mainly by students, with its base principle of tolerancy, the community welcomes participation and contribution from all over the world.',
    'community-b' => 'Community Forums',
    'projects' => 'Projects',
    'projects-p' => 'AOSC maintains a bucketful of projects, from this gateway of community, to the AOSC OS project. Everybody are welcome to participate, or contribute.',
    'projects-b' => 'Download Projects',
    'join' => 'Participate',
    'join-p' => 'AOSC is open to participation of existing projects and new ones. Participations are always welcome! We hope your stay here will make you new friends inside!',
    'join-b' => 'GitHub Repository',
    'feat-opensource' => 'The Power of Open Source<span class="text-muted nowarp"> Open &amp; Free!</span>',
    'feat-opensource-p' => 'Open Source brings collaboration and share to advance of technology. Every project in AOSC are open source and free to share <span class="nowarp">(NOT about money!)</span>.',
    'feat-peace' => 'Tolerance &amp; Friendliness <span class="text-muted nowarp">Not Only to Open Source</span>',
    'feat-peace-p' => 'As we strongly suggests open source and freedom, we are not seeing non-free software or commercial software as our enemy - because we respect your choice, while we continues to love open source.',
  ),
  'zh-CN' => array(
    'title' => '安同开源社区 - 主页',
    'anthonos-getit' => '马上获取',
    'community' => '社区',
    'community-p' => '安同开源社区主要由学生发起并主导，以包容为基本原则。社区欢迎来自全世界的参与和贡献。',
    'community-b' => '社区论坛',
    'projects' => '项目',
    'projects-p' => '社区内运行着满满一箩筐的项目，从此门户页面到名为 "AOSC OS" 的 Linux 发行版计划。任何人都可以参与这些项目之中。',
    'projects-b' => '下载项目',
    'join' => '参与',
    'join-p' => '社区完全开放的，不仅仅是现有项目的参与；新项目的建立，也是对社区的贡献。我们希望你在社区能结交更多好友！',
    'join-b' => 'GitHub 代码仓库',
    'feat-opensource' => '开源的力量 <span class="text-muted nowarp">开放，自由！</span>',
    'feat-opensource-p' => '开源，给技术的进步带来了协作和分享。安同开源社区的一切项目均为开源并且允许自由分享。',
    'feat-peace' => '包容和友好 <span class="text-muted nowarp">不只是开源！</span>',
    'feat-peace-p' => '在大力推进开源和自由的同时，我们不会因此对任何非自由或商业软件产生敌意，我们尊重你的选择，但我们最爱开源！',
  ),
  'zh-TW' => array(
    'title' => '安同開源社區 - 主頁',
    'anthonos-getit' => '馬上獲取',
    'community' => '社區',
    'community-p' => '安同開源社區主要由學生發起並主導，以包容爲基本原則，社區歡迎來自全世界的貢獻和參與。',
    'community-b' => '社區論壇',
    'projects' => '項目',
    'projects-p' => '社區內運行著滿滿壹籮筐的項目，從此門戶頁面到名爲 "AOSC OS" 的 Linux 發行版計劃。任何人都可以參與這些項目之中。',
    'projects-b' => '下載項目',
    'join' => '參與',
    'join-p' => '社區完全開放，不僅僅是現有項目的參與；新項目的建立，也是對社區的貢獻。我們希望你在社區能結交更多好友！',
    'join-b' => 'GitHub 代碼倉庫',
    'feat-opensource' => '開源的力量 <span class="text-muted nowarp">開放，自由！</span>',
    'feat-opensource-p' => '開源，給技術的進步帶來了協作和分享。安同開源社區的壹切項目均爲開源並且允許自由分享。',
    'feat-peace' => '包容與友好 <span class="text-muted nowarp">不祇是開源！</span>',
    'feat-peace-p' => '在大力推進開源和自由的同時，我們不會因此對任何非自由或商業軟體産生敵意，我們尊重你的選擇，但我們最愛開源！',
  ),
/*  'ja' => array(
    'title' => '\\\\TODO: Language',
    'community' => '社区',
    'community-p' => '安同开源社区主要由学生发起并主导，以包容为基本原则，社区欢迎来自全世界的贡献和参与。',
    'community-b' => '社区论坛',
    'projects' => '项目',
    'projects-p' => '社区内运行着满满一箩筐的项目，从此门户页面到名为 "AOSC OS" 的 Linux 发行版计划。任何人都可以参与这些项目之中。',
    'projects-b' => '下载项目',
    'join' => '参与',
    'join-p' => '社区完全开放的，不仅仅是现有项目的参与，新项目的建立，也是对社区的贡献。我们希望你在社区能结交更多好友！',
    'join-b' => 'GitHub 代码仓库',
    'feat-opensource' => '开源的力量 <span class="text-muted">开放，自由！</span>',
    'feat-opensource-p' => '开源，给技术的进步带来了协作和分享。安同开源社区的一切项目均为开源并且允许自由分享。',
    'feat-peace' => '包容和友好 <span class="text-muted nowarp">不只是开源！</span>',
    'feat-peace-p' => '在大力推进开源和自由的同时，我们不会因此对任何非自由或商业软件产生敌意，我们尊重你的选择，但我们最爱开源！',
  ) */
);
include 'modules/langue.php';?>

<!DOCTYPE html>
<html lang=<?php echo $langue; ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jeff Bai <jeffbaichina@gmail.com>, Lion Yang <ionxlion@foxmail.com>, YeXiaoxing <ye@xiaoxing.us>">
    <link rel="shortcut icon" href="/img/favicon.png">

    <title><?php echo $langues[$langue]['title'];?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/carousel.css" rel="stylesheet">
    <link href="/css/common.css" rel="stylesheet">
  </head>
  <body>
  <?php include 'templates/navbar.php';?>
    <!-- Carousel
    ================================================== -->
  <div id="myCarousel" class="carousel slide" data-interval="6000" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
          <div class="active item">
            <img src="/img/Final_Banner.png" alt="Slide 1">
            <div class="carousel-caption">
              <p>
              <a class="btn btn-primary btn-lg" href="http://www.anthonos.org/download/" role="button"><?php echo $langues[$langue]['anthonos-getit'];?></a>
              </p>
            </div>
          </div>
          <div class="item">
            <img src="/img/01.png" alt="Slide 2">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="/img/03.png" alt="Slide 3">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="/img/04.png" alt="Slide 4">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
      <!-- Carousel nav -->
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-md-4">
          <img src="/img/aosc.png">
          <h2><?php echo $langues[$langue]['community'];?></h2>
          <p><?php echo $langues[$langue]['community-p'];?></p> 
          <p><a class="btn btn-default" href="http://wenda.anthonos.org/" role="button"><?php echo $langues[$langue]['community-b'];?> &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4">
          <img src="/img/ast_small.png">
          <h2><?php echo $langues[$langue]['projects'];?></h2>
          <p><?php echo $langues[$langue]['projects-p'];?></p>
          <p><a class="btn btn-default" href="http://anthonos.org/download" role="button"><?php echo $langues[$langue]['projects-b'];?> &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4">
          <img src="/img/next.png">
          <h2><?php echo $langues[$langue]['join'];?></h2>
          <p><?php echo $langues[$langue]['join-p'];?></p>
          <p><a class="btn btn-default" href="https://github.com/AOSC-Dev/" role="button"><?php echo $langues[$langue]['join-b'];?> &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php echo $langues[$langue]['feat-opensource'];?></h2> 
          <p class="lead"><?php echo $langues[$langue]['feat-opensource-p'];?></p>
        </div>
        <div class="col-md-5">   
        
        <img style="float: right;" src="/img/Tux.png" height=350 width=350>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img src="/img/peace.png" height=350 width=350>
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php echo $langues[$langue]['feat-peace'];?></h2>
          <p class="lead"><?php echo $langues[$langue]['feat-peace-p'];?></p>
        </div>
      </div>

      <hr class="featurette-divider">

    <?php include 'templates/footer.php';?>

    </div><!-- /.container -->

    <!-- Javascripts -->

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
    });
    </script>
  </body>
</html>
