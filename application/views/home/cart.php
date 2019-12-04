<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">

              <table class="table table-bordered">

                <thead>
                  <tr>
                    <th class="product-thumbnail">Nomor</th>
                    <th class="product-name">Makanan</th>
                    <th class="product-price">Harga Satuan</th>
                    <th class="product-quantity">Jumlah Pesanan</th>
                    <th class="product-total">Sub-Total</th>
                    <th class="product-remove">Hapus</th>
                  </tr>
                </thead>



                <tbody>



                  <?php 
                  $no=1;
                  foreach ($this->cart->contents() as $items) :?>

                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><h5><?php echo $items['name'] ?></h5></td>
                      <td align="right" > Rp. <?php echo number_format($items['price'], 0,',','.' ) ?></td>
                      <td><?php echo $items['qty'] ?></td>
                      <td align="right" > Rp. <?php echo number_format($items['subtotal'], 0,',','.' ); ?> </td>
                      <td><?php $id = $items['rowid']; ?><a href="<?php echo base_url("cart/hapus_keranjang/$id") ?>" class="btn btn-primary btn-xs">X</a></td>
                    </tr>

                  
                  <?php endforeach; ?>  
 

                </tbody>


              </table>



            </div>


          </form>


        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              
              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-sm btn-block" onclick="window.location='<?php base_url();?>shop'">Continue Shopping</button>
              </div>
            </div>
    
          </div>

          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Total Belanja</h3>
                  </div>
                </div>
             
                
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Sub-Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">Rp. <?php echo number_format($this->cart->total(), 0,',','.' ) ?></strong>
                  </div>
                </div>




                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">Rp. <?php echo number_format($this->cart->total(), 0,',','.' ) ?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='<?php base_url();?>checkout'">Proceed To Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>