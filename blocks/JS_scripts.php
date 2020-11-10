<!-- jQery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script>
			$(document).scroll (function() {
					if ($(document).width () > 785) {
					if ($(document).scrollTop ()>$('header').height () + 10)
						$('nav').addClass ('fixed');
					else
						$('nav').removeClass ('fixed');
				}
			});
		</script>