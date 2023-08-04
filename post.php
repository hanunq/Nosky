<?php $this->need('public/secheader.php'); ?>
<div id="main-container" class="animate__animated animate__fadeIn">
  <div id="post-container" role="main">
    <div id="post-data">
      <h2><?php $this->title() ?></h2>
      <div id="post-data-detail">
        <span class="category"><?php $this->category(','); ?></span><br></br>
        <span class="tags"><?php $this->tags(',', true, ''); ?></span>
        <span class="date"><?php $this->date('Y/m/d'); ?></span>
      </div>
    </div>
    <div id="post-content" class="typo">
      <p><?php $this->content(); ?></p>
    </div>

<div class="extra-space"></div>

 <hr class="styled-hr">

<div class="extra-space"></div>

<style>
      
      .extra-space {
        height: 50px;
      }
    </style>
    <div class="extra-space"></div>

   
    <style>
      hr.styled-hr {
        border: none;
        height: 2px;
        background-color: #ddd;
        margin: 20px 0;
      }
    </style>
    <div id="comments">
      <?php $this->comments()->to($comments); ?>
      <?php if ($comments->have()): ?>
        <h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有 1 条评论'), _t('已有 %d 条评论')); ?></h3>
        <?php $comments->listComments(); ?>
        <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
      <?php endif; ?>
      <?php if($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
          <div class="cancel-comment-reply">
            <?php $comments->cancelReply(); ?>
          </div>
          <h3 id="response"><?php _e('添加新评论'); ?></h3>
          <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
              <p><?php _e('已登入为'); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?>&raquo;</a></p>
            <?php else: ?>
              <div class="comment-form-author form-group">
                <label for="author"><?php _e('称呼'); if ($this->options->commentsRequireName): ?> <span class="required">*</span><?php endif; ?></label>
                <input type="text" name="author" id="author" class="form-control" value="<?php $this->remember('author'); ?>" required />
              </div>
              <div class="comment-form-email form-group">
                <label for="mail"><?php _e('邮箱'); if ($this->options->commentsRequireMail): ?> <span class="required">*</span><?php endif; ?></label>
                <input type="email" name="mail" id="mail" class="form-control" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> 
              </div>
              <div class="comment-form-url form-group">
                <label for="url"><?php _e('网站'); if ($this->options->commentsRequireURL): ?> <span class="required">*</span><?php endif; ?></label>
                <input type="url" name="url" id="url" class="form-control" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
              </div>
            <?php endif; ?>
            <div class="comment-form-comment form-group">
              <textarea name="text" id="textarea" rows="8" class="form-control" required ><?php $this->remember('text'); ?></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary"><?php _e('提交评论'); ?></button>
            </div>
          </form>
        </div>
      <?php else: ?>
        <h3><?php _e('评论已关闭'); ?></h3>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="extra-space"></div>
<script src="/usr/themes/nosky/public/hanyun.js"></script>
<script src="/usr/themes/nosky/public/hanyunq.js"></script>
  </div>
</div>
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