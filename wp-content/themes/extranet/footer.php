<footer class="site-footer">
<div class="container">
                <div class="copyright">
                    <p>Copyright X - Todos os direitos reservados</p>
                </div>
                <nav class="footer-menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'extranet_footer_menu' , 'depth' => 1 )); ?>
                </nav>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>