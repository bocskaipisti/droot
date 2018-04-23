<!DOCTYPE html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
</head>

<body>
<div id="paypal-button"></div>

<style>
    @media screen and (max-width: 400px) {
        #paypal-button-container {
            width: 100%;
        }
    }

    @media screen and (min-width: 400px) {
        #paypal-button-container {
            width: 250px;
        }
    }
</style>

<div id="paypal-button-container"></div>

    Ez az, ami kell: <a href="https://developer.paypal.com/demo/checkout/#/pattern/credit" target="_blank">https://developer.paypal.com/demo/checkout/#/pattern/credit</a>

<script>

    // Render the PayPal button

    paypal.Button.render({

        // Set your environment

        env: 'sandbox', // sandbox | production

        locale: 'en_US',
        /* Variánsok: en_US, en_AU, en_GB, fr_CA, es_ES, it_IT, fr_FR, de_DE, pt_BR, zh_CN, da_DK, zh_HK, id_ID, he_IL, ja_JP, ko_KR, nl_NL, no_NO, pl_PL, pt_PT, ru_RU, sv_SE, th_TH, zh_TW.*/

        // Specify the style of the button

        style: {
            label: 'checkout',
            size:  'small',    // small | medium | large | responsive
            shape: 'pill',     // pill | rect
            color: 'gold'      // gold | blue | silver | black
        },

        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create

        client: {
            sandbox:    'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
            production: '<insert production client id>'
        },

        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '0.01', currency: 'USD' }
                        }
                    ]
                }
            });
        },

        onAuthorize: function(data, actions) {
            console.log('onAuthorize');
            return actions.payment.execute().then(function() {
                window.alert('Payment Complete!');
            });
        }


    }, '#paypal-button-container');


</script>


<div id="paypal-button-container"></div>

</body>