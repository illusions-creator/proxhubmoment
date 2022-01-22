<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon | ProxHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Feb 30, 2022 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="whyyoulookinglmao"
        document.getElementById("whyyoulookinglmao").innerHTML = "Time remaining: " + days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("whyyoulookinglmao").innerHTML = "Expect to see this in a bit!";
        }
    }, 1000);



    function sendMessage() {
        var request = new XMLHttpRequest();
        request.open("POST", "https://discord.com/api/webhooks/928111527125463101/HmU3YwLhxPEVVy5WPFaXH6ZTSgiQ7q82BGHRPyKcntDAp4SczbBWxgWFkFDNn6L3_uXL");
        request.setRequestHeader('Content-type', 'application/json');
        var params = {
            username: "ProxHub",
            content: "Someone has opened ProxHub." +

                request.send(JSON.stringify(params))
        }
    }
</script>

<body onload="sendMessage()">
    <div class="d-flex flex-column justify-content-center w-100 h-100">

        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 class="fw-light text-white m-0">Coming Soon</h1>

            <h5 class="fw-light text-white m-0">— full hub coming soon —</h5>
            <p class="fw-light text-white m-0" id="whyyoulookinglmao"></p>
            <p class="fw-light text-white m-0" id="move">created by illusions#1000</p>

            <a href="https://beta-proxy.herokuapp.com/" target="_blank"><button class="fw-light btn-grad ">Proxy</button></a>
        </div>

    </div>
    <p class="fw-light text-white" id="loc">created by illusions#1000</p>

    </div>
</body>

</html>