/**
 * @var null
 */
'use strict'
let Portal = (function($) {
    let _ = {}

    _.validate = function() {

    }

    _.file = function(elem) {
        elem.click();
    }

    _.ajax = function(config) {
        if( config.url) {
            $.ajax({
                url: config.url,
                method: config.method,
                data: config.data,
                cache: false,
            })
            .done(config.callback)
            .catch(config.callback)
        }
    }
    return _;

}(jQuery));