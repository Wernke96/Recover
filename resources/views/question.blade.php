<!DOCTYPE HTML>
<html lang="en">
   <head>
      <link rel="stylesheet" href="style.blade.css" type="text/css">
      <title>ELLo Mate | Student</title>
      <meta charset="UTF-8">
   </head>
   <header>
      <nav>
         <h1><span style="color: teal;"><strong>ELL</strong></span><span style="">o</span> Mate</h1>
      </nav>
   </header>
     <div class="card-container">
      <div id="question-container">
        <p id="question-number">Question 1</p>
         <p id="question-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget libero facilisis mauris consectetur semper at vel quam. Nullam ut consequat nunc. Donec rutrum dui non ex varius, vitae convallis odio aliquet. Integer vel nisi at dolor luctus maximus in eget ipsum. Nullam venenatis, augue et faucibus elementum, purus mi consequat mauris, vitae pretium ex mi ut lorem. Quisque mattis vulputate tempor. Maecenas risus leo, convallis et erat id, pellentesque porttitor neque.
         </p>
      </div>
      <div id="answer-container">
        <p id="question-timer"><span id="minutes"></span>:<span id="seconds"></span></p>
         <p id="answer-header">What did Greg want from the store?</p>
         <form>
            <input class="answer" type="radio" name="gender" value="male">eget libero<br>
            <input class="answer" type="radio" name="gender" value="female">vel quam dolor<br>
            <input class="answer" type="radio" name="gender" value="other">sit amet consectetur<br>
            <input class="answer" type="radio" name="gender" value="other">sit elit adipiscing elit
         </form>
         <input id="next-question-button" type="submit" value="Next">
      </div>
    </div>
   <script>
      var sec = 0;
      function pad ( val ) { return val > 9 ? val : "0" + val; }
      setInterval( function(){
          document.getElementById("seconds").innerHTML=pad(++sec%60);
          document.getElementById("minutes").innerHTML=pad(parseInt(sec/60,10));
      }, 1000);
   </script>
</html>