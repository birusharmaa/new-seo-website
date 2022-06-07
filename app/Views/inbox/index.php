<?= $this->extend('template/main');?>

<?= $this->section('content');?>
<?php $session = \Config\Services::session()?>
<link rel="stylesheet" type="text/css" href="https://plugin.autoseoplugin.com/assets/app-assets/vendors/css/charts/apexcharts.css">
<style>

.custom-blur {
    background: rgba(255, 255, 255, 0.2);
    margin: 10px;
    backdrop-filter: blur(20px);
    border-radius: 0.3rem !important;
}
.custom-gradient {
    background: radial-gradient( ellipse at bottom left, #e65145 40%, rgba(0, 163, 203, 0) 40% ), 
    radial-gradient(ellipse at top right, #b3aedd 30%, rgba(0, 163, 203, 0) 30%), 
    linear-gradient( to right, #c7c3ed 0%, #7367f0 33%, #d55d64 33%, #d55d64 66%, #edb479 66% );
}
</style>
      <!-- Page Header -->
      <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">
                Inbox
            </h2>
            <ol class="breadcrumb mt-4">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Inbox
                </li>
            </ol>
        </div>
    </div>
    <!-- End Page Header -->

    <!--Row-->
    <section>
        <div class="containre-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow-lg p-3 mb-5 bg-white rounded-lg border-0">
                            <div class="px-3 pt-3">
                                <h4 class="mb-0">Recent inquiries</h4>
                            </div>
                            
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="table-responsive mt-1">
                                        <table class="table table-hover mb-0 table1 datatable">
                                            <thead style="border-top:1px solid #dee2e6">
                                                <tr>
                                                    <th class="border-0 font-weight-bold">S.No.</th>
                                                    <th class="border-0 font-weight-bold">Phone No</th>
                                                    <th class="border-0 font-weight-bold">Source</th>
                                                    <th class="border-0 font-weight-bold">Message</th>
                                                    <th class="border-0 font-weight-bold">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $num = 1; if($data): foreach($data as $value): ?>
                                                <tr>
                                                    <td class="border-0 align-baseline"><?= $num; ?></td>
                                                    <td class=" border-0 align-baseline"><?= $value->phone ?></td>
                                                    <td class="border-0 align-baseline"><?= $value->email ?></td>
                                                    <td class="border-0"><p style="white-space: break-spaces; max-width: 98%;"><?= $value->message ?></p></td>
                                                    <td class="border-0 align-baseline"><?= $value->created_at ?></td>
                                                </tr>
                                                <?php $num++; endforeach; endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Row end -->

<?= $this->endSection();?>

<?= $this->section('script');?>
<script src="<?php echo base_url('assets/js/mycustomscripts.js')?>"></script>
<!-- <script src="<?php echo base_url('assets/js/othercustomscripts.js')?>"></script> -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    $(document).ready(function() {
        $(".datatable").DataTable({
            // info: false,
            lengthChange: false,
            // searching: false,
            pageLength: 5,
        });
    });
    </script>
    <script>
    // $(document).ready(function() {
    //     "use strict";
    //     new PerfectScrollbar(".main-chat-list", {
    //         suppressScrollX: !0
    //     }), new PerfectScrollbar("#ChatBody", {
    //         suppressScrollX: !0
    //     });
    // });
    </script>

<?= $this->endSection();?>
