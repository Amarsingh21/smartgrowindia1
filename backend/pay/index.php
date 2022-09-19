<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FalseCeilingDesign</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
          
            .text-align{
                margin-top: -3%;
                margin-bottom: -9%;

                padding: 10%;
                margin-left: 30%;
            }
            .form-new{
                margin-right: 22%;
                margin-left: 20%;
            }
            .register-heading{
                margin-left: 21%;
                margin-bottom: 10%;
                color: #e9ecef;
            }
            .register-heading h1{
                margin-left: 21%;
                margin-bottom: 10%;
                color: #e9ecef;
            }
            .register{
                background: -webkit-linear-gradient(left, #055a4f, #00c6ff);
                margin-top: 3%;
                padding: 3%;
                border-radius: 2.5rem;
            }
            .btnSubmit
            {
                width: 50%;
                border-radius: 1rem;
                padding: 1.5%;
                color: #fff;
                background-color: #03612e;
                border: none;
                cursor: pointer;
                margin-right: 6%;
                color: rgb(246, 246, 252);
                margin-top: 4%;
            }
    </style>

</head>
<body>
    <?php include ("../header.html"); ?>

<div class="container register">
            <div class="row">
                <div class="col-md-12">
                        <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3>Request Proposal for Service</h3><br>
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <form  method="POST" action="datasender.php">
                                        <div class="form-group">
                                            <input type="text" name="fname" class="form-control" placeholder="Your First Name *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="lname" class="form-control" placeholder="Your Last Name *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="mobile" class="form-control" placeholder="Your Mobile *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="business" class="form-control" placeholder="Your Business *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="payment" class="form-control" placeholder="Your Payment *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="date" name="date" class="form-control" placeholder="Date *" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="comment" class="form-control" placeholder="Your location details *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit" class="btnSubmit btn-block" value="Submit" />
                                            <br>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php include("../footer.html"); ?>
</body>
</html>
