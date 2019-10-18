<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pricing Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style type="text/css">
        .container { margin-top: 100px; }
        .list-group-item { padding: 5px; border: 0px; }
        .price { font-size: 72px; }
        .currency {
            font-size:25px;
            position: relative;
            top: -30px;
        }
        .card { width: 350px; }
        .card:hover {
            -webkit-transform: scale(1.05);
            -moz-transform: scale(1.05);
            -ms-transform: scale(1.05);
            -o-transform: scale(1.05);
            transform: scale(1.05);
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="price"><span class="currency">NOK</span>67</h3>
                    </div>
                    <div class="card-block text-center">
                        <div class="card-title">
                            WordPress Plugin
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">Feature 1</li>
                            <li class="list-group-item">Feature 2</li>
                            <li class="list-group-item">Feature 3</li>
                            
                        </ul>
                        <br><br>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
<input type="image" src="https://www.paypalobjects.com/en_US/NO/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
