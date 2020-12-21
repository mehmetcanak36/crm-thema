<?php include "functions_company.php"?>

<?php 
$d1=$_GET['did'];


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
                  <h1>Firma Güncelle</h1>
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
                              <a class="btn btn-add " href="company.php"> 
                              <i class="fa fa-list"></i>  firma listesi </a>  
                           </div>
                        </div>
                        
                        <div class="panel-body">
                           
                           <?php foreach($data as $d){ ?>
                            <form class="col-sm-6" action="updatecompany.php?did=<?php echo $d['did'] ?>" method="post">
                              <div class="form-group">
                                 <label>Adı </label>
                                 <input value="<?php echo $d['dName']?>" type="text" name="name" class="form-control" placeholder="adı girin" required>
                              </div>
                              
                              <div class="form-group">
                                 <label>Email</label>
                                 <input  value="<?php echo $d['dEmail']?>" type="email" name="email" class="form-control" placeholder="emaili girin" required>
                              </div>
                              <div class="form-group">
                                 <label>Telefon</label>
                                 <input value="<?php echo $d['dPhoneNumber']?>" type="number" name="phone"class="form-control" placeholder="telefonu girin" required>
                              </div>
                              
                         
                              <div class="form-group">
                                 <label>Adres</label>
                                 <textarea name="address" class="form-control" rows="3" required><?php echo $d['dAddress']?></textarea>
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