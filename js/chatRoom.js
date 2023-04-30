$(document).ready(function() {

    var lastTimestamp = 0;
    setInterval(function() {
        $.ajax({
            type:"POST",
            url:"refresh_notes.php",
            data:{timestamp:lastTimestamp},
            datatype:"json",
            success:function(data){
                console.log(data);
                for(var i in data){var message = data[i];
                var timestamp = Date.parse(message.timestamp);
                if(timestamp<=lastTimestamp)continue;
                lastTimestamp=timestamp;

                var date = new Date(timestamp);
                var hours = date.getHours();
                var minutes = date.getMinutes();

                var humanTimestamp = hours + ":" + (minutes < 10 ? '0' : '') + minutes;
                var newMessage = $("<div>");
                newMessage.css({
                    'display': 'flex',
                    'align-items': 'center',
                    'height':'50px',
                    'clear':'both'

                });
                var messageContainer = $("<div>");
                messageContainer.css({
                'display': 'flex',
                'align-items': 'center',
                'color':'black'


                });
                newMessage.append(messageContainer);
                var messageElement = $("<div>").text(message.message);
                messageElement.css ({
                    'background-color': '#87cefa',
                    'padding': '10px',
                    'border-radius': '10px',
                    'border-color':'white',
                    'border':'1px solid black',
                    'color':'white',
                    'display': 'inline-block',
                    'margin-right': '5px',
                    'background-color': 'black'


                });
                messageContainer.append(messageElement);

                var timestampElement = $("<sub>").text(humanTimestamp);
                timestampElement.css({
                    'font-size': '0.8em',
                    'margin-left': '5px'
                });
                messageElement.append(timestampElement);

                $(".assignment").append(newMessage);
                $(".assignment").scrollTop($(".assignment")[0].scrollHeight);}
            },

            error: function(jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        });

    }, 1000);
    $("#send-message-form").submit(function(e) {
        e.preventDefault();
        console.log("hello");
        var messageText = $("#message-text").val().trim();

        if (messageText !== "") {
            $.ajax({
                type: "POST",
                url: "chat_functions.php",
                data: { message: messageText },
                success: function(response) {
                    console.log("hey");
                    $("#message-text").val("");
                },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            }


            });

        }
    });

});