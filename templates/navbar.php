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
    
		'warn' => '<strong>WARNING:</strong> A major flaw is discovered in the currently released ISO. So now please wait for the fixed one to be released at earliest July 11, 12:00 UTC, no later than Sunday.',
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
    
		'warn' => '<strong>警告：</strong>当前的AnthonOS正式版本出现了一个问题，将可能导致桌面无法正常显示。请等待即将发布的修复版本，时间于北京时间7月11日八点至最晚本周日。',
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
    
		'warn' => '<strong>警告：</strong>當前的AnthonOS正式版本出現了一個問題，將可能導致桌面無法正常顯示。請等待即將發布的修正版，時間於北京時間7月11日八點至最晚本週日。',
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
    <div class="alert alert-danger" role="alert" style="position:fixed;top:0;width:100%;z-index:5;"><?php echo $nav_langues[$langue]['warn'];?></div>