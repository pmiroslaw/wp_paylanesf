<?php
$options = get_option('paylane_sf_settings');
$kwota = isset($options['kwoty']) ? esc_attr( $options['kwoty'] ) : ''; 
$mid = isset($options['mid']) ? esc_attr( $options['mid'] ) : ''; 
$salt = isset($options['salt']) ? esc_attr( $options['salt'] ) : ''; 
$url = isset($options['url']) ? esc_attr( $options['url'] ) : ''; 
$submit = isset($options['submit']) ? esc_attr( $options['submit'] ) : ''; 
?>

<div class="wrap">
    <h2 class="psf-title"><?php echo get_admin_page_title(); ?></h2>

    <?php if (!empty($_POST)) { ?>
        <div class="psf-settings-error bg-success" id="psf-setting-error-settings_updated"> 
            <p><strong><?php _e('Ustawienia zapisane.', $this->plugin_slug); ?></strong></p>
        </div>
    <?php } ?>
                                  
    <div class="psf-wrapper container-fluid">
    <div class="row">
        <div class="col-md-12">
        <h3>Miejsce na podanie ustawień.
        Aby podać kwoty, wpisz kwoty z kropką, oddzielone <kbd>;</kbd>, np.: <kbd>5.00;20.00;100.00;1000.00</kbd></br></br>
        MerchantID wpisz w polu <kbd>Merchant ID</kbd></br></br>
        Salt wpisz w polu <kbd>Salt</kbd></br></br>
        
        Jeśli po udanej płatności ma pojawić się strona z podziękowaniem, podaj jej PEŁNY adres
        </h5>
        </div>
    </div>
    <div class="row">
        <form class="form-horizontal" method="post">
        <div class="form-group">
    <label for="input-kwoty" class="col-sm-2 control-label">Kwoty</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="input-kwoty" placeholder="Kwoty" value="<?= $kwota; ?>" name="options[kwoty]">
    </div>
  </div>
  <div class="form-group">
    <label for="input-mid" class="col-sm-2 control-label">Merchant ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="input-mid" placeholder="Merchant ID" value="<?= $mid;?>" name="options[mid]">
    </div>
  </div>
  <div class="form-group">
    <label for="input-salt" class="col-sm-2 control-label">SALT</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="input-salt" placeholder="SALT" value="<?= $salt;?>" name="options[salt]">
    </div>
  </div>
  <div class="form-group">
    <label for="input-url" class="col-sm-2 control-label">Strona z podziękowaniem</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="input-url" placeholder="" value="<?= $url;?>" name="options[url]">
    </div>
  </div>
  
  <div class="form-group">
    <label for="input-submit" class="col-sm-2 control-label">Tekst na przycisku</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="input-submit" placeholder="Wspieram" value="<?= $submit;?>" name="options[submit]">
    </div>
  </div>
  <?php wp_nonce_field('paylane-sf-options'); ?>
  <input type="submit" value="<?php _e('Zapisz', $this->plugin_slug); ?>" class="button button-primary" name="Zapisz" />
                        
        </form>
    </div>
    </div>
</div>
