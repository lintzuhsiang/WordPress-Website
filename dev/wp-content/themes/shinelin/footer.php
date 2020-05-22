<footer>
            <div id="left-footer">
                <h3>Quick Links</h3>
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
    <script src="main.js"></script>
    <?php wp_footer(  );?>
</body>
</html>