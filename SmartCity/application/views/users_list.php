<script type="text/javascript">
     function active(id,status)
    {
        $("#active_status"+id).html('<strong style="color:red">Loading....</strong>');
        $("#active_status"+id).load('<?=base_url()?>index.php/admin/active_user/'+id+'/'+status);
    }
</script>

            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <ul>
                        <li>
                            <a href="<?=base_url()?>">Home</a>
                        </li>
                        <li>Users List</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" id='txt_searchall' placeholder="Search" class="form-control" onkeyup="search(this.value)">
                                </div>
                               
                                
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        
                                        <th>Status</th>
                                      
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; foreach ($users as $row) { $i++;
                                    ?>
                                        
                                  
                                    <tr>
                                        <td><?=$i?></td>
                                        <td class="text-center">
                                            <img data-enlargable src="<?=base_url()?><?=$row->photo?>" onerror="this.src='<?=base_url()?>uploads/user.png';" style="max-width: 35px;height: 35px;">
                                        </td>
                                        <td><?=$row->first_name?> <?=$row->last_name?></td>
                                        <td><?=$row->mobile?></td>
                                        <td><?=$row->email?></td>
                                        <td><?=$row->gender?></td>
                                        <td>
                                             <span id="active_status<?=$row->id?>">
                                        <?php if($row->active==1){?>
                                            <button class="btn btn-success" onclick="active(<?=$row->id?>,0)">Active</button>
                                            <?php }else{ ?>
                                            <button class="btn btn-danger" onclick="active(<?=$row->id?>,1)">Not Active</button>
                                            <?php } ?>
                                        </span>
                                        </td>
                                       
                                    </tr>
                                    <?php } ?>
                                    <tr class='notfound'>
                                     <td colspan='4'>No record found</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
                
            </div>
