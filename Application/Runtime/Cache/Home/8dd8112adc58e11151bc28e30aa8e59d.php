<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="股票数据测试对比系统,通联股票数据,新浪股票数据,阿里云股票数据">
    <meta name="author" content="ZHIHUA·WEI">
    <meta name="version" content="1.0">
    <!-- END META -->

    <!-- BEGIN SHORTCUT ICON -->
    <link rel="shortcut icon" href="/thinkphp_shares/Public/img/ico/zhihuawei_favicon16x16.ico">
    <!-- END SHORTCUT ICON -->
    <title>股票数据测试对比系统——ZHIHUA·WEI</title>

    <!-- BEGIN STYLESHEET -->
    <link href="/thinkphp_shares/Public/css/bootstrap.min.css" rel="stylesheet"> <!-- bootstrap css-->
    <link href="/thinkphp_shares/Public/css/bootstrap-reset.css" rel="stylesheet"> <!-- BOOTSTRAP CSS -->
    <link href="/thinkphp_shares/Public/assets/font-awesome/css/font-awesome.css" rel="stylesheet"> <!-- FONT AWESOME CSS -->
    <link href="/thinkphp_shares/Public/css/style.css" rel="stylesheet"> <!-- THEME BASIC STYLESHEET -->
    <link href="/thinkphp_shares/Public/css/style-responsive.css" rel="stylesheet"> <!-- THEME RESPONSIVE CSS -->
    <!--[if lt IE 9]>
    <script src="/thinkphp_shares/Public/js/html5shiv.js"></script>
    <script src="/thinkphp_shares/Public/js/respond.min.js"></script>
    <![endif]-->
    <!-- END STYLESHEET -->
</head>
<body>
<!-- BEGIN SECTION -->
<section id="container" class="">
    <!-- BEGIN HEADER -->
    <header class="header white-bg">
        <a href="index.html" class="logo"><img src="/thinkphp_shares/Public/img/zhihuawei_logo.png" style="width: 50px;height: 50px">股票数据测试<span>对比系统</span></a>
    </header>
    <!-- END HEADER -->

    <!-- BEGIN MAIN CONTENT -->
    <section id="main-content">
        <!-- BEGIN WRAPPER  -->
        <section class="wrapper">
            <!-- BEGIN TITLE ROW  -->
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li>»</li>
                        <li  class="active">Shares System</li>
                    </ul>
                </div>
            </div>
            <!-- END TITLE ROW  -->
            <!-- BEGIN TIPS ROW  -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="alert alert-info fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong>备注：</strong> 通联股票数据每秒请求一次！
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="alert alert-success fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong>备注：</strong> 新浪股票数据每秒请求一次！
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="alert alert-warning fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong>备注：</strong> 网极股票数据每十分钟请求一次！
                    </div>
                </div>
            </div>
            <!-- END TIPS ROW -->
            <!-- BEGIN CONTENT ROW  -->
            <div class="row">
                <div class="col-sm-4">
                    <section class="panel">
                        <header class="panel-heading">
                            <span class="label label-primary">通联股票数据</span>
                           <span class="tools pull-right">
                           <a href="javascript:;" class="fa fa-times"></a>
                           </span>
                        </header>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>股票代码</th>
                                <th>股票名称</th>
                                <th>当前价格</th>
                                <th>涨跌幅(%)</th>
                            </tr>
                            </thead>
                            <tbody id="wmcloud_shares">

                            </tbody>
                        </table>
                    </section>
                </div>
                <div class="col-sm-4">
                    <section class="panel">
                        <header class="panel-heading" style="border-top: 2px solid #8175c7;">
                            <span class="label label-info">新浪股票数据</span>
                           <span class="tools pull-right">
                           <a href="javascript:;" class="fa fa-times"></a>
                           </span>
                        </header>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>股票代码</th>
                                <th>股票名称</th>
                                <th>当前价格</th>
                                <th>涨跌幅(%)</th>
                            </tr>
                            </thead>
                            <tbody id="sina_shares">

                            </tbody>
                        </table>
                    </section>
                </div>
                <div class="col-sm-4">
                    <section class="panel">
                        <header class="panel-heading" style="border-top: 2px solid #FF6C60;">
                            <span class="label label-danger">网极股票数据</span>
                           <span class="tools pull-right">
                           <a href="javascript:;" class="fa fa-times"></a>
                           </span>
                        </header>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>股票代码</th>
                                <th>股票名称</th>
                                <th>当前价格</th>
                                <th>涨跌幅(%)</th>
                            </tr>
                            </thead>
                            <tbody id="aliyun_shares">

                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
            <!-- END CONTENT ROW -->
        </section>
        <!-- BEGIN WRAPPER  -->
        <!-- BEGIN WRAPPER  -->
    </section>
    <!-- END MAIN CONTENT -->

    <!-- BEGIN FOOTER -->
    <footer class="site-footer" style="position: fixed;width: 100%;bottom: 0;">
        <div class="text-center">
            2017 &copy; WeiBang Technology by <a href="" target="_blank">ZHIHUA·WEI</a>.
            <a href="" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!-- END FOOTER -->
</section>
<!-- END SECTION -->

<!-- BEGIN JS -->
<script src="/thinkphp_shares/Public/js/jquery.js"></script><!-- BASIC JS LIABRARY -->
<script src="/thinkphp_shares/Public/js/bootstrap.min.js"></script><!-- BOOTSTRAP JS  -->
<script src="/thinkphp_shares/Public/js/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDING JS -->
<script src="/thinkphp_shares/Public/js/jquery.scrollTo.min.js"></script><!-- SCROLLTO JS  -->
<script src="/thinkphp_shares/Public/js/jquery.nicescroll.js"></script><!-- NICESCROLL JS  -->
<script src="/thinkphp_shares/Public/js/respond.min.js"></script><!-- RESPOND JS  -->
<script src="/thinkphp_shares/Public/js/common-scripts.js"></script><!-- BASIC COMMON JS  -->
<!--PAGE JS-->
<script>

    /**
     * 通联股票数据接口
     */
    function wmcloud_shares_api() {
        clearTimeout(wmcloud_api_time);
        $.post("<?php echo U('wmCloudSharesApi');?>", {}, function (result) {
            var html = '';
            var temp = 0;
//            console.log(result);
            for (i = 0; i < result.data.length; i++) {
                html += "<tr><td>" + result.data[i]['ticker'] + "</td>";
                html += "<td>" + result.data[i]['shortNM'] + "</td>";
                html += "<td>" + result.data[i]['lastPrice'] + "</td>";
                temp = result.data[i]['changePct'] * 100;
                html += "<td style='color: red'>" + String(temp).substring(0,5) + "</td></tr>";
            }
            $('#wmcloud_shares').html(html);
            wmcloud_api_time = setTimeout('wmcloud_shares_api()', 500);
        })
    }

    /**
     * 新浪股票数据接口
     */
    function sina_shares_api() {
        clearTimeout(sina_api_time);
        $.post("<?php echo U('sinaSharesApi');?>", {}, function (result) {
            var html = '';
            //console.log(result);
            for (i = 0; i < result.data.length; i++) {
                html += "<tr><td>" + result.data[i]['shares_code'] + "</td>";
                html += "<td>" + result.data[i]['shares_name'] + "</td>";
                html += "<td>" + result.data[i]['shares_price'] + "</td>";
                html += "<td style='color: red'>" + result.data[i]['shares_rate'] + "</td></tr>";
            }
            $('#sina_shares').html(html);
            sina_api_time = setTimeout('sina_shares_api()', 500);
        })
    }

    /**
     * 阿里云网极股票数据接口
     */
    function aliyun_shares_api() {
        clearTimeout(aliyun_api_time);
        $.post("<?php echo U('aliYunSharesApi');?>", {}, function (result) {
            var html = '';
            //console.log(result);
            for (key in result.data) {
                html += "<tr><td>" + key.substring(0, 6) + "</td>";
                html += "<td>" + result.data[key][1] + "</td>";
                html += "<td>" + result.data[key][0] + "</td>";
                html += "<td style='color: red'>" + result.data[key][3] + "</td></tr>";
            }
            $('#aliyun_shares').html(html);
            aliyun_api_time = setTimeout('aliyun_shares_api()', 600000);
        })
    }
    /*function test() {
        clearTimeout(test_time);
        alert("定时循环弹窗测试");
        test_time = setTimeout('test()', 600000);
    }*/
//    test_time = setTimeout('test()', 600000);//N毫秒刷新一次，1000毫秒＝1秒
    wmcloud_api_time = setTimeout('wmcloud_shares_api()', 1000);//N毫秒刷新一次，1000毫秒＝1秒
    sina_api_time = setTimeout('sina_shares_api()', 1000);//N毫秒刷新一次，1000毫秒＝1秒
    aliyun_api_time = setTimeout('aliyun_shares_api()', 1000);//N毫秒刷新一次，1000毫秒＝1秒
</script>
<!-- END JS -->
</body>
</html>