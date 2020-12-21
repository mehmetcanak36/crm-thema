<?php include "functionscustomer.php" ?>
<?php 
$table="customer";
$data=listTable($table);

function getdepartmentname($id){
   
   $conn=connect();
   $query="SELECT *FROM department
   LEFT JOIN customer ON department.did= customer.department_id"
   ;
   $data=mysqli_query($conn,$query);
   return $data;

}


?>

<?php include "header.php" ?>


<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>MÜŞTERİ LİSTESİ</h1>
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
                              <a href="#">
                                 <h4>Müşteri listesi</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="add-customer.php"> <i class="fa fa-plus"></i> Müşteri Ekle
                                 </a>  
                              </div>
                              
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
                                       <th>Action</th>
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
                                        
                                       
                                       

                                     
                                       
                                       <td>
                                       <a href="detail_customer.php?id=<?php echo $d['id']; ?>" > <button type="button" class="btn btn-info btn-sm"  ><i class="fa fa-address-card-o"></i> ayrıntı</button></a>
                                       <a href="updatecustomer.php?id=<?php echo $d['id']; ?>" > <button type="button" class="btn btn-add btn-sm"  ><i class="fa fa-pencil"></i> düzenle</button></a>
                                       <a href="delete_customer.php?id=<?php echo $d['id']; ?>" > <button type="button" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i> sil</button></a>
                                       
                                       </td>
                                       <td>
                                       
                                       
                                       </td>
                                    </tr>
                       <?php } ?>                             
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- customer Modal1 -->
               <div class="modal fade" id="customer1" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Müşteriyi güncelle</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                              
                                 <form  action="updatecustomer.php" name="updatecustomer" class="form-horizontal">
                                 
                                    <fieldset>
                                    <?php foreach($data as $d){ ?>

                                   
                                       <!-- Text input-->
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Müşteri adı :</label>
                                          <input name="name" type="text" value="<?php echo $d['cName'] ?>" placeholder="Customer Name" class="form-control">
                                       </div>
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Müşteri soyadı:</label>
                                          <input name=lastname type="text" value="<?php echo $d['cLastName'] ?>" placeholder="Customer Name" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Email:</label>
                                          <input name="email" type="email" value="<?php echo $d['cEmail'] ?>" placeholder="Email" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">telefon</label>
                                          <input name="telephone" type="number" value="<?php echo $d['cPhone'] ?>" placeholder="Mobile" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Adres</label><br>
                                          <textarea name="address" value="<?php echo $d['cAddress'] ?>" rows="3"></textarea>
                                       </div>
                                       
                                       
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                          <a href="clist.php"><button type="button" class="btn btn-danger btn-sm">iptal</button></a>
                                             <button type="submit" class="btn btn-add btn-sm">kaydet</button>
                                          </div>
                                       </div>
                                       <?php } ?>
                                       
                                      
                                    
                                    </fieldset>
                                    
                                 </form>
                                
                              </div>
                           </div>
                        </div>
                       
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">kapat</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
               <!-- Modal -->    
               <!-- Customer Modal2 -->
               <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Müşteriyi sil</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <div class="col-md-12 form-group user-form-group">
                                          <label class="control-label">müşteriyi sil</label>
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm">hayır</button>
                                             <button type="submit" class="btn btn-add btn-sm">evet</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
<?php include "footer.php" ?>