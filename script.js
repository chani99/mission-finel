        function checkValue(buttonValue) {
            var type = buttonValue;
            if (type == "get" || type == "delete") {
                if (document.getElementById("Wid").value != "") {
                    sendAJAX(type);
                } else {
                    alert("enter a id of a employee");
                }
            } else if ((type == "add") || (type == "update")) {
                if ((document.getElementById("Wmame").value != "") && (document.getElementById("startDate").value != "")) {
                    sendAJAX(type);
                } else {
                    alert("enter a name and start date of a employee");
                }

            }

        }


        function sendAJAX(type) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if (type == 'get') {
                        var json = JSON.parse(this.responseText);

                        document.getElementById("Wmame").value = json[1];
                        document.getElementById("startDate").value = json[2].split(" ")[0];


                    } else {
                        document.getElementById("result").innerHTML = this.responseText;
                    }

                }
            };
            var param = "mainAJAX.php?q=" + type + "&id=" + document.getElementById("Wid").value + "&name=" + document.getElementById("Wmame").value + "&date=" + document.getElementById("startDate").value;
            xhttp.open("GET", param, true);
            //xhttp.open("POST", "mainAJAX.php?q=" + type + "&id=1&name=chani&date=2017/07/02", true);
            xhttp.send();
        }