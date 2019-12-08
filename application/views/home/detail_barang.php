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



            <div class="card">
    <h5 class="card-header">Detail Produk</h5>
    <div class="card-body">


    
      <?php foreach($barang as $brg): ?>
      <div class="row">
        <div class="col-md-4">
          <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top"  >

        </div>

        <div class="col-md-8">
          <table class="table">
            <tr>
              <td>Nama Makanan</td>
              <td><strong><?php echo $brg->nama_brg ?></strong></td>
            </tr>
            <tr>
              <td>Keterangan</td>
              <td><strong><?php echo $brg->keterangan ?></strong></td>
            </tr>
            <tr>
              <td>Kategori</td>
              <td><strong><?php echo $brg->kategori ?></strong></td>
            </tr>
            <tr>
              <td>Stok</td>
              <td><strong><?php echo $brg->stok ?></strong></td>
            </tr>
            <tr>
              <td>Harga Produk</td>
              <td> <strong> <div class="btn btn-success">Rp. <?php echo number_format($brg->harga, 0, ',', '.' ) ?></div> </strong></td>
            </tr>
            
          </table>

          <?php  echo anchor('shop/tambah_ke_keranjang/'.$brg->id_brg, '<div class="btn btn-sm btn-primary" > Tambah ke Keranjang</div>')   ?>

          <?php  echo anchor('shop', '<div class="btn btn-sm btn-danger" > Kembali </div>')   ?>




        </div>
      </div>

    <?php endforeach; ?>


    </div>
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
    </div>