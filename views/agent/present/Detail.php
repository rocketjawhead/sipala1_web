<main id="main" class="main">


    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Recent Sales -->
            <div class="card">
            <div class="card-body">
              <h5 class="card-title">Detail Kehadiran</h5>

              <!-- General Form Elements -->
                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Status Kehadiran</label>
                    <div class="col-md-12 col-sm-12">
                        <input class="form-control" type="text" value="<?php echo $status_revision;?>" readonly />
                    </div>
                </div>
                <?php if($is_revision == 0){?>
                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Kehadiran</label>
                    <div class="col-md-12 col-sm-12">
                        <input class="form-control" id="act_date" type="date" value="<?php echo $act_date;?>" readonly />
                    </div>
                </div>

                <div class="field item form-group">
                    <br/>
                    <div class="col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Jam</label>
                                <input class="form-control" id="start_time" type="time" value="<?php echo $start_time;?>"/>
                            </div>
                            <div class="col-sm-6">
                                <label>Ke</label>
                                <input class="form-control" id="end_time" type="time" value="<?php echo $end_time;?>" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Alasan Perubahan</label>
                    <div class="col-md-12 col-sm-12">
                        <input class="form-control" id="reason_activity" type="text" />
                    </div>
                </div>


                <hr/>
                
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <a onClick="exec_form();" class="btn btn-outline-primary" >Simpan Data</a>
                  </div>
                </div>
                <?php }?>

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

        var unique_numb = '<?php echo $unique_numb;?>';
        var act_date = $('#act_date').val();
        var start_time = $('#start_time').val();
        var end_time = $('#end_time').val();
        var reason_activity = $('#reason_activity').val();


        $.ajax({
            url : "<?php echo base_url();?>agent/present/update",
            method : "POST",
            data : {
                unique_numb : unique_numb,
                act_date : act_date,
                start_time : start_time,
                end_time : end_time,
                reason_activity : reason_activity
            },
            async : false,
            dataType : 'json',
            success: function(data){
                // console.log(JSON.stringify(data));
                if (data.responsecode == '00') {
                    alert('Berhasil Update Data');
                    var url = '<?php echo base_url();?>agent/present/';
                    window.location = url;
                }else{
                    alert(data.message);
                }
            }
          });

    }
</script>