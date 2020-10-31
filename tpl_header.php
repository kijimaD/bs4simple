<?php
/**
 * Template header, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** HEADER ********** -->
<?php tpl_includeFile('header.html') ?>

<!-- Navigation bar -->
<nav class="navbar navbar-expand-md">

    <!-- Sub component -->
    <div class="container p-0">
	<a class="navbar-brand text-dark" style="font-weight:900;" href="<?php  echo wl() ?>">
	    <h3>
		<?php echo $conf['title']; ?>
	    </h3>
	</a>

	<!-- Tagline -->
	<?php if ($conf['tagline']): ?>
	    <p class="claim"><?php echo $conf['tagline']; ?></p>
	<?php endif ?>

	<!-- Hamburgar button -->
	<button class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i>
	    </span>
	</button>

	<!-- Navigation -->
	<div class="collapse navbar-collapse" id="navbar-content">

	    <ul class="navbar-nav mr-auto">

	    </ul>

	    <!-- Topmenu -->
	    <ul class="navbar-nav pt-3">
		<!-- User tools -->

		<!-- Page menu -->

		<!-- <li class="nav-item mx-2 dropdown d-lg-none">
		     <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Page</a>
		     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		     <?php
		     $items = (new \dokuwiki\Menu\PageMenu())->getItems();
		     foreach($items as $item) {
		     echo '<li><a class="nav-item mx-2" href="'.$item->getLink().'" title="'.$item->getTitle().'">'
		     . $item->getLabel()
		     . '</a></li>';
		     }
		     ?>
		     </ul>
		     </li> -->

		<!-- Mobile tool -->
		<li class="nav-item mx-2 dropdown">
		    <a href="#" class="nav-link dropdown-toggle text-secondary" id="mldropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			<?php if ($conf['useacl']):
			if (!empty($_SERVER['REMOTE_USER'])) {
			    echo $_SERVER['REMOTE_USER'];
			}else{
			    echo 'N/A';
			}
			endif
			?>
		    </a>
		    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			<?php
			$items = (new \dokuwiki\Menu\MobileMenu())->getItems();
			foreach($items as $item) {
			    echo '<li><a class="nav-item mx-2" href="'.$item->getLink().'" title="'.$item->getTitle().'">'
			       . $item->getLabel()
			       . '</a></li>';
			}
			?>
		    </ul>
		</li>

		<!-- Search bar -->
		<li class="nav-item ml-0">
		    <?php /*tpl_searchform();*/ ?>
		    <form action="/doku.php?id=start" method="get" role="search" class="search doku_form form-group form-inline" id="dw__search" accept-charset="utf-8"><input type="hidden" name="do" value="search" />
			<input type="hidden" name="id" value="start" />
			<div class="no">
			    <input name="q" class="edit border-secondary text-secondary form-control" type="text" title="[F]" accesskey="f" placeholder="" autocomplete="on" id="qsearch__in" value="" />
			    <button value="1" type="submit" title="検索" class="border-secondary btn-outline-secondary form-control"><i class="fas fa-search"></i></button>
			</div>
		    </form>
		</li>

		<!-- BREADCRUMBS -->
		<?php if($conf['breadcrumbs'] || $conf['youarehere']): ?>
		    <!-- <div class="breadcrumbs">
			 <?php if($conf['youarehere']): ?>
			 <div class="youarehere"><?php tpl_youarehere() ?></div>
			 <?php endif ?>
			 <?php if($conf['breadcrumbs']): ?>
			 <div class="trace"><?php tpl_breadcrumbs() ?></div>
			 <?php endif ?>
			 </div> -->
		<?php endif ?>

		<hr class="a11y" />
	    </ul>
	</div>
	<!-- /start -->
</nav>
<!-- /header -->
