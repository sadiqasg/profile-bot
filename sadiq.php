<?php 
    require 'db.php';

    $result = $conn->query("Select * from secret_word LIMIT 1");
    $result = $result->fetch(PDO::FETCH_OBJ);
    $secret_word = $result->secret_word;

    $result2 = $conn->query("Select * from interns_data where username = 'sadiq'");
    $user = $result2->fetch(PDO::FETCH_OBJ);
?>

<?php

 // enter bot 

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sadiq Profile</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- custom style -->
    <style type="text/css">
        body {
            text-align: center;
            font-family: 'work sans', 'Lato';
        }
        .section, .row {
            margin: 1em 20%;
            padding: auto;
            box-shadow: 5px 5px 5px lightgrey;
            border-top: 1px solid lightgrey;
            border-left: 1px solid lightgrey;
        }
        span {
            opacity: 0.5;
            font-size: 16px;
        }
        img {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            margin: 0 auto;
        }
        a:link, a:visited, a:hover {
            text-decoration: none;
        }
        a:hover {
            background: beige;
            padding: 5px 0;
            box-shadow: 2px 0 2px #696;
        }
        p {
            display: inline-flex;
        }
        p:first-child {
            padding-top: 5px;
        }
        p:last-child {
            padding-bottom: 5px;
        }
        figure, h3 {
            padding-top: 50px;
        }
        h2, h3 {
            font-size: 28px;
        }
        h2#tag {
            opacity: 0.7;
        }

	    /* bot style */
    .message {
	    float: left;
    	font-size: 16px;
	    background-color: #edf3fd;
	    padding: 10px;
	    display: inline-block;
	    border-radius: 3px;
	    position: relative;
	    margin: 5px;
	  }
  .message:before {
	    position: absolute;
	    top: 0;
	    content: '';
	    width: 0;
	    height: 0;
	    border-style: solid;
	  }
  .message.bot:before {
	    border-color: transparent #edf3fe transparent transparent;
	    border-width: 0 10px 10px 0;
	    left: -9px;
	  }
  .message.you:before {
	    border-width: 10px 10px 0 0;
	    right: -9px;
	    border-color: #edf3fd transparent transparent transparent;
	  }
	  
  .message.you {
	    float: right;
	  }
	  .content {
	    display: block;
	  }
	  .msg-container {
	    display: inline-flex;
	    background-color: #4f4f4f;

	    /* position: fixed; */
	    width: 100%;
	    left: 0;
	    bottom: 0px;
	    box-sizing: border-box;
	    padding: 10px 5px;
	    height: 60px;
	  }
	  .msg-box {
	    border-radius: 3px;
	    border: none;
	    padding: 5px 10px;
	    width: 90%;
	  }
	  .send-msg-btn {
	    background-color: ghostwhite;
	    width: 100%;
	    border-radius: 20%;
	    padding: 10%;
	    margin: auto 12px;
	    color: #696;
	  }
	  @media screen and (max-width: 767px) {
	  	.msg-container {
	  		display: block;
	  	}
	  	.send-msg-btn {
	  		margin: auto;
	  		padding: 0;
	  	}
	  }
	    .botMsg {
	    	border: 2px solid lightgrey;
	    	height: 350px;
	    	padding: 5px;
	    	background: ghostwhite;
	    	overflow-y: scroll;
	    	background-color: white;
		    color: #3A3A5E;
    		width: 100%;
    	    padding-bottom: 50px;
    		border-top-left-radius: 5px;
    		border-top-right-radius: 5px;
	    }
	    .botMsg > div {
	    	display: inline-block;
    		width: 100%;
  		}
	    input {
	    	width: 400px;
	    }
	    button {
	    	margin: 10px 0;
	    	padding: 5px;
	    	border: none;
	    	box-shadow: 5px 0 5px lightskyblue;
	    }
	    #startBot:hover {
	    	box-shadow: 10px 5px 19px skyblue, -5px 0 5px lightskyblue;
	    }
	    #endBot:hover {
	    	box-shadow: 10px 5px 19px red, -5px 0 5px orange;
	    }
	    .tag {
	    	margin: 0;
	    	text-align: center;
	    	color: #696;
	    	text-shadow: 2px 0 2px seagreen;
	    	animation-duration: 1000ms;
	    	animation-name: blink;
	    	animation-iteration-count: infinite;
	    	animation-direction: alternate;
	    }
	    @keyframes blink {
	    	from {
	    		opacity: 1;
	    	}
	    	to {
	    		opacity: 0.5;
	    	}
	    }
	    .um {
	    	text-align: right !important;
	    	display: inline;
	    	padding: 10px;
	    	margin-right: 5px;
	    	background: lightgrey;
	    	color: maroon;
	    }
	    .bm {
	    	text-align: left !important;
	    	display: inline;
	    	padding: 10px;
	    	margin-left: 5px;
	    	background: beige;
	    	color: #696;
	    }
    </style>
</head>
<body>
<!-- section starts -->

    <div class="row section">
        <div class="col-md-12">
            <figure>
                <img class="img-responsive" src=<?php echo $image_filename ?> alt="dp">
                <figcaption><p><?php echo $name ?></p></figcaption>
            </figure>
            <h2 id="tag">Web Developer&nbsp;|&nbsp;UI/UX Designer<br />
            <span>HTML | CSS | JS | JQUERY | ANGULAR | BOOTSTRAP | PHP</span></h2>
        </div>
    </div>

    <div class="row section">
        <div class="col-md-12">
            <h3>Check Me Out</h3>
            <div class="row">
                <div class="col-md-12">
                    <p><a href="https://www.codepen.io/sastech" target="_blank" style="color: black;">Codepen</a></p>
                    <p><a href="https://www.github.com/saslamp" target="_blank" style="color: black;">GitHub</a></p>
                    <p><a href="https://www.twitter.com/_saslamp" target="_blank" style="color: skyblue;">Twitter</a></p>
                    <p><a href="https://www.linkedin.com/in/abubakar-sambo-ii-102726b4" target="_blank" style="color: lightskyblue;">LinkedIn</i></a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- bot -->
    <div class="row section">
		<form>
		    <div class="botMsg">
		      <div>
		        <div class="message bot">
		          <span class="content">I'm NagatoBot. Ask your question.</span>
		        </div>
		      </div>
		    </div>
		    <div class="msg-container">
		      <input class="msg-box" placeholder="Enter your message.."/>
		      <div>
		      <input type="submit" class="send-msg-btn" name="submit" value="Send"/>
		      </div>
		    </div>
		  <button id="endBot" class="btn-danger">End Bot</button>
		</form>
	</div>

	<!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
    	$(function(){

   		  window.onload = function() {
			    $(document).keypress(function(e) {
			      if(e.which == 13) {
			        getResponse(getQuestion());
			      }
			    });
			    $('.send-msg-btn').on('click', function () {
			      getResponse(getQuestion());
			    });
			  }

			  function isUrl(string) {
			    var expression = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
			    var regex = new RegExp(expression);
			    var txt = string;
			    if (txt.match(regex)) {
			      return true;
			    } else {
			      return false;
			    }
			  }
			  function stripHTML(message){
			    var re = /<\S[^><]*>/g
			    return message.replace(re, "");
			  }
			  function getResponse(question) {
			    updateThread(question);
			    showResponse(true);
			    if (question.trim() === "") {
			      showResponse(':)');
			      return;
			    } 
			    if (question.toLowerCase().includes("open: ") && isUrl(question.toLowerCase().split("open: ")[1].trim())) {
			      var txtSay = question.toLowerCase().split("open: ")[1];
			      showResponse('Okay, opening: <code>'+ txtSay + '</code>');
			      window.open("http://" + txtSay);
			      return;
			    }
			    if (question.toLowerCase().includes("say: ")) {
			      var txtSay = question.toLowerCase().split("say: ")[1];
			      var msg = new SpeechSynthesisUtterance(txtSay);
			      window.speechSynthesis.speak(msg);
			      showResponse('Okay, saying: <code>'+ txtSay + '</code>');
			      return;
			    }
			    $.ajax({
			      url: "profiles/sadiq.php",
			      method: "POST",
			      data: { payload: question },
			      success: function(res) {
			        if (res.trim() === "") {
			          showResponse(`
			          Err.. I have no idea what you just said. Please train me.
			          Use <code>"train: your question? # the answer # password"</code>
			          `);
			        } else {
			          showResponse(res);
			        }
			      }
			    });
			  }
			  function showResponse(response) {
			    if (response === true) {
			      $('.msg-container').append(
			        `<div>
			          <div class="message bot">
			            <span class="content">Thinking...</span>
			          </div>
			        </div>`
			      );
			      return;
			    }

			    $('.msg-container').append(
			      `<div>
			        <div class="message bot">
			          <span class="content">${response}</span>
			        </div>
			      </div>`
			    );
			    $('.msg-box').val("");
			  }
			  function getQuestion() {
			    return $('.msg-box').val();
			  }
			  function updateThread(message) {
			    message = stripHTML(message);
			    $('.msg-container').append(
			      `<div>
			        <div class="message you">
			          <span class="content">${message}</span>
			        </div>
			      </div>`
			    );
			  }



    	});
    </script>


</body>
</html>