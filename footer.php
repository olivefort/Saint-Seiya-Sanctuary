    <footer class="footer">
        <?php wp_footer(); ?>
        <nav class="footer-nav">
            <p class="cop"> @copyright d3LTa7 2021</p>
            <?php
            wp_nav_menu(
					[
						'theme_location'=>"menu-du-footer",
						// 'container'=>'nav',
						// 'container_id'=>'navigation',
						// 'menu_class'=>"main-menu",
                    ]
				);
                ?>
        </nav>
    </footer>    
</body>
</html>
