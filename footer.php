<footer class="links" id="feedback" >
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Обратная связь с нами !</h2>
      </div>
    </div>
  <div class="row">
    <div class="col-md-12">
  <form action="mail.php" method="POST">
    <div class="row">
            <div class="form-group col-sm-6">
                <label for="name" class="h4">Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Enter name" required>
            </div>
            <div class="form-group col-sm-6">
                <label for="email" class="h4">Email</label>
                <input name="mail" type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="h4 ">Message</label>
            <textarea name="massage" id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
        </div>
        <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
<div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>
  </form>
  </div>
  </div>
  </div>
  
</footer>
<!--links-->








    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  <script src="<?php bloginfo('template_directory') ?> /js/parallax.min.js"></script>
  <script src="js/main.js"></script>
    <script src="<?php bloginfo('template_directory') ?> /js/jquery.vide.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_directory') ?> /js/bootstrap.min.js"></script>
  </body>
</html>	

