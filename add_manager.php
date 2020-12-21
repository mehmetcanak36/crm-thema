<?php include "header.php" ?>

<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="header-icon">
         <i class="fa fa-users"></i>
      </div>
      <div class="header-title">
         <h1>YÖNETİCİ EKLE</h1>
         <P></P>
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
                     <a class="btn btn-add " href="manager.php">
                        <i class="fa fa-list"></i> Yönetici Listesi </a>
                  </div>
               </div>
               <div class="panel-body">
                  <form class="col-sm-6" action="addmanager.php" method="post" enctype="multipart/form-data" >
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
                        <label>profil resmi yükle</label>
                        <input type="file" name="fileToUpload" id="fileToUpload">

                     </div>




                     <div class="form-group">
                        <label>Adres</label>
                        <textarea name="address" class="form-control" rows="3" required></textarea>
                     </div>

                     <div class="reset-button">
                        <a href="add_manager.php" class="btn btn-warning">Sıfırla</a>
                        <button type="submit" class="btn btn-success">Kaydet</button>
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