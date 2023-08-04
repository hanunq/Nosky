<?php
/**
* “ 一款简单的主题，请设置完再看最后效果并修改，主题文件夹务必命名为nosky”
* 
* @package nosky
* @author 1nonly , hanunq
* @version 1.5.1
* @link https://github.com/hanunq
*https://github.com/Inon1y
*/
?>
<?php $this->need('public/secheader.php'); 
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php while($this->next()): ?>
<main class="main">
<div class="post-list">
<div class="post-entry content-card">
<div class="post-entry__header"></div>
<div class="post-entry__content">
<h2 class="post-entry__title"><?php $this->title() ?></h2>            			 
<p><?php $this->excerpt(140, '...'); ?></p>
</div>
<div class="post-entry__meta">
<a href="<?php $this->permalink() ?>" class="post-meta__date button"><?php $this->date('Y/m/d'); ?></a>
</div>
<div class="post-entry__meta">
<a href="<?php $this->permalink() ?>" class="post-meta__date button"><?php $this->category(','); ?>	</a>
</div>
<div class="post-entry__tags">作者: <?php $this->tags(',', true, '寒幽月'); ?></div>

<a href="<?php $this->permalink() ?>" class="post-entry__link"></a>
</div>
</div>
</main>
<br>
<?php endwhile; ?>
<ol class="pager"><?php $this->pageNav(); ?></ol>
<script>
//手机端导航栏控制函数
$("#m-nav-switch").click(function(){
if($("#header-nav-m").css("display")=='none'){
$("#header-nav-m").slideDown();
$(this).animate(
{opacity:'toggle'},
200,
null,
function(){
$("#m-nav-switch").attr("src","<?php $this->options->siteUrl(); ?>/usr/themes/nosky/assets/img/x.svg");
$("#m-nav-switch").animate({opacity:'toggle'},200);
}
);
}else{
$("#header-nav-m").slideUp();
$(this).animate(
{opacity:'toggle'},
200,
null,
function(){
$("#m-nav-switch").attr("src","<?php $this->options->siteUrl(); ?>/usr/themes/nosky/assets/img/menu.svg");
$("#m-nav-switch").animate({opacity:'toggle'},200);
}
);
}
});
</script>
</div>
</body>