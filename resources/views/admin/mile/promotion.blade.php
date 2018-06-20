<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ANA - A7.2a - 積算プロモ設定（新規）</title>
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
        <form action="DUMMY" id="SearchInputForm" method="post" accept-charset="utf-8">
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
                    <h1 class="heading_title">マイル積算 - プロモーション</h1>
                    <ul class="heading_links">
                        <li>
                            <a href="mile_promotion.html" class="heading_link">&lt;&lt; マイル積算トップへ戻る</a>
                        </li>
                    </ul>
                </div>
                <div class="content">
                    <div class="js-switching-wrap">
                        <div class="js-switching_list">
                            <div class="table-layout-v1 is-narrow-v6" data-width="880" data-layout="auto">
                                <table class="table_inner">
                                    <colgroup>
                                        <col span="1" class="w015per">
                                        <col span="1" class="w085per">
                                    </colgroup>
                                    <tbody>
                                    <tr>
                                        <th class="taR fwN vaM">単位</th>
                                        <td>
                                            <div class="item-layout" data-item-type="radio-v2">
                                                <div class="item">
                                                    <input type="radio" name="radio_DUMMY1" id="DUMMY1-1" value="商品" class="form-radio-v2 js-switching_btn" checked="checked">
                                                    <label for="DUMMY1-1">商品</label>
                                                </div>
                                                <div class="item">
                                                    <input type="radio" name="radio_DUMMY1" id="DUMMY1-2" value="エリア" class="form-radio-v2 js-switching_btn">
                                                    <label for="DUMMY1-2">エリア</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="js-switching_block_wrap">
                            <div class="js-switching_block" data-js-switching="商品">
                                <div class="table-layout-v1 is-narrow-v6" data-width="880" data-layout="auto">
                                    <table class="table_inner">
                                        <colgroup>
                                            <col span="1" class="w015per">
                                            <col span="1" class="w085per">
                                        </colgroup>
                                        <tbody>
                                        <tr>
                                            <th class="taR fwN vaM">商品</th>
                                            <td>
                                                <ul class="link-list-v1">
                                                    <li>
                                                        <a href="javascript:void(0);" data-fancybox data-src="#promotion_select_search" >
                                                            <span class="link-list_label">商品を選ぶ</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="taR fwN vaM">期間</th>
                                            <td>
                                                <div class="item-layout" data-item-type="schedule">
                                                    <div class="item_sub">
                                                        <p class="form_sub_text">開始</p>
                                                    </div>
                                                    <div class="item js-schedule-switch ml20">
                                                        <input name="Product_DUMMY01_01" id="Product_DUMMY01_01" type="text" class="form-text-v1" value="2018-01-01" readonly="readonly">
                                                        <i class="material-icons">date_range</i>
                                                    </div>
                                                    <div class="item_sub ml40">
                                                        <p class="form_sub_text">終了</p>
                                                    </div>
                                                    <div class="item js-schedule-switch ml20">
                                                        <input name="Product_DUMMY01_02" id="Product_DUMMY01_02" type="text" class="form-text-v1" placeholder="期限なし" readonly="readonly">
                                                        <i class="material-icons">date_range</i>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="taR fwN vaM">申し込み日</th>
                                            <td>
                                                <div class="item-layout" data-item-type="schedule">
                                                    <div class="item_sub">
                                                        <p class="form_sub_text">開始</p>
                                                    </div>
                                                    <div class="item js-schedule-switch ml20">
                                                        <input name="Product_DUMMY02_01" id="Product_DUMMY02_01" type="text" class="form-text-v1" value="2018-01-01" readonly="readonly">
                                                        <i class="material-icons">date_range</i>
                                                    </div>
                                                    <div class="item_sub ml40">
                                                        <p class="form_sub_text">終了</p>
                                                    </div>
                                                    <div class="item js-schedule-switch ml20">
                                                        <input name="Product_DUMMY02_02" id="Product_DUMMY02_02" type="text" class="form-text-v1" placeholder="期限なし" readonly="readonly">
                                                        <i class="material-icons">date_range</i>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="taR fwN">積算比率</th>
                                            <td>
                                                <div class="js-switching-wrap">
                                                    <div class="js-switching_list">
                                                        <div class="item-layout" data-item-type="radio">
                                                            <div class="item">
                                                                <input type="radio" name="Product_DUMMY03_01" id="Product_DUMMY03_01" value="変動額" class="form-radio-v1 js-switching_btn" checked="checked">
                                                                <label for="Product_DUMMY03_01">変動額</label>
                                                            </div>
                                                            <div class="item">
                                                                <input type="radio" name="Product_DUMMY03_01" id="Product_DUMMY03_02" value="固定額" class="form-radio-v1 js-switching_btn">
                                                                <label for="Product_DUMMY03_02">固定額</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="js-switching_block_wrap">
                                                        <div class="js-switching_block" data-js-switching="変動額">
                                                            <div class="item-layout mt20">
                                                                <div class="item_sub is-size05">
                                                                    <input name="Area_DUMMY04_01" type="text" value="" class="form-text-v1">
                                                                </div>
                                                                <div class="item_sub ml10">
                                                                    <p class="form_sub_text">円</p>
                                                                </div>
                                                                <div class="item_sub">
                                                                    <p class="form_sub_text">＝1マイル</p>
                                                                </div>
                                                            </div>
                                                            <p class="is-color02 mt20">現在の基礎設定：100円=1マイル</p>
                                                        </div>
                                                        <div class="js-switching_block" data-js-switching="固定額">
                                                            <div class="item-layout mt20">
                                                                <div class="item_sub">
                                                                    <p class="form_sub_text">一律</p>
                                                                </div>
                                                                <div class="item is-size05">
                                                                    <input name="Area_DUMMY05_01" type="text" value="500" class="form-text-v1">
                                                                </div>
                                                                <div class="item_sub ml10">
                                                                    <p class="form_sub_text">マイルプラス</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="js-switching_block" data-js-switching="エリア">
                                <div class="table-layout-v1 is-narrow-v6" data-width="880" data-layout="auto">
                                    <table class="table_inner">
                                        <colgroup>
                                            <col span="1" class="w015per">
                                            <col span="1" class="w085per">
                                        </colgroup>
                                        <tbody>
                                        <tr>
                                            <th class="taR fwN vaM">エリア</th>
                                            <td>
                                                <ul class="link-list-v1">
                                                    <li>
                                                        <a href="javascript:void(0);" data-fancybox data-src="#are_serch_input" >
                                                            <span class="link-list_label">エリアを選ぶ</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="taR fwN vaM">期間</th>
                                            <td>
                                                <div class="item-layout" data-item-type="schedule">
                                                    <div class="item_sub">
                                                        <p class="form_sub_text">開始</p>
                                                    </div>
                                                    <div class="item js-schedule-switch ml20">
                                                        <input name="Area_DUMMY01_01" id="Area_DUMMY01_01" type="text" class="form-text-v1" value="2018-01-01" readonly="readonly">
                                                        <i class="material-icons">date_range</i>
                                                    </div>
                                                    <div class="item_sub ml40">
                                                        <p class="form_sub_text">終了</p>
                                                    </div>
                                                    <div class="item js-schedule-switch ml20">
                                                        <input name="Area_DUMMY01_02" id="Area_DUMMY01_02" type="text" class="form-text-v1" placeholder="期限なし" readonly="readonly">
                                                        <i class="material-icons">date_range</i>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="taR fwN vaM">申し込み日</th>
                                            <td>
                                                <div class="item-layout" data-item-type="schedule">
                                                    <div class="item_sub">
                                                        <p class="form_sub_text">開始</p>
                                                    </div>
                                                    <div class="item js-schedule-switch ml20">
                                                        <input name="Area_DUMMY02_01" id="Area_DUMMY02_01" type="text" class="form-text-v1" value="2018-01-01" readonly="readonly">
                                                        <i class="material-icons">date_range</i>
                                                    </div>
                                                    <div class="item_sub ml40">
                                                        <p class="form_sub_text">終了</p>
                                                    </div>
                                                    <div class="item js-schedule-switch ml20">
                                                        <input name="Area_DUMMY02_02" id="Area_DUMMY02_02" type="text" class="form-text-v1" placeholder="期限なし" readonly="readonly">
                                                        <i class="material-icons">date_range</i>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="taR fwN">積算比率</th>
                                            <td>
                                                <div class="js-switching-wrap">
                                                    <div class="js-switching_list">
                                                        <div class="item-layout" data-item-type="radio">
                                                            <div class="item">
                                                                <input type="radio" name="Area_DUMMY03_01" id="Area_DUMMY03_01" value="変動額" class="form-radio-v1 js-switching_btn" checked="checked">
                                                                <label for="Area_DUMMY03_01">変動額</label>
                                                            </div>
                                                            <div class="item">
                                                                <input type="radio" name="Area_DUMMY03_01" id="Area_DUMMY03_02" value="固定額" class="form-radio-v1 js-switching_btn">
                                                                <label for="Area_DUMMY03_02">固定額</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="js-switching_block_wrap">
                                                        <div class="js-switching_block" data-js-switching="変動額">
                                                            <div class="item-layout mt20">
                                                                <div class="item_sub is-size05">
                                                                    <input name="Area_DUMMY04_01" type="text" value="" class="form-text-v1">
                                                                </div>
                                                                <div class="item_sub ml10">
                                                                    <p class="form_sub_text">円</p>
                                                                </div>
                                                                <div class="item_sub">
                                                                    <p class="form_sub_text">＝1マイル</p>
                                                                </div>
                                                            </div>
                                                            <p class="is-color02 mt20">現在の基礎設定：100円=1マイル</p>
                                                        </div>
                                                        <div class="js-switching_block" data-js-switching="固定額">
                                                            <div class="item-layout mt20">
                                                                <div class="item_sub">
                                                                    <p class="form_sub_text">一律</p>
                                                                </div>
                                                                <div class="item is-size05">
                                                                    <input name="Area_DUMMY05_01" type="text" value="500" class="form-text-v1">
                                                                </div>
                                                                <div class="item_sub ml10">
                                                                    <p class="form_sub_text">マイルプラス</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-submit-v1 taR" data-width="880" data-layout="auto">
                        <div class="submit_next" id="submit-confirm">
                            <button data-fancybox data-src="#account_setting_save" type="submit" name="submit">保存する</button>
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
                <!-- /.contentWrap -->
            </section>
        </form>
        <!-- /.mainContent -->
    </div>
    <!-- /#wrapper -->
</main>
<div id="promotion_select_search" style="display: none;">
    <div class="pl20 pt10 pr20">
        <form id="dialog_search_form1" action="/">
            <p class="pb20 fwB">商品を検索し、選択してください。</p>
            <div class="pb10">
                <label class="search_label">商品IDで検索
                    <input class="w393" id="input_01" type="search" name="search" size="30" maxlength="255">
                    <button class="input_searchbtn" type="submit"><i class="material-icons">search</i></button>
                </label>
            </div>
            <div>
                <label class="search_label">商品名で検索
                    <input class="w393" type="search" name="search" size="30" maxlength="255">
                    <button class="input_searchbtn" type="submit"><i class="material-icons">search</i></button>
                </label>
            </div>
        </form>
    </div>
    <div class="dialog_search_result_table form1 mt30" style="display: none;">
        <p>9 件</p>
        <table>
            <colgroup>
                <col span="1" class="w025per">
                <col span="1">
            </colgroup>
            <thead>
            <tr>
                <th>ID</th>
                <th>商品名</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a href="" class="linkStyle">79068789</a></td>
                <td><a href="" class="linkStyle">マウナケア山頂 サンセット＆星空観測ツアー＜反射望遠鏡＞ by マサシネイチャースクール</a></td>
            </tr>
            <tr>
                <td><a href="" class="linkStyle">79068789</a></td>
                <td><a href="" class="linkStyle">マウナケア山頂 サンセット＆星空観測ツアー＜反射望遠鏡＞ by マサシネイチャースクール</a></td>
            </tr>
            <tr>
                <td><a href="" class="linkStyle">79068789</a></td>
                <td><a href="" class="linkStyle">マウナケア山頂 サンセット＆星空観測ツアー＜反射望遠鏡＞ by マサシネイチャースクール</a></td>
            </tr>
            <tr>
                <td><a href="" class="linkStyle">79068789</a></td>
                <td><a href="" class="linkStyle">マウナケア山頂 サンセット＆星空観測ツアー＜反射望遠鏡＞ by マサシネイチャースクール</a></td>
            </tr>
            <tr>
                <td><a href="" class="linkStyle">79068789</a></td>
                <td><a href="" class="linkStyle">マウナケア山頂 サンセット＆星空観測ツアー＜反射望遠鏡＞ by マサシネイチャースクール</a></td>
            </tr>
            <tr>
                <td><a href="" class="linkStyle">79068789</a></td>
                <td><a href="" class="linkStyle">マウナケア山頂 サンセット＆星空観測ツアー＜反射望遠鏡＞ by マサシネイチャースクール</a></td>
            </tr>
            <tr>
                <td><a href="" class="linkStyle">79068789</a></td>
                <td><a href="" class="linkStyle">マウナケア山頂 サンセット＆星空観測ツアー＜反射望遠鏡＞ by マサシネイチャースクール</a></td>
            </tr>
            <tr>
                <td><a href="" class="linkStyle">79068789</a></td>
                <td><a href="" class="linkStyle">マウナケア山頂 サンセット＆星空観測ツアー＜反射望遠鏡＞ by マサシネイチャースクール</a></td>
            </tr>
            </tbody>
        </table>
    </div>
    <ul class="dialogCenter">
        <li><button class="true dialog_close">閉じる</button></li>
    </ul>
</div>
<div id="are_serch_input" style="display: none;">
    <div>
        <form id="dialog_search_form2" action="/">
            <p class="pb20 pt10 fwB">エリアを検索し、選択してください。</p>
            <div class="pb10">
                <label class="search_label">エリアで検索
                    <input class="w393" type="search" name="search" size="30" maxlength="255">
                    <button class="input_searchbtn" type="submit"><i class="material-icons">search</i></button>
                </label>
            </div>
        </form>
        <div class="dialog_search_result_table form2 mt30" style="display: none;">
            <p>7 件</p>
            <table>
                <colgroup>
                    <col span="1">
                </colgroup>
                <thead>
                <tr>
                    <th>エリア</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="" class="linkStyle">ヨーロッパ、フランス、パリ</a></td>
                </tr>
                <tr>
                    <td><a href="" class="linkStyle">ヨーロッパ、フランス、パリ</a></td>
                </tr>
                <tr>
                    <td><a href="" class="linkStyle">ヨーロッパ、フランス、パリ</a></td>
                </tr>
                <tr>
                    <td><a href="" class="linkStyle">ヨーロッパ、フランス、パリ</a></td>
                </tr>
                <tr>
                    <td><a href="" class="linkStyle">ヨーロッパ、フランス、パリ</a></td>
                </tr>
                <tr>
                    <td><a href="" class="linkStyle">ヨーロッパ、フランス、パリ</a></td>
                </tr>
                <tr>
                    <td><a href="" class="linkStyle">ヨーロッパ、フランス、パリ</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <ul class="dialogCenter">
            <li><button class="true dialog_close">閉じる</button></li>
        </ul>
    </div>
</div>
<script>
    var dialog_close = $('button').not('.input_searchbtn');
    $(dialog_close).click(function () {
        parent.$.fancybox.close();
    });
    $('#dialog_search_form1').submit(function() {
        //処理
        $('.form1').css('display','block');
        return false;
    });

    $('#dialog_search_form2').submit(function() {
        //処理
        $('.form2').css('display','block');
        return false;
    });
</script>
</body>

</html>
