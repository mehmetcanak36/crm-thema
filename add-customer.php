<?php include "header.php" ?>
<?php include "function.php" ?>
<?php 
$tablem="manager";
$tabled="department";
$datam=getdatatable($tablem);
$datad=getdatatable($tabled);
?>

<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="header-icon">
         <i class="fa fa-users"></i>
      </div>
      <div class="header-title">
         <h1>Müşteri Ekle</h1>
         <small>Müşteri Listesi</small>
      </div>
   </section>
   <!-- /.content-wrapper -->

   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- Form controls -->
         <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
               <div class="panel-heading">
                  <div class="btn-group" id="buttonlist">
                     <a class="btn btn-add " href="clist.php">
                        <i class="fa fa-list"></i> Müsteri listesi </a>
                  </div>
               </div>
               <div class="panel-body">
                  <form class="col-sm-6" action="addcustomer.php" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                        <label>Adı </label>
                        <input type="text" name="name" class="form-control" placeholder="adı girin" required>
                     </div>
                     <div class="form-group">
                        <label>Soyadı</label>
                        <input type="text" name="lastname" class="form-control" placeholder="soyadı girin" required>
                     </div>
                     <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="emaili girin" required>
                     </div>
                     <div class="form-group">
                        <label>Telefon</label>
                        <input type="number" name="phone" class="form-control" placeholder="telefonu girin" required>
                     </div>
                     <div class="form-group">
                        <label>profil resmi yükle</label>
                        <input type="file" name="fileToUpload" id="fileToUpload">

                     </div>



                     <div class="form-group">
                        <label>Adres</label>
                        <textarea name="address" class="form-control" rows="3" required></textarea>
                     </div>



                     <div>
                        <label>yönetici seç </label>
                        <select name="manager" class="form-control form-control-lg">
                           <option value=""></option>
                           <?php foreach ($datam as $d){ ?>


                           <option value="<?php echo $d['mid']?>"><?php echo $d['mName']?></option> <?php }?>
                        </select>

                     </div>
                     <br>

                     <div>

                        <label for="exampleInput5" class="form-label">firma seç </label>
                        <select name="depar" class="form-control form-control-lg">
                           <option value=""></option>
                           <?php foreach ($datad as $d){ ?>
                           <option value="<?php echo $d['did']?>"><?php echo $d['dName']?></option> <?php }?>
                        </select>
                     </div>
                     <br><br>

                     <div class="reset-button">
                        <a href="add-customer.php" class="btn btn-warning">Sıfırla</a>
                        <button type="submit" class="btn btn-success" name="but_upload">Kaydet</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.php" ?>