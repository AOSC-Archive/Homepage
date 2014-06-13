Homepage
========

Homepage of anthonos.org, powered by Bootstrap.

##Using The Multi-Language Script (v0.1.3)

###An Example for adding **Chinese** support to **index.html**
* Create **index.html.zh-cn.js** (the lang-id must be lower-case) in the same directory of **index.html**
* Add the **id attribute** into the tags which will be translated in **index.html** like: `<h2 id="row-dl">DOWNLOAD</h2>`
* Insert the following code at the bottom of tag **body** in **index.html** in order to include the *Multi-Language Script*.
```
<script type="text/javascript"><![CDATA[
    var g_location = "/index.html";
//]]></script>
<script type="text/javascript" src="//lib.sinaapp.com/js/jquery.cookie/jquery.cookie.js"></script>
<script type="text/javascript" src="/js/lang.min.js"></script>
```
* Write the following code into the **index.html.zh-cn.js**.
```
$t("安同开源");
$r("row-dl", "下载");
$e();
```
Using `$t(...);` to change the title.  
Using `$e();` to end a script.
* In addition, you may add some tags with special **id attribute** in **html file** to control the language: 
```
<ul>
<li><a href="#" id="reset_lang">Reset</a></li>
<li><a href="#" id="auto_set_lang">Auto</a></li>
<li><a href="#" onClick="reset_lang()">English</a></li>
<li><a href="#" onClick="manual_set_lang('zh-CN')">Chinese</a></li>
</ul>
```
*reset_lang* and *auto_set_lang* is the key to switch the language between **Original page language** and **Auto detecting**.  
The `onClick="manual_set_lang('zh-CN')"` attribute work as its name. :)
* Finish!
