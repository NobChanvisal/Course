<!DOCTYPE html>
<html>
<head>
    <title>ABA PayWay Sandbox Test</title>
</head>
<body>
    <h1>Test ABA PayWay Sandbox</h1>
    <form id="paymentForm">
        <label>Amount (USD):</label>
        <input type="text" name="amount" value="5.00"><br><br>

        <label>Invoice ID:</label>
        <input type="text" name="invoice_id" value="INV<?php echo time(); ?>"><br><br>

        <label>Description:</label>
        <input type="text" name="description" value="Test Payment"><br><br>

        <button type="submit">Pay Now</button>
    </form>

    <script>
        document.getElementById("paymentForm").addEventListener("submit", function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            fetch("payment.php", {
                method: "POST",
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if(data.status === "success") {
                    window.location.href = data.paymentUrl;
                } else {
                    alert("Error: " + data.message);
                }
            });
        });
    </script>
</body>
</html>
