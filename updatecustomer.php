<?php include "functionscustomer.php"?>

<?php 
$d1=$_GET['id'];

$data=getData($d1);

?>

<?php include "header.php" ?>

<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Müşteri güncelle</h1>
                  <p></p>
                  <small></small>
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
                              <i class="fa fa-list"></i>  Müsteri Bilgisi </a>  
                           </div>
                        </div>
                        
                        <div class="panel-body">
                           
                           <?php foreach($data as $d){ ?>
                            <form class="col-sm-6" action="update_customer.php?id=<?php echo $d['id'] ?>" method="post">
                              <div class="form-group">
                                 <label>Adı </label>
                                 <input value="<?php echo $d['cName']?>" type="text" name="name" class="form-control" placeholder="adı girin" required>
                              </div>
                              <div class="form-group">
                                 <label>Soyadı</label>
                                 <input value="<?php echo $d['cLastName']?>" type="text" name="lastname"class="form-control" placeholder="soyadı girin" required>
                              </div>
                              <div class="form-group">
                                 <label>Email</label>
                                 <input  value="<?php echo $d['cEmail']?>" type="email" name="email" class="form-control" placeholder="emaili girin" required>
                              </div>
                              <div class="form-group">
                                 <label>Telefon</label>
                                 <input value="<?php echo $d['cPhone']?>" type="number" name="phone"class="form-control" placeholder="telefonu girin" required>
                              </div>
                              <div class="form-group">
                                 <label>Resim yükle</label>
                                 <input type="file" name="picture">
                                 <input type="hidden" name="old_picture">
                              </div>
                         
                              <div class="form-group">
                                 <label>Adres</label>
                                 <textarea name="address" class="form-control" rows="3" required><?php echo $d['cAddress']?></textarea>
                              </div>
                              

                              <div class="reset-button">

                              <button type="submit" class="btn btn-success">Kaydet</button>
                              </div>
                              
                           </form>
                           <?php } ?>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <?php include "footer.php" ?>