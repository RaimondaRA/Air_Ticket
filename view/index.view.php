<!doctype html>
<html lang="en">
  <head>
    <title>Air Ticket</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="view/style.css "type="text/css">
    <script src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
  </head>
  <body>
      

</head>
<body>

<div class="container">
    <section>
        <?php if (isset($_POST['send'])): ?>
            <!-- ?php validate($_POST);?>
            ?php if(empty($validation)){
            storeData();
            }
            ?> -->
            <?php storeData(); ?>
        <?php endif ?>
    </section>
    <!-- ?php -->
    <!--  if(isset($validation)){
        foreach ($validation as $error){
            echo $error;
        }} -->
    
    <form method="post">
        <div class="form-group row">
            <select class="form-control" id="flightNumberSelect" name="flightNumber">
                <option value="" disabled selected>Flight number</option>
                <?php for ($i = 0; $i < count($flightNumber); $i++): ?>
                    <option value="<?=$flightNumber[$i]; ?>"><?= $flightNumber[$i]; ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="form-group row">
            <label for="inputPersonalCode" class="col-sm-2 col-form-label">Personal Code</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" id="personalCode" name="personalCode" required/>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-5">
            <input type="name" class="form-control" id="inputName" name="fname" required/>
        </div>
        </div>
        <div class="form-group row">
            <label for="inputSurname" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-5">
            <input type="surname" class="form-control" id="inputSurname" name="lname" required/>
            </div>
        </div>
        <div class="form-group row">
            <select class="form-control" id="flightFromSelect" name="flightFrom">
                <option value="" disabled selected>Select departure city</option>
                <?php for ($i = 0; $i < count($flightFrom); $i++): ?>
                    <option value="<?=$flightFrom[$i]; ?>"><?= $flightFrom[$i]; ?></option>
                <?php endfor; ?>
            </select>
        </div>
      
        <div class="form-group row">
            <select class="form-control" id="flightToSelect" name="flightTo">
                <option value="" disabled selected>Select destinantion city</option>
                <?php for ($i = 0; $i < count($flightTo); $i++): ?>
                    <option value="<?=$flightTo[$i]; ?>"><?= $flightTo[$i]; ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="form-group">
    <label for="price">Ticket price</label>
    <input type="float" class="form-control" id="price" name="price" aria-describedby="priceHelp">
</div>
        <div class="form-group row">
            <select class="form-control" id="baggageSelect" name="baggage">
                <option value="" disabled selected>Baggage</option>
                <?php for ($i = 0; $i < count($baggage); $i++): ?>
                    <option value="<?=$baggage[$i]; ?>"><?= $baggage[$i]; ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="message">Comments</label>
            <textarea class="form-control" id="message" rows="3" name="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="send">Print</button>
    </form>

    <table class="table table-bordered">
        <?php
        foreach(showData() as $message):?>
            <tr>
                <td><?=$message;?></td>
            </tr>
        <?php endforeach;?>

        <?php if (($_POST['baggage']) == $baggage[1]){
        $totalPrice=($_POST['price'] + 30);
        echo '<b> Total Price: $</b>'."<b>".$totalPrice."</b>";
        echo "<br>";
} else {
    echo "<b> Total Price: $</b>"."<b>".($_POST['price'])."</b>";
    echo "<br>";
    }

    echo 'Flight number: '.($_POST['flightNumber']);
    echo "<br>";
    echo "Price without baggage: $".($_POST['price']);
    echo "<br>";
    echo 'Full name: '.($_POST['fname']).' '.($_POST['lname']);
    echo "<br>";
    echo 'From: '.($_POST['flightFrom']).' - '.'To: '.($_POST['flightTo']);
    echo "<br>";
?>
    </table>
</div>
    
  </body>
</html>
    
