$(window).on("load",function() {


//input 非表示
    $('#pulldown-period').change(function() {
        $(".period-4month").hide();
        $(".period-month").hide();
        var selectVal = $("#pulldown-period option:selected").text();
        // alert(selectVal);
        if (selectVal == '月間') {
            $(".period-month").show();
        }else if (selectVal == '四半期'){
            $(".period-4month").show();
        }else{
            $(".period-4month").hide();
            $(".period-month").hide();
        }
    });
    // $("#pulldown-period").change(function(changed) {
    // 	alert('こんにちは!');
    //
    //   switch ($(changed.target).val()) {
    //     case "四半期":
    //       $(".period-month").hide();
    //       break;
    //     case "月間":
    //        $(".period-month").show();
    //       break;
    // 		}
    //   )}

    var isMobile = false;
    var ua = navigator.userAgent.toLowerCase();
    var clck = 'click', mover = 'mouseover', mout = 'mouseout', clckend = 'click', clckover = 'click,mouseover';


    var isUA = (function () {
        var indexOfKey = function (key) { return (ua.indexOf(key) !== -1) ? true : false; };
        var o = {};
        o.ie = indexOfKey("msie");
        o.fx = indexOfKey("firefox");
        o.chrome = indexOfKey("chrome");
        o.opera = indexOfKey("opera");
        o.android = (indexOfKey("android") && indexOfKey("mobile")) ? true : false;
        o.androidtab = indexOfKey("android");
        o.ipad = indexOfKey("ipad");
        o.ipod = indexOfKey("ipod");
        o.iphone = indexOfKey("iphone");
        if (ua.indexOf('iphone') > -1 || ua.indexOf('ipod') > -1 || ua.indexOf('ipad') > -1 || ua.indexOf('android') > -1 || ua.indexOf('windows phone') > -1 || ua.indexOf('blackberry') > -1 || ua.indexOf('symbian') > -1
        ) {
            clck = 'touchstart', mover = 'mousedown', mout = 'mouseup', clckover = 'touchstart,mousedown', clckend = 'touchend';
            isMobile = true;
        }
        return o;
    })();

    var parentNode = document.getElementsByTagName('head')[0];
    var viewport = {
        withzoom: 'width=device-width, initial-scale=1.0',
        android: 'target-densitydpi=medium-dpi,width=1280,user-scalable=yes',
        androidtab: 'width=1280,user-scalable=yes',
        ipad: 'width=1280,user-scalable=yes',
        iphone: 'width=1280,user-scalable=yes'
    };
    var meta = document.createElement('meta');
    meta.setAttribute('name', 'viewport');

    if (isUA.android) {
        meta.setAttribute('content', viewport.android);
        parentNode.appendChild(meta);
    } else if (isUA.androidtab) {
        meta.setAttribute('content', viewport.androidtab);
        parentNode.appendChild(meta);
    } else if (isUA.ipad) {
        meta.setAttribute('content', viewport.ipad);
        parentNode.appendChild(meta);
    } else if (isUA.ipod || isUA.iphone) {
        meta.setAttribute('content', viewport.iphone);
        parentNode.appendChild(meta);
    }


    if (isMobile) {
        $.fn.extend({
            hover2: function (func, func2) {
                $(this).bind("touchstart", func);
                $(this).bind("touchend touchcancel", func2);
                return this;
            }
        });
    } else {
        $.fn.extend({
            hover2: function (func, func2) {
                return this.hover(func, func2);
            }
        });
    }


    $('a.over,button.over').each(function () {
        $(this).hover2(function () {
            $(this).stop(false, true).animate({ opacity: 0.7 }, 200);
        }, function () {
            $(this).stop(false, true).animate({ opacity: 1 }, 200);
        });
    });

    $('img.over').each(function () {
        $(this).attr('data-src-off', $(this).attr('src'));
        $(this).hover2(function () {
            $(this).attr('src', $(this).attr('data-src-on'));
        }, function () {
            $(this).attr('src', $(this).attr('data-src-off'));
        });
    });


    jQuery.easing.easeInOutCubic = function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
        return c / 2 * ((t -= 2) * t * t + 2) + b;
    };
    $('a.scroll').each(function () {
        $(this).click(function (e) {
            e.preventDefault();
            var target = $(this).attr('href');
            var targetY = $(target).offset().top;
            $('html,body').animate(
                { scrollTop: targetY },
                1000,
                'easeInOutCubic'
            );
            return false;
        });
    });

    /* 左ナビゲーション 現在地指定 */
    var headerControl = function () {
        if ($(".globalHeader").length === 0) {
            return false;
        } else {
            // var
            var locationLv1 = $('body').attr('id'),
                locationLv2 = $('body').attr('data-navigation-lv2'),
                gNaviAcc = '.js-glovalNav_accordion',
                gNavTrigger = '.js-glovalNav_trriger',
                gNavPanel = '.js-glovalNav_panel',
                activeClass = "is-active",
                openClass = "is-open",
                speed = 500;
            // setting
            $('.glovalNav_list > li').each(function () {
                var naviLv1 = $(this).attr('data-navigation-lv1');
                switch (naviLv1) {
                    case locationLv1:
                        var $naviLv1 = $(this);
                        $naviLv1.addClass(activeClass);
                        $naviLv1.find('.glovalNav_list-lv02_item').each(function () {
                            var $naviLv2 = $(this),
                                naviLv2 = $naviLv2.attr('data-navigation-lv2');
                            switch (naviLv2) {
                                case locationLv2:
                                    $naviLv1.addClass(activeClass).addClass(openClass).find('.glovalNav_list-lv02').css("display", "block");
                                    $naviLv2.addClass(activeClass);
                                    break;
                            }
                        });
                        break;
                }
            });
            // control
            $(gNavTrigger).on('click', function () {
                var trigger = $(this),
                    wrap = trigger.closest(gNaviAcc),
                    panel = wrap.find(gNavPanel);

                if (wrap.hasClass(openClass)) {
                    wrap.removeClass(openClass);
                    panel.stop(true, true).slideUp(speed);
                } else {
                    wrap.addClass(openClass);
                    panel.stop(true, true).slideDown(speed);
                    return false;
                }
            });
        }
    };
    /* カレンダー */
    var scheduleControl = function () {
        if ($(".js-schedule-switch").length === 0) {
            return false;
        } else {
            // var
            var $elm = $(".js-schedule-switch");
            $elm.each(function () {
                var $this = $(this);
                $this.find("input").click(function () {
                    $(this).trigger("focus");
                });
                $this.find("input").datepicker({
                    numberOfMonths: 2,
                    maxDate: "0d"
                });
            });
        }
    };
    /* selectタグが初期値の時のみ色を変える */
    var selectInitial = function () {
        if ($(".js-select-color").length === 0) {
            return false;
        } else {
            // var
            var initialClass = "is-initial";
            // event
            var selectcheck = function (e) {
                if (e.find("option:selected").hasClass("is-empty")) {
                    e.addClass(initialClass);
                } else {
                    e.removeClass(initialClass);
                }
            };
            // setting
            $(".js-select-color").change(function () {
                selectcheck($(this));
            }).trigger("change");
        }
    };
    /* スライダー */
    var sliderControl = function () {
        if ($(".js-slider").length === 0) {
            return false;
        } else {
            var c = $.extend({
                factorElement: ".js-slider",
                slideElement: ".js-slide",
                pegerElement: ".js-slider_peger"
            });

            // vars
            var $elm = $(c.factorElement);

            $elm.each(function () {
                var $this = $(this);

                if ($this.hasClass("js-slider01")) {
                    // js-slider01がついている場合
                    var $slide = $this.find(c.slideElement);
                    $slide.slick({
                        autoplay: false,
                        autoplaySpeed: 3500,
                        dots: true,
                        easing: "swing",
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: false,
                        arrows: false
                    });
                } else if ($elm.hasClass("js-slider02")) {
                    // js-slider02がついている場合
                } else {
                    return false;
                }
            });
        }
    };
    /* アコーディオン */
    var accordion = function () {
        if ($(".js-accordion").length === 0) {
            return false;
        } else {
            // options
            var c = $.extend({
                factorElement: '.js-accordion',
                triggerElement: '.js-accordion_trigger',
                panelElement: '.js-accordion_panel',
                asideElement: '.js-accordion_aside',
                closeElement: 'data-close-txt',
                panelDisplayType: 'allHide', // 初期表示設定：「allHide」or「allShow」
                slideSpeed: 300
            });
            // vars
            var $elm = $(c.factorElement),
                accWrap = c.factorElement,
                accTrigger = c.triggerElement,
                accPanel = c.panelElement,
                accAside = c.asideElement,
                display = c.panelDisplayType,
                activeName = "is-active",
                defaultText = $(c.triggerElement).find("em").text(),
                closeText = $(c.triggerElement).attr(c.closeElement),
                speed = c.slideSpeed;
            // setting：表示設定
            $elm.each(function () {
                var wrap = $(this),
                    trigger = wrap.find(accTrigger);
                switch (display) {
                    // 全非表示の場合
                    case 'allHide':
                        trigger.removeClass(activeName);
                        wrap.find(accPanel).removeClass(activeName).hide();
                        break;
                    // 全表示の場合
                    case 'allShow':
                        trigger.addClass(activeName);
                        break;
                    // 個別設定の場合
                    case 'eachShow':
                        wrap.find(accPanel).hide();
                        if (trigger.hasClass(activeName)) {
                            trigger.addClass(activeName);
                            wrap.find(accPanel).show();
                        }
                        break;
                    default:
                        break;
                }
            });
            // control
            $(accTrigger).on('click', function () {
                var trigger = $(this),
                    wrap = trigger.parents(accWrap);
                if (wrap.size()) {
                    if (trigger.hasClass(activeName)) {
                        trigger.removeClass(activeName);
                        trigger.find("em").text(defaultText);
                        wrap.find(accPanel).stop(true, true).slideUp(speed).removeClass(activeName);;
                        if (wrap.prev(accAside).length === 0) {
                            return false;
                        } else {
                            wrap.prev(accAside).slideDown(speed).addClass(activeName);
                        }
                    } else {
                        trigger.addClass(activeName);
                        trigger.find("em").text(closeText);
                        wrap.find(accPanel).stop(true, true).slideDown(speed).addClass(activeName);
                        if (wrap.prev(accAside).length === 0) {
                            return false;
                        } else {
                            wrap.prev(accAside).slideUp(speed).removeClass(activeName);;
                        }
                    }
                }
            });
        }
    };

    /* アイテムを増やす、減らす操作*/
    var itemSetting = function () {
        if ($(".js-item-setting").length === 0) {
            return false;
        } else {
            // options
            var c = $.extend({
                factorElement: '.js-item-setting',
                originElement: '.js-item-setting_origin',
                addElement: '.js-item-setting_add',
                deleteElement: '.js-item-setting_delete',
                setOrigin: 'data-set-html',
                setSchedule: 'data-set-schedule', //.js-item-settingにデータ属性をつけることで挿入されるカレンダー日付の初期値を変更可能
                setMile: 'data-set-mile', //.js-item-settingにデータ属性をつけることで挿入される1マイルの値段を変更可能
                initialMile: 150 //挿入する1マイルあたりの値段
            });
            // today
            var now = new Date(),
                y = now.getFullYear(),
                m = now.getMonth() + 1,
                d = now.getDate(),
                mm = ('0' + m).slice(-2),
                dd = ('0' + d).slice(-2),
                today = y + '-' + mm + '-' + dd;

            // vars
            var $elm = $(c.factorElement),
                setWrap = c.factorElement,
                setAdd = c.addElement,
                setDel = c.deleteElement,
                schedule_NAME = "schedule_NAME",
                mile_NAME = "mile_NAME",
                schedule_VALUE = $elm.attr(c.setSchedule),
                mile_VALUE = $elm.attr(c.setMile);

            if (schedule_VALUE === undefined || schedule_VALUE === '') {
                var schedule_VALUE = today;
            }
            if (mile_VALUE === undefined || mile_VALUE === '') {
                var mile_VALUE = initialMile;
            }
            var schedule_HTML = {};
            schedule_HTML["schedule_HTML01"] =
                '<div class="item-layout-wrap is-type01 js-item-setting_origin">' +
                '<div class="item-layout" data-item-type="schedule">' +
                '<div class="item_sub">' +
                '<p class="form_sub_text">開始日</p>' +
                '</div>' +
                '<div class="item js-schedule-switch ml20">' +
                '<input name="' + schedule_NAME + '" type="text" class="form-text-v1 js-schedule-value" value="' + schedule_VALUE + '" readonly="readonly">' +
                '<i class="material-icons">date_range</i>' +
                '</div>' +
                '</div>' +
                '<div class="item-layout">' +
                '<div class="item_sub flL">' +
                '<p class="form_sub_text">1マイル=</p>' +
                '</div>' +
                '<div class="item_sub is-size05 ml10">' +
                ' <input name="' + mile_NAME + '" type="text" value="' + mile_VALUE + '" class="form-text-v1 js-mile-value">' +
                '</div>' +
                '<div class="item_sub ml10">' +
                '<p class="form_sub_text">円</p>' +
                '</div>' +
                '</div>' +
                '<ul class="link-list-v1 pb10 pt10">' +
                '<li class="js-item-setting_delete"><a href="javascript:void(0);"><span class="link-list_label">削除</span></a></li>' +
                '</ul>' +
                '</div>';

            schedule_HTML["schedule_HTML02"] =
                '<div class="item-layout-wrap is-type01 js-item-setting_origin">' +
                '<div class="item-layout" data-item-type="schedule">' +
                '<div class="item_sub">' +
                '<p class="form_sub_text">開始日</p>' +
                '</div>' +
                '<div class="item js-schedule-switch ml20">' +
                '<input name="' + schedule_NAME + '" type="text" class="form-text-v1 js-schedule-value" value="' + schedule_VALUE + '" readonly="readonly">' +
                '<i class="material-icons">date_range</i>' +
                '</div>' +
                '</div>' +
                '<div class="item-layout">' +
                '<div class="item is-size05 flL">' +
                ' <input name="' + mile_NAME + '" type="text" value="' + mile_VALUE + '" class="form-text-v1 js-mile-value">' +
                '</div>' +
                '<div class="item_sub ml10">' +
                '<p class="form_sub_text">円　＝1マイル</p>' +
                '</div>' +
                '</div>' +
                '<ul class="link-list-v1 pb10 pt10">' +
                '<li class="js-item-setting_delete"><a href="javascript:void(0);"><span class="link-list_label">削除</span></a></li>' +
                '</ul>' +
                '</div>';

            $elm.each(function () {
                $(this).prepend(schedule_HTML[$elm.attr(c.setOrigin)]);
                $(this).closest(setWrap).find(".js-schedule-switch").find("input").datepicker({
                    numberOfMonths: 2,
                    maxDate: "0d"
                });
            });
            // control
            $(document).on('click', setAdd, function () {
                $(this).before(schedule_HTML[$elm.attr(c.setOrigin)]);
                $(this).closest(setWrap).find(".js-schedule-switch").find("input").datepicker({
                    numberOfMonths: 2,
                    maxDate: "0d"
                });
            });
            $(document).on('click', setDel, function () {
                $(this).closest(c.originElement).stop(true, true).fadeOut(function () {
                    $(this).remove();
                });
            });
            $(document).on('click', ".js-schedule-switch", function () {
                $(this).trigger("focus");
            });
        }
    };
    /* valの値で表示を切り替えます。 */
    var switchingWrap = function () {
        if ($(".js-switching-wrap").length === 0) {
            return false;
        } else {
            // options
            var c = $.extend({
                factorElement: '.js-switching-wrap',
                listElement: '.js-switching_list',
                targetElement: '.js-switching_btn',
                blockWrapElement: '.js-switching_block_wrap',
                blockElement: '.js-switching_block',
                dataSwitching: 'data-js-switching',
                activeClass: 'is-active'
            });
            // vars
            var $elm = $(c.factorElement),
                switchingWrap = c.factorElement,
                switchingTarget = c.targetElement,
                switchingblockWrap = c.blockWrapElement,
                switchingBlock = c.blockElement;

            $elm.each(function () {
                var $this = $(this);
                $this.find(switchingTarget).each(function () {
                    var data = $(this).val(),
                        check = $(this).is(':checked');
                    switch (check) {
                        case true:
                            $this.find('[' + c.dataSwitching + '=' + data + ']').addClass(c.activeClass).stop(true, true).fadeIn();
                            break;
                    }
                });
            });

            $elm.find(switchingTarget).on('change', function () {
                var data = $(this).val(),
                    $wrap = $(this).closest(switchingWrap);
                $wrap.children(switchingblockWrap).children(switchingBlock).removeClass(c.activeClass).hide();
                $wrap.find('[' + c.dataSwitching + '=' + data + ']').addClass(c.activeClass).stop(true, true).fadeIn();
            });
        }
    };

    var createGradation = function (color1, color2, height) {
        var canvas = document.createElement('canvas');
        var ctx = canvas.getContext('2d');
        var gradient = ctx.createLinearGradient(0, 0, 0, height);
        gradient.addColorStop(0, color1);
        gradient.addColorStop(1, color2);
        return gradient;
    }

    var createGraph01 = function (id) {
        $(".js-create-graph01").each(function () {
            var ctx = document.getElementById($(this).attr("id")).getContext('2d');
            var data_label = JSON.parse($(this).attr("data-label"));
            var data_value = JSON.parse($(this).attr("data-value"));
            var data_maxTicksLimit = parseInt($(this).attr("data-max-ticks-limit"));
            ctx.canvas.height = 280;
            ctx.canvas.width = 950;

            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: data_label,
                    datasets: [{
                        label: false,
                        data: data_value,
                        borderColor: "#00b3F0",
                        backgroundColor: createGradation('rgba(0,179,240,0.5)', 'rgba(0,179,240,0)', 280),
                        borderWidth: "1px",
                        pointRadius: 4,
                        pointHoverRadius: 6,
                        pointBackgroundColor: "#fff",
                        pointHoverBackgroundColor: "#00b3F0",
                        pointHoverBorderColor: "rgba(0,179,240,0.2)",
                        pointHoverBorderWidth: 12,
                        lineTension: 0
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        xAxes: [{
                            ticks: {
                                autoSkip: true,
                                maxTicksLimit: data_maxTicksLimit,
                                maxRotation: 0,
                                minRotation: 0,
                            },
                            gridLines: {
                                display: false,
                            },
                        }]
                    },
                    tooltips: {
                        displayColors: false,
                        xPadding: 10,
                        yPadding: 10,
                        bodyFontSize: 14,
                        intersect: false,
                        callbacks: {
                            title: function (tooltipItem, data) {
                                return "";
                            },
                            label: function (tooltipItem, data) {
                                return "";
                            },
                            beforeLabel: function (tooltipItem, data) {
                                return "予約日：" + data.labels[tooltipItem.index];
                            },
                            afterLabel: function (tooltipItem, data) {
                                return "予約数：" + data.datasets[0].data[tooltipItem.index];
                            },
                        }
                    }
                }
            });
        });
    }

    var createGraph02 = function (id) {
        $(".js-create-graph02").each(function () {
            var data_label = JSON.parse($(this).attr("data-label"));
            var data_value1 = JSON.parse($(this).attr("data-value1"));
            var data_value2 = $(this).attr("data-value2");
            if (data_value2) {
                data_value2 = JSON.parse($(this).attr("data-value2"))
            }
            var data_max_value1 = Math.max.apply(null, data_value1);
            var data_max_value2 = Math.max.apply(null, data_value2);
            var ctx = document.getElementById($(this).attr("id")).getContext('2d');
            ctx.canvas.height = 85;
            ctx.canvas.width = 460;
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: data_label,
                    datasets: [{
                        label: false,
                        data: data_value1,
                        borderColor: "#00b3F0",
                        backgroundColor: createGradation('rgba(0,179,240,0.3)', 'rgba(0,179,240,0)', 85),
                        pointRadius: false,
                        borderWidth: "1px",
                        pointBackgroundColor: "#fff",
                        lineTension: 0
                    }, {
                        label: false,
                        data: data_value2,
                        borderColor: "#ee4922",
                        backgroundColor: createGradation('rgba(238,73,73,0.3)', 'rgba(238,73,73,0)', 85),
                        pointRadius: false,
                        borderWidth: "1px",
                        pointBackgroundColor: "#fff",
                        lineTension: 0
                    }]
                },
                options: {
                    legend: {
                        display: false,
                    },
                    scales: {
                        xAxes: [{
                            display: false,
                        }],
                        yAxes: [{
                            display: false,
                            ticks: {
                                max: data_max_value1 > data_max_value2 ? data_max_value1 : data_max_value2
                            }
                        }]
                    },
                    tooltips: {
                        displayColors: false,
                        bodyFontSize: 12,
                        intersect: false,
                        callbacks: {
                            title: function (tooltipItem, data) {
                                return "";
                            },
                            label: function (tooltipItem, data) {
                                return "";
                            },
                            beforeLabel: function (tooltipItem, data) {
                                return "予約日：" + data.labels[tooltipItem.index];
                            },
                            afterLabel: function (tooltipItem, data) {
                                return "予約数：" + data.datasets[0].data[tooltipItem.index];
                            },
                        }
                    }
                }
            });
        });
    }

    var createGraph03 = function (id) {
        $(".js-create-graph03").each(function () {
            var data_label = JSON.parse($(this).attr("data-label"));
            var data_value1 = JSON.parse($(this).attr("data-value1"));
            var data_value2 = $(this).attr("data-value2");
            if (data_value2) {
                data_value2 = JSON.parse($(this).attr("data-value2"))
            }
            var data_maxTicksLimit = parseInt($(this).attr("data-max-ticks-limit"));
            var ctx = document.getElementById($(this).attr("id")).getContext('2d');
            ctx.canvas.height = 280;
            ctx.canvas.width = 950;
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: data_label,
                    datasets: [{
                        label: 'カード決済',
                        data: data_value1,
                        borderColor: "#00b3F0",
                        borderWidth: "1px",
                        pointRadius: 4,
                        pointHoverRadius: 6,
                        pointBackgroundColor: "#fff",
                        pointHoverBackgroundColor: "#00b3F0",
                        pointHoverBorderColor: "rgba(0,179,240,0.2)",
                        pointHoverBorderWidth: 12,
                        backgroundColor: "rgba(153,255,51,0)",
                        lineTension: 0
                    }, {
                        label: 'マイル決済',
                        data: data_value2,
                        borderColor: "#F03D00",
                        borderWidth: "1px",
                        pointRadius: 4,
                        pointHoverRadius: 6,
                        pointBackgroundColor: "#fff",
                        pointHoverBackgroundColor: "#F03D00",
                        pointHoverBorderColor: "rgba(240,61,0,0.2)",
                        pointHoverBorderWidth: 12,
                        backgroundColor: "rgba(255,153,0,0)",
                        lineTension: 0
                    }]
                },
                options: {
                    legend: {
                        labels: {
                            usePointStyle: true,
                        },
                    },
                    scales: {
                        xAxes: [{
                            ticks: {
                                autoSkip: true,
                                maxTicksLimit: data_maxTicksLimit,
                                maxRotation: 0,
                                minRotation: 0,
                            },
                            gridLines: {
                                display: false,
                            },
                        }],
                    },
                    tooltips: {
                        mode: 'index',
                        xPadding: 10,
                        yPadding: 10,
                        titleFontSize: 14,
                        bodyFontSize: 14,
                        intersect: false,
                        bodySpacing: 5,
                        callbacks: {
                            title: function (tooltipItem, data) {
                                return "予約日：" + data.labels[tooltipItem[0].index];
                            },
                            label: function (tooltipItem, data) {
                                return "予約数：" + data.datasets[tooltipItem.datasetIndex].label + "　" + data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                            }
                        }
                    },
                }
            });
        });
    }


    headerControl();
    scheduleControl();
    selectInitial();
    itemSetting();
    switchingWrap();
    createGraph01();
    createGraph02();
    createGraph03();
    accordion();
    sliderControl();
});

if (less) {
    less.pageLoadFinished.then(function() {
        "use strict";
        $(window).trigger("resize");
    });
}
