<?php
if (!isset ($__IN_FRAME__)) exit();

$nav_langues = array(
	'en' => array(
		'home' => 'Home',
		'forums' => 'Forums',
		'dl' => 'Downloads',
		'feedback' => 'Feedback',
		'repo' => 'Repository',
		'wiki' => 'Wiki',
		'l10n' => 'Localization',
		'paste' => 'Pastebin',
	),
	'zh-CN' => array(
		'home' => '主页',
		'forums' => '论坛',
		'dl' => '下载',
		'feedback' => '反馈',
		'repo' => '源码',
		'wiki' => '百科',
		'l10n' => '本地化',
		'paste' => '剪贴板',
	),
	'zh-TW' => array(
		'home' => '主页',
		'forums' => '论坛',
		'dl' => '下载',
		'feedback' => '反馈',
		'repo' => '源码',
		'wiki' => '百科',
		'l10n' => '本地化',
		'paste' => '剪贴板',
	),
	'ja' => array(
		'home' => 'ホーム',
		'forums' => 'フォーラム',
		'dl' => 'ダウンロード',
		'feedback' => 'フィードバック',
		'repo' => 'ソースコード',
		'wiki' => '百科事典',
		'l10n' => 'ローカライゼーション',
		'paste' => 'クリップボード',
	)
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
                <li><a href="http://wenda.anthonos.org/"><?php echo $nav_langues[$langue]['forums'];?></a></li>
                <li><a href="http://www.anthonos.org/download/"><?php echo $nav_langues[$langue]['dl'];?></a></li>
                <li><a href="http://bugs.anthonos.org/"><?php echo $nav_langues[$langue]['feedback'];?></a></li>
                <li><a href="http://repo.anthonos.org/"><?php echo $nav_langues[$langue]['repo'];?></a></li>
                <li><a href="http://wiki.anthonos.org/"><?php echo $nav_langues[$langue]['wiki'];?></a></li>
                <li><a href="http://l10n.anthonos.org/"><?php echo $nav_langues[$langue]['l10n'];?></a></li>
                <li><a href="http://pastebin.anthonos.org/"><?php echo $nav_langues[$langue]['paste'];?></a></li>
              </ul>
              <!-- Following structure is the language menu -->
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/img/glyphicons_370_globe_af_grey.png" alt="Language">
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="?lang=en">English</a></li>
                    <li><a href="?lang=zh-CN">简体中文</a></li>
                    <li><a href="?lang=zh-TW">正體中文</a></li>
                    <li><a href="?lang=ja">にほんご</a></li>
                  </ul>
                </li>
              </ul>
              <!-- END: Language menu  -->
            </div>
          </div>
        </div>
		
      </div>
    </div>