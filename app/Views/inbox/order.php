<?= $this->extend('template/main'); ?>

<?= $this->section('content'); ?>
<?php $session = \Config\Services::session() ?>

<!-- Page Header -->
<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">
            <?= $title; ?>
        </h2>
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <?= $title; ?>
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

                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive mt-1">
                                    <table class="table table-hover mb-0 table1 datatable">
                                        <thead style="border-top:1px solid #dee2e6">
                                            <tr>
                                                <th class="border-0 font-weight-bold">S.No.</th>
                                                <th class="border-0 font-weight-bold">Product Name</th>
                                                <th class="border-0 font-weight-bold">Customer Name</th>
                                                <th class="border-0 font-weight-bold">Customer Email</th>
                                                <th class="border-0 font-weight-bold">Customer Mobile</th>
                                                <th class="border-0 font-weight-bold">Order Status</th>
                                                <th class="border-0 font-weight-bold">Payment Status</th>
                                                <th class="border-0 font-weight-bold">Payment Type</th>
                                                <th class="border-0 font-weight-bold">Order Date</th>
                                                <th class="border-0 font-weight-bold" style="width:13%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

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

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<!-- <script src="<?php echo base_url('assets/js/othercustomscripts.js') ?>"></script> -->

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
    $(document).ready(function() {
        "use strict";
        new PerfectScrollbar(".main-chat-list", {
            suppressScrollX: !0
        }), new PerfectScrollbar("#ChatBody", {
            suppressScrollX: !0
        });
    });
</script>

<?= $this->endSection(); ?>