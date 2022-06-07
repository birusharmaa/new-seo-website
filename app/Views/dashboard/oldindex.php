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
            <?php if($session->has('login_user')){ $user_data = $session->get('login_user'); }?>
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
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="card custom-gradient shadow-lg mb-5 rounded-lg border-0">
                            <div class="card-content custom-blur" style="height:200px;">
                                <div
                                    class="card-header border-0 pb-0 justify-content-center text-center">
                                    <div
                                        class="avatar d-inline-flex mb-1 avatar-xl bg-primary shadow mt-0">
                                        <div class="avatar-content">
                                            <i class="fa fa-bell"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <h4 class="mb-2 text-body">Hi <?php echo $user_data['user_name']; ?>,</h4>
                                            <h5 class="mb-2 text-body">Protect yourself and loved ones
                                                from
                                                coronavirus.</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <div class="card shadow-lg mb-5 rounded-lg border-0"
                            style="height:213px; background:#e3e1f6">
                            <div class="card-header border-0 d-flex flex-column align-items-start pb-0">
                                <div class="avatar p-4 mb-2 rounded-circle m-0"
                                    style="background: rgba(115,103,240,.15);">
                                    <div class="avatar-content">
                                        <i class="fa fa-envelope"
                                            style="font-size:25px; color:#7367F0;"></i>
                                    </div>
                                </div>
                                <div class="card-body p-0 pb-2">
                                    <h4 class="text-bold-700 text-body mt-1 mb-25"><?= $count; ?></h4>
                                    <h6 class="mb-0 text-body">Enquiries</h6>
                                    <p class="mb-0 text-muted"><small>Total No. of Business
                                            Enquiries</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <div class="card shadow-lg mb-5 rounded-lg border-0"
                            style="height:213px; background:#e3e1f6;">
                            <div class="card-header border-0 d-flex flex-column align-items-start pb-0">
                                <div class="avatar p-4 mb-2 rounded-circle m-0"
                                    style="background: rgba(115,103,240,.15);">
                                    <div class="avatar-content">
                                        <i class="fa fa-eye" style="font-size:25px; color:#7367F0;"></i>
                                    </div>
                                </div>
                                <div class="card-body p-0 pb-4">
                                    <h4 class="text-bold-700 text-body mt-1 mb-25">164223</h4>
                                    <h6 class="mb-0 text-body">Total Views</h6>
                                    <p class="mb-0 text-muted"><small>Total No. of Customer
                                            Visits All</small>
                                    </p>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <div class="card shadow-lg mb-5 bg-custom rounded-lg border-0"
                            style="height:213px; background:#f8eadc">
                            <div class="card-header border-0 d-flex flex-column align-items-start pb-0">
                                <div class="avatar p-4 mb-2 rounded-circle m-0"
                                    style="background: rgba(255,159,67,.15)">
                                    <div class="avatar-content">
                                        <i class="fa fa-inr text-warning" style="font-size:25px;"></i>
                                    </div>
                                </div>
                                <div class="card-body p-0 pb-4">
                                    <h4 class="text-bold-700 text-body mt-1 mb-25">PAID</h4>
                                    <h6 class="mb-0 text-body">Status</h6>
                                    <p class="mb-0 text-muted"><small>Expired in : 137 days</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="card shadow-lg p-3 mb-5 bg-white rounded-lg border-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">Monthly Visit</h4>
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
                        <div class="card border-0 shadow-lg p-0 mb-5 bg-white rounded-lg">
                            <div class="card-header bg-white">
                                <div class="media d-flex">
                                    <div class="media-body m-0 text-left">
                                        <h5 class="m-0 pt-2">Business Performance</h5>
                                    </div>

                                </div>

                            </div>
                            <div class="card-content" style="background-color: #f4f4f4;">
                                <div class="card-body" style="min-height: 288px;">

                                    <div class="media d-flex align-items-center">
                                        <div class="media-body text-left">
                                            <h4 class="info text-custom">287</h4>
                                            <h6>Total Update</h6>
                                        </div>
                                        <div>
                                            <i
                                                class="fa fa-newspaper-o text-muted fa-2x float-right"></i>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="media d-flex align-items-center">
                                        <div class="media-body text-left">
                                            <h4 class="info text-custom">7168</h4>
                                            <h6>Total Tags</h6>
                                        </div>
                                        <div>
                                            <i class="fa fa-tags text-muted fa-2x float-right"
                                                aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="media d-flex align-items-center">
                                        <div class="media-body text-left">
                                            <h4 class="info text-custom">24</h4>
                                            <h6>Valid Pages</h6>
                                        </div>
                                        <div>
                                            <i class="fa fa-files-o text-muted fa-2x float-right"
                                                aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow-lg p-3 mb-5 bg-white rounded-lg border-0">
                            <div class="px-3 pt-3">
                                <h4 class="mb-0">Recent Enquires</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="table-responsive mt-1">
                                        <table class="table table-hover mb-0 table1 datatable">
                                            <thead style="border-top:1px solid #dee2e6">
                                                <tr>
                                                    <th class="border-0 font-weight-bold">S.No.</th>
                                                    <th class="border-0 font-weight-bold">Phone No</th>
                                                    <th class="border-0 font-weight-bold">Email</th>
                                                    <th class="border-0 font-weight-bold">Enquiry</th>
                                                    <th class="border-0 font-weight-bold">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $num = 1; if($enquiry): foreach($enquiry as $value): ?>
                                                <tr>
                                                    <td class="border-0 align-baseline"><?= $num; ?></td>
                                                    <td class=" border-0 align-baseline"><?= $value->phone ?></td>
                                                    <td class=" border-0 align-baseline"><?= $value->email ?></td>
                                                    <td class="border-0"><?= $value->message ?></td>
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
<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/js/mycustomscripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    $(window).on("load", function() {
        var e = "#7367F0",
            t = "#EA5455",
            r = "#FF9F43",
            o = "#9c8cfc",
            a = "#FFC085",
            s = "#f29292",
            i = "#b9c3cd",
            l = "#e7eef7";
        var b = {
            chart: {
                height: 270,
                toolbar: {
                    show: !1
                },
                type: "line",
                dropShadow: {
                    enabled: !0,
                    top: 20,
                    left: 2,
                    blur: 6,
                    opacity: .2
                }
            },
            stroke: {
                curve: "smooth",
                width: 4
            },
            grid: {
                borderColor: l
            },
            legend: {
                show: !1
            },
            colors: ["#df87f2"],
            fill: {
                type: "gradient",
                gradient: {
                    shade: "dark",
                    inverseColors: !1,
                    gradientToColors: [e],
                    shadeIntensity: 1,
                    type: "horizontal",
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100, 100, 100]
                }
            },
            markers: {
                size: 0,
                hover: {
                    size: 5
                }
            },
            xaxis: {
                labels: {
                    style: {
                        colors: i
                    }
                },
                axisTicks: {
                    show: !1
                },
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "July", "Aug", "Sep", "Oct", "Nov",
                    "Dec"
                ],
                axisBorder: {
                    show: !1
                },
                tickPlacement: "on"
            },
            yaxis: {
                tickAmount: 5,
                labels: {
                    style: {
                        color: i
                    },
                    formatter: function(e) {
                        return 999 < e ? (e / 1e3).toFixed(1) + "k" : e
                    }
                }
            },
            tooltip: {
                x: {
                    show: !1
                }
            },
            series: [{
                name: "Visits",
                data: [19310, 18570, 19402, 36581, 25445, 14653, 11294, 9705, 13872, 15524, 12628,
                    10061
                ]
            }]
        };
        new ApexCharts(document.querySelector("#sales-line-chart"), b).render();
    });
    </script>

<?= $this->endSection();?>
