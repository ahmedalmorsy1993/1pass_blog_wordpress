<div class="news-letter">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-10 mx-auto">
        <div class="wrapper">

          <div class="row">
            <div class="col-12 col-lg-8 mx-auto ">
              <div class="row">
                <div class="col-12 text-center">
                  <img width="128" height="128"
                    src="<?php echo get_template_directory_uri().'/assets/img/envelope-circle.svg'?>" alt="logo" />
                  <h2 class="mt-2">

                    <?php pll_e('monthly_wellnes_newsletter'); ?>
                  </h2>
                </div>
                <div class="col-12 col-lg-10 mx-auto mt-2">
                  <form role="search">
                    <label for="email"> <?php pll_e('email'); ?></label>
                    <div class="d-flex align-items-center gap-2">
                      <input id="email" class="form-control me-2" type="email" placeholder="Ex: george@email.com"
                        aria-label="">
                      <button type="button">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M5.93974 13.779C5.81307 13.779 5.68641 13.7324 5.58641 13.6324C5.39307 13.439 5.39307 13.119 5.58641 12.9257L9.93307 8.57904C10.2531 8.25904 10.2531 7.73904 9.93307 7.41904L5.58641 3.07237C5.39307 2.87904 5.39307 2.55904 5.58641 2.3657C5.77974 2.17237 6.09974 2.17237 6.29307 2.3657L10.6397 6.71237C10.9797 7.05237 11.1731 7.51237 11.1731 7.99904C11.1731 8.4857 10.9864 8.9457 10.6397 9.2857L6.29307 13.6324C6.19307 13.7257 6.06641 13.779 5.93974 13.779Z" />
                        </svg>

                      </button>
                    </div>
                  </form>

                  <p class="text-center"> <?php pll_e('No_charge_no_spam_you_can_unsubscribe_anytime'); ?></p>
                </div>
              </div>


            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>