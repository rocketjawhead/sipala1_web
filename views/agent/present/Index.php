<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kehadiran</h1>
      <!-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav> -->
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">


                <div class="card-body" style="margin-top: 20px;">
                  <h5 class="card-title">Tambah Kehadiran 
                    <a href="<?php echo base_url('agent/present/add');?>" class="btn btn-outline-primary">+</a>
                  </h5>
                  <table class="table table-borderless datatable" style="margin-top: 10px;">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <!-- <th scope="col">Img</th> -->
                        <th scope="col">Tanggal</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Menit</th>
                        <!-- <th scope="col">Status</th> -->
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
                        <td><?php echo $row->act_date;?></td>
                        <td><?php echo $row->start_time.' - '.$row->end_time;?></td>
                        <td><?php echo $row->diff_hour;?></td>
                        <td><?php echo $row->diff_minute;?></td>
                        <td>
                          <a href="<?php echo base_url('agent/Present/detail/');?><?php echo $row->unique_numb;?>"><i class="bi bi-pencil"></i>
                          <span>Edit</span></a>
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