<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Data Anggota Relawan</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Table</li>
                            <li class="breadcrumb-item active">Data Anggota Relawan</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <!-- <button type="button" href="TambahTeam" class="btn btn-primary"><i class="fa fa-download"></i>Tambah Anggota</button>
                             -->
                            <li class="breadcrumb-item"><a href="TambahTeam"><i class="fa fa-dashboard">Tambah Team</i></a></li>                            

                                <!-- <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button> -->
                            </div>
                            <div class="p-2 d-flex">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <!-- <h2>Data Anggota Relawan <small></small> </h2>                             -->
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Nik</th>
                                            <!-- <th>Sumber Kalangan</th> -->
                                            <!-- <th>Keterangan</th> -->
                                            <!-- <th>Start date</th> -->
                                            <!-- <th>Salary</th> -->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Nik</th>
                                            <!-- <th>Sumber Kalangan</th> -->
                                            <!-- <th>Keterangan</th> -->
                                            <!-- <th>Start date</th> -->
                                            <!-- <th>Salary</th> -->
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $no = 1; ?>
                                                    <?php foreach ($anggota as $ang) : ?>
                                        <tr>
                                        <th scope="row"><?= $no++; ?></th>
                                                            <td><?= $ang['nama']; ?></td>
                                                            <td><?= $ang['nik']; ?></td>
                                                          
                                            
                                        </tr>
                                        <?php endforeach; ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>