/*! Select300 4.0.5 | https://github.com/select300/select300/blob/master/LICENSE.md */

(function(){if(jQuery&&jQuery.fn&&jQuery.fn.select300&&jQuery.fn.select300.amd)var e=jQuery.fn.select300.amd;return e.define("select300/i18n/sl",[],function(){return{errorLoading:function(){return"Zadetkov iskanja ni bilo mogoče naložiti."},inputTooLong:function(e){var t=e.input.length-e.maximum,n="Prosim zbrišite "+t+" znak";return t==2?n+="a":t!=1&&(n+="e"),n},inputTooShort:function(e){var t=e.minimum-e.input.length,n="Prosim vpišite še "+t+" znak";return t==2?n+="a":t!=1&&(n+="e"),n},loadingMore:function(){return"Nalagam več zadetkov…"},maximumSelected:function(e){var t="Označite lahko največ "+e.maximum+" predmet";return e.maximum==2?t+="a":e.maximum!=1&&(t+="e"),t},noResults:function(){return"Ni zadetkov."},searching:function(){return"Iščem…"}}}),{define:e.define,require:e.require}})();