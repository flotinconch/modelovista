<?php
include_once "view/css/css_pagos/pagos.css";
// include database configuration file
include 'model/Configuracion.php';

require_once "funciones/funcion_pago.php";
?>

<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">

                <ul class="nav nav-pills">
                    <li role="presentation"><a href="index.php?ruta=productos">Inicio</a></li>
                    <li role="presentation"><a href=" index.php?ruta=carrito">Carrito de Compras</a></li>
                    <li role="presentation" class="active"><a href="index.php?ruta=pagos">Pagar</a></li>
                  
                </ul>
            </div>

            <div class="panel-body">
                <h1>Vista previa de la Orden</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Pricio</th>
                            <th>Cantidad</th>
                            <th>Sub total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($cart->total_items() > 0) {
                            //get cart items from session
                            $cartItems = $cart->contents();
                            foreach ($cartItems as $item) {
                        ?>
                                <tr>
                                    <td><?php echo $item["name"]; ?></td>
                                    <td><?php echo '$' . $item["price"] . ' COP'; ?></td>
                                    <td><?php echo $item["qty"]; ?></td>
                                    <td><?php echo '$' . $item["subtotal"] . ' COP'; ?></td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="4">
                                    <p>No hay articulos en tu carta......</p>
                                </td>
                            <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3"></td>
                            <?php if ($cart->total_items() > 0) { ?>
                                <td class="text-center"><strong>Total <?php echo '$' . $cart->total() . ' COP'; ?></strong></td>
                            <?php } ?>
                        </tr>
                    </tfoot>
                </table>
                
                <div class="footBtn">
                    
                    <?php
                    
                    $var = json_encode($cart->total());

                    ?>
                    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <script src="https://www.paypal.com/sdk/js?client-id=AVn2S8pFrPWuBCmwpCJ_xwXfPzcQlIWQHIT9KY0ScOiWbiPKMqRNMMUdt2i4g5_7yOGsX5_Snamk_DGP&currency=USD"></script>
   
    <div id="paypal-button-container"></div>
    <script>
        
      paypal.Buttons({
        style:{
            color:'blue',
            shape:'pill',
            label: 'pay'
        },
        createOrder: function(data,actions){
            return actions.order.create({
                purchase_units:[{
                    amount:{
                        value:   ("<?php echo $var ?>")
                    }
                }]
            });
        },
        onApprove: function(data, actions){
            actions.order.capture().then(function(detalles){
                window.location.href="AccionCarta.php?action=placeOrder"
                console.log(detalles);
            });
        },
        onCancel: function(data){
            alert("pago cancelado");
            console.log(data)
        }
      }).render('#paypal-button-container');
      
    </script>
  </body>
</html>



                </div>
            </div>
            
        </div>
        <!--Panek cierra-->
    </div>
</body>
