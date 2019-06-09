<div id="wrapper">
	
	<!-- <div id="header"> -->

		<div id="logo-main">
			<a href="/"><img src="/<?php echo path_to_theme(); ?>/images/logo-dark.svg" alt="UD" /></a>
		</div>


		<div id="header-inner" class="clearfix">
			<div class="menu-toggle icon-list"></div>
			<div id="nav">
				<?php print render($page['nav_main']); ?>
			</div> 
		</div>

	<!-- </div> -->
	
	<?php if ($messages && $is_front): ?>
     <div class="messages-holder">
       <?php echo render($messages); ?>
     </div>
   <?php endif; ?>
	
	

	<div id="main-content">
		
		<div id="main">
			<div id="main-inner">
				<div id="content">
					
					<?php if ($title && !$is_front): ?>
			          <h1 class="title"><?php echo render($title); ?></h1>
			      <?php endif; ?>
					 <?php if ($messages && !$is_front): ?>
			        <div class="messages-holder">
			          <?php echo render($messages); ?>
			        </div>
			      <?php endif; ?>
			      
			      <?php if ($tabs): ?>
			        <div class="tags">
			          <?php echo render($tabs); ?>
			        </div>
			      <?php endif; ?>

			
					<?php echo render($page['content']); ?>
				</div>
			</div>
		</div>
		

	</div>

</div>


<div id="front-devider">
	<h3>Instagram </h3>
<a href="http://instagram.com/_upstairsdownstairs_" class="btn" target="_blank">follow us @_upstairsdownstairs_</a>
	<div class="main">
		<div id="front-instafeed"></div>
	</div>
</div>

<div class="logo-title">
	<img src="/<?php echo path_to_theme(); ?>/images/logo-title.svg" alt="Upstairs Downstairs" />
</div>

<div id="footer">
	<div id="footer-iner">
		<div id="copy">&copy; <?php echo date('Y'); ?> Upstairs Downstairs – Don't steal. It's not nice.</div>
	</div>
</div>

<div id="back-to-top"><div><span class="icon-arrow-up"></span></div></div>

