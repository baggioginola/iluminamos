/**
 * Created by mario on 15/ene/2017.
 */
jQuery(document).ready(function () {
    jQuery('#btn_search_products').click(function () {
        jQuery('#id_message_search').slideUp();
        var url = BASE_ROOT + 'search/products';

        var filters = {};

        if (jQuery('#filter_category').val() != '') {
            filters['category'] = jQuery('#filter_category').val();
        }
        if (jQuery('#filter_brand').val() != '') {
            filters['brand'] = jQuery('#filter_brand').val();
        }
        if (jQuery('#filter_price').val() != '') {
            filters['price'] = jQuery('#filter_price').val();
        }

        if (Object.keys(filters).length === 0) {
            jQuery('#id_message_search').slideDown();
            return false;
        }

        jQuery.ajax({
            url: url,
            type: "POST",
            cache: false,
            data: filters,
            dataType: 'json',
            async: false,
            success: function (response) {
                var product_results = jQuery('#product_results');
                product_results.empty();
                if(response.status == 200) {
                    var product_results_array = [];
                    jQuery.each(response.data, function (key, value) {

                        product_results_array = [
                            '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">' +
                            '<a href="',BASE_ROOT + 'producto/' + value.id_producto , '">' +
                            '<div class="thumbnail"><img src="', PRODUCTS_IMG + value.id_producto + '.jpg' ,'"/>' +
                            '<div class="caption">' +
                            '<h3 style="font-size: 20px; height: 45px; overflow: hidden; text-align: center;">',value.nombre,'</h3>' +
                            '</div>' +
                            '</div>' +
                            '</a>' +
                            '</div>'];
                        product_results.append(product_results_array.join(''));
                    });

                }
            }
        });
    });
});