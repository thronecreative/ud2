<div id="wrapper">
	
	<div id="header">
		<div id="header-inner" class="clearfix">
			<div class="menu-toggle">Menu</div>
			<div id="nav"><?php print render($page['nav_main']); ?></div> 
		</div>
		<div class="bot"></div>
		<div id="ud-sm">
			<div id="u-sm"><a href="/"><img src="/sites/all/themes/bb/images/u_sm.png" alt="u" /></a></div>
			<div id="d-sm"><a href="/"><img src="/sites/all/themes/bb/images/d_sm.png" alt="d" /></a></div>

			<div class="logo">
				<a href="/">Upstairs <span>Downstairs</span></a>
				<div class="slogan">life stripped down</div>
			</div>
		</div>

	</div>
	
	<?php if ($messages && $is_front): ?>
			        <div class="messages-holder">
			          <?php echo render($messages); ?>
			        </div>
			      <?php endif; ?>
	
	<?php if($is_front): ?>
	<div id="u-big"><img src="/sites/all/themes/bb/images/u_big.png" alt="u" /></div>
	<div id="d-big"><img src="/sites/all/themes/bb/images/d_big.png" alt="d" /></div> 

	<div class="logo">
		<a href="/">Upstairs <span>Downstairs</span></a>
		<div class="slogan">life stripped down</div>
	</div>
	<?php endif; ?>
	

	<div id="main-content">
		
		<div id="main">
			<div id="main-inner">
				<div id="content">
					
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
		
		<?php if(!$page['sidebar_first']): ?> 
			<div id="side">
				<div id="side-inner">
					<div id="side-content"><?php echo render($page['sidebar_first']); ?></div>
				</div>
			</div>
		<?php endif; ?>
	</div>

</div>

<div id="footer">
<div id="footer-main" class="clearfix"><?php echo render($page['footer_main']); ?></div>
	<div id="footer-iner">
		<div id="copy">&copy; <?php echo date('Y'); ?> Upstairs Downstairs – Don't steal. It's not nice. Website by <a href="http://b-ed.com" target="_blank">BE Design</a></div>
	</div>
</div>
