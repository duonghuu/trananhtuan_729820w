<footer id="footer">
  <div class="ft-top ">
    <div class="container">
      <div class="ft-flex">
        <div class="ft-social">
          <a href="" class="ft-logo"><img src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo"></a>
          <div class="mxhft"><?= lay_mxh("mxhft") ?></div>
        </div>
        <div class="ft-info">
          <p class="ft-tit text-uppercase"><span><?= _thongtinlienhe ?></span></p>
          <?php /* <h4 class="ft-company"><a href=""><?= $company["ten"] ?></a></h4> */?>
          <div class="content"> <?php echo lay_text('footer'); ?> </div>
        </div>
        <div class="ft-baiviet">
          <p class="ft-tit text-uppercase"><span>Về chúng tôi</span></p>
          <?= for1("news","ve-chung-toi","ve-chung-toi",".html") ?>
        </div>
        <div class="ft-video">
          <p class="ft-tit text-uppercase"><span>Video clip</span></p>
          <a data-fancybox="" href="//www.youtube.com/watch?v=<?= getYoutubeIdFromUrl($video[0]["link"]) ?>">
            <img src="images/video.jpg" alt="video"></a>
        </div>
        <?php /* <?php  if($deviceType != "phone"){ ?>
                <div class="ft-fanpage">
                  <p class="ft-tit text-uppercase"><span>Fanpage facebook</span></p>
                  <div class="fanpageplace">
                    <div class="fb-page" data-href="<?=$company['fanpage']?>" data-width="470" data-height="380" 
                      data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" 
                      data-show-posts="false">
                      <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="<?=$company['fanpage']?>">
                          <a href="<?=$company['fanpage']?>">Facebook</a>
                        </blockquote>
                      </div>
                    </div>      <!-- end fb-page  -->
                  </div>
                </div>
                
                <?php } ?> */?>
    </div>
  </div>
</div>
<div class="copyright">
  <div class="container">
    <div class="ft-wrap">
      <p class="text">Copyright © 2020 <?= $company["ten"] ?>. Design by Nina</p>
             <?php /*  
      <ul class="ft-thongke">
        <li>Đang Online: <span><?php $count=count_online();echo $tong_xem=$count['dangxem'];?></span></li>
        <li><?=_thongketuan?>: <span><?=$trongtuan;?></span></li>   
        <li><?=_thongkethang?>: <span><?=$trongthang;?></span></li> 
        <li><?=_tongtruycap?>: <span><?php $count=count_online();echo $tong_xem=$count['daxem'];?></span></li>
      </ul>
        <li><?=_ngayhomqua?>: <span><?=$homqua;?></span></li> 
*/?>
    </div>
  </div>
</div>
</footer>
          <?php /* <div class="codebando"><?= $company["bando"] ?></div>
            include _template."layout/dangkynhantin.php";<img src="http://placehold.it/600x520" 
            alt="" style="   -webkit-clip-path: polygon(25% 0, 75% 0, 100% 50%, 75% 100%, 25% 100%, 0 50%);
            clip-path: polygon(25% 0, 75% 0, 100% 50%, 75% 100%, 25% 100%, 0 50%);   "> 
            https://bennettfeely.com/clippy/ */?>