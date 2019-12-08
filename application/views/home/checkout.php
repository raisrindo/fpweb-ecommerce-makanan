<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a href="<?php base_url();?>cart"cart.html">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">




        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Billing Details</h2>
            <div class="p-3 p-lg-5 border">

               
                  <?php 
                  $grand_total = 0;
                  if ($keranjang = $this->cart->contents()){
                 
                  ?>

                <form method="post" action=" <?php echo base_url() ?>thankyou">

                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="no_telp" placeholder="No Telepon Anda" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Pilih Jasa Pengiriman</label>
                    <select class="form-control">
                      <option>JNE</option>
                      <option>JNT</option>
                      <option>GOJEK</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Pilih Metode Bayar</label>
                    <select class="form-control">
                      <option>BCA</option>
                      <option>BNI</option>
                      <option>BRI</option>
                      <option>MANDIRI</option>
                      <option>COD</option>
                      <option>GOPAY</option>
                    </select>
                  </div>

                 <button type="submit" class="btn btn-sm btn-primary mb-3">Place Order</button>
<!--                   <button  type="submit" class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='<?php base_url();?>thankyou'">Place Order</button> -->


                </form>

                <?php
                  } else{
                    echo "<h4>Anda Belum Bisa Mengisi Form Ini</h4>";
                  }

                 ?>









            </div>
          </div>
          <div class="col-md-6">

            
            
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">


                  <table class="table ">

                                     

                    <tbody>
                      

                    <?php 
                  
                  foreach ($this->cart->contents() as $items) :?>

                    <tr>
                      <td><?php echo $items['qty'] ?> Bungkus</td>
                      <td><h5><?php echo $items['name'] ?></h5></td>                    
                      <td align="right" > Harga : Rp. <?php echo number_format($items['subtotal'], 0,',','.' ); ?> </td>
                      
                    </tr>

                  
                  <?php endforeach; ?>  
 
        
                    </tbody>


                  </table>
               
                  <?php 
                  $grand_total = 0;
                  if ($keranjang = $this->cart->contents()){
                    foreach ($keranjang as $item) {
                      $grand_total = $grand_total + $item['subtotal'];
                    }

                  ?>
                  <div class="btn btn-sm btn-success"> 
                  <h4><?php echo "Total Belanja Anda : Rp.".number_format($grand_total,0,',','.');  ?></h4>
                  </div>
               <br><br>


                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                        <p class="mb-0">Transfer ke Bank Mandiri dengan no.rek : 12345678910 <br> atas nama : Rais Rindo</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">COD</a></h3>

                    <div class="collapse" id="collapsecheque">
                      <div class="py-2">
                        <p class="mb-0">Bayar setelah diantar oleh Kurir</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-5">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Go-Pay</a></h3>

                    <div class="collapse" id="collapsepaypal">
                      <div class="py-2">
                        <p class="mb-0">Pembayaran diambil dari saldo Go-Paymu</p>
                      </div>
                    </div>
                  </div>

            <!--       <div class="form-group">
                    <button  type="submit" class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='<?php base_url();?>thankyou'">Place Order</button>
                  </div>
 -->

                    <!-- <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button> -->

                </form>

                <?php
                  } else{
                    echo "<h4>Keranjang Belanja Anda Masih Kosong</h4>";
                  }

                 ?>


   



                  

                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>