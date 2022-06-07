<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<?php $session = \Config\Services::session();
?>
<!-- <link rel="stylesheet" type="text/css" href="https://plugin.autoseoplugin.com/assets/app-assets/vendors/css/charts/apexcharts.css"> -->
<style>
    .text-gredirn {
        background-image: linear-gradient(to bottom, #ff001b, var(--primary));
        color: transparent;
        -webkit-background-clip: text;
        background-clip: text;
    }
    .table.dataTable tr{
        white-space: normal!important;
    }
</style>

<!-- Page Header -->
<div class="page-header">
    <div>
        <?php if ($session->has('login_user')) {
            $user_data = $session->get('login_user');
        } ?>
        <h2 class="main-content-title tx-24 mg-b-5">
            Welcome <?php echo $user_data['user_name']; ?>
        </h2>
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
</div>
<!-- End Page Header -->

<!--Row-->
<section>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="text-center top-50 h-50 start-50 translate-middle position-fixed">
                <ion-icon name="cog-outline" class="size"></ion-icon>
                <!-- <i class="fa fa-cog size"></i> -->
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card custom-gradient shadow1 mb-5 rounded-lg border-0">
                        <div class="card-content custom-blur">
                            <div class="card-header border-0 pb-0 justify-content-center text-center">
                                <div class="avatar d-inline-flex mb-1 avatar-xl bg-primary shadow mt-0">
                                    <div class="avatar-content">
                                        <i class="fa fa-bell"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <h4 class="mb-2 text-gredirn fw-bolder">Hi <?php echo $user_data['user_name']; ?>,</h4>
                                        <h5 class="mb-2 text-body">Protect yourself and loved ones
                                            from
                                            coronavirus.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card-style">
                        <!-- <span style="--i:0;"></span>
                        <span style="--i:1;"></span>
                        <span style="--i:2;"></span>
                        <span style="--i:3;"></span> -->
                        <div class="glass shadow1 p-2" style="min-height: 230px;">
                            <img width="60" src="https://img.icons8.com/fluency/344/question-shield.png" alt="">
                            <div class="text-end">
                                <p class="fs-2 text-family text-danger fw-bolder"><?= $count; ?></p>
                            </div>
                            <h6 class="fw-bolder">Enquiries</h6>
                            <p><small class="fw-bold text-muted">All Business Enquiries</small></p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6 col-12">
                    <div class="card-style">
                        <div class="glass shadow1 p-2" style="min-height: 230px;">
                            <img width="60" src="https://img.icons8.com/fluency/344/total-sales-1.png" alt="">
                            <div class="text-end">
                                <p class="fs-2 text-family text-info fw-bolder">164223</p>
                            </div>
                            <h5 class="fw-bolder">Total Views</h5>
                            <p>
                            <small class="fw-bold text-muted">All Customer Visits</small>
                            </p>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-3 col-12">
                    <div class="card-style">
                        
                        <div class="glass shadow1 p-2" style="min-height: 230px;">
                            <img width="60" src="https://img.icons8.com/fluency/344/ok.png" alt="">
                            <div class="text-end">
                                <div class="text-end">
                                    <p class="fs-2 text-family text-danger fw-bolder"><?= $userInfo->user_status=="1"?'Paid':'Unpaid';?></p>
                                </div>
                            </div>
                            <h6 class="fw-bolder">Status</h6>
                            <small class="fw-bold text-muted"><?= $userInfo->user_status=="1"?'Paid':'Unpaid';?> Status </small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="card shadow1 p-3 mb-5 bg-white rounded-lg border2">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title"><span class="fs-2 text-family">M</span><span class="text-yellow">onthly Visit</span></h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body p-0 pb-0" style="position: relative;">
                                <div id="sales-line-chart" style="min-height: 285px;">
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 677px; height: 307px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card border2 shadow1 p-0 mb-5 bg-white rounded-lg">
                        <div class="card-header bg-white">
                            <div class="media d-flex">
                                <div class="media-body m-0 text-left">
                                    <h5 class="m-0 pt-2"><span class="fs-2 text-family ">B</span><span class="text-yellow">usiness Performance</span></h5>
                                </div>

                            </div>

                        </div>
                        <div class="card-content" style="background-color: #f4f6fb;">
                            <div class="card-body" style="min-height: 288px; overflow:hidden; width:100%; position:relative">

                                <div class="media d-flex align-items-center">
                                    <div class="media-body text-left">
                                        <h4 class="text-success text-family fw-bolder">287</h4>
                                        <p class="fw-bolder text-muted">Total Update</p>
                                    </div>
                                    <div>
                                        <img width="50" src="https://img.icons8.com/nolan/344/news.png" alt="">
                                    </div>
                                </div>
                                <div class="element"></div>
                                <hr>
                                <div class="media d-flex align-items-center">
                                    <div class="media-body text-left">
                                        <h4 class="text-primary text-family fw-bolder">7168</h4>
                                        <p class="fw-bolder text-muted">Total Tags</p>
                                    </div>
                                    <div>
                                        <img width="50" src="https://img.icons8.com/external-kiranshastry-gradient-kiranshastry/344/external-tag-ecommerce-kiranshastry-gradient-kiranshastry.png" alt="">
                                    </div>
                                </div>
                                <div class="element2"></div>
                                <hr>
                                <div class="media d-flex align-items-center">
                                    <div class="media-body text-left">
                                        <h4 class="text-danger text-family fw-bolder">24</h4>
                                        <p class="fw-bolder text-muted">Valid Pages</p>
                                    </div>
                                    <div>
                                        <img width="50" src="https://img.icons8.com/nolan/344/copy.png" alt="files">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="row">
                <div class="col-12">
                    <div class="card shadow1 mb-5 bg-white rounded-lg border2">
                        <div class="px-3 pt-3">
                            <h4 class="mb-0"><span class="fs-2 text-family ">R</span><span class="text-yellow border-warning border-bottom pb-2">ecent Enquires</span></h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive mt-1">
                                    <table class="table mb-0 table-hover table1 datatable">
                                        <thead>
                                            <tr>
                                                <th class="border-0 font-weight-bold" style="width:5%;">S.No.</th>
                                                <th class="border-0 font-weight-bold">Phone No</th>
                                                <th class="border-0 font-weight-bold">Email</th>
                                                <th class="border-0 font-weight-bold">Enquiry</th>
                                                <th class="border-0 font-weight-bold">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $num = 1;
                                            if ($enquiry) : foreach ($enquiry as $value) : ?>
                                                    <tr>
                                                        <td class="border-0 text-yellow fw-bold align-baseline"><?= $num; ?></td>
                                                        <td class=" border-0 align-baseline"><?= $value->phone ?></td>
                                                        <td class="border-0 align-baseline"><?= $value->email ?></td>
                                                        <td class="border-0"><?= $value->message ?></td>
                                                        <td class="border-0" style="white-space: nowrap;"><?= date('d-M-Y H:s', strtotime($value->created_at)); ?></td>
                                                    </tr>
                                            <?php $num++;
                                                endforeach;
                                            endif; ?>
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
<script src="<?= base_url(); ?><?= env('SEO_SUBPATH') ?>/assets/js/mycustomscripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    $(".datatable").DataTable({
        responsive: false,
        paging: false,
        ordering: false,
        info: false,
    });
    // $(window).on("load", function() {
    //     var e = "#7367F0",
    //         t = "#EA5455",
    //         r = "#FF9F43",
    //         o = "#9c8cfc",
    //         a = "#FFC085",
    //         s = "#f29292",
    //         i = "#b9c3cd",
    //         l = "#e7eef7";
    //     var b = {
    //         chart: {
    //             height: 275,
    //             toolbar: {
    //                 show: !1
    //             },
    //             type: "line",
    //             dropShadow: {
    //                 enabled: !0,
    //                 top: 20,
    //                 left: 2,
    //                 blur: 15,
    //                 opacity: .2
    //             }
    //         },
    //         stroke: {
    //             curve: "smooth",
    //             width: 10
    //         },
    //         grid: {
    //             borderColor: l
    //         },
    //         legend: {
    //             show: !1
    //         },
    //         colors: ["#df87f2"],
    //         fill: {
    //             type: "gradient",
    //             gradient: {
    //                 shade: "dark",
    //                 inverseColors: !6,
    //                 gradientToColors: [r],
    //                 shadeIntensity: 1,
    //                 type: "horizontal",
    //                 opacityFrom: 1,
    //                 opacityTo: 1,
    //                 stops: [0, 100, 100, 100]
    //             }
    //         },
    //         markers: {
    //             size: 0,
    //             hover: {
    //                 size: 5
    //             }
    //         },
    //         xaxis: {
    //             labels: {
    //                 style: {
    //                     colors: ["#df87f2"],
    //                 }
    //             },
    //             axisTicks: {
    //                 show: !1
    //             },
    //             categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "July", "Aug", "Sep", "Oct", "Nov",
    //                 "Dec"
    //             ],
    //             axisBorder: {
    //                 show: !1
    //             },
    //             tickPlacement: "on"
    //         },

    //         yaxis: {
    //             tickAmount: 5,
    //             labels: {
    //                 style: {
    //                     color: ["#df87f2"],
    //                 },
    //                 formatter: function(e) {
    //                     return 999 < e ? (e / 1e3).toFixed(1) + "k" : e
    //                 }
    //             }
    //         },
    //         tooltip: {
    //             x: {
    //                 show: !1
    //             }
    //         },
    //         series: [{
    //             name: "Visits",
    //             data: [19310, 18570, 19402, 36581, 25445, 14653, 11294, 9705, 13872, 15524, 12628,
    //                 10061
    //             ]
    //         }]
    //     };
    //     new ApexCharts(document.querySelector("#sales-line-chart"), b).render();
    // });
</script>

<?= $this->endSection(); ?>