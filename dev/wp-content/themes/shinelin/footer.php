<footer>
            <div id="left-footer">
                <h2>Quick Links</h2>
                <ul>
                <li>
                <a href="<?php echo site_url('');?>">Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('/blog');?>">Blogs</a>
            </li>
            <li>
                <a href="<?php echo site_url('/projects');?>">Projects</a>

            </li>
            <li>
                <a href="<?php echo site_url('/about');?>">About</a>
            </li>
            <li>
                <a href="<?php echo site_url('/contact');?>">Contact</a>
            </li>
                </ul>
            </div>
            <div id="right-footer">
                <div id="media-footer">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

    </main>
    <?php wp_footer(  );?>
    <script src="js/main.js"></script>

</body>
</html>