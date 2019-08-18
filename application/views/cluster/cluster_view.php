<?php $this->load->view('header'); ?>
<?php   $this->db->query('truncate table temp_hasil'); ?>
                <!-- Main Container -->
                <div id="main-container">
                    <header class="navbar navbar-inverse navbar-fixed-top">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                                    <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->

                            <!-- Header Link -->
                            <li class="hidden-xs animation-fadeInQuick">
                                <a href=""><strong>SISTEM PAKAR EMOSI WANITA JAWA</strong></a>
                            </li>
                            <!-- END Header Link -->
                        </ul>
                        <!-- END Left Header Navigation -->

                        <?php $this->load->view('right_menu'); ?>

                    </header>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">

                        <!-- Datatables Block -->
                        <!-- Datatables is initialized in js/pages/uiTables.js -->
                        <div class="block full">
                            <div class="block-title">
                                <h2>KNN</h2>
                                <a class="btn btn-default" href="<?php echo site_url('Knn/lanjut') ?>">Lanjutkan</a>
                            </div>
                            <div class="table-responsive">
                                <legend>Data Yang Dicari</legend>
                                
                                <table id="general-table" class="table table-striped table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama User</th>
                                            <?php for ($i=1; $i < 50; $i++) { ?>
                                                <th>T<?php echo $i?></th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1 ?>
                                        <?php for ($k = 0; $k < count($datarandom); $k++) { ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $datarandom[$k]['nama'] ?></td>
                                                <?php for ($i=1; $i < 50; $i++) { ?>
                                                    <td><?php echo $random[$i] = $datarandom[$k][$i]?></td>
                                                <?php } ?>
                                            </tr>
                                            <?php $no++ ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table id="general-table" class="table table-striped table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama User</th>
                                            <?php for ($i=1; $i < 50; $i++) { ?>
                                                <th>T<?php echo $i?></th>
                                            <?php } ?>
                                            <th>Jarak</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0 ?>
                                        <?php $nu = 1 ?>
                                        <?php for ($j = 0; $j < count($data); $j++) { ?>
                                            <tr>
                                                <td><?php echo $no+1 ?></td>
                                                <td><?php echo $data[$j]['nama'] ?></td>
                                                <?php for ($i=1; $i < 50; $i++) { ?>
                                                    <td><?php echo $data[$j][$i]?></td>
                                                <?php } ?>
                                                <!-- <td> -->
                                                    <?php $e = 0 ?>
                                                    <?php for ($l=1; $l < 50; $l++) { ?>
                                                        <?php $td[$l] = $data[$j][$l] - $random[$l]?>
                                                    <?php } ?>
                                                    <?php for ($l=1; $l < 50; $l++) { ?>
                                                        <?php $p[$l] = pow($td[$l],2)?>
                                                    <?php } ?>
                                                    <?php for ($l=1; $l < 50; $l++) { ?>
                                                        <?php $e = $p[$l]+$e;
                                                        $hasil[$l] = sqrt($e) ?>
                                                    <?php } ?>

                                                    <td><?php echo $hasil[49] ?></td>
                                                    <?php $q = "insert into temp_hasil(t,hasil) values('".$nu."','".$hasil[49]."')";
                                                        $this->db->query($q); ?>
                                            </tr>
                                            <?php $no++;
                                            $nu++ ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END Datatables Block -->
                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->

<?php $this->load->view('footer'); ?>

<!-- <script src="<?php echo base_url() ?>assets/js/pages/uiTables.js"></script>
<script>$(function () {UiTables.init();});</script>

Load and execute javascript code used only in this page
<script src="<?php echo base_url() ?>assets/js/pages/formsComponents.js"></script>
<script>$(function(){ FormsComponents.init(); });</script> -->

<script>
    /* Initialize Bootstrap Datatables Integration */
    App.datatables();

    /* Initialize Datatables */
    $('#datatableku').dataTable({
        columnDefs: [ { orderable: false, targets: [ 1 ] } ],
        pageLength: 5,
        lengthMenu: [[5, 10, 20], [5, 10, 20]],
        stateSave: true
    });

    /* Add placeholder attribute to the search input */
    $('.dataTables_filter input').attr('placeholder', 'Kata Kunci . . . ');

    /* Select/Deselect all checkboxes in tables */
    $('thead input:checkbox').click(function() {
        var checkedStatus   = $(this).prop('checked');
        var table           = $(this).closest('table');

        $('tbody input:checkbox', table).each(function() {
            $(this).prop('checked', checkedStatus);
        });
    });
</script>
            