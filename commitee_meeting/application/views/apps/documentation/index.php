<!-- <br><h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Documents</h2>  -->
<br><br><br><br>

<?php if($user['permission']==1 || $user['permission']==3 || $user['permission']==5){ ?>
<!-- <section class="mbr-section content8 cid-ucm90b58Ze" id="content8-2d">
    <div class="container">
        <div class="media-container-row title">
            <div class="col-12 col-md-12">
                <div class="mbr-section-btn align-center">
                        <?php 
                        if ($this->uri->segment(2) == 1 || $this->uri->segment(2) == 0){
                            echo '<a class="btn btn-primary display-7" href="' . BASE_URL . 'category/1">';
                        }else{
                            echo '<a class="btn btn-black-outline display-7" href="' . BASE_URL . 'category/1">';
                        }
                        ?>
                            <span class="mobi-mbri mobi-mbri-browse mbr-iconfont mbr-iconfont-btn"></span>เอกสารสำหรับคณะกรรมการบริษัท
                        </a>
                        
                        <?php 
                        if ($this->uri->segment(2) == 2 || $this->uri->segment(2) == 0){
                            echo '<a class="btn btn-primary display-7" href="' . BASE_URL . 'category/2">';
                        }else{
                            echo '<a class="btn btn-black-outline display-7" href="' . BASE_URL . 'category/2">';
                        }
                        ?>
                            <span class="mobi-mbri mobi-mbri-briefcase mbr-iconfont mbr-iconfont-btn"></span>เอกสารสำหรับคณะกรรมการตรวจสอบ
                        </a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<?php } ?>

<br><br>
<section class="section-table cid-u6T9nwuCu6" id="table1-1b">
    <div class="container container-table">
        <!-- <br><br><br><br><br><br> -->
        <!-- <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Documents</h2> -->
        <div class="table-wrapper">
            <div class="container scroll">
                <table id="example" class="table isSearch " cellspacing="0" data-empty="No matching records found">
                    <thead>
                        <tr>
                            <th class="head-item mbr-fonts-style display-7">Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; foreach ($result as $row) { ?>
                        <tr>
                            <td class="body-item mbr-fonts-style display-7">
                                <a target="_blank" href="<?php echo BASE_URL . 'preview/' . $result[$i]->id; ?>"><?php echo $result[$i]->documents; ?></a>
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
            [25, 50, -1],
            [25, 50, 'All']
        ],
        ordering : false,
        // order: [
        //     [0, 'asc']
        // ],
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