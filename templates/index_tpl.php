<div class="tin-video">
  <div class="container">
    <div class="tin-video-flex">
      <div class="video-bg">
        <div class="title">Video clip</div>
        <div id="video-idx"></div>
        <select class="form-control" id="lstvideo" name="lstvideo">
          <option value="">Video ...</option>
          <?php foreach($video as $v) { ?>
          <option value="<?= getYoutubeIdFromUrl($v["link"]) ?>"><?= $v["ten"] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="tin-bg">
        <div class="title">Tin tức nổi bật</div>
        <div class="tinnb-main">
          <?php foreach ($tinnb as $key => $value) { 
$img = _upload_tintuc_l.$value["thumb"];
            ?>
            <div class="tinnb-item"><a href="<?= get_url($value,"tin-tuc") ?>">
                <figure><img src="images/1x1.png" data-lazy="<?= $img ?>" alt="<?= $value["ten"] ?>"></figure>
                <div class="info">
                  <h5><?= $value["ten"] ?></h5>
                  <div class="date"><span><?= date('d/m/Y',$value["ngaytao"]) ?></span></div>
                  <p><?= catchuoi($value["mota"],200) ?></p>
                </div>
              </a></div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="themanh">
  <div class="container">
    <div class="themanh-main">
      <?php foreach ($themanh as $key => $value) { ?>
        
      
      <div class="themanh-item">
        <article>
          <figure><img src="<?= _upload_tintuc_l.$value["thumb"] ?>" alt="<?= $value["ten"] ?>"></figure>
          <div class="info">
            <p><strong><?= $value["ten"] ?></strong></p>
            <p><?= $value["mota"] ?></p>
          </div>
        </article>
      </div>
      <?php } ?>
    </div>
  </div>
</div>