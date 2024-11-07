<section class="mbr-section content8 cid-ucm90b58Ze" id="content8-2d"><br>
    <div class="container-fluid">
        <br><br><br>
        <!-- <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Documents</h2> -->
        <div class="media-container-row title">
            <div class="col-12 col-md-12">
                <div class="mbr-section-btn align-center">
                    <a class="btn btn-black-outline display-7" href="<?php echo BASE_URL?>bod">
                        <span class="mobi-mbri mobi-mbri-briefcase mbr-iconfont mbr-iconfont-btn"></span>Create Document
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-table cid-u6T9nwuCu6" id="table1-1b">
    <div class="container container-table">
        <!-- <br><br><br><br><br><br> -->
        <!-- <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Documents</h2> -->
        <div class="table-wrapper">
            <div class="container scroll">
                <table id="example" class="table isSearch " cellspacing="0" data-empty="No matching records found">
                    <thead>
                        <tr>
                            <th class="head-item mbr-fonts-style display-7 ">Date</th>

                            <th class="head-item mbr-fonts-style display-7">Name</th>
                            <th class="head-item mbr-fonts-style display-7">Category</th>
                            <th class="head-item mbr-fonts-style display-7">Soting</th>
                            <th class="head-item mbr-fonts-style display-7">Status</th>
                            <th class="head-item mbr-fonts-style display-7"></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 0; foreach ($result as $row) { ?>

                        <tr>

                            <td class="body-item mbr-fonts-style display-7" nowrap><?php echo $result[$i]->date;?></td>

                            <td class="body-item mbr-fonts-style display-7">
                                <a target="_blank" href="<?php echo BASE_URL . 'preview/' . $result[$i]->id; ?>"><?php echo $result[$i]->documents; ?></a>
                            </td>
                            <td class="body-item mbr-fonts-style display-7" nowrap><?php echo $result[$i]->category; ?>
                            </td>
                            <td class="body-item mbr-fonts-style display-7" nowrap><?php echo $result[$i]->sort; ?></td>
                            <td class="body-item mbr-fonts-style display-7" nowrap>
                                <?php echo ($result[$i]->actived == 1) ? '<strong class="text-success">Enable</strong>' : '<strong class="text-danger">Disable</strong>'; ?>
                            </td>
                            <td class="body-item mbr-fonts-style display-7" nowrap>
                                <!-- <a href="<?php echo BASE_URL . 'preview/' . $result[$i]->id; ?>" target="_blank"><span class="mdi-action-search mbr-iconfont mbr-iconfont-btn"></span></a>  -->
                                <a href="<?php echo BASE_URL . 'edit/' . $result[$i]->id; ?>"><span class="mobi-mbri mobi-mbri-edit mbr-iconfont mbr-iconfont-btn"></span></a>
                            </td>

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
        // pageLength: 10,
        lengthMenu: [
            [50, 100, -1],
            [50, 100, 'All']
        ],
        order: [
            [0, 'desc']
        ],
        language: {
            lengthMenu: ' _MENU_ entries per page',
            zeroRecords: 'No Data Found',
            // info: 'Total',
            infoEmpty: 'No records available',
            // infoFiltered: '(filtered from _MAX_ total records)'
        }
        // layout: {
        //     topStart: {
        //         buttons: [
        //             {
        //                 extend: 'excelHtml5',
        //                 autoFilter: true,
        //                 sheetName: 'Exported data',
        //                 text: 'Export'
        //             }
        //         ]
        //     }
        // }
    });
</script>