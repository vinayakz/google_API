<?php
$uname =$_REQUEST['un'];

?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="styles.css">
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <!--<div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
    </div>-->

    <!-- Login Form -->
  <div style="height:40px">
  </div>
    
    
    <form action="pass.php" method="POST">
    <input type="hidden" name="login" value="<?php echo $uname;?>" >
      <input type="text" id="start-record-btn" class="fadeIn third" name="msg" placeholder="Enter message">
      <input type="submit" name="submit" class="fadeIn fourth" value="send">
    </form>

    <!-- Remind Passowrd -->
    <!--<div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script>
      function myFunction() {
      var str = "     Hello World!     ";
      alert(str.trim());
      }
    </script>
      <script>
      function getAudio(){
        var txt=jQuery('#start-record-btn').val()
        jQuery.ajax({
          url:'login.php',
          type:'post',
          data:'start-record-btn='+txt,
          success:function(result){
            jQuery('#player').html(result);
          }
        });
      }
    </script>

  </div>
</div>