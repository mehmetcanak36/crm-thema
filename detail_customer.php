<?php include "functionscustomer.php" ?>

<?php 
$d1=$_GET['id'];

$data=getData($d1);

?>



<?php include "header.php"?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-users"></i>
        </div>
        <div class="header-title">
            <h1>MÜŞTERİ BİLGİLERİ</h1>
            <p></p>
            <small></small>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="btn-group" id="buttonexport">

                            <h4>Müşteri </h4>

                        </div>
                    </div>
                    <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                        <div class="btn-group">


                        </div>
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                        <div class="table-responsive">
                            <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr class="info">
                                        <th>fotograf</th>
                                        <th>Adı </th>
                                        <th>Soyadı</th>
                                        <th>Email</th>
                                        <th>Telefon</th>
                                        <th>Address</th>
                                        <th>yönetici</th>
                                        <th>firma</th>

                                        <th></th>

                                    </tr>
                                </thead>
                                <?php foreach( $data as $d) { ?>
                                <tbody>
                                    <tr>
                                    <td><img  src="uploadcustomer/<?php echo $d['cimagename'] ?>" class="img-circle" alt="User Image" width="50" height="50" ></a></td>
                                        <td><?php echo $d['cName'] ?></td>
                                        <td><?php echo $d['cLastName'] ?></td>
                                        <td><?php echo  $d['cEmail'] ?></td>
                                        <td><?php echo $d['cPhone']?></td>
                                        <td><?php echo $d['cAddress']?></td>
                                        <td><?php echo $d['mName']?></td>
                                        <td><?php echo $d['dName']?> </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="btn-group" id="buttonexport">

                            <h4>Müşterinin Yönetici Bilgileri</h4>

                        </div>
                    </div>
                    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                    <div class="table-responsive">
                        <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr class="info">
                                    <th>Fotoraf</th>
                                    <th>Adı </th>
                                    <th>Soyadı</th>
                                    <th>Email</th>

                                    <th>Address</th>



                                </tr>
                            </thead>
                            <?php foreach( $data as $d) { ?>
                            <tbody>
                                <tr>
                                <td><img  src="uploadmanager/<?php echo $d['mimagename'] ?>" class="img-circle" alt="User Image" width="50" height="50" ></a></td>
                                    <td><?php echo $d['mName'] ?></td>
                                    <td><?php echo $d['mLastName'] ?></td>
                                    <td><?php echo  $d['mEmail'] ?></td>

                                    <td><?php echo $d['mAddress']?></td>

                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="btn-group" id="buttonexport">

                            <h4>Müşterinin Kurum bilgileri</h4>

                        </div>
                    </div>
                    <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                        <div class="btn-group">

                        </div>
                        <!-- ./Plugin content:powerpoint,txt,pdf,png,word,xl -->
                        <div class="table-responsive">
                            <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr class="info">
                                        <th>Fotoraf</th>
                                        <th>kurum adı</th>
                                        <th>Email</th>
                                        <th>Telefon</th>
                                        <th>Adres</th>

                                    </tr>

                                </thead>

                                <?php foreach($data as $d){ ?>
                                <tbody>
                                    <tr>
                                    <td><img  src="uploadcompany/<?php echo $d['dimagename'] ?>" class="img-circle" alt="User Image" width="50" height="50" ></a></td>
                                        <td><?php echo $d['dName'] ?></td>
                                        <td><?php echo $d['dEmail'] ?></td>
                                        <td><?php echo $d['dPhoneNumber'] ?></td>
                                        <td><?php echo $d['dAddress'] ?></td>


                                    </tr>




                                </tbody>
                                <?php }?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<?php include "footer.php"?>