

<section class="section-table cid-u6T9nwuCu6" id="table1-1b">
    <div class="container container-table">
        <br><br><br><br><br><br>
        <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Last Connection</h2>
        <div class="table-wrapper">
            <!-- <div class="container"  >
                <div class="row search">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <div class="dataTables_filter">
                            <label class="searchInfo  mbr-fonts-style display-7">Searchsss:</label>
                            <input class="form-control input-sm" disabled="">
                        </div>
                    </div>
                </div>
            </div> -->


            <div class="container scroll">
                <table id="example"  class="table isSearch" cellspacing="0" data-empty="No matching records found">
                        <thead>
                            <tr>
                                <th class="head-item mbr-fonts-style display-7">IP Address</th>
                                <th class="head-item mbr-fonts-style display-7">User</th>
                                <th class="head-item mbr-fonts-style display-7">Permission</th>
                                <th class="head-item mbr-fonts-style display-7">Last Login</th>
                                <th class="head-item mbr-fonts-style display-7">Last Logout</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $i = 0; foreach ($result as $row) { ?>

                            <tr>
                                <td class="body-item mbr-fonts-style display-7"><?php echo $result[$i]->ip; ?></td>
                                <td class="body-item mbr-fonts-style display-7"><?php echo $result[$i]->users;?></td>
                                <td class="body-item mbr-fonts-style display-7"><?php echo $result[$i]->permission;?></td>
                                <td class="body-item mbr-fonts-style display-7"><?php echo $result[$i]->last_login;?></td>
                                <td class="body-item mbr-fonts-style display-7"><?php echo $result[$i]->last_logout;?></td>
                            </tr>

                            <?php $i++; } ?>

                        
                        </tbody>
                        <!-- <tfoot>
                            <tr>
                                <th class="head-item mbr-fonts-style display-7">Name</th>
                                <th class="head-item mbr-fonts-style display-7">Position</th>
                                <th class="head-item mbr-fonts-style display-7">Office</th>
                                <th class="head-item mbr-fonts-style display-7">Age</th>
                                <th class="head-item mbr-fonts-style display-7">Start date</th>
                            </tr>
                        </tfoot> -->
                </table>

               
            </div>
            <!-- <div class="container table-info-container">
                <div class="row info">
                    <div class="col-md-6">
                        <div class="dataTables_info mbr-fonts-style display-7">
                            <span class="infoBefore">Showing</span>
                            <span class="inactive infoRows"></span>
                            <span class="infoAfter">entries</span>
                            <span class="infoFilteredBefore">(filtered from</span>
                            <span class="inactive infoRows"></span>
                            <span class="infoFilteredAfter"> total entries)</span>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div> -->
        </div>
    </div>
</section>





<script>
    var d = new Date();
    $('#example').DataTable({

        pageLength: 50,

        order: [
            [3, 'desc']
        ],

        layout: {
            topStart: {
                buttons: [
                    {
                        title: null,
                        filename: 'Last Connection' + d,
                        extend: 'excelHtml5',
                        autoFilter: true,
                        sheetName: 'Last Connection',
                        text: 'Export'
                    }
                ]
            }
        }
        // layout: {
        //     topStart: {
        //         buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        //     }
        // },
        // searching: false,
        // info: false,
        // paging: false,
        // initComplete: function() {
        //     this.api()
        //         .columns()
        //         .every(function() {
        //             var column = this;
        //             // Create select element and listener
        //             var select = $('<select><option value=""></option></select>')
        //                 .appendTo($(column.footer()).empty())
        //                 .on('change', function() {
        //                     column
        //                         .search($(this).val(), {
        //                             exact: true
        //                         })
        //                         .draw();
        //                 });
        //             // Add list of options
        //             column
        //                 .data()
        //                 .unique()
        //                 .sort()
        //                 .each(function(d, j) {
        //                     select.append(
        //                         '<option value="' + d + '">' + d + '</option>'
        //                     );
        //                 });
        //         });
        // }
    });
</script>


