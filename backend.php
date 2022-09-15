<body onload="document.getElementById('rzp-button1').click();">
	<button hidden id="rzp-button1">Pay</button>

</body>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
	<?php $finalAmount = $_POST['am'] * 100; ?>
    var options = {
        key: "rzp_test_ccThBYUml8MOaJ", // Enter the Key ID generated from the Dashboard
        amount: "<?php echo $finalAmount;  ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        currency: "INR",
        name: "The Hope Trust",
        description: "Test Transaction",
        image: "https://example.com/your_logo",
       // order_id: "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
        handler: function (response) {
        window.open("https://localhost/intern/success.php?name=<?php echo $_POST['name']; ?>&&email=<?php echo $_POST['email']; ?>&&number=<?php echo $_POST['number']; ?>", "_self");

            // alert(response.razorpay_payment_id);
            // alert(response.razorpay_order_id);
            // alert(response.razorpay_signature);
        },
        prefill: { name: "<?php echo $_POST['name']; ?>", email: "<?php echo $_POST['email']; ?>", contact: "<?php echo $_POST['number']?>" },
        notes: { address: "Razorpay Corporate Office" },
        theme: { color: "#3399cc" },
    };
    var rzp1 = new Razorpay(options);
    rzp1.on("payment.failed", function (response) {
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
    });
    document.getElementById("rzp-button1").onclick = function (e) {
        rzp1.open();
        e.preventDefault();
    };
</script>
