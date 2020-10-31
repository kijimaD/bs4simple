<?php
/**
 * DokuWiki Template with Bootstrap4
 *
 * @link     http://dokuwiki.org/template
 * @author   Kijima Daigo <norimaking777@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

$hasSidebar = page_findnearest($conf['sidebar']);
$showSidebar = $hasSidebar && ($ACT=='show');
?>

<!DOCTYPE html>
<html lang="<?php echo $conf['lang'] ?>" dir="<?php echo $lang['direction'] ?>" class="no-js">
    <head>
	<meta charset="utf-8" />
	<title><?php tpl_pagetitle() ?> [<?php echo strip_tags($conf['title']) ?>]</title>
	<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<?php tpl_metaheaders() ?>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<?php echo tpl_favicon(array('favicon', 'mobile')) ?>
	<?php tpl_includeFile('meta.html') ?>
    </head>

    <body>
	<?php if($ID == 'start'): ?>
	    <div id="dokuwiki__site"><div id="dokuwiki__top" class="site <?php echo tpl_classes(); ?> <?php
												      echo ($showSidebar) ? 'showSidebar' : ''; ?> <?php echo ($hasSidebar) ? 'hasSidebar' : ''; ?>">
	<?php else: ?>
		<div id="dokuwiki__site"><div id="dokuwiki__top" class="site <?php echo tpl_classes(); ?>">
	<?php endif; ?><!-- /start -->

        <?php include('tpl_header.php') ?>
	<div class="wrapper group">
	    <div class="container">
		<div class="row">
		    <div class="col-12 px-4 mt-4">

			<?php if($ID == 'start'): ?>
			    <?php if($showSidebar): ?>
				<!-- ********** ASIDE ********** -->
				<div id="dokuwiki__aside"><div class="pad aside include group shadow p-4">
				    <h3 class="toggle"><?php echo $lang['sidebar'] ?></h3>
				    <div class="content"><div class="group">
					<?php tpl_flush() ?>
					<?php tpl_includeFile('sidebarheader.html') ?>
					<?php tpl_include_page($conf['sidebar'], true, true) ?>
					<?php tpl_includeFile('sidebarfooter.html') ?>
				    </div></div>
				</div></div><!-- /aside -->
			    <?php endif; ?>
			<?php endif; ?><!-- /start -->


			<!-- ********** CONTENT ********** -->

			<div id="dokuwiki__content"><div class="pad group">
			    <?php html_msgarea() ?>

			    <div class="page group p-0">
				<?php tpl_flush() ?>
				<?php tpl_includeFile('pageheader.html') ?>
				<!-- wikipage start -->
				<?php
				tpl_content();
				?>
				<!-- wikipage stop -->
				<?php tpl_includeFile('pagefooter.html') ?>

				<small><div class="docInfo text-right text-secondary"><?php tpl_pageinfo() ?></div></small>
			    </div>

			    <?php tpl_flush() ?>
			</div></div>
		    </div>
		    <!-- /content -->

		    <!-- PAGE ACTIONS -->
		    <div id="dokuwiki__pagetools">
			<h3 class="a11y"><?php echo $lang['page_tools']; ?></h3>
			<div class="tools">
			    <ul>
				<?php echo (new \dokuwiki\Menu\PageMenu())->getListItems(); ?>
			    </ul>
			</div>
		    </div>
		</div><!-- row -->
	    </div><!-- container -->
	</div><!-- wrapper -->
	<?php include('tpl_footer.php') ?>
		</div></div><!-- /site -->

		<div class="no"><?php tpl_indexerWebBug() /* provide DokuWiki housekeeping, required in all templates */ ?></div>
		<div id="screen__mode" class="no"></div><?php /* helper to detect CSS media query in script.js */ ?>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
