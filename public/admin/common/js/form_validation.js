/*********************************************
 * form_validation.js
 * -------------------------------------------
 * @constructor
 * @init
 * @plugin
 *********************************************/

/* -------------------------------------------
 * @namespace
------------------------------------------- */
var FORM = FORM || {};

/* -------------------------------------------
 * @constructor
------------------------------------------- */
FORM.Util = function () {
    'use strict';

};

FORM.Util.prototype = {
    /**
     * @method isEntryNotEmpty
     * @return {Boolean}
     */
    isEntryNotEmpty: function (_elm) {
        'use strict';
        var itemCheckFlag = 0,
            disabledName = 'is-disabled';
        _elm.each(function () {
            var self = $(this),
                wrap = self.closest(".item-layout");
            if (!wrap.hasClass(disabledName) && self.val() === '') {
                itemCheckFlag++;
            }
        });
        return (itemCheckFlag === 0) ? true : false;
    },
    /**
     * @method isEntryRadioed
     * @return {Boolean}
     */
    isEntryRadioed: function (_elm) {
        'use strict';
        var itemCheckFlag = 0,
            disabledName = 'is-disabled';
        _elm.each(function () {
            var self = $(this),
                wrap = self.closest(".item-layout");
            name = self.attr('name');
            if (!wrap.hasClass(disabledName) && $('input[name="' + name + '"]:checked').val() === undefined) {
                itemCheckFlag++;
            }
        });
        return (itemCheckFlag === 0) ? true : false;
    },
    /**
     * @method isEntryChecked
     * @return {Boolean}
     */
    isEntryChecked: function (_elm) {
        'use strict';
        var itemCheckFlag = 0;
        _elm.each(function () {
            var self = $(this),
                wrap = self.closest(".item-layout"),
                name = self.attr('name');
            if (!wrap.hasClass(disabledName) && $('input[name="' + name + '"]:checked').val() === undefined) {
                itemCheckFlag++;
            }
        });
        return (itemCheckFlag === 0) ? true : false;
    },
    /**
     * @method isEntrySelected
     * @return {Boolean}
     */
    isEntrySelected: function (_elm) {
        'use strict';
        var itemCheckFlag = 0,
            disabledName = 'is-disabled';
        _elm.each(function () {
            var self = $(this),
                wrap = self.closest(".item-layout"),
                val = self.val();
            if (!wrap.hasClass(disabledName) && (val === undefined || val === '' || val === '選択してください')) {
                itemCheckFlag++;
            }
        });
        return (itemCheckFlag === 0) ? true : false;
    }

};

/* -------------------------------------------
 * @module
------------------------------------------- */
FORM.module = function () {
    'use strict';

    var f = new FORM.Util();

    return {
        /**
         * @method initialize
         * - 初期化
         */
        initialize: function () {
            //this.requiredCheck(); validateEntriesの中で実行
            this.validateEntries();
        },
        /**
         * @method requiredCheck
         * - 必須チェック
         */
        requiredCheck: function (config) {
            // options
            var c = $.extend({
                requiredElement: '[data-validate="required"]',
                escapeElement: '.js-esc-requiredCheck'
            }, config);
            // vars
            var $elm = $(c.requiredElement),
                escName = c.escapeElement.split('.')[1],
                $reqTextbox = $elm.not('.' + escName).find('input[type="text"], input[type="password"]'),
                $reqRadiobutton = $elm.not('.' + escName).find('input[type="radio"]'),
                $reqCheckbox = $elm.not('.' + escName).find('input[type="checkbox"]'),
                $reqSelectbox = $elm.not('.' + escName).find('select'),
                $reqTextarea = $elm.not('.' + escName).find('textarea');
            // exit
            if ($reqTextbox.length === 0 && $reqRadiobutton.length === 0 && $reqCheckbox.length === 0 && $reqSelectbox.length === 0 && $reqTextarea.length === 0) {
                return false;
            }
            return (f.isEntryNotEmpty($reqTextbox) && f.isEntryRadioed($reqRadiobutton) && f.isEntryChecked($reqCheckbox) && f.isEntrySelected($reqSelectbox) && f.isEntryNotEmpty($reqTextarea)) ? true : false;
        },

        /**
         * @method validateEntries
         * - 入力項目制御
         */
        validateEntries: function () {
            // vars
            var $container = $('.form-submit-v1'),
                $submitNext = $('.submit_next', $container),
                $req = $('[data-validate="required"]'),
                disabledName = 'is-disabled',
                nextFlag = false;
            // exit
            if ($container.length === 0 || $req.length === 0) {
                return false;
            }
            // function
            var validation = function () {
                if (FORM.module.requiredCheck()) {
                    nextFlag = true;
                }
                if (nextFlag) {
                    $container.removeClass(disabledName).find('[type="submit"]').prop('disabled', false);
                    //$submitNext.text(nextTxt.able);
                } else {
                    $container.addClass(disabledName).find('[type="submit"]').prop('disabled', true);
                    //$submitNext.text(nextTxt.disable);
                }
                // 初期化
                nextFlag = false;
            };
            // init
            validation();
            // control
            $('input, textarea, select').on('change', function () {
                validation();
            });
            $('input, textarea').on('blur, keyup', function () {
                validation();
            });
            $('select').on('blur', function () {
                validation();
            });
        }

    };
}();

/* -------------------------------------------
 * @execution
------------------------------------------- */
$(function () {
    'use strict';
    FORM.module.initialize();

    // onLoad
    /*
    u.$win.on('load', function(){
    });
      */
});
