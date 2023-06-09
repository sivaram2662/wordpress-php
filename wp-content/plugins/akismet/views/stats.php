<div id="akismet-plugin-container">
	<div class="akismet-masthead">
		<div class="akismet-masthead__inside-container">
			<a href="<?php echo esc_url( Akismet_Admin::get_page_url() ); ?>" class="akismet-right"><?php esc_html_e( 'Anti-Spam Settings', 'akismet' ); ?></a>
			<div class="akismet-masthead__logo-container">
				<img class="akismet-masthead__logo" src="<?php echo esc_url( plugins_url( '../_inc/img/logo-full-2x.png', __FILE__ ) ); ?>" alt="Akismet" />
			</div>
		</div>
	</div>
	<iframe src="<?php echo esc_url( sprintf( 'https://tools.akismet.com/1.0/user-stats.php?blog=%s&token=%s&locale=%s', urlencode( get_option( 'home' ) ), urlencode( Akismet::get_access_token() ), esc_attr( get_locale() ) ) ); ?>" width="100%" height="2500px" frameborder="0"></iframe>
</div>
