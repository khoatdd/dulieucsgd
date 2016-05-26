<?php $ID = $_GET['ID']; $act = $_GET['act']; if ($act == 'update') { $act = 'update&ID='.$ID;}?>
<div class="row">
  <div class="col-md-12 text-center">
      <input type="hidden" value="<?php echo $_GET['trang']; ?>" id="trang">
      <nav>
        <ul class="pagination">
      <?php if ($_GET['trang']!=1): ?>
      <?php $trangtruoc = $_GET['trang'] - 1; ?>
            <li>
            <a href="<?php echo home_url().'/thong-tin-csgd/?act='.$act.'&trang='.$trangtruoc; ?>" aria-label="Trang trước">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
      <?php endif ?>
      <?php if (isset($_GET['trang'])): ?>
          <li id="trang1"><a href="<?php echo home_url().'/thong-tin-csgd/?act='.$act.'&trang=1'; ?>">1</a></li>
      <?php else: ?>
          <li id="trang1" class="active"><a href="<?php echo home_url().'/thong-tin-csgd/?act='.$act.'&trang=1'; ?>">1</a></li>
      <?php endif ?>
          <li id="trang2"><a href="<?php echo home_url().'/thong-tin-csgd/?act='.$act.'&trang=2'; ?>">2</a></li>
          <li id="trang3"><a href="<?php echo home_url().'/thong-tin-csgd/?act='.$act.'&trang=3'; ?>">3</a></li>
          <li id="trang4"><a href="<?php echo home_url().'/thong-tin-csgd/?act='.$act.'&trang=4'; ?>">4</a></li>
          <li id="trang5"><a href="<?php echo home_url().'/thong-tin-csgd/?act='.$act.'&trang=5'; ?>">5</a></li>
          <li id="trang6"><a href="<?php echo home_url().'/thong-tin-csgd/?act='.$act.'&trang=6'; ?>">6</a></li>
          
      <?php if ($_GET['trang']!=6): ?>
      <?php $trangsau = $_GET['trang'] + 1; ?>
          <li>
            <a href="<?php echo home_url().'/thong-tin-csgd/?act='.$act.'&trang='.$trangsau; ?>" aria-label="Trang sau">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
      <?php endif ?>
        </ul>
      </nav>
  </div>
</div>