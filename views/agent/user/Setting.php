<main id="main" class="main">


    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Recent Sales -->
            <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pengaturan Akun</h5>



                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Tipe Akun</label>
                    <div class="col-md-6 col-sm-6">
                        <select class="form-control" id="type_account" required>
                            <option value="<?php echo $id_type_account;?>">Data Terpilih : <?php echo $type_account;?></option>
                            <option value="1">Super Admin</option>
                            <option value="2">Admin</option>
                            <option value="3">User</option>
                        </select>
                    </div>
                </div>

                <hr/>
                <div class="row mb-3">
                  <!-- <label class="col-sm-2 col-form-label">Submit Button</label> -->
                  <div class="col-sm-10">
                    <a onClick="exec_form();" class="btn btn-outline-primary" >Simpan Data</a>
                  </div>
                </div>

              <!-- End General Form Elements -->

            </div>
          </div>
            <!-- End Recent Sales -->



          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        
      </div>
    </section>

  </main>
  <script type="text/javascript">
    function exec_form(){

        var id = '<?php echo $id;?>';
        var type_account = $('#type_account').val();
        
        $.ajax({
            url : "<?php echo base_url();?>agent/user/updatesetting",
            method : "POST",
            data : {
                id : id,
                type_account : type_account
            },
            async : false,
            dataType : 'json',
            success: function(data){
              var url = '<?php echo base_url();?>agent/user/';
              window.location = url;
            }
          });

    }
</script>