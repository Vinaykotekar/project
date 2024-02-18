<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordering Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
</head>
<body>
    <h2>Place Order</h2>
    <form id="orderForm">
        <label for="cardId">Card ID:</label>
        <input type="text" id="cardId" name="cardId">
        <button type="submit">Place Order</button>
    </form>

    <div id="qrCode"></div>

    <script>
        document.getElementById('orderForm').addEventListener('submit', function(event) {
            event.preventDefault(); 
            
            const cardId = document.getElementById('cardId').value;
            
            fetch('https://api.giftlov.com/api/Base/placeOrder', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ customerName: 'Ram Kumar', firstName: 'Ram', lastName: 'Kumar', referenceNo: '234343434', contactNumber: '+9725994098', smsMobileNumber: '+972599409858', emailAddress: 'jaishreeram@gmail.com', countryCode: 'AE', languageCode: 'EN', orderDate: '2022-05-15', lineItems: [{cardItemId: 'AMAZON-050-01', value: 50}] })
            })
            .then(response => response.json())
            .then(data => {
                // If order placed successfully, generate and display QR code
                const qrCodeDiv = document.getElementById('qrCode');
                const qr = new QRious({
                    element: qrCodeDiv,
                    value: data.claimUrl // Assuming the API response contains the claim URL
                });
            })
            .catch(error => {
                console.error('Error placing order:', error);
            });
        });
    </script>
</body>
</html>
