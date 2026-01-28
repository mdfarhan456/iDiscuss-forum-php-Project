<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .card {
  overflow: hidden;
}

.card img {
  transition: transform 0.4s ease;
}

.card img:hover {
  transform: scale(1.05);
}
.lnk{
  text-decoration:none;
  color:black;
}
.lnk:hover{
   text-decoration:underline;
   color: #0d6efd;
}

  </style>
</head>
<body>
   
<?php include 'dbConnect.php' ?>

<?php
$sql= 'SELECT * FROM `category`';
$result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result))
      {
        $id = $row['category_id'];
        $cat = $row['category_name'];
        $dec = $row['category_description'];
             echo ' <div class="col-md-4 col-lg-3 mb-4">
              <div class="card h-100">
              <img src="https://loremflickr.com/500/400/'.$cat.',coding" class="card-img-top" alt="...">

              <div class="card-body d-flex flex-column">
                <h5 class="card-title"><a href="/forumProject/components/threadList.php?catid='.$id.'" target="_blank" rel="noopener noreferrer" class="lnk">'.$cat.'</a></h5>
                <p class="card-text">
                '.substr($dec, 0, 70).'... 
                </p>

                <a href="/forumProject/components/threadList.php?catid='.$id.'" class="btn btn-primary rounded-0 mt-auto" target="_blank" rel="noopener noreferrer">
                  View Threads
                </a>
              </div>
            </div>
          </div>';
      }
?>
        



</body>
</html>