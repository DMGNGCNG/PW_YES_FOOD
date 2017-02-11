
<!--contact-->
  <div class="contact" id="contact">
    <div class="container">
      <h3 class="title">Mari Bergabung</h3>
      <div class="contact-grids">
        <div class="col-md-7 col-sm-7 contact-left">
          <form action="<?php echo base_url("mari_bergabung/addpemilik")?>" method="post">

            <span style="color:red"><?php
                if (isset($err)) {
                    if ($err == 1) {
                    echo "Password is not same";
                    } else {
                        echo validation_errors();
                    }
                }
                ?></span>
                
            <div class="form-group">
              <label for="nama_pemilik">Nama Pemilik</label>
              <input type="username" class="form-control" id="nama_pemilik" placeholder="Nama Pemilik" name="inputnama_pemilik">
            </div>

            <div class="form-group">
              <label for="notelp_pemilik">No Telepon Pemilik</label>
              <input type="username" class="form-control" id="notelp_pemilik" placeholder="Nama Tempat" name="inputnotelp_pemilik">
            </div>

            <div class="form-group">
              <label for="alamat_pemilik">Alamat Pemilik</label>
              <textarea class="form-control" id="alamat_pemilik" placeholder="Nama Tempat" name="inputalamat_pemilik"> </textarea>
            </div>

            <br>  

            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="Email" name="inputemail">
            </div>

            <div class="form-group">
              <label for="username">Username</label>
              <input type="username" class="form-control" id="username" placeholder="Username" name="inputusername">
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password" name="inputpassword">
            </div>

            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password" name="inputconfirm_password">
            </div>

            <div class="form-group">
              <label for="exampleInputFile">Input Foto KTP</label>
              <input type="file" id="exampleInputFile">
              <p class="help-block">Example block-level help text here.</p>
            </div> 

            <div class="checkbox">
              <label>
              <input type="checkbox"> Check me out
              </label>
            </div>

            <button type="submit" class="btn btn-default" value="Submit">Daftar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--//contact-->