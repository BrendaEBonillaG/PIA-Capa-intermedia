<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Pago</title>

    <link rel="icon" href="https://i.ibb.co/NjdYY9Q/Logo-Developing.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../PIA_PCI 2/CSS/tarjeta.css">
   
</head>
<body>

      
    <div class="payment-container">

        <h2>Métodos de Pago</h2>

        <div class="payment-card">
            <h3>Tarjeta</h3>

            <form id="payment-form" action="Api.php" method="POST" onsubmit="return validateForm()">
                <div class="input-group">
                    <label for="card-number">Número de Tarjeta</label>
                    <input type="text" id="card-number" name="card-number" placeholder="XXXX XXXX XXXX XXXX" maxlength="19">
                </div>

                    <div class="input-row">
                        <div class="input-group">
                            <label for="expiry-date">Fecha de Vencimiento</label>
                            <input type="text" id="expiry-date" name="expiry-month-year" placeholder="MM/AA" maxlength="5">
                        </div>
                        <div class="input-group">
                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" name="cvv" placeholder="CVV" maxlength="4">
                        </div>
                    </div>
        
                <button type="submit" class="payment-button" >Proceder a Pago</button>
            </form>
        </div>

        <div class="payment-methods">
            <button type="button" class="payment-button paypal" onclick="location.href='MainAlumno.php'">PayPal</button>
            <button type="button" class="payment-button oxxo" onclick="location.href='MainAlumno.php'">Oxxo Pay</button>
        </div>
    </div>

    <br></br>
    <footer class="footer text-center mt-auto" style="background-color: #252839; color: #F2DE99; padding: 20px;">
        <p>&copy; 2025 Monarca Todos los derechos reservados.</p>
    </footer>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
