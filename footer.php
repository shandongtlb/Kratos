<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
    <!--footer-->
		<footer>
			<div id="footer">
				<div class="cd-tool visible-lg text-center">
					<a class="cd-top cd-is-visible cd-fade-out"><span class="fa fa-chevron-up"></span></a>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 footer-list text-center">

							<p><a href="<?php $this->options ->siteUrl(); ?>"><?php $this->options->title();?></a>
							<br>备案号：<a href="https://beian.miit.gov.cn">苏ICP备xxxxxxx号-1</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
</div>

<script src="https://cdn.bootcdn.net/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type='text/javascript' src='<?php $this->options->themeUrl('js/jquery.pjax.min.js'); ?>'></script>
<script type='text/javascript' src='<?php $this->options->themeUrl('js/jquery.waypoints.min.js'); ?>'></script>
<script type='text/javascript' src='<?php $this->options->themeUrl('js/jquery.stellar.min.js'); ?>'></script>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery.hoverintent/1.8.1/jquery.hoverIntent.min.js"></script>
<script type='text/javascript' src='<?php $this->options->themeUrl('js/superfish.min.js'); ?>'></script>
<script type='text/javascript' src='<?php $this->options->themeUrl('js/kratos.js?ver=2.5.2'); ?>'></script>
<script> //开启pjax
    $(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
        container: '#main',
        fragment: '#main',
        timeout: 8000
    }).on('pjax:complete', function() {
        if (typeof Prism !== 'undefined') { //解决代码不高亮
            var pres = document.getElementsByTagName('pre');
            for (var i = 0; i < pres.length; i++){
                if (pres[i].getElementsByTagName('code').length > 0)
                pres[i].className  = 'line-numbers';}
        Prism.highlightAll(true,null);}
    });
</script>
<?php if (!$this->options->sidebarlr == 'single'): ?><script type="text/javascript">

if ($("#main").height() > $("#sidebar").height()) {
	var footerHeight = 0;
	if ($('#page-footer').length > 0) {
		footerHeight = $('#page-footer').outerHeight(true);
	}

	$('#sidebar').affix({
		offset: {
			top: $('#sidebar').offset().top - 30,
			bottom: $('#footer').outerHeight(true) + footerHeight + 6
		}
	});
}
</script>
<?php endif; ?>
</body>
</html>
<?php $this -> footer(); ?>