<?php get_template_part('includes/newsLetter','section')?>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-3">
        <a href="mailto:info@1pass.app">Email us:info@1pass.app</a>
      </div>
      <div class="col-12 col-lg-6">
        <div class="row">
          <!-- vat_certificate -->
          <div class="col-6 col-lg-3">
            <a href="<?php echo get_template_directory_uri().'/assets/img/vat_certificate.pdf'?>">VAT Certificate</a>
          </div>
          <div class="col-6 col-lg-3">
            <a href="https://www.1pass.app/faqs">FAQ</a>
          </div>
          <div class="col-6 col-lg-3">
            <a href="https://www.1pass.app/blog">blog</a>

          </div>
          <div class="col-6 col-lg-3">
            <a href="https://www.1pass.app/companies">companies</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3">
        <ul>
          <li>
            <a href="https://www.linkedin.com/company/getmuv/">
              <img src="<?php echo get_template_directory_uri().'/assets/img/linkedin.svg'?>" alt="logo" />
            </a>
          </li>
          <li>
            <a href="https://twitter.com/1Pass">
              <img src="<?php echo get_template_directory_uri().'/assets/img/twitteer.svg'?>" alt="logo" />
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/1pass.app/">
              <img src="<?php echo get_template_directory_uri().'/assets/img/instagram.svg'?>" alt="logo" />
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer();?>
</body>

</html>