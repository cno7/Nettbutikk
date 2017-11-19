<footer class="footer">
  <div class="container bg-4 text-center">
    <div class="row">
      <div class="col-lg-3 col-xs-3">
        <img src="images/kollb.png" alt="KollB logo" height="91" width="323" />
      </div>
      <div class="col-lg-3 col-xs-3">
        <ul class="" style="list-style-type:none">
          <li><h3>SNARVEIER</h3></li>
          <li><a href="#">Min side</a></li>
          <li><a href="#">Ordre</a></li>
          <li><a href="#">Blabla</a></li>
          <li><a href="#">Blabla</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-xs-3">
        <ul class="" style="list-style-type:none">
          <li><h3>INFORMASJON</h3></li>
          <li><a href="#">Blabla</a></li>
          <li><a href="#">Blabla</a></li>
          <li><a href="#">Blabla</a></li>
          <li><a href="#">Blabla</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-xs-3">
        <ul class="" style="list-style-type:none">
          <li><h3>SUPPORT</h3></li>
          <li><a href="#">Blabla</a></li>
          <li><a href="#">Blabla</a></li>
          <li><a href="#">Blabla</a></li>
          <li><a href="#">Blabla</a></li>
        </ul>
      </div>
    </div>
  <div class="col-xs-3">
    <p>KollB Services. B.R.A. Veien 6C. 1783 Halden. Tel 45454545</p>
    <p>Copyright 2017 KollB.no. All rights reserved.</p>
  </div>
  </div>
</footer>
<?php
//Loading modal on error
if(isset($_SESSION['error'])){
  echo "<script>
    $(window).ready(function(){
      $('#loginMenu').modal({show: true});
    });
</script>
";
}
 ?>
