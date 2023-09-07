<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Data Relawan</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Table</li>
                            <li class="breadcrumb-item active">Data Relawan</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <!-- <button type="button" src="TambahRelawan" class="btn btn-primary"><i class="fa fa-download"></i>Tambah Relawan</button> -->
                            <li class="breadcrumb-item"><a href="TambahRelawan"><i class="fa fa-dashboard">Tambah Relawan</i></a></li>                            

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
                            <!-- <h2>Data Relawan <small></small> </h2>                             -->
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Nik</th>
                                            <th>Sumber Kalangan</th>
                                            <th>Keterangan</th>
                                            <!-- <th>Start date</th> -->
                                            <!-- <th>Salary</th> -->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Nik</th>
                                            <th>Sumber Kalangan</th>
                                            <th>Keterangan</th>
                                            <!-- <th>tes</th> -->
                                            <!-- <th>Start date</th> -->
                                            <!-- <th>Salary</th> -->
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $no = 1; ?>
                                                    <?php foreach ($rimuku as $rim) : ?>
                                        <tr>
                                        <th scope="row"><?= $no++; ?></th>
                                                            <td><?= $rim['nama']; ?></td>
                                                            <td><?= $rim['nik']; ?></td>
                                                            <td><?= $rim['sumber_kalangan']; ?></td>
                                                            <td><?= $rim['keterangan']; ?></td>
                                                            <!-- <td><?= $rim['geojson']; ?></td> -->
                                            
                                        </tr>
                                        <?php endforeach; ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>