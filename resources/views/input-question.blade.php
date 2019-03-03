<!DOCTYPE HTML>
<html lang="en">
   <head>
      <link rel="stylesheet" href="{{ URL::asset('/css/style.blade.css') }}" type="text/css">
      <title>ELLo Mate | Student</title>
      <meta charset="UTF-8">
      <style>
         * {
            box-sizing: border-box;
         }

         header {
            grid-column: span 3;
         }
         body {
            grid-template-columns: 1fr 1fr 1fr;
         }
         .card-container {
            grid-column: 1;
            grid-column-start: 2;
            flex-direction: column;
            padding: 1em 2em;
         }
         #register-header {
            font-weight: bold;
            width: 100%;
            text-align: center;
         }

         /* Full-width input fields */
         input[type=text], input[type=password] {
         width: 100%;
         padding: 15px;
         margin-bottom: 2em;
         display: inline-block;
         border: none;
         background: #f1f1f1;
         }

         input[type=text]:focus, input[type=password]:focus {
         background-color: #ddd;
         outline: none;
         }

         label {
            font-size: small;
         }

         /* Set a style for all buttons */
         button {
         background-color: #A6A619;
         color: white;
         padding: 14px 20px;
         margin: 8px 0;
         border: none;
         border-radius: 5px;
         cursor: pointer;
         width: 100%;
         margin-bottom: 1em;
         transition: 0.2s all ease-in-out;
         }

         button:hover {
         opacity:0.8;
         }
      </style>
   </head>
   <header>
      <nav>
         <h1><span style="color: teal;"><strong>ELL</strong></span><span style="">o</span> Mate</h1>
      </nav>
   </header>
     <div class="card-container">
      <p id="register-header">Input Question</p>
   
        <form method="post" action="/input-question">
        @csrf
            <div id="register-container">        
              <label for="paragraph">Paragraph</label>
              <textarea rows="4" cols="50" name="paragraph" required></textarea>
          
              <label for="question">Question</label>
              <textarea rows="4" cols="50" name="question" required></textarea>

              <label for="correct-ans">Correct Answer</label>
              <textarea rows="4" cols="50" name="correct-ans" required></textarea>

              <label for="incorrect-ans1">Incorrect Answer</label>
              <textarea rows="4" cols="50" name="incorrect-ans1" ></textarea>

              <label for="incorrect-ans2">Incorrect Answer</label>
              <textarea rows="4" cols="50" name="incorrect-ans2" ></textarea>

               <button type="submit" class="signupbtn">Submit Prompt</button>
            </div>
          </form>
      </div>
   <script> </script>
</html>