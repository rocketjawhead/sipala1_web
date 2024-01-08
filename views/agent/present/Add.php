<main id="main" class="main">


    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Recent Sales -->
            <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Kehadiran</h5>

              <!-- General Form Elements -->

                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Kehadiran</label>
                    <div class="col-md-12 col-sm-12">
                        <input class="form-control" id="act_date" type="date" />
                    </div>
                </div>

                <div class="field item form-group">
                    <br/>
                    <div class="col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Jam</label>
                                <input class="form-control" id="start_time" type="time"/>
                            </div>
                            <div class="col-sm-6">
                                <label>Ke</label>
                                <input class="form-control" id="end_time" type="time"/>
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

                <div class="field item form-group" style="margin-top: 10px; margin-bottom: 10px;">
                    <label>Upload File</label>
                    <br/>
                    <img id="image1" style="height: 20%;width: 10%;"/>
                    <input type="file" name="imageurl" class="form-control" onchange="img1(this)"> 
                    <input type="hidden" id="base64_img" name="base64_img">
                  </div>


                <hr/>
                
                <div class="row mb-3">
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

        alert('Mohon ditunggu, System sedang di sync...');

        // var act_date = $('#act_date').val();
        // var start_time = $('#start_time').val();
        // var end_time = $('#end_time').val();
        // var reason_activity = $('#reason_activity').val();
        // var base64_img = $('#base64_img').val();


        // $.ajax({
        //     url : "<?php echo base_url();?>agent/present/addpresent",
        //     method : "POST",
        //     data : {
        //         act_date : act_date,
        //         start_time : start_time,
        //         end_time : end_time,
        //         reason_activity : reason_activity,
        //         base64_img : base64_img
        //     },
        //     async : false,
        //     dataType : 'json',
        //     success: function(data){
        //         // console.log(JSON.stringify(data));
        //         if (data.responsecode == '00') {
        //             alert('Berhasil Tambah Data');
        //             var url = '<?php echo base_url();?>agent/present/';
        //             window.location = url;
        //         }else{
        //             alert(data.message);
        //         }
        //     }
        //   });

    }
</script>
<script type="text/javascript">
        function readURLimage1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image1')
                    .attr('src', e.target.result)
                    .width(500)
                    .height(500);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
    <script type="text/javascript">
        function getBaseUrl1 ()  {
            var file = document.querySelector('input[type=file]')['files'][0];
            var reader = new FileReader();
            var baseString;
            reader.onloadend = function () {

                baseString = reader.result;
                conv_basestring = baseString.replace("data:image/jpeg;base64,", "") ;
                document.getElementById("base64_img").value = conv_basestring;

                // alert(baseString); 

            };
            reader.readAsDataURL(file);
        }
    </script>
    <script type="text/javascript">
        function img1(input){
            getBaseUrl1();
            readURLimage1(input);
        }
    </script>