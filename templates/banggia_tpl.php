<div class="box_container">
  <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Tên</th>
                  <th>Hình ảnh</th>
                  <th>Giá</th>
              </tr>
          </thead>
          <tbody>
            <?php
            $myproduct=get_result("select ten$lang as ten,tenkhongdau,id,
                thumb,photo,type,gia,giakm from #_product where type='san-pham' and hienthi>0 order by stt asc");
             foreach ($myproduct as $key => $value) { 
              $giasp = ($v["giakm"]>0)?$value["giakm"]:$value["gia"];
              $gia = ($giasp>0)?num_format($giasp).'đ':_lienhe;
              $s_gia = "";
              if($value["giakm"]>0) {
                $s_gia .= '<span>'.num_format($value["giakm"]).'đ</span>';
                $s_gia .= '<del>'.num_format($value["gia"]).'đ</del>';
              }else{
                $s_gia .= '<span>'.$gia.'</span>';
              }
              ?>
            <tr>
              <td><a href="<?= get_url($value, "san-pham") ?>"><?= $value["ten"] ?></a></td>
              <td><img src="<?= _upload_sanpham_l.$value["thumb"] ?>" style="width: 70px"
                alt="<?= $value["ten"] ?>"></td>
              <td><?= $s_gia ?></td>
            </tr>
            <?php } ?>
          </tbody>
        <?php /* 
          <tfoot>
                      <tr>
                        <th>Tên</th>
                        <th>Hình ảnh</th>
                        <th>Giá</th>
                      </tr>
                  </tfoot> 
        */?>
      </table>
</div><!---END .box_container-->