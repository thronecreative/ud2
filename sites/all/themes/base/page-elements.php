

<script type="text/javascript">
    
	jQuery( document ).ready(function() {
	   var front_feed = new Instafeed({
	   	  accessToken: '439464896.467ede5.ec3cad453bb14c139d3addf0fca15e22',
	        get: 'user',
	        target: 'front-instafeed',
	        userId: 439464896,
	        limit: '3',
	        resolution: 'standard_resolution',
	        clientId: '84b8e0f7d72a430c948d42c3a84c3e36'
	    });
	    front_feed.run();
	});
    
</script>


<div id="front-devider">
	<h3>Instagram: <a href="http://instagram.com/udxola">@udxola</a></h3>
	<div class="main">
		<div id="front-instafeed"></div>
	</div>
</div>



<script type="text/javascript">
    
	jQuery( document ).ready(function() {
	   var footer_feed = new Instafeed({
	   	  accessToken: '439464896.467ede5.ec3cad453bb14c139d3addf0fca15e22',
	        get: 'user',
	        userId: 439464896,
	        target: 'footer-instafeed',
	        limit: '1',
	        resolution: 'standard_resolution',
	        clientId: '84b8e0f7d72a430c948d42c3a84c3e36'
	    });
	    footer_feed.run();
	});
    
</script>
<div id="footer-instafeed"></div>



<div id="about-page">
	<div id="about-slide">
		<div class="inner">
			<div class="content">
				<span class="divider"></span>
				<h2>A bit about UD...</h2>
				<p>Upstairs Downstairs is here to celebrate what being a woman is all about. What better way than lingerie? So much more than just what you put on underneath your clothes, it's a love for the experience of being a woman.</p>
				<p>Be confident, embrace your femininity, and celebrate your body, it's an intimate relationship with the most important person: yourself.</p>
				<span class="btn">&darr;</span>
				
			</div>
		</div>
	</div>
	<div id="megan-slide">
		<div class="inner">
			<div class="image"><img src="/<?php print path_to_theme(); ?>/images/UDXO-Megan-1.jpg" alt="Megan Luke Edwards"></div>
			<div class="content">
				<h2>A bit about me...</h2>
				<h3>Why upstairs downstairs?</h3>
				<p>I've always had a fantasy of being a lingerie designer. From the time I realized that my undergarment game did not have to be ruled by mass produced padded bras… a whole world of femininity opened up for me. During the day (well, and night and weekends too) I'm a photography agent representing the most amazing artists at Copious Management—my absolute dream job! This leaves no time to start/run a lingerie brand, so this blog is my creative outlet to inspire women and interact with the lingerie community worldwide!</p>

				<h3>Why lingerie?</h3>
				<p>Recently I was challenged on this question. I believe that lingerie can be a power suit for women. You don't have to buy it for another person's pleasure, you can buy it for you. It doesn't have to be the stereotypical lace, garter, underwire situation... don't underestimate the sexy coziness of a good brief and soft bralette. Lingerie is such a fun way to experience the love of being a woman!</p>

				<h3>Why los angeles?</h3>
				<p>I've always dreamed of being in the photography world. After touring as a professional dancer in <a href="http://lordofthedance.com">Lord of the Dance</a>, I decided it was time to make the change. In terms of industry, it was either New York or LA. Growing up in Nebraska and in Florida, both choices seemed grand. However, there was a really cute boy I met on tour that resided in LA, so LA it was. (That cute boy is now my husband who designed my site and owns the creative agency <a href="http://aimhighagency.com" target="_blank">Aim High Creative.</a>)</p>

				<h3>Fantasy dinner party guests?</h3>
				<p>Ron Burgundy, Marc Maron, and Cleopatra.</p>
			</div>
		</div>
	</div>
	<div id="quote-slide">
		<div class="inner">
			<div class="content">
				<div class="quote">I am mine. Before I am anyone elses.</div>
				<div class="author">Nayyirah Waheed</div>
			</div>
		</div>
	</div>
	<div id="contact-slide">
		<div class="inner">
			<h2>Get in touch</h2>
			<div class="email"><a href="mailto:hello@upstairsdownstairs.com">hello@upstairsdownstairs.com</a></div>
		</div>
	</div>
</div>







