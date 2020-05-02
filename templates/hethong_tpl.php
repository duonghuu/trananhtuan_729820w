<div class="box_container">
    <div class="hethong">
        <?php foreach ($tintuc as $key => $value) { ?>
            <div class="hethong-item">
                <div><i class="fas fa-place-of-worship"></i><?= $value["ten"] ?></div>
                <div><i class="fas fa-map-marker-alt"></i><?= $value["chucvu"] ?></div>
                <div><i class="fas fa-phone-alt"></i><?= $value["link"] ?></div>
                <div class="img-responsove">
                    <img src="<?= _upload_tintuc_l.$value["thumb"] ?>" class="w-100 mb-2" alt="<?= $value["ten"] ?>">
                </div>
                <div class="hethong-iframe">
                    <?= $value["mota"] ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="clear"></div>
    <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div><!---END .box_container-->