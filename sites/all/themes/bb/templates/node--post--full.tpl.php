<div class="post-full post">
	<div class="header">
		<h1><?php print $node_title; ?></h1>
		<div class="post-date-comments comments_btn"><?php print $created; ?> <span class="bull">&bull;</span> <a href="#comments">Comments <?php echo $comment_count; ?></a></div>
		<div class="summary"><?php print $summary; ?></div>
	</div>
	<div class="body"><?php print $body; ?>
	
			
	</div>
	<?php if(isset($credits)): ?>
			<div class="credits">
				<h2>Credits:</h2>
				<?php print $credits; ?>
			</div>
			<?php endif; ?>
	<div class="footer">
		<div class="tags">
			<?php if(isset($tags)): ?>
			<h3>Tags:</h3> <?php echo $section; ?>
			<?php echo $tags; ?><?php endif; ?>
		</div>
		<div class="share">
			<h3>Share</h3>
			<?php echo $service_links; ?>
		</div>
	</div>

</div>

<div id="comments" class="comments-header clearfix">
	<h2>Comments</h2>
	<div class="add-comment-btn">+ Add a Comment</div>
</div>