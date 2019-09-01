
<?php

include '../../includes/header.php';


 ?>

 <base href= "/cas222/final-form/" >
<link href="template/css/bootstrap.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
<link href="template/css/reset.css" rel="stylesheet" type="text/css">
<link href="template/css/grid.css" rel="stylesheet" type="text/css">
<link href="template/css/style.css" rel="stylesheet" type="text/css">
<link href="template/css/navigation.css" rel="stylesheet" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>





 <div class="col-sm-12">
                    <h3 class="h2 site-heading"><strong>Contact Us</strong></h3>
                    <form action="template/Form01/views/send.php" method="post" id="form-contact" target="_self" ONSUBMIT="return pregunta();">
                        <div class="row">
                            <div class="col-6 col-sm-6">
                                <div class="form-group">
                                    <label for="contact-name">full Name</label>
                                    <input type="text"
                                           id="contact-name"
                                           name="name"
                                           class="form-control input-lg"
                                           placeholder="Name..."
                                           required>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6">
                                <div class="form-group">
                                    <label for="contact-email">Email</label>
                                    <input type="email"
                                           id="contact-email"
                                           name="email"
                                           class="form-control input-lg"
                                           placeholder="Email..."
                                           required>
                                </div>
                            </div>

                            <!-- Force next columns to break to new line at md breakpoint and up -->


                        </div>


                        <div class="form-group">
                            <label for="contact-message">Message</label>
                            <textarea id="contact-message"
                                      name="message"
                                      rows="4"
                                      class="form-control input"
                                      placeholder="Write your Message..."></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit"  value="send question" id="boton"
                                    class="btn btn-primary ">Send Message</button>
                        </div>
                    </form>
                    <br />
                <div>
                <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="original" >PORTLAND WEATHER</a>
                <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
                </div>
                <br />
              </div>


                <?php
                include '../../includes/footer.php';


                 ?>
