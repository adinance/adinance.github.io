

<section class="section-table cid-u6T9nwuCu6" id="table1-1b">
    <div class="container container-table">
        <br><br><br><br><br><br>
        <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Access Logs</h2>
        <div class="table-wrapper">
            <div class="container scroll">
                <table id="example"  class="table isSearch" cellspacing="0" data-empty="No matching records found">
                        <thead>
                            <tr>
                                <th class="head-item mbr-fonts-style display-7">Time</th>
                                <th class="head-item mbr-fonts-style display-7">IP Address</th>
                                <th class="head-item mbr-fonts-style display-7">User</th>
                                <!-- <th class="head-item mbr-fonts-style display-7">Permission</th> -->
                                <th class="head-item mbr-fonts-style display-7">Action</th>
                                <th class="head-item mbr-fonts-style display-7">User Agent</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $i = 0; foreach ($result as $row) { ?>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7"><?php echo $result[$i]->time; ?></td>
                                <td class="body-item mbr-fonts-style display-7"><?php echo $result[$i]->source; ?></td>
                                <td class="body-item mbr-fonts-style display-7"><?php echo $result[$i]->users;?></td>
                                <!-- <td class="body-item mbr-fonts-style display-7"><?php echo $result[$i]->permission;?></td> -->
                                <td class="body-item mbr-fonts-style display-7"><?php echo $result[$i]->action;?></td>
                                <td class="body-item mbr-fonts-style display-7"><?php echo $result[$i]->ua;?></td>
                            </tr>

                            <?php $i++; } ?>

                           
                
                        
                        </tbody>
                        
                </table>

               
            </div>
           
        </div>
    </div>
</section>





<script>
    $('#example').DataTable({

        pageLength: 50,

        order: [
            [0, 'desc']
        ],

        layout: {
            topStart: {
                buttons: [
                    {
                        title: null,
                        filename: 'Access Logs',
                        extend: 'excelHtml5',
                        autoFilter: true,
                        sheetName: 'Access Logs',
                        text: 'Export'
                    }
                ]
            }
        }
       
    });
</script>


