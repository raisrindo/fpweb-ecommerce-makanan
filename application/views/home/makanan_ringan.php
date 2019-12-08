<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="<?php base_url();?>home">Home</a><span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
                
              </div>
            </div>
            <div class="row mb-5">

              <!-- ini kode untuk makanan-makanan : -->



              <!-- barang : -->
              <div class="row text-center mt-4">
                <?php foreach ($makanan_ringan as $brg) : ?>

                  <div class="card ml-3 mb-3" style="width: 17rem;">
                    <img src="<?php echo base_url().'/uploads/'.$brg->gambar?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
                      <small><?php echo $brg->kategori ?></small> <br>
                      <span class="badge badge-success mb-3">Rp. <?php echo number_format($brg->harga, 0,',','.' ) ?></span> <br>
                      
                      <?php  echo anchor('shop/tambah_ke_keranjang/'.$brg->id_brg, '<div class="btn btn-sm btn-primary mb-3" >Tambah ke Keranjang</div>')   ?>


                       <?php  echo anchor('shop/detail/'.$brg->id_brg, '<div class="btn btn-xs btn-success" >Detail</div>')   ?>
                     
                    </div>
                  </div>

                <?php endforeach; ?>
              </div>

              





            </div>
          </div>


          <!-- kode html untuk kategori dibawah :-->

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>

               <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="<?php echo base_url('kategori/makanan_berkuah') ?>" class="d-flex"><span>Makanan Berkuah</span> <span class="text-black ml-auto">(4)</span></a></li>
                <li class="mb-1"><a href="<?php echo base_url('kategori/makanan_tberkuah') ?>" class="d-flex"><span>Makanan Tidak Berkuah</span> <span class="text-black ml-auto">(4)</span></a></li>
                <li class="mb-1"><a href="<?php echo base_url('kategori/makanan_ringan') ?>" class="d-flex"><span>Makanan Ringan</span> <span class="text-black ml-auto">(4)</span></a></li>
              </ul>
            </div>
  

          </div>
        </div>

        
        
      </div>
    </div>