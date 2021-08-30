</main>
    <footer class="footer" id="contacts">
      <?
      $APPLICATION->IncludeFile(
        SITE_DIR."include/questions_about.php",
        Array(),
        Array("MODE"=>"html")
      );
      ?>

      <?
      $APPLICATION->IncludeFile(
        SITE_DIR."include/phone_email.php",
        Array(),
        Array("MODE"=>"html")
      );
      ?> 

      <?
      $APPLICATION->IncludeFile(
        SITE_DIR."include/copyright.php",
        Array(),
        Array("MODE"=>"html")
      );
      ?>
    </footer>
    <div class="modal" id="modal__access">
      <div class="modal__body __alert __alert-access">
        <div class="modal__content modal-alert __access"><a class="modal__close __alert close__modal" href="#" role="button"> <span></span><span></span></a>
                    <picture class="modal-alert__picture" itemscope itemtype="http://schema.org/ImageObject">
                      <source srcset="<?=SITE_TEMPLATE_PATH?>/img/icons/icon-access.svg" itemprop="contentUrl"><img class="img--full img--center modal-alert__image  " src="<?=SITE_TEMPLATE_PATH?>/img/icons/icon-access.svg" alt="Ваша заявка принята" title="Ваша заявка принята" draggable="false" loading="lazy" itemprop="contentUrl">
                    </picture>
          <article class="modal-alert__text">
            <h5 class="modal-alert__title">Ваша заявка принята</h5>
            <p>На указанный номер отправлено SMS с кодом активации</p>
          </article>
        </div>
      </div>
    </div>
    <div class="modal" id="modal__denied">
      <div class="modal__body __alert __alert-denied">
        <div class="modal__content modal-alert __denied"><a class="modal__close __alert close__modal" href="#" role="button"> <span></span><span></span></a>
                    <picture class="modal-alert__picture" itemscope itemtype="http://schema.org/ImageObject">
                      <source srcset="<?=SITE_TEMPLATE_PATH?>/img/icons/icon-denied.svg" itemprop="contentUrl"><img class="img--full img--center modal-alert__image  " src="<?=SITE_TEMPLATE_PATH?>/img/icons/icon-denied.svg" alt="Ваша заявка отклонена" title="Ваша заявка отклонена" draggable="false" loading="lazy" itemprop="contentUrl">
                    </picture>
          <article class="modal-alert__text">
            <h5 class="modal-alert__title">Ваша заявка отклонена</h5>
            <p>Проверьте правильно ли вы ввели код указанный на упаковке </p>
          </article>
        </div>
      </div>
    </div>
  <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/jquery-3.6.0.min.js", true);?>
  <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/intlTelInput-jquery.min.js", true);?>
  <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/jquery.maskedinput.min.js", true);?>
  <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/main.min.js", true);?>

  <? if(!$GLOBALS["USER"]->IsAdmin() ):?>
      <script>
          window.addEventListener( 'load', function( event ) {

              window.vendorLoader && window.vendorLoader({
                  name: 'metrics',
                  path: 'none',
                  event: {
                      scroll: true,
                      click: true,
                      timeout: true,
                      mouseover: 'body',
                  },
                  timeout: 6000,
                  callback: function() {

                      $.ajax({
                          url: '/include/script.php',
                          success: function (countersHTML) {
                              $( "body" ).append( countersHTML );
                          },
                          error: function (e, t) {
                              console.log("error", e, t)
                          }
                      })
                  }
              });
          });
      </script>
  <?endif;?>
  </body>
</html>