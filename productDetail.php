<!DOCTYPE html>
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>北京智通智慧科技有限公司 | 首页</title>
    <meta name="description" content="北京智通智慧科技有限公司">
    <meta name="author" content=.phpcoder.me">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="style/images/img/favicon.ico">

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="style/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="style/css/font-awesome.css" rel="stylesheet">

    <!-- Fontello CSS -->
    <link href="style/css/fontello.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="style/css/settings.css" media="screen" rel="stylesheet">
    <link href="style/css/extralayers.css" media="screen" rel="stylesheet">
    <link href="style/css/magnific-popup.css" rel="stylesheet">
    <link href="style/css/animations.css" rel="stylesheet">
    <link href="style/css/owl.carousel.css" rel="stylesheet">

    <!-- iDea core CSS file -->
    <link href="style/css/style.css" rel="stylesheet">

    <!-- Style Switcher Styles (Remove these two lines) -->
    <link href="#" data-style="styles" rel="stylesheet">
    <link href="style/css/style-switcher.css" rel="stylesheet">


    <link href="style/css/sweet-alert.css" rel="stylesheet">
    <link href="style/css/sweetalert.css" rel="stylesheet">

    <!-- Custom css -->
    <link href="style/css/custom.css" rel="stylesheet">
    <script src="http://cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <!--.php5 shim and Respond.js for IE8 support of.php5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="style/js.php5shiv.min.js"></script>
    <script src="style/js/respond.min.js"></script>
    <![endif]-->
</head>

<!-- body classes:
        "boxed": boxed layout mode e.g. <body class="boxed">
        "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1">
-->
<body class="front no-trans">
<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper">

    <!-- header-top start (Add "dark" class to .header-top in order to enable dark header-top e.g <div class="header-top dark">) -->
    <!-- ================ -->
    <!-- header-top end -->

    <!-- header start classes:
        fixed: fixed navigation mode (sticky menu) e.g. <header class="header fixed clearfix">
         dark: dark header version e.g. <header class="header dark clearfix">
    ================ -->
    <?php
    require_once "controller/Header.php";
    $header = Header::getInstance();
    $header->headerGenerate(3, 1);
    ?>
    <!-- header end -->

    <!-- page-intro start-->
    <!-- ================ -->
    <div class="page-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home pr-10"></i><a href="index.php">主页</a></li>
                        <li class="active">产品详情</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- page-intro end -->

    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container">

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-12">

                    <!-- page-title start -->
                    <!-- ================ -->
                    <h1 class="page-title margin-top-clear" id="productName"></h1>
                    <!-- page-title end -->

                    <div class="row">
                        <div class="col-md-4">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills white space-top" role="tablist" id="resources">
                                <li class="active"><a href="#productImages" role="tab" data-toggle="tab" title="images"><i
                                                class="fa fa-camera pr-5"></i> 图片</a></li>
                                <li><a href="#productVideo" role="tab" data-toggle="tab" title="video"><i
                                                class="fa fa-video-camera pr-5"></i> 视频</a></li>
                            </ul>

                            <!-- Tab panes start-->
                            <div class="tab-content clear-style">
                                <div class="tab-pane active" id="productImages">
                                    <div class="owl-carousel content-slider-with-controls-bottom" id="imageNode">


                                    </div>
                                </div>
                                <div class="tab-pane" id="productVideo">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        视频资源还没上传,敬请期待
                                    </div>
                                </div>
                            </div>

                            <!-- Tab panes end-->
                            
                            <div class="row">
                                <form role="form">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>在线客服</label><br/>
                                            <a href="tencent://message/?uin=2679943834&Site=北京智通智慧科技有限公司&Menu=yes"><i
                                                        class="fa fa-qq"></i> </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                </form>
                            </div>
                        </div>

                        <!-- product side start -->
                        <aside class="col-md-8">
                            <div class="sidebar">
                                <div class="side product-item vertical-divider-left">
                                    <div class="tabs-style-2">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="active"><a href="#h2tab1" role="tab" data-toggle="tab"><i
                                                            class="fa fa-file-text-o pr-5"></i>产品介绍</a></li>
                                            <li><a href="#h2tab2" role="tab" data-toggle="tab"><i
                                                            class="fa fa-files-o pr-5"></i>规格参数</a></li>
                                            <li><a href="#h2tab3" role="tab" data-toggle="tab"><i
                                                            class="fa fa-star pr-5"></i>产品评价：共<span
                                                            id="commentCount"></span></a></li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content padding-top-clear padding-bottom-clear">
                                            <div class="tab-pane fade in active" id="h2tab1">
                                                <h4 class="title">单位</h4>
                                                <p id="unit"></p>
                                                <h4>商品简介</h4>
                                                <p id="description"></p>
                                                <h4> 适用范围：</h4>
                                                <p id="availableScope"></p>

                                            </div>
                                            <div class="tab-pane fade" id="h2tab2">
                                                <h4 class="space-top">参数</h4>
                                                <hr>
                                                <dl class="dl-horizontal">
                                                    <dt>性状：</dt>
                                                    <dd id="productFeature">冻干</dd>
                                                    <dt>使用方法：</dt>
                                                    <dd id="useage"></dd>
                                                    <dt>保存条件:</dt>
                                                    <dd id="condition"></dd>
                                                    <dt>有 效 期:</dt>
                                                    <dd id="expiration"></dd>
                                                    <dt>执行标准:</dt>
                                                    <dd id="operativenorm"></dd>
                                                </dl>
                                                <hr>
                                            </div>
                                            <div class="tab-pane fade" id="h2tab3">
                                                <!-- comments start -->
                                                <div class="comments margin-clear space-top" id="arguments">
                                                </div>
                                                <ul class="pagination">

                                                </ul>

                                                <!-- comments end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- product side end -->
                    </div>

                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->

  

    <!-- section start -->
    <!-- ================ -->
    <div class="section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>相关产品</h2>
                    <div class="separator-2"></div>
                    <div class="row grid-space-20" id="recommend">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section end -->

    <!-- section start -->
    <!-- ================ -->

    <!-- section end -->

    <!-- footer start (Add "light" class to #footer in order to enable light footer) -->
    <!-- ================ -->
    <?php
    include_once "controller/Footer.php";
    ?>
    <!-- footer end -->

</div>
<!-- page-wrapper end -->

<!-- JavaScript files placed at the end of the document so the pages load faster
================================================== -->


<!-- Jquery and Bootstap core js files -->
<script type="text/javascript" src="style/js/jquery.min.js"></script>
<!-- Owl carousel javascript -->
<script type="text/javascript" src="style/js/owl.carousel.js"></script>

<!-- Magnific Popup javascript -->
<script type="text/javascript" src="style/js/jquery.magnific-popup.min.js"></script>

<!-- Initialization of Plugins -->
<script type="text/javascript" src="style/js/template.js"></script>

<script src="style/js/sweetalert.min.js"></script>
<script>
    //获取url参数
    function getQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        if (r != null)
            return decodeURIComponent(r[2]);
        return null;
    }
    //render星级
    function renderStarLevel(stars) {
        var starHteml = "";
        if (stars == "") {
            return;
        }
        for (var i = 0; i < 5; i++) {
            starHteml += '<i class="fa fa-star ' + (i < stars ? "text-default" : "") + '"></i>';
        }
        return starHteml;
    }


    var type = getQueryString("type");
    var id = getQueryString("id");
    var $commentTarget = $("#arguments");
    var globalComments = [];

    function updateUI($this, page) {
        $(".pagination li").each(function () {
            $(this).removeClass("active");
        });
        $($this).parent().addClass("active");
        refreshComments(page);
    }

    function refreshComments(page) {
        $commentTarget.empty();
        for (var i = 0 + (page - 1) * 2; i < globalComments.length; i++) {
            if (page != 1) {
                $('<div class="comment clearfix">' +
                    '<div class="comment-avatar">' +
                    '<img src="style/images/avatar.jpg" alt="avatar">' +
                    '</div>' +
                    '<div class="comment-content">' +
                    '<h3>' + globalComments[i].username + '</h3>' +
                    '<div class="comment-meta">' +
                    renderStarLevel(globalComments[i].properLevel) +
                    '| ' + globalComments[i].time + '' +
                    '</div>' +
                    '<div class="comment-body clearfix">' +
                    '<p>' + globalComments[i].content + '</p>' +
                    '</div>' +
                    '</div>' +
                    '</div>').appendTo($commentTarget);
            } else {
                if (i < 2) {
                    $('<div class="comment clearfix">' +
                        '<div class="comment-avatar">' +
                        '<img src="style/images/avatar.jpg" alt="avatar">' +
                        '</div>' +
                        '<div class="comment-content">' +
                        '<h3>' + globalComments[i].username + '</h3>' +
                        '<div class="comment-meta">' +
                        renderStarLevel(globalComments[i].properLevel) +
                        '| ' + globalComments[i].time + '' +
                        '</div>' +
                        '<div class="comment-body clearfix">' +
                        '<p>' + globalComments[i].content + '</p>' +
                        '</div>' +
                        '</div>' +
                        '</div>').appendTo($commentTarget);
                } else {
                    $pagetarget.empty();
                    var pages = Math.ceil(globalComments.length / 2);
                    for (var $i = 0; $i < pages + 2; $i++) {
                        if ($i == 0) {
                            $('<li><a>«</a></li>').appendTo($pagetarget);
                        } else if ($i == 1) {
                            $('<li class="active"><a onclick="updateUI(this,1);">1 <span class="sr-only">(current)</span></a></li>').appendTo($pagetarget);
                        } else if ($i == pages + 1) {
                            $('<li><a>»</a></li>').appendTo($pagetarget);
                        } else {
                            $('<li><a onclick="updateUI(this,' + $i + ');">' + $i + '</a></li>').appendTo($pagetarget);
                        }
                    }
                    break;
                }
            }

        }
    }

    var product;
    function uploadProduct() {
        $.ajax({
            dataType: "json",
            type: "get",
            url: "controller/productlist.php?type=" + type + "&id=" + id,
            success: function (data) {
                if (data.code == 200) {
                    product = data.data.product[0];
                }
            },
            error: function (code, message, data) {
                alert("发生错误：" + message);
            }
        });
    }

    function loadData() {
        $("#imageNode").empty();
        $.ajax({
            dataType: "json",
            type: "get",
            url: "controller/productlist.php?type=" + type + "&id=" + id,
            success: function (data) {
                if (data.code == 200) {
                    product = data.data.product[0];
                    var comments = data.data.comments;
                    var recommend = data.data.recommend;
                    globalComments = comments;


                    var $recommendTarget = $("#recommend");
                    var $resourcesTarget = $("#resources");

                    $("#productName").text(product.productName);
                    $("#productStars").html(renderStarLevel(product.starLevel));

                    for (var i = 1; i < 6; i++) {
                        if (product["image" + i] != "") {
                            $('<div class="overlay-container">' +
                                '<img src="' + product["image" + i] + '" alt="">' +
                                '<a href="' + product["image" + i] + '" class="popup-img overlay" title="image title"><i class="fa fa-search-plus"></i></a>' +
                                '</div>').appendTo($("#imageNode"));
                        }
                    }
                    if ($('.owl-carousel').length>0) {
                        $(".owl-carousel.carousel").owlCarousel({
                            items: 4,
                            pagination: false,
                            navigation: true,
                            navigationText: false
                        });
                        $(".owl-carousel.carousel-autoplay").owlCarousel({
                            items: 4,
                            autoPlay: 5000,
                            pagination: false,
                            navigation: true,
                            navigationText: false
                        });
                        $(".owl-carousel.clients").owlCarousel({
                            items: 4,
                            autoPlay: true,
                            pagination: false,
                            itemsDesktopSmall: [992,5],
                            itemsTablet: [768,4],
                            itemsMobile: [479,3]
                        });
                        $(".owl-carousel.content-slider").owlCarousel({
                            singleItem: true,
                            autoPlay: 5000,
                            navigation: false,
                            navigationText: false,
                            pagination: false
                        });
                        $(".owl-carousel.content-slider-with-controls").owlCarousel({
                            singleItem: true,
                            autoPlay: false,
                            navigation: true,
                            navigationText: false,
                            pagination: true
                        });
                        $(".owl-carousel.content-slider-with-controls-autoplay").owlCarousel({
                            singleItem: true,
                            autoPlay: 5000,
                            navigation: true,
                            navigationText: false,
                            pagination: true
                        });
                        $(".owl-carousel.content-slider-with-controls-bottom").owlCarousel({
                            singleItem: true,
                            autoPlay: false,
                            navigation: true,
                            navigationText: false,
                            pagination: true
                        });
                    };

                    $("#imageNode").parent().css("opacity", "1");
                    $("#originalPrice").text("￥"+product.price);
                    $("#price").text(product.discountPrice);
                    $("#unit").text(product.unit);
                    $("#description").text(product.productDescription);
                    $("#availableScope").text(product.availableScope);

                    $("#productFeature").text(product.productFeature);

                    $("#useage").text(product.useage);

                    $("#condition").text(product.condition);
                    $("#expiration").text(product.expiration);
                    $("#operativenorm").text(product.operativenorm);
                    //评价
                    $("#commentCount").text(comments.length + "条");

                    var $pagetarget = $(".pagination");
                    for (var i = 0; i < comments.length; i++) {
                        if (i < 2) {
                            $('<div class="comment clearfix">' +
                                '<div class="comment-avatar">' +
                                '<img src="style/images/avatar.jpg" alt="avatar">' +
                                '</div>' +
                                '<div class="comment-content">' +
                                '<h3>' + comments[i].username + '</h3>' +
                                '<div class="comment-meta">' +
                                renderStarLevel(comments[i].properLevel) +
                                '| ' + comments[i].time + '' +
                                '</div>' +
                                '<div class="comment-body clearfix">' +
                                '<p>' + comments[i].content + '</p>' +
                                '</div>' +
                                '</div>' +
                                '</div>').appendTo($commentTarget);
                        } else {
                            $pagetarget.empty();
                            var pages = Math.ceil(comments.length / 2);
                            for (var $i = 0; $i < pages + 2; $i++) {
                                if ($i == 0) {
                                    $('<li><a>«</a></li>').appendTo($pagetarget);
                                } else if ($i == 1) {
                                    $('<li class="active"><a onclick="updateUI(this,1);">1 <span class="sr-only">(current)</span></a></li>').appendTo($pagetarget);
                                } else if ($i == pages + 1) {
                                    $('<li><a>»</a></li>').appendTo($pagetarget);
                                } else {
                                    $('<li><a onclick="updateUI(this,' + $i + ');">' + $i + '</a></li>').appendTo($pagetarget);
                                }
                            }
                            break;

                        }
                    }
                    //推荐产品
                    for (var i = 0; i < recommend.length; i++) {
                        $('<div class="col-md-3 col-sm-6 masonry-grid-item">' +
                            '<div class="listing-item">' +
                            '<div class="overlay-container">' +
                            '<img src="' + recommend[i].image1 + '" alt="">' +
                            '<a href="productDetail.php?id=' + recommend[i].id + '&type=' + type + '" class="overlay small">' +
                            '<i class="fa fa-plus"></i>' +
                            '<span>查看详情</span>' +
                            '</a>' +
                            '</div>' +
                            '<div class="listing-item-body clearfix">' +
                            '<h3 class="title"><a href="productDetail.php?id=' + recommend[i].id + '&type=' + type + '">' + recommend[i].productName + '</a></h3>' +
                            '<p>' + recommend[i].unit + '</p>' +
                            '</div>' +
                            '</div>' +
                            '</div>').appendTo($recommendTarget);
                    }

                }
            },
            error: function (code, message, data) {
                alert("发生错误：" + message);
            }
        });
    }

    loadData();
</script>
<script src="style/js/Helper/front/productDetail.js" ></script>
<script type="text/javascript" src="style/js/bootstrap.min.js"></script>

<!-- Modernizr javascript -->
<script type="text/javascript" src="style/js/modernizr.js"></script>

<!-- Isotope javascript -->
<script type="text/javascript" src="style/js/isotope.pkgd.min.js"></script>

<!-- Appear javascript -->
<script type="text/javascript" src="style/js/jquery.appear.js"></script>

<!-- Sharrre javascript -->
<script type="text/javascript" src="style/js/jquery.sharrre.js"></script>

<!-- Count To javascript -->
<script type="text/javascript" src="style/js/jquery.countTo.js"></script>

<!-- Parallax javascript -->
<script src="style/js/jquery.parallax-1.1.3.js"></script>

<!-- Contact form -->
<script src="style/js/jquery.validate.js"></script>

<!-- SmoothScroll javascript -->
<script type="text/javascript" src="style/js/jquery.browser.js"></script>
<script type="text/javascript" src="style/js/SmoothScroll.js"></script>



<!-- Custom Scripts -->
<script type="text/javascript" src="style/js/custom.js"></script>
<!-- Color Switcher (Remove these lines) -->
<script type="text/javascript" src="style/js/style-switcher.js"></script>

<!-- Color Switcher End -->
</body>
</html>
