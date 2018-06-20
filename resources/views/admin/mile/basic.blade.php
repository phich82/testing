<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ANA - A7.1 - 積算基礎設定変更</title>
    <meta name="robots" content="noindex">
    <meta name="description" content="Search for activities and tours - powered by Veltra">
    <meta name="keywords" content="">
    <!--#include virtual="/admin/common/inc/cssjs.html" -->
    <link rel="stylesheet" href="/admin/common/css/reset.css">
    <link rel="stylesheet" href="/admin/common/css/style.css">
    <link rel="stylesheet" href="/admin/common/css/animate.css">
    <link rel="stylesheet" href="/admin/common/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/admin/common/css/slick.css">
    <link rel="stylesheet" href="/admin/common/css/balloon.css">
    <link rel="stylesheet/less" type="text/css" href="/admin/common/css/layout.less">
    <link href="//fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="/admin/common/js/less.min.js"></script>
    <script src="/admin/common/js/jquery-1.12.4.min.js"></script>
    <script src="/admin/common/js/heightFixed.js"></script>
    <script src="/admin/common/js/jquery.fancybox.min.js"></script>
    <script src="/admin/common/js/slick.min.js"></script>
    <script src="/admin/common/js/js.cookie.js"></script>
    <script src="/admin/common/js/common.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/admin/common/js/html5shiv.js"></script>
    <![endif]-->
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/admin/common/js/datepicker-ja.js"></script>
    <script src="/admin/common/js/Chart.min.js"></script>
    <script src="/admin/common/js/form_validation.js"></script>
</head>

<body id="mile" data-navigation-lv2="mile_DUMMY02">
<main id="wrapper" class="default">
    <!--#include virtual="/admin/common/inc/header.html" -->
    <header class="globalHeader">
        <h1 class="siteLogo">
		<span>
			<img src="/admin/common/img/logo_ana.png" alt="ana">
		</span>
        </h1>
        <nav class="glovalNav">
            <ul class="glovalNav_list">
                <li class="glovalNav_list-home" data-navigation-lv1="home">
                    <a href="/admin/home.html">
                        <i class="material-icons">home</i>ホーム</a>
                </li>
                <li class="glovalNav_list-proxy" data-navigation-lv1="proxy">
                    <a href="/customer/">
                        <i class="material-icons">open_in_browser</i>代理予約</a>
                </li>
                <li class="glovalNav_list-mgt" data-navigation-lv1="mgt">
                    <a href="/admin/contract/contract_search.html">
                        <i class="material-icons">date_range</i>予約管理</a>
                </li>
                <li class="glovalNav_list-mile js-glovalNav_accordion" data-navigation-lv1="mile">
                    <a href="javascript:void(0);" class="js-glovalNav_trriger">
                        <i class="material-icons">grid_on</i>マイル設定
                        <i class="material-icons is-arrow">expand_more</i>
                    </a>
                    <ul class="glovalNav_list-lv02 js-glovalNav_panel">
                        <li class="glovalNav_list-lv02_item" data-navigation-lv2="mile_DUMMY01">
                            <a href="/admin/mile/mile_redemption.html">マイル償還</a>
                        </li>
                        <li class="glovalNav_list-lv02_item" data-navigation-lv2="mile_DUMMY02">
                            <a href="/admin/mile/mile_accumulation.html">マイル積算</a>
                        </li>
                    </ul>
                </li>
                <li class="glovalNav_list-report js-glovalNav_accordion" data-navigation-lv1="report">
                    <a href="javascript:void(0);" class="js-glovalNav_trriger">
                        <i class="material-icons">assessment</i>レポート
                        <i class="material-icons is-arrow">expand_more</i>
                    </a>
                    <ul class="glovalNav_list-lv02 js-glovalNav_panel">
                        <li class="glovalNav_list-lv02_item" data-navigation-lv2="report_area">
                            <a href="/admin/report/report.html">エリア別</a>
                        </li>
                        <li class="glovalNav_list-lv02_item" data-navigation-lv2="report_item">
                            <a href="/admin/report/report_product.html">商品別</a>
                        </li>
                    </ul>
                </li>
                <li class="glovalNav_list-setting" data-navigation-lv1="setting">
                    <a href="/admin/account/account_setting.html">
                        <i class="material-icons">settings</i>アカウント設定</a>
                </li>
            </ul>
            <!-- /.glovalNav -->
        </nav>
        <!-- /.globalHeader -->
    </header>
    <!--end - #include virtual="/admin/common/inc/header.html" -->
    <div class="mainContent">
        {{--<form action="DUMMY" id="SearchInputForm" method="post" accept-charset="utf-8">--}}
            <aside class="userInfo">
                <div class="userInfo_inner clearfix">
                    <div class="userInfo_col">
                        <div class="userInfo_account">
                            <p class="userInfo_name">
                                <i class="material-icons">person</i>
                                <span>TARO YAMADA</span>様</p>
                            <p class="userInfo_auth">
                                <span>管理者</span>
                            </p>
                            <!-- /.userInfo_account -->
                        </div>
                        <!-- /.userInfo_col -->
                    </div>
                    <div class="userInfo_col">
                        <div class="userInfo_login">
                            <p class="userInfo_state is-out">
                                <a href="DUMMY">
                                    <i class="material-icons">exit_to_app</i>
                                    <span>ログアウト</span>
                                </a>
                            </p>
                            <!-- /.userInfo_login -->
                        </div>
                        <!-- /.userInfo_col -->
                    </div>
                    <!-- /.userInfo_inner clearfix -->
                </div>
                <!-- /.userInfo -->
            </aside>
            <section class="contentWrap">
                <div class="heading_lv01">
                    <h1 class="heading_title">マイル積算 - 基本設定変更</h1>
                    <ul class="heading_links link-list-v1">
                        <li>
                            <a href="mile_promotion.html" class="heading_link">&lt;&lt; マイル積算トップへ戻る</a>
                        </li>
                    </ul>
                </div>
                <form action="{{ route('admin.mile.store') }}" id="SearchInputForm" method="POST" accept-charset="utf-8" id="frm">
                    @csrf
                    <div class="content">
                    <div class="table-layout-v1 is-narrow-v5 pt30">
                        <table class="table_inner">
                            <colgroup>
                                <col span="1" class="w017per">
                                <col span="1" class="w083per">
                            </colgroup>
                            <tbody>
                            <tr>
                                <th class="fwN taR vaM">現在設定</th>
                                <td>100円＝1マイル
                                    <span class="is-color02 pl20">(2018-01-01 以降)</span>
                                </td>
                            </tr>
                            <tr>
                                <th class="fwN taR pt25 vaT">変更予定</th>
                                <td>
                                    <div class="js-item-setting" data-set-html="schedule_HTML02" data-set-schedule="2018-11-01" data-set-mile="100">
                                        <ul class="link-list-v1 js-item-setting_add mt10">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span class="link-list_label">変更予定を追加する</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="is-color02 mt30">※換算後に端数が出た場合は四捨五入されます。</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-submit-v1 taR" data-width="880" data-layout="auto">
                        <div class="submit_next" id="submit-confirm">
                            {{--<button data-fancybox data-src="#account_setting_save" type="submit" name="submit">保存する</button>--}}
                            <button data-fancybox data-src="#account_setting_save" onclick="storeMile(event)">保存する</button>
                            <div id="account_setting_save" style="display: none;">
                                <div class="dialogWrap">
                                    <div class="dialogInner">
                                        <h2>
                                            <i class="material-icons">done</i>
                                            <span>保存完了</span>
                                        </h2>
                                        <p class="pb30 pt30">設定を保存しました</p>
                                        <ul>
                                            <li>
                                                <button class="true dialog_close">閉じる</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.content -->
                </div>
                </form>
                <!-- /.contentWrap -->
            </section>
        {{--</form>--}}
        <!-- /.mainContent -->
    </div>
    <!-- /#wrapper -->
</main>
<script>
    // var dialog_close = $('button').not('.input_searchbtn');
    // $(dialog_close).click(function () {
    //     parent.$.fancybox.close();
    // });

    $(document).on('click', '.dialog_close', function () {
        parent.$.fancybox.close();
    });

    function storeMile(e) {
        e.preventDefault();

        var form = $('#frm');
        var url = form.attr('action');
        var data = form.serialize();
        //var dataSrc = $(e.target).data('src');
        console.log(data);

        // $.ajax({
        //     url: url,
        //     data: data,
        //     type: 'post',
        //     dataType: 'json'
        // }).done(function (data) {
        //     console.log(data);
        //     $.fancybox.open($(dataSrc).html());
        // }).fail(function () {
        //
        // });
    }
</script>
</body>

</html>