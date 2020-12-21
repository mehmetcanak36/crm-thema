<?php include "functionscustomer.php"?>

<?php 
$tablem="manager";
$tabled="department";
$datam=getdatatable($tablem);
$datad=getdatatable($tabled);
?>

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
                            <form class="col-sm-6" action="update_customer.php?id=<?php echo $d['id'] ?>" enctype="multipart/form-data" method="post">
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
                                   <label>profil resmi yükle</label>
                                   <input type="file" name="fileToUpload" id="fileToUpload" >
                               </div>

                              
                         
                              <div class="form-group">
                                 <label>Adres</label>
                                 <textarea name="address" class="form-control" rows="3" required><?php echo $d['cAddress']?></textarea>
                              </div>
                     <div>
                           <label  >yönetici seç </label>

                           <select name="manager" class="form-control form-control-lg">
                           
                            <option value="<?php echo $d['mid'] ?>"> <?php echo $d['mName'] ?></option>
                            
                            <?php foreach ($datam as $d1){ ?>

                            <option  value="<?php echo $d1['mid']?>"><?php echo $d1['mName']?></option> <?php }?>
                                      </select>

                             </div>  
                            <br>

                     <div>
      
                        <label for="exampleInput5" class="form-label">firma seç </label>
                          <select name="department" class="form-control form-control-lg"> 
                          
                          <option value="<?php echo $d['did'] ?>"> <?php echo $d['dName'] ?></option>
                           <?php foreach ($datad as $d2){ ?>
                               
                               <option  value="<?php echo $d2['did']?>" ><?php echo $d2['dName']?></option> 
                           <?php }?>
                           </select>
                           </div> 
                     <br><br>  
                              

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