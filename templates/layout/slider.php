      <?php 
      if($source != "index1"){
        $myt = ($deviceType!="phone") ? 'slider' : 'slidermb';
        $slider = get_result("select ten$lang as ten,mota$lang as mota,photo,thumb from #_slider 
          where hienthi=1 and type='".$myt."' order by stt");
         ?>
         <div id="slideshow">
           <div class="slideshow-slider-main">
             <?php 
             foreach ($slider as $key => $v) {
              ?>
              <div class="slideshow-slider-item ">
               <section>
                <a href="<?= $v["link"] ?>" class="slider-link <?= $deviceType ?>" 
                  style="<?= ($deviceType=="phone")? 'background-image: url('._upload_hinhanh_l.$v["thumb"].')' :'' ?>" >
<?php if($deviceType!="phone"){ ?>
                  <picture>
                  <source media="(min-width: 1024px)" srcset="<?= _upload_hinhanh_l.$v["thumb"] ?>" />
                    <source media="(min-width: 550px)" srcset="thumb/768x382/1/<?= _upload_hinhanh_l.$v["thumb"] ?>" />
                      <img src="thumb/425x212/1/<?= _upload_hinhanh_l.$v["thumb"] ?>" 
                      alt="<?= $v["ten"] ?>" /> 
                  
                    </picture>
                  <?php } ?>
                  </a>
                    <div class="slider-text-bg">
                      <div class="slider-text">
                        <div class="slider-text__ten"><?= $v["ten"] ?></div>
                        <div class="slider-text__welcome <?= $deviceType ?>">
                          <img src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo">
                        </div>
                        <div class="slider-text__mota"><?= $v["mota"] ?></div>
                      </div>
                    </div>
                  </section>
                </div>
              <?php } ?>
            </div>
          </div>
          <?php }else{ 
  // $bntype = $type;
  // if($type=="about") $bntype = 'gioi-thieu';
  // if($type=="thong-tin") $bntype = 'tin-tuc';
  // $bntrong=get_fetch("select ten$lang as ten,tenkhongdau,photo,thumb from #_news where type='bntrong' and ten='".$bntype."'");
  // <div class="inner-banner" style="background-image: url(images/banner.jpg)">
  // </div>
          }
          ?>
