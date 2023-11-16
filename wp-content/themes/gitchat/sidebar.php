<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>
              <?php echo of_get_option('xbuser_name') . "," .  of_get_option('xbuser_email') . "," .  of_get_option('xbuser_url');?>
            </p>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
             <?php wp_get_archives("monthly")?>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->