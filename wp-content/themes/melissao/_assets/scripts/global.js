/* ---------------------------------------------------------------------
Global JavaScript & jQuery
------------------------------------------------------------------------ */
var MELISSAO = MELISSAO || {};

(function($, window, APP, undefined) {

    // DOM Ready
    $(function() {

        // Common jQuery elements
        APP.$html   = $('html');
        APP.$body   = $('body');
        APP.$window = $(window);

        APP.HasJS.init();
        APP.NavToggler.init();
        APP.PaneScroller.init();
    });

    /* ---------------------------------------------------------------------
    HasJS

    Adds JS class to HTML element if JS is present
    Removes no-js class from html element if JS present
    ------------------------------------------------------------------------ */
    APP.HasJS = {
        init: function() {
            APP.$html
                .addClass('js')
                .removeClass('no-js');
        }
    };

    /* ---------------------------------------------------------------------
    NavToggler

    Toggles Class on the mobile nav.
    ------------------------------------------------------------------------ */
    APP.NavToggler = {
        navToggleTriggerSelector: '#js-navToggleTrigger',
        navToggleTargetSelector: '#js-navToggleTarget',
        navToggleExpandedClass: 'nav-list_isExpanded',
        $navToggleTrigger: null,
        $navToggleTarget: null,

        init: function() {
            var $navToggleTrigger = $(this.navToggleTriggerSelector);
            var $navToggleTarget = $(this.navToggleTargetSelector);

            if (!$navToggleTrigger.length || !$navToggleTarget.length) {
                return;
            }

            this.$navToggleTrigger = $navToggleTrigger;
            this.$navToggleTarget = $navToggleTarget;

            this.createEvents();
        },

        createEvents: function() {
            var self = this;

            this.$navToggleTrigger.on('click', function(e) {
                var $this = $(this);
                self.toggleNav();
                e.preventDefault();
            });
        },

        toggleNav: function() {

            if (this.$navToggleTarget.hasClass(this.navToggleExpandedClass)) {
                console.log('1');
                this.$navToggleTarget.removeClass(this.navToggleExpandedClass);
            } else {
                console.log('2');
                this.$navToggleTarget.addClass(this.navToggleExpandedClass);
            }
        }
    };

    /* ---------------------------------------------------------------------
    PaneScroller

    @TODO
    ------------------------------------------------------------------------ */
    APP.PaneScroller = {
        pageScrollerSelector: "#js-paneScroller",
        pageScrollerStageSelector: "#js-paneScrollerStage",
        $pageScroller: null,
        $pageScrollerStage: null,
        gutterWidth: 10,
        stageWidth: 0,

        init: function() {
            var $pageScroller = $(this.pageScrollerSelector);
            var $pageScrollerStage = $(this.pageScrollerStageSelector);

            if (!$pageScroller.length || !$pageScrollerStage.length ) {
                return;
            }

            this.$pageScroller = $pageScroller;
            this.$pageScrollerStage = $pageScrollerStage;

            this.calculateScrollerSize();
        },

        calculateScrollerSize: function() {
            var self = this;
            var images = this.$pageScroller.find('img');
            var totalImages = images.length;
            var totalGutterWidth = (totalImages - 1) * this.gutterWidth;

            images.each(function(i) {
                var $this = $(this);
                var imgWidth = $this.attr("data-imgWidth");
                self.stageWidth = self.stageWidth + parseInt(imgWidth);
            });

            self.stageWidth = self.stageWidth + totalGutterWidth;

            this.$pageScrollerStage.width(self.stageWidth);
        }
    };

}(jQuery, window, MELISSAO));