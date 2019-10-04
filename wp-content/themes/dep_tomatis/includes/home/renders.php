<section id="renders">
    <div class="container-fluid renders">
    <div class="row">
      <div class="col-md-4 info-renders">
        <img src="https://edificiouno83.com/wp-content/uploads/2019/08/tu-espaciotuestilo.png" alt="" width="100%" height="auto">
      </div>
      <div class="col-md-8 slider_renders">

        <?php
          while (have_rows('slider_renders')): the_row();

            $imagen = get_sub_field('imagen');
         ?>

         <div class="">
           <img src="<?php echo $imagen; ?>" alt="" width="100%" height="auto">
         </div>

<?php endwhile; ?>

      </div>
    </div>
  </div>
</section>
