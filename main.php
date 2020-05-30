<?php
/**
 * DokuWiki Default Template 2012
 *
 * @link     http://dokuwiki.org/template
 * @author   Anika Henke <anika@selfthinker.org>
 * @author   Clarence Lee <clarencedglee@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

if (!defined('DOKU_INC')) die(); /* must be run from within DokuWiki */
header('X-UA-Compatible: IE=edge,chrome=1');

$hasSidebar = page_findnearest($conf['sidebar']);
$showSidebar = $hasSidebar && ($ACT=='show');
?><!DOCTYPE html>
<html lang="<?php echo $conf['lang'] ?>" dir="<?php echo $lang['direction'] ?>" class="no-js">
    <head>
	<meta charset="utf-8" />
	<title><?php tpl_pagetitle() ?> [<?php echo strip_tags($conf['title']) ?>]</title>
	<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
	<?php tpl_metaheaders() ?>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<?php echo tpl_favicon(array('favicon', 'mobile')) ?>
	<?php tpl_includeFile('meta.html') ?>
    </head>

    <body>
	<div id="dokuwiki__site"><div id="dokuwiki__top" class="site <?php echo tpl_classes(); ?> <?php
												  echo ($showSidebar) ? 'showSidebar' : ''; ?> <?php echo ($hasSidebar) ? 'hasSidebar' : ''; ?>">

            <?php include('tpl_header.php') ?>
	    <div class="wrapper group">
		<div class="container">
		    <div class="row">

			     <!-- ********** CONTENT ********** -->
			<div class="col-12 px-4 mt-4 border-left border-dark">
			    <div id="dokuwiki__content"><div class="pad group">
				<?php html_msgarea() ?>

				<div class="page group p-0">
				    <?php tpl_flush() ?>
				    <?php tpl_includeFile('pageheader.html') ?>
				    <!-- wikipage start -->
				    <?php tpl_content(false) ?>
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

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
