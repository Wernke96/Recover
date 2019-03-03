<!DOCTYPE HTML>
<html lang="en">
   <head>
      <link rel="stylesheet" href="{{ URL::asset('/css/style.blade.css') }}" type="text/css">
      <title>ELLo Mate | Student</title>
      <meta charset="UTF-8">
      <style>
         * {
               box-sizing: border-box
         }
         body {
            grid-template-columns: 3fr 1fr;
            max-width: none;
         }
         .student-container, .student-fn-ln-container, .stats-container, .stats-level-container {
            display: flex;
         }
         .student-container, .stats-container {
            width: 100%;
            flex-direction: row;
            justify-content: center;
         }
         .student-container {
            margin-bottom: 2em;
         }
         .student-fn, .student-ln {
            font-weight: bold;
            margin: 0;
         }
         .student-username {
            margin: 0;
            color: #005580;
            margin-left: 1em;
         }
         .student-fn-ln-container, .student-container {
            align-items: center;
         }
         .student-fn-ln-container p, .stats-level-container p {
            margin-bottom: 0;
         }
         .student-fn-ln-container {
            border-right: 2px solid lightgray;
            padding-right: 1em;
         }
         .stats-level-container {
            padding-right: 2em;
            color: gray;
            flex-direction: column;
            align-items: center;
         }
         .stats-level {
            margin: 0;
         }
         .stats-number {
            margin-top: 0.5em;
            color: black;
            font-weight: bold;
         }
         .card-container {
            flex-direction: column;
            padding: 2em;
            grid-column: span 1;
            grid-column-start: 1;
         }
         .class {
            grid-column-start: 2;
            background: #fafafa;
            border-radius: 5px;
            grid-row-start: 2;
            flex-direction: column;
         }
         .student-image {
            width: 3em;
            height: 3em;
            margin-right: 1em;
         }
         .stats-desc {
            color: gray;
            margin: 0;
            font-size: small;
         }
      </style>

   </head>
   <header>
      <nav>
         <h1><span style="color: teal;"><strong>ELL</strong></span><span style="">o</span> Mate</h1>
      </nav>
   </header>
   <div class="card-container class">
      <div class="student-container class">
         <p id="question-number">Class Statistics</p>
         <div class="stats-container class">
            <p>Average</p>
            <p class="stats-desc">This indicates how well the class is performing.</p>
            <p >Mean</p>
            <p class="stats-desc">This indicates how well the class is performing.</p>
            <p>Mode</p>
            <p class="stats-desc">This indicates how well the class is performing.</p>
            <p>Highest</p>
            <p class="stats-desc">This indicates how well the class is performing.</p>
            <p>Lowest</p>
            <p class="stats-desc">This indicates how well the class is performing.</p>
         </div>
      </div>
   </div>

     <div class="card-container">
      <div class="student-container">
      <img class="student-image" src="http://hive-up.com/wp-content/uploads/2018/08/student.png">
         <div class="student-fn-ln-container">
            <p class="student-fn">Griffin</p>&nbsp;<p class="student-ln">Burkhardt</p>
         </div>
        <p class="student-username">burkhardtg1</p>
      </div>
      <div class="stats-container">
         <div class="stats-level-container">       
            <p class="stats-level">Level 1</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 2</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 3</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 4</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 5</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 6</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 7</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 8</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 9</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 10</p>
            <p class="stats-number">80%</p>
         </div>
      </div>
    </div>
    <div class="card-container">
      <div class="student-container">
      <img class="student-image" src="http://hive-up.com/wp-content/uploads/2018/08/student.png">
         <div class="student-fn-ln-container">
            <p class="student-fn">Griffin</p>&nbsp;<p class="student-ln">Burkhardt</p>
         </div>
        <p class="student-username">burkhardtg1</p>
      </div>
      <div class="stats-container">
         <div class="stats-level-container">       
            <p class="stats-level">Level 1</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 2</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 3</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 4</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 5</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 6</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 7</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 8</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 9</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 10</p>
            <p class="stats-number">80%</p>
         </div>
      </div>
    </div>
    <div class="card-container">
      <div class="student-container">
      <img class="student-image" src="http://hive-up.com/wp-content/uploads/2018/08/student.png">
         <div class="student-fn-ln-container">
            <p class="student-fn">Griffin</p>&nbsp;<p class="student-ln">Burkhardt</p>
         </div>
        <p class="student-username">burkhardtg1</p>
      </div>
      <div class="stats-container">
         <div class="stats-level-container">       
            <p class="stats-level">Level 1</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 2</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 3</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 4</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 5</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 6</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 7</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 8</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 9</p>
            <p class="stats-number">80%</p>
         </div>
         <div class="stats-level-container">       
            <p class="stats-level">Level 10</p>
            <p class="stats-number">80%</p>
         </div>
      </div>
    </div>
   <script> </script>
</html>