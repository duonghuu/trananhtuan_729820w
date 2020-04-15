<header class="hd-bg">
  <div class="hd-top">
    <div class="container">
      <div class="hd-top-flex">
        <p><?= $company["slogan"] ?></p>
        <p><i class="fas fa-marker-alt"></i><?= $company["diachi"] ?></p>
        <p><i class="fas fa-phone-alt"></i><a href="tel:<?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>">
          <?= $company['dienthoai'] ?></a></p>
          <div class="mxh"><?= lay_mxh("mxh") ?></div>
      </div>
    </div>
  </div>
  <div class="hd-bot">
    <div class="container">
      <div class="hd-bot-flex">
        <a href="" class="logo" ><img src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo"></a>
        <a href="" class="hd-name"><?= $company["ten"] ?></a>
        <?php include _template."layout/menu_top.php"; ?>
      </div>
    </div>
  </div>
</header>