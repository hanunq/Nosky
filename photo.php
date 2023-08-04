<?php
/**
 * 图库模板
 *
 * @package custom
 */
?>

<?php $this->need('public/secheader.php'); ?>

<style>
.image-item {
    width: 150px;
    height: 150px;
    border: 1px solid #ddd;  
    box-shadow: 0 2px 3px #ccc;  
    border-radius: 4px;  
    transition: transform 0.4s;
}
.image-item:hover {
    transform: scale(1.1);
}
</style>  

<div id="main-container" class="animate__animated animate__fadeIn">   
    <div id="photos" class="clear">
        <?php for ($i = 1; $i <= 8; $i++): ?>
            <div class='image-item' data-src='<?php echo $this->options->{"photo" . $i}(); ?>' style='background-image:url(<?php echo $this->options->{"photo" . $i}(); ?>)'></div>   
        <?php endfor; ?>   
    </div>
    <div id="photo-cover">
        <div id="photo-cover-container">  
            <img src="">
        </div>
    </div>
</div>

<div class="footer-text">all done~</div>

<script>
    // 图片点击显示大图
    $('.image-item').click(function() {
        // ...
    });
    
    $('.image-item').click(function() {
        $("#photo-cover img").attr("src", $(this).attr("data-src"));
        $("#photo-cover").fadeIn();
    });
    
    $("#photo-cover").click(function() {
        $(this).fadeOut();
    });
    
    // 手机端导航栏控制函数
    $("#m-nav-switch").click(function() {
        var headerNav = $("#header-nav-m");
        var mNavSwitch = $("#m-nav-switch");
        var siteUrl = "<?php echo $this->options->siteUrl(); ?>";
        
        if (headerNav.css("display") == 'none') {
            headerNav.slideDown();
            mNavSwitch.animate({ opacity: 'toggle' }, 200, null, function() {
                mNavSwitch.attr("src", siteUrl + "/usr/themes/nosky/assets/img/x.svg");
                mNavSwitch.animate({ opacity: 'toggle' }, 200);
            });
        } else {
            headerNav.slideUp();
            mNavSwitch.animate({ opacity: 'toggle' }, 200, null, function() {
                mNavSwitch.attr("src", siteUrl + "/usr/themes/nosky/assets/img/menu.svg");
                mNavSwitch.animate({ opacity: 'toggle' }, 200);
            });
        }
    });
</script>

</body>
</html>
