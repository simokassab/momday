<?php

/** Used by OC 2.1 */
class ModelPaymentBookey extends ModelExtensionPaymentBookey {}

/**
 * Class ModelExtensionPaymentBookey
 */
class ModelExtensionPaymentBookey extends Model
{
    /** @var string  */
    protected $languagePath = 'extension/payment/bookey';

    public function __construct($registry)
    {
        parent::__construct($registry);

        if (true === version_compare(VERSION, '2.3.0', '<')) {
            $this->languagePath = 'payment/bookey';
        }

        $this->load->language($this->languagePath);
    }

    public function getMethod()
    { 

     $this->load->language('extension/payment/bookey');

        ?>
  

<div class="mainpay" style="display:block">
<div class="paym"><input type="radio" class="spay" name="paymentoption" id="knet" value="knet" checked/>Knet</div>
<div class="paym"><input type="radio" name="paymentoption" class="spay" id="credit" value="credit"/>Credit</div><div class="paym"><input type="radio" name="paymentoption" class="spay" id="bookey" value="Bookeey"/>Bookey</div><div class="paym"><input type="radio" class="spay" name="paymentoption" id="amex" value="amex"/>Amex</div>
</div>
<?php




   

        return array(
            'code' => 'bookey',
            'title' => $this->language->get('text_title'),
            'terms' => '',
            'sort_order' => '1'
        );
    }
}

?>

<script>
    jQuery(document).ready(function($) {
    var bpayval = $("input[name='paymentoption']").val();
     $.ajax({
        url: "index.php?route=extension/payment/bookey/paymthod",
        type: "post",
        data: {bpayval:bpayval} ,
        success: function (response) {
            console.log(response);
           // You will get response from your PHP page (what you echo or print)
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
    $("input[name='paymentoption']").click(function(){
        var bpayval = $(this).val();
        // localStorage.setItem('adpay', bpayval);
         $.ajax({
        url: "index.php?route=extension/payment/bookey/paymthod",
        type: "post",
        data: {bpayval:bpayval} ,
        success: function (response) {
            console.log(response);
           // You will get response from your PHP page (what you echo or print)
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });     
    });
});
</script>

<style type="text/css">
    .paym {
    /*float: left;*/
    margin-right: 30px;
    margin-top: 4px;
}
input[value="bookey"] {
    display: none;
}
.booktitle{display: none;font-size: 12px;}
</style>



<script>
    $(document).ready(function(){
        $("input[name='payment_method']").trigger('click',function(){
            if($(this).val()=='bookey'){
                $(this).attr('checked');
                $('#knet').attr('checked');
                }
        });


        $("input[name='payment_method']").on('click',function(){
            if($(this).val()=='bookey'){
                
                }else{
               $('#knet').removeAttr('checked');
               $('#credit').removeAttr('checked');
               $('#bookey').removeAttr('checked');
               $('#amex').removeAttr('checked');
                }
        });

         $("input[name='paymentoption']").on('click',function(){
            // alert($(this).val());

            $("input[value='bookey']").trigger('click',function(){
            if($(this).val()=='bookey'){
                $(this).attr('checked');
                }
        });
           
        });

    });
</script>
