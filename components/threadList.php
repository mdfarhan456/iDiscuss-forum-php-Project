

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AboutUs - Coding Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link href="/forumProject/style/navbar.css" rel="stylesheet">
<link href="/forumProject/style/footer.css" rel="stylesheet">
<style>
    .forum-box {
  max-width: 1100px;
  width: 100%;
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  background: linear-gradient(145deg, #ffff, #e6eaf0);

}


</style>

  </head>
  <body>
   <?php include 'navbar.php' ?>
    <?php include 'signupModal.php' ?> 
  <?php include 'loginModal.php' ?> 
<?php include 'dbConnect.php' ?>

<?php
    $id = $_GET['catid'];
    $sql = "SELECT * from `category` WHERE `category_id` = $id";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result))
        {
            $catName = $row['category_name']; 
            $catDesc = $row['category_description']; 
        }
 ?>
  <div class="container mt-5 pt-5 d-flex justify-content-center">
  <div class="forum-box bg-white rounded-4 px-4 py-5 text-center">

    <h2 class="fw-semibold mb-3">
      Welcome to <?php echo $catName ?> Forums
    </h2>

    <p class="text-muted mb-3">
      <?php echo $catDesc ?>
    </p>

    <hr class="my-3">

    <p class="small text-secondary mb-4">
      This is a peer-to-peer forum. No spam, advertising, or self-promotion.
      Respect all members and avoid posting offensive or copyrighted content.
    </p>

    <a class="btn btn-primary btn-sm px-4 rounded-pill">
      Learn More
    </a>

  </div>
</div>

<div class="container py-4 me-1">
    <h4>Browse Comments</h4>
<div class="d-flex align-items-start py-3">
  <img src="https://cdn.vectorstock.com/i/500p/06/32/social-network-default-profile-picture-avatar-icon-vector-57120632.jpg" class="rounded me-3" width="54" alt="user">
  
  <div>
    <h6 class="mb-1">John Doe</h6>
    <p class="mb-0 text-muted">This is a comment or post content.</p>
  </div>
</div>

<div class="d-flex align-items-start py-3">
  <img src="https://cdn.vectorstock.com/i/500p/06/32/social-network-default-profile-picture-avatar-icon-vector-57120632.jpg" class="rounded me-3" width="54" alt="user">
  
  <div>
    <h6 class="mb-1">John Doe</h6>
    <p class="mb-0 text-muted">This is a comment or post content.</p>
  </div>
</div>
<div class="d-flex align-items-start py-3">
  <img src="https://cdn.vectorstock.com/i/500p/06/32/social-network-default-profile-picture-avatar-icon-vector-57120632.jpg" class="rounded me-3" width="54" alt="user">
  
  <div>
    <h6 class="mb-1">John Doe</h6>
    <p class="mb-0 text-muted">This is a comment or post content.</p>
  </div>
</div>
<div class="d-flex align-items-start py-3">
  <img src="https://cdn.vectorstock.com/i/500p/06/32/social-network-default-profile-picture-avatar-icon-vector-57120632.jpg" class="rounded me-3" width="54" alt="user">
  
  <div>
    <h6 class="mb-1">John Doe</h6>
    <p class="mb-0 text-muted">This is a comment or post content.</p>
  </div>
</div>
<div class="d-flex align-items-start py-3">
  <img src="https://cdn.vectorstock.com/i/500p/06/32/social-network-default-profile-picture-avatar-icon-vector-57120632.jpg" class="rounded me-3" width="54" alt="user">
  
  <div>
    <h6 class="mb-1">John Doe</h6>
    <p class="mb-0 text-muted">This is a comment or post content.</p>
  </div>
</div>
<div class="d-flex align-items-start py-3">
  <img src="https://cdn.vectorstock.com/i/500p/06/32/social-network-default-profile-picture-avatar-icon-vector-57120632.jpg" class="rounded me-3" width="54" alt="user">
  
  <div>
    <h6 class="mb-1">John Doe</h6>
    <p class="mb-0 text-muted">This is a comment or post content.</p>
  </div>
</div>
</div>





   <?php include 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>