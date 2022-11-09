<!DOCTYPE html>
<html>
<head>
<style>


* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 49.5%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
</head>
<body style="background-color:darkblue;">
<div style="background-color:#ADD8E6; height:40px; margin-bottom:10px;">
<div style="font-style: normal; font-size: 15px;" >
<h2><center> ACCIDENT & EMERGENCY ON CALL ROSTER </center></h2>
</div>
</div>

  <div class="column" style="background-color:#ADD8E6; margin-left:1px; margin-right:5px;">
    <h2>CONSULTANT ON-CALL</h2>
    <p>Some text..</p>
  </div>
  
  <div class="column" style="background-color:#ADD8E6; margin-left:1px; margin-right:5px;">
    <h2>CONSULTANT ON-CALL</h2>
    <p>Some text..</p>
  </div>
  
</div>

</body>
</html>
