<?php
if (!defined('IN_FRAME')) exit();

$nav_langues = array(
	'en' => array(
		'home' => 'Home',
		'community' => 'Community',
		'forums' => 'Forums',
		'dl' => 'Downloads',
		'feedback' => 'Feedback',
		'repo' => 'Repository',
		'wiki' => 'Wiki',
		'developers' => 'Developers',
		'github' => 'GitHub',
		'l10n' => 'Localization',
		'paste' => 'Pastebin',
	),
	'zh-CN' => array(
		'home' => '主页',
		'community' => '社区',
		'forums' => '论坛',
		'dl' => '下载',
		'feedback' => '反馈',
		'repo' => '源码',
		'wiki' => '百科',
		'developers' => '开发',
		'github' => 'GitHub',
		'l10n' => '本地化',
		'paste' => '剪贴板',
	),
	'zh-TW' => array(
		'home' => '主頁',
		'community' => '社區',
		'forums' => '論壇',
		'dl' => '下載',
		'feedback' => '反饋',
		'repo' => '源碼',
		'wiki' => '社區百科',
		'developers' => '開發',
		'github' => 'GitHub',
		'l10n' => '本地化',
		'paste' => '剪貼板',
	),
/*	'ja' => array(
		'home' => 'ホーム',
		'forums' => 'フォーラム',
		'dl' => 'ダウンロード',
		'feedback' => 'フィードバック',
		'repo' => 'ソースコード',
		'wiki' => '百科事典',
		'l10n' => 'ローカライゼーション',
		'paste' => 'クリップボード',
	) */
);
?>
    <div class="navbar-wrapper">
      <div class="container">
        <div class="navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="http://www.anthonos.org/" ><?php echo $nav_langues[$langue]['home'];?></a></li>
                <li><a href="http://www.anthonos.org/download/"><?php echo $nav_langues[$langue]['dl'];?></a></li>
                <ul class="nav navbar-nav">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $nav_langues[$langue]['community'];?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="http://wenda.anthonos.org/"><?php echo $nav_langues[$langue]['forums'];?></a></li>
                      <li><a href="http://bugs.anthonos.org/"><?php echo $nav_langues[$langue]['feedback'];?></a></li>
                      <li><a href="http://repo.anthonos.org/"><?php echo $nav_langues[$langue]['repo'];?></a></li>
                      <li><a href="http://wiki.anthonos.org/"><?php echo $nav_langues[$langue]['wiki'];?></a></li>
                    </ul>
                  </li>
                </ul>
                <ul class="nav navbar-nav">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $nav_langues[$langue]['developers'];?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <li><a href="http://github.com/AOSC-Dev/"><?php echo $nav_langues[$langue]['github'];?></a></li>
                       <li><a href="http://l10n.anthonos.org/"><?php echo $nav_langues[$langue]['l10n'];?></a></li>
                       <li><a href="http://pastebin.anthonos.org/"><?php echo $nav_langues[$langue]['paste'];?></a></li>
                    </ul>
                  </li>
                </ul>
              </ul>
              <!-- Following structure is the language menu -->
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="/img/glyphicons_370_globe_af_grey_normal.png" alt="Language">
                    <div style="display:none;"><img src="/img/glyphicons_370_globe_af_grey_hover.png" alt="Language"></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="?lang=en">English</a></li>
                    <li><a href="?lang=zh-CN">简体中文</a></li>
                    <li><a href="?lang=zh-TW">正體中文</a></li>
                    <!-- <a href="?lang=ja">にほんご</a></li> -->
                  </ul>
                </li>
              </ul>
              <!-- END: Language menu  -->
            </div>
          </div>
        </div>
      </div>
    </div>