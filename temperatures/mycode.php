<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <button type="button" id="okButton"  value="okButton">Submit</button>




    <script>
        var aa = localStorage["myKey"];
        //setInterval(funcky,5000);
        //console.log(a);
        //console.log(localStorage["key"]);
    </script>



    <script>

     
$("#okButton").click(function() {
            setInterval(function() {
                //   $.ajax({url: "demo_test.txt", success: function(result){
                //     $("#div1").html(result);
                //   }});

                $.ajax({
                    type: "POST",
                    url: 'mysql.php',
                    data: {a:aa},
                    success: function(data) {
                       // $('.result').html(data);
                    }
                });
            }, 5000);
        });
    </script>
</body>

</html>