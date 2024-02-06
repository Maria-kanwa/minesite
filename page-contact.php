<?php get_header(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php get_header(); ?>
<div class="hero">
  <form>
    <div>
    <div class="input-group">
    <input type="text" id="name" required>
    <label for="name"><i class="fa-solid fa-user"></i> Your Name</label>

    </div>


    <div class="input-group">
    <input type="text" id="number" required>
    <label for="number"><i class="fa-solid fa-phone"></i> Phone No</label>

    </div>

    </div>
    
   

    <div class="input-group">
    <input type="email" id="email" required>
    <label for="email"> <i class="fa-solid fa-envelope"></i> Email Id</label>

    </div>
   

    <div class="input-group">
   <textarea id="message" rows="8" required></textarea>
    <label for="message"><i class="fa-solid fa-message"></i> Your Message</label>

    </div>
    <button type="submit"><i class="fa-solid fa-check"></i> Submit</button>
   
   
    
  </form>






</div>
<?php get_footer(); ?>
<?php get_footer(); ?>