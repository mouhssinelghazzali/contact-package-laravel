<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>package laravel</title>
    <style>
body {
  text-align: center;
  background-color: #FFC6D4;
}


.page {
	  width: 300px;
  background: white;
  border: 20px solid #F1A3B6;
  border-radius: 20px;
  margin: auto;
  margin-top: 8%;
}

.header {
  font-family:  Helvetica, Arial, sans-serif;
  font-size: 28px;
  color: #F1A3B6;
  margin: 40px 0 15px 0;
  display: inline-block;
}

.feedback-input {
  	font-family: Helvetica, Arial, sans-serif;
  color: #F1A3B6;
	  font-size: 18px;
	  line-height: 22px;
	  padding: 10px;
  border: 1px solid white;
  border-bottom: 1px dotted #F1A3B6;
  width: 90%;
	  -webkit-box-sizing: border-box;
	  -moz-box-sizing: border-box;
	  -ms-box-sizing: border-box;
	  box-sizing: border-box;
}

.submit-button{
	  font-family: Helvetica, Arial, sans-serif;
	  cursor: pointer;
  background-color: white;
	  color: #F1A3B6;
	  font-size:24px;
  margin: 25px 0 30px 0;
  padding: 10px 0;
  width: 130px;
  border: 2px solid #F1A3B6;
  border-radius: 25px;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

textarea {
    height: 180px;
    line-height: 150%;
}

.submit-button:hover{
	  background-color: #A3F1AE;
  border: 2px solid #A3F1AE;
  color: #4EA45B;
  font-weight: 700;
}

.definition {
  font-family: Helvetica, Arial, sans-serif;
  font-size: 14px;
  padding: 10px;
  border: 10px solid #F1A3B6;
  border-radius: 10px;
  background: white;
  color: #9B9B9B;
  position: absolute;
}

.definition:after
{
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: 70%;
  top: 100px;
  border: 25px solid;
  border-color: #F1A3B6 transparent transparent #F1A3B6;
}

.name_def {
  width: 180px;
  top: 40%;
  left: 7%;
}

.email_def {
  width: 120px;
  top: 45%;
  left: 75%;
}

.message_def {
  width: 190px;
  top: 17%;
  left: 67%;
}

.feedback-input:focus {
  outline: none;
}

@media only screen and (max-width : 710px) {
  .name_def {
    left: 40%;
  }
  .email_def {
    left: 15%;
  }
  .message_def {
    left: 42%;
  }
}

</style>
</head>
<body>


        <div class="page">

            <div class="header"> CONTACT FORM </div>

            <form  action="{{route('contact')}}" method="post" class="form">
              <input name="name" type="text" class="name feedback-input" placeholder="Name"/>
              <input name="email" type="text" class="email feedback-input" placeholder="Email" />
              <textarea name="message" class="message feedback-input" placeholder="Message"></textarea>
              <input class="submit-button" type="submit" value="SUBMIT">
            </form>

          </div>

          <p class="name_def definition">A personal name identifies a specific unique and identifiable individual person, and may or may not include a middle name.</p>
          <p class="email_def definition">An email address identifies an email box to which email messages are delivered.</p>
          <p class="message_def definition">A message is a discrete unit of communication intended by the source for consumption by some recipient or group of recipients.</p>



     <script>
  $(".definition").hide();

  function myFunction($myVar, $myVar_def) {
    $myVar.hover(function() {
    $myVar_def.show();
    },function(){
     $myVar_def.hide();
    })
  }

  myFunction($(".name"), $(".name_def"));
  myFunction($(".email"), $(".email_def"));
  myFunction($(".message"), $(".message_def"));
     </script>
</body>
</html>
