<script type="text/javascript">
     function location_approve(id,status)
    {
        $("#active_status"+id).html('<strong style="color:red">Loading....</strong>');
        $("#active_status"+id).load('<?=base_url()?>index.php/admin/location_approve/'+id+'/'+status);
    }
</script>

            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <ul>
                        <li>
                            <a href="<?=base_url()?>">Home</a>
                        </li>
                        <li>Location List</li>
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
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    
                                    <select onchange="search_cat()" id="myInput" class="form-control">
                                        <option value="">--Category--</option>
                                       <?php foreach ($categories as $cat) 
                                       {    echo "<option>".$cat->category."</option>" ; } ?>
                                    </select>
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
                                        <th>Category</th>
                                        <th>Lat</th>
                                        <th>Long</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                      
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; foreach ($approval_requests as $row) { $i++;

                                        $photo="uploads/location.jpg";
                                        foreach ($photos as $row1) {
                                          if ($row1->location_id==$row->id) {
                                              $photo=$row->photo;
                                          }
                                        }
                                    ?>
                                    <tr>
                                        <td><?=$i?></td>
                                        <td class="text-center">
                                            <img data-enlargable src="<?=base_url()?><?=$photo?>" style="max-width: 35px;height: 35px;">
                                        </td>
                                        <td><?=$row->name?></td>
                                        <td><?php foreach ($categories as $cat) {  if ($cat->id==$row->cat_id) {  echo $cat->category; } } ?>
                                        </td>
                                        <td><?=$row->latitude?></td>
                                        <td><?=$row->longitude?></td>
                                        
                                        <td>
                                             <span id="active_status<?=$row->id?>">
                                        <?php if($row->IsApproved==1){?>
                                            <button class="btn btn-success" onclick="location_approve(<?=$row->id?>,0)">Approved</button>
                                            <?php }else{ ?>
                                            <button class="btn btn-danger" onclick="location_approve(<?=$row->id?>,1)">Not Approved</button>
                                            <?php } ?>
                                        </span>
                                        </td>
										<td><?=$row->description?></td>	 
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
<script type="text/javascript">
    function search_cat()
    {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[3];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
        }
    }
</script>

