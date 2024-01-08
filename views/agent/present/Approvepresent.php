<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kehadiran</h1>
    </div>

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">


                <div class="card-body" style="margin-top: 20px;">
                  
                  <table class="table table-borderless datatable" style="margin-top: 10px;">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Berangkat</th>
                        <th scope="col">Pulang</th>
                        <th scope="col">Alasan</th>
                        <th scope="col">#</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no=1;
                      $json = json_encode($list_data); 
                      $json_decoded = json_decode($json); 
                      foreach($json_decoded as $row){ ?>
                      <tr>
                        <td style="text-align: center; width: 10px;"><?php echo $no;?></td>
                        <td><?php echo $row->fullname;?></td>
                        <td><?php echo $row->act_date;?></td>
                        <td><?php echo $row->start_time;?></td>
                        <td><?php echo $row->end_time;?></td>
                        <td><?php echo $row->reason_activity;?></td>
                        <td>
                          <a href="<?php echo base_url('agent/Present/doapprove/');?><?php echo $row->unique_numb;?>"><i class="bi bi-pencil"></i>
                          <span>Approve</span></a>
                        </td>
                        
                      </tr>
                      <?php  $no++;}?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div>
            <!-- End Recent Sales -->



          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        
      </div>
    </section>

  </main>