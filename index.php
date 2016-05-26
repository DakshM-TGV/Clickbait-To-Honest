
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">

    <title>Clickbait to Honest!</title>
  </head>
  <body>
    <?php
    define ( "TITLE", "Honest Clickbait Headings");
    include("functions.php");
    if( isset( $_POST["head_submit"] ) ){
        checkForClickBait();
    }
    
    ?>

    <div class="container">
    <h1><?php echo TITLE; ?></h1>
    <p class="lead"> Hate click  bait? Turn these annoying headlines into realistic and hones ones using our program</p>

    <div class="row">
      <form class="col-sm8 col-sm-offset-2" action="" method="post">
        <textarea placeholder="Paste Clickbait Headings Here" class="form-control input-lg" name="click_headline"></textarea><br>
        <button type="submit" class="btn btn-primary btn-lg pull-right" name="head_submit">Change to Honest</button>

      </form>

    </div>
    <?php
    if ( isset( $_POST["head_submit"] ) ) {
        $clickBait = checkForClickBait()[0];
        $honest = checkForClickBait()[1];

      displayHonestHeadline( $clickBait, $honest );
    }


    ?>
    </div>
    <!-- Bootsrap JS -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>
