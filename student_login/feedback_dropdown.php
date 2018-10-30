<?php
include('server.php');



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TER-Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
  </head>
  <body style="background-color:#1B4D92;">
    <form method="post" action="">
      <div class="container">
        <table class="table table-light table-striped">
          <tbody>
            <h1 class="text-center" style="color:white">Teaching Efficiency Rating(TER) Form</h1>
            <p class="text-center" style="color:white">(Each student shall fill seperate form for each course)</p>
            <p class="text-center" style="color:white">Your response will help us to improve academic enviroment, quality of education and teacher's efficiency</p>
            <tr>
              <td>Course Teacher</td>
              <td><select name="teacher_name" class="form-control" id="sel1" required>
                <option value="">--Select Course Teacher--</option>
                <option value="Dr.Mohammad Golam Kibria">Dr.Mohammad Golam Kibria</option>
                <option value="Dr.Supratip Ghosh">Dr.Supratip Ghosh</option>
                <option value="Mr. Al-Imtiaz">Mr. Al-Imtiaz</option>
                <option value="Ronjon Kundu">Ronjon Kundu</option>
                <option value="Sonia Afroz">Sonia Afroz</option>
                <option value="Sultana Rokeya Nahar Alin">Sultana Rokeya Nahar Alin</option>
                <option value="Md.Mohibur Rahaman">Md.Mohibur Rahaman</option>
                <option value="Tania Akter Setu">Tania Akter Setu</option>
                <option value="Abdul Motaleb">Abdul Motaleb</option>
                <option value="N.S.M. Rezaur Rahman">N.S.M. Rezaur Rahman</option>
                <option value="Md. Ishtiaq Iqbal">Md. Ishtiaq Iqbal</option>
                <option value="Jaydeb Sarker">Jaydeb Sarker</option>
                <option value="Habibur Rahman">Habibur Rahman</option>
                <option value="Tanmoy Sikder">Tanmoy Sikder</option>
                <option value="Mustain Billah">Mustain Billah</option>
                <option value="Kashmi Sultana">Kashmi Sultana</option>
                <option value="Md. AL Shayokh">Md. AL Shayokh</option>
              </select></td>
              <td>Department Name</td>
              <td><select name="dept_name" class="form-control" id="sel1" required="">
                <option value="">--Select Department name--</option>
                <option value="CSE">CSE</option>
                <option value="IT">IT</option>
                
              </select></td>
            </tr>
            <tr>
              <td>Course Title</td>
              <td><select name="course_title" class="form-control" id="sel1" required="">
                <option value="">--Select Course Title--</option>
                <option value="Introduction to Computer System-CSE/IT 101">Introduction to Computer System-CSE/IT 101</option>
                <option value="Structured Programming Language-CSE/IT 103">Structured Programming Language-CSE/IT 103</option>
                <option value="Structured Programming Language Lab-CSE/ITCSE/IT 104">Structured Programming Language Lab-CSE/IT 104</option>
                <option value="Discrete Mathematics-CSE/IT 105">Discrete Mathematics-CSE/IT 105</option>
                <option value="Digital Logic Design-CSE/IT 201">Digital Logic Design-CSE/IT 201</option>
                <option value="Digital Logic Design Lab-CSE/IT 202">Digital Logic Design Lab-CSE/IT 202</option>
                <option value="Object Oriented Programming Language-CSE/IT 203">Object Oriented Programming Language-CSE/IT 203</option>
                <option value="Object Oriented Programming Language Lab-CSE/IT 204">Object Oriented Programming Language Lab-CSE/IT 204</option>
                <option value="Web Technology-CSE/IT 205">Web Technology-CSE/IT 205</option>
                <option value="Data Structures-CSE/IT 207">Data Structures-CSE/IT 207</option>
                <option value="Data Structures Lab-CSE/IT 208">Data Structures Lab-CSE/IT 208</option>
                <option value="Digital Electronics and Pulse Techniques-CSE/IT 211">Digital Electronics and Pulse Techniques-CSE/IT 211</option>
                <option value="Digital Electronics and Pulse Techniques Lab-CSE/IT 212">Digital Electronics and Pulse Techniques Lab-CSE/IT 212</option>
                <option value="Algorithms-CSE/IT 213">Algorithms-CSE/IT 213</option>
                <option value="Algorithms Lab-CSE/IT 214">Algorithms Lab-CSE/IT 214</option>
                <option value="Computer Data and Network Security-CSE/IT 463">Computer Data and Network Security-CSE/IT 463</option>
                <option value="Computer Networks-CSE/IT 457">Computer Networks-CSE/IT 457</option>
                <option value="Computer Networks Lab-CSE/IT 458">Computer Networks Lab-CSE/IT 458</option>
                <option value="Operating System-CSE/IT 405">Operating System-CSE/IT 405</option>
                <option value="Operating System Lab-CSE/IT 406">Operating System Lab-CSE/IT 406</option>
                <option value="Software Engineering-CSE/IT 451">Software Engineering-CSE/IT 451</option>
                <option value="Software Engineering Lab-CSE/IT 452">Software Engineering Lab-CSE/IT 452</option>
                <option value="Computer Graphics & Multimedia-CSE/IT 307">Computer Graphics & Multimedia-CSE/IT 307</option>
                <option value="Computer Graphics & Multimedia Lab-CSE/IT 308">Computer Graphics & Multimedia Lab-CSE/IT 308</option>
                
              </select></td>
              <td>Section</td>
              <td><select name="section" class="form-control" id="sel1" required>
                <option value="">--Select Section--</option>
                <option value="A">A</option>
                <option value="B">B</option>
                
              </select></td>
            </tr>
            <tr>
              <td>Semester</td>
              <td><select name="semester" class="form-control" id="sel1" required>
                <option value="">--Select Semester--</option>
                <option value="Spring">Spring</option>
                <option value="Summer">Summer</option>
                <option value="Fall">Fall</option>
              </select></td>
              <td>Year</td>
              <td><select name="year" class="form-control" id="sel1" required="">
                <option value="">--Select Year--</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
              </select></td>
            </tr>
            <tr>
            </tbody>
          </table>
          <table class="table table-light table-striped">
            <!-- <h1 class="text-center"> Give Feedback </h1><br/> -->
            
            
            <tbody>
              <h1 class="text-center" style="color:white">Give Feedback</h1>
              
              <tr>
                <th class="text-center"><h4>QUESTION</h4></th>
                <th colspan="6" class="text-center"><h4>Performance Rating</h4></th>
              </tr>
              <tr>
                <td>1. Authority over the subject presentation and personality</td>
                <td><input type="radio" name="one_sub_present" value="5" required>Excellent</td>
                <td><input type="radio" name="one_sub_present" value="4" required>Very Good</td>
                <td><input type="radio" name="one_sub_present" value="3" required>Good</td>
                <td><input type="radio" name="one_sub_present" value="2" required>Average</td>
                <td><input type="radio" name="one_sub_present" value="1" required>Poor</td>
              </tr>
              <tr>
                <td>2. Communication skill in English</td>
                <td><input type="radio" name="two_com_skill" value="5" required>Excellent</td>
                <td><input type="radio" name="two_com_skill" value="4" required>Very Good</td>
                <td><input type="radio" name="two_com_skill" value="3" required>Good</td>
                <td><input type="radio" name="two_com_skill" value="2" required>Average</td>
                <td><input type="radio" name="two_com_skill" value="1" required>Poor</td>
              </tr>
              <tr>
                <td>3. Preparation for conducting classes and providing updated information</td>
                <td><input type="radio" name="three_providing_info" value="5" required>Excellent</td>
                <td><input type="radio" name="three_providing_info" value="4" required>Very Good</td>
                <td><input type="radio" name="three_providing_info" value="3" required>Good</td>
                <td><input type="radio" name="three_providing_info" value="2" required>Average</td>
                <td><input type="radio" name="three_providing_info" value="1" required>Poor</td>
              </tr>
              <tr>
                <td>4. Attention to individual students and develop their morality</td>
                <td><input type="radio" name="four_puntuality" value="5" required>Excellent</td>
                <td><input type="radio" name="four_puntuality" value="4" required>Very Good</td>
                <td><input type="radio" name="four_puntuality" value="3" required>Good</td>
                <td><input type="radio" name="four_puntuality" value="2" required>Average</td>
                <td><input type="radio" name="four_puntuality" value="1" required>Poor</td>
              </tr>
              <tr>
                <td>5. Punctuality in attending the classes and regularity</td>
                <td><input type="radio" name="five_timely" value="5" required>Excellent</td>
                <td><input type="radio" name="five_timely" value="4" required>Very Good</td>
                <td><input type="radio" name="five_timely" value="3" required>Good</td>
                <td><input type="radio" name="five_timely" value="2" required>Average</td>
                <td><input type="radio" name="five_timely" value="1" required>Poor</td>
              </tr>
              <tr>
                <td>6. Follows procedures and completes the syllabus timely</td>
                <td><input type="radio" name="six_arranges" value="5" required>Excellent</td>
                <td><input type="radio" name="six_arranges" value="4" required>Very Good</td>
                <td><input type="radio" name="six_arranges" value="3" required>Good</td>
                <td><input type="radio" name="six_arranges" value="2" required>Average</td>
                <td><input type="radio" name="six_arranges" value="1" required>Poor</td>
              </tr>
              <tr>
                <td>7. Encourage participation or interaction in the class</td>
                <td><input type="radio" name="seven_incourage" value="5" required>Excellent</td>
                <td><input type="radio" name="seven_incourage" value="4" required>Very Good</td>
                <td><input type="radio" name="seven_incourage" value="3" required>Good</td>
                <td><input type="radio" name="seven_incourage" value="2" required>Average</td>
                <td><input type="radio" name="seven_incourage" value="1" required>Poor</td>
              </tr><tr>
              <td>8. Arranges make-up classes</td>
              <td><input type="radio" name="eight_effort" value="5" required>Excellent</td>
              <td><input type="radio" name="eight_effort" value="4" required>Very Good</td>
              <td><input type="radio" name="eight_effort" value="3" required>Good</td>
              <td><input type="radio" name="eight_effort" value="2" required>Average</td>
              <td><input type="radio" name="eight_effort" value="1" required>Poor</td>
            </tr>
            <tr>
              <td>9. Effort of the Teacher to explain the topic for clear understanding<br>
              of the student and creating interest in the subject</td>
              <td><input type="radio" name="nine_develop" value="5" required>Excellent</td>
              <td><input type="radio" name="nine_develop" value="4" required>Very Good</td>
              <td><input type="radio" name="nine_develop" value="3" required>Good</td>
              <td><input type="radio" name="nine_develop" value="2" required>Average</td>
              <td><input type="radio" name="nine_develop" value="1" required>Poor</td>
            </tr>
            <tr>
              <td>10. Temperment and behaviour in dealing with the students</td>
              <td><input type="radio" name="ten_behaviour" value="5" required>Excellent</td>
              <td><input type="radio" name="ten_behaviour" value="4" required>Very Good</td>
              <td><input type="radio" name="ten_behaviour" value="3" required>Good</td>
              <td><input type="radio" name="ten_behaviour" value="2" required>Average</td>
              <td><input type="radio" name="ten_behaviour" value="1" required>Poor</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="text-center">
        <button type="submit" style="color:#1B4D92;" name="send" class="btn" onclick="return msg();" ><b>Submit</b></button>
      </div>
      <script type="text/javascript">
      function msg(){
      // alert("Your feedback is successfully saved");
      return true;
      }
      </script>
      <div class="container">
        <p class="text-center" style="color:white">The student are especially advised to fill up this TER form with all sincerity, based on exact information and being free from all personal liking or disliking</p>
        <h3 class="text-center font-weight-bold" style="color:white">Thank You</h3>
      </div>
      <!-- <script> -->
      <!-- alert("Login First"); -->
      <!-- </script> -->
    </form>
  </body>
</html>