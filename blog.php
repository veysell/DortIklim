<?php
include("admin/database/connection.php");
include("inc/header.php");

$blogs = frontGetAllData("blog");
?>

<div class="owl-carousel-wrapper">



  <div class="box-92819">
    <h1 class="text-white mb-3">Blog</h1>
    <p class="lead text-white">Blog yazılarımız</p>
  </div>


  <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_2.jpg');"></div>

</div>


<div class="site-section">
  <div class="container">
    <div class="heading-20219 mb-5">
      <h2 class="title text-cursive">Blog Yazılarımız</h2>
    </div>

    <div class="row">
      <?php
      foreach ($blogs as $blog) {
        ?>
        <div class="col-md-6">
          <div class="event-29191 mb-5">
            <img style="width: 500px; height: 300px; border-radius: 10px; align:center;" src="images/<?=$blog["ImagePath"]?>" alt="Image" class="d-block mb-3 img-fluid rounded">
            <div class="px-3 d-flex">

              <div class="bg-primary p-3 d-inline-block text-center rounded mr-4 date">
                <span class="text-white h3 m-0 d-block"><?=date("d", strtotime($blog["Date"]))?></span>
                <span class="text-white small"><?=
                date("d-m-Y", strtotime($blog["Date"])) ?></span>
              </div>

              <div>
                <div class="mb-3">
                  <span class="mr-3"> <span class="icon-bookmark mr-2 text-muted"></span><a href="#"><?=$blog["Title"]?></a></span>
                  <span> <span class="icon-person mr-2 text-muted"></span><?=$blog["AuthorName"]?></span>
                </div>
                <h3><?=$blog["Description"]?></h3>
              </div>

            </div>
          </div>
        </div>
        <?php
      }
      ?>
      


      <!-- <div class="col-12 text-center">
        <span class="p-3">1</span>
        <a href="#" class="p-3">2</a>
        <a href="#" class="p-3">3</a>
        <a href="#" class="p-3">4</a>
      </div> -->

    </div>
  </div>
</div>

<?php
include("inc/footer.php");
?>