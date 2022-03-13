

<!DOCTYPE html>
<html>
 <head>
     <meta name="viewport" content="width=device-width">
     <script type="text/javascript" src="https://checkout.razorpay.com/v1/razorpay.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 </head>   
    <body>
        <form action="https://www.example.com/payment/success/" method="POST">
        <script
            id="pay"
            src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="rzp_live_5cPvsgu2wU5EYz" 
            data-amount="50000"
            data-currency="INR"
            
            data-buttontext="Pay with Razorpay"
            data-name="Apbiharpower"
            data-description="Power Maintenance Services"
            data-image="img/logo1.png"
            
            data-theme.color="#00ACC0">
            
        </script>
        <input type="text" name="name">
        <input type="hidden" custom="Hidden Element" name="hidden">
        </form>
                
                
               <button id="rzp-button1">Pay</button>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
        var options = {
            "key": "rzp_live_5cPvsgu2wU5EYz", // Enter the Key ID generated from the Dashboard
            "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise or INR 500.
            "currency": "INR",
            "name": "Apbiharpower",
            "description": "Power Maintenance Services",
            "image": "img/logo1.png",
            "method": 'netbanking',
            "handler": function (response){
                alert(response.razorpay_payment_id);
            },
            "prefill": {
                "name": "Gaurav Kumar",
                "email": "gaurav.kumar@example.com",
                "contact": "9999999999"
            },
            "notes": {
                "address": "note value"
            },
            
            "theme": {
                "color": "#F37254"
            }
        };
        var rzp1 = new Razorpay(options);
        document.getElementById('rzp-button1').onclick = function(e){
            rzp1.open();
            e.preventDefault();
        }
        </script>
        
        
        <script>
            $(".razorpay-payment-button").click(function(){
                
                   // uplodeimgcheck();
                   // var fame=$('#rfname').val();
                   // var lame=$('#rlname').val();
                    // var name=fname+' '+lname;
                    // var email=$('#remail').val();
                    // var phone=$('#rphone').val();
                   // $('#pay').attr('data-prefill.name', name);
                   // $('#pay').attr('data-prefill.email', "sugandhkumar9@gmail.com");
                   // $('#pay').attr('data-prefill.contact', "8271168973");
                   $('#pay').data('data-amount', "100000");
                //alert("hello");
            });
        </script>
        
        
        <script>
            var razorpay = new Razorpay({  
                key: 'rzp_live_5cPvsgu2wU5EYz',    // logo, displayed in the payment processing popup  
            image: 'https://i.imgur.com/n5tjHFD.png',});
            
            var razorpay = new Razorpay(options); // as before
            razorpay.once('ready', function(response) {
              console.log(response.methods);
            })


var data = {
  amount: 1000, // in currency subunits. Here 1000 = 1000 paise, which equals to ₹10
  currency: "INR"// Default is INR. We support more than 90 currencies.
  email: 'gaurav.kumar@example.com',
  contact: '9123456780',
  notes: {
    address: 'Ground Floor, SJR Cyber, Laskar Hosur Road, Bengaluru',
  },
  order_id: 'order_9A33XWu170gUtm',
  method: 'netbanking',

  // method specific fields
  bank: 'HDFC'
};

$btn.on('click', function(){
  // has to be placed within user initiated context, such as click, in order for popup to open.
  razorpay.createPayment(data);

  razorpay.on('payment.success', function(resp) {
    alert(resp.razorpay_payment_id),
    alert(resp.razorpay_order_id),
    alert(resp.razorpay_signature)}); // will pass payment ID, order ID, and Razorpay signature to success handler.

  razorpay.on('payment.error', function(resp){alert(resp.error.description)}); // will pass error object to error handler

})
        </script>
    </body>
    
    
</html>