function addRemoveFromCelebrityStore(event, product_id, text_add_to_celebrity_store, text_in_celebrity_store) {
    if ($(event).attr('product-in-store') == '0') {
            $(event).find(".celebrity-store-button-text-identifier").text(text_in_celebrity_store);
            // $(event).find(".celebrity-store-button-text-identifier").addClass('button-celebrity-store-list-text');
            $(event).find(".celebrity-store-button-text-identifier").text("");
            $(event).find(".celebrity-store-button-text-identifier").addClass('fa fa-spinner fa-pulse fa-3x fa-fw');
            $(event).addClass('deactivateLink');
            addRemoveSingleProduct(event, 'add', product_id, '0',  text_add_to_celebrity_store, text_in_celebrity_store);
        }else {
            $(event).find(".celebrity-store-button-text-identifier").text("");
            // $(event).find(".celebrity-store-button-text-identifier").addClass('button-celebrity-store-list-text');
            $(event).find(".celebrity-store-button-text-identifier").addClass('fa fa-spinner fa-pulse fa-3x fa-fw');
            $(event).addClass('deactivateLink');
            addRemoveSingleProduct(event, 'remove', product_id, '1', text_add_to_celebrity_store, text_in_celebrity_store);
    }
}

function addRemoveSingleProduct(event, action, product_id, productInStorePreAjax, text_add_to_celebrity_store, text_in_celebrity_store){
    let result = "before json";
    $.ajax({
        url: 'index.php?route=momday/celebrities/addRemoveStoreProduct',
        type: 'post',
        data: 'product_id=' + product_id + '&action=' + action,
        dataType: 'json',
        success: function(json) {
            result = "in json";
            if (json['response'] !== "") {
                if (json['response'] === "added"){
                    result = "added";
                }else if (json['response'] === "removed"){
                    result = "removed";
                }else{
                    result = "unknown";
                }
            }else{
                result = "unknown";
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            result = "error";
            performPostAjax(event, result, productInStorePreAjax, text_add_to_celebrity_store, text_in_celebrity_store);
        },
        complete: function(){
            performPostAjax(event, result, productInStorePreAjax, text_add_to_celebrity_store, text_in_celebrity_store);
        }
    });
}

function performPostAjax(event, result, productInStorePreAjax, text_add_to_celebrity_store, text_in_celebrity_store){
    $(event).find(".celebrity-store-button-text-identifier").removeClass('fa fa-spinner fa-pulse fa-3x fa-fw');
    if (result == "added"){
        $(event).find(".celebrity-store-button-text-identifier").text(text_in_celebrity_store);
        $(event).attr('product-in-store', '1');
        $(event).addClass('button-celebrity-pressed');
    }else if (result == "removed"){
        $(event).find(".celebrity-store-button-text-identifier").text(text_add_to_celebrity_store);
        $(event).attr('product-in-store', '0');
        $(event).removeClass('button-celebrity-pressed');
    } else {
        $(event).find(".celebrity-store-button-text-identifier").removeClass('fa fa-spinner fa-pulse fa-3x fa-fw');
        if (productInStorePreAjax == '1'){
            $(event).find(".celebrity-store-button-text-identifier").text(text_in_celebrity_store);
            $(event).addClass('button-celebrity-pressed');
        }else{
            $(event).find(".celebrity-store-button-text-identifier").text(text_add_to_celebrity_store);
            $(event).removeClass('button-celebrity-pressed');
            $(event).attr('product-in-store', '0');
        }
    }
    $(event).removeClass('deactivateLink');
}