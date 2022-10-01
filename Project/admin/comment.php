<?php
include "../connection.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Bootstrap</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Email</th>
      <th scope="col">Comment</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
    <?php
						$arrival = "select * from comment";
						$proresult = mysqli_query($connection, $arrival);
						while($row = mysqli_fetch_assoc($proresult)){
							$email = $row["email"];
							$comment = $row["commit"];
							$mesasge = $row["message"];
			?>
            <tr>
                <td><?php echo $email; ?></td>
                <td><?php echo $comment; ?></td>
                <td><?php echo $mesasge; ?></td>                
            </tr>
            <?php
                        }
            ?>
  </tbody>
 
</table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>