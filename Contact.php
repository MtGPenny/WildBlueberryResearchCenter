<?php include "includes/header.php"; ?>
    <title>Contact</title>

    <div class="col-sm-8 text-left">

        <!--Checks For Valid User Information And Spam Check-->
        <?php
        if (isset($_POST['submitIssue'])) {
            if (!empty($_POST['humans'])) {
                //If hidden form has anything stop the process hidden field triggered
                ?>
                <br/>
                <div class="alert alert-danger alert-dismissible fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Warning!</strong> There is an unresolved issue with the form try again later
                </div>
                <?php
            } else {
                // User is human
                $name = trim($_POST["preferredName"]);
                $email = trim($_POST["userEmail"]);
                $subject = trim($_POST["subject"]);
                $comment = trim($_POST["detailedReport"]);

                // Remove all illegal characters from email
                $email = filter_var($email, FILTER_SANITIZE_EMAIL);

                //Validate Email and Send if Valid
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $headers = 'From: ' . $email . "\r\n" .
                        'Reply-To: ' . $email . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
                    mail('email123@gmail.com', $subject, $name, $comment);
                    ?>
                    <br/>
                    <div class="alert alert-success alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> Email was Successfully Sent
                    </div>

                    <?php
                } else {
                    //Alert User  ?>
                    <br/>
                    <div class="alert alert-danger alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Warning!</strong> <?php echo $email ?> is not a valid email address please enter a valid
                        email
                    </div> <?php
                }

            }

        }
        ?>
        <div class="cme">
            <h1>Contact Us</h1>
        </div>
        <p class="space-top-bottom"></p>
        <p class="space-top-bottom text-danger">* all form fields are required</p>
        <form method="post" action="Contact.php">
            <label for="humans" class="humans">Human check: Leave this field empty</label>
            <input type="text" name="humans" id="humans" class="humans"/>
            <div class="form-group space-top-bottom">
                <label for="preferredName"><strong>Your preferred name</strong> <span
                            class="text-danger">*</span></label>
                <input type="text" class="form-control" id="preferredName" name="preferredName" required>
            </div>
            <div class="form-group space-top-bottom">
                <label for="userEmail"><strong>Email address</strong> <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="userEmail" name="userEmail"
                       placeholder="in the format name@example.com" required>
            </div>
            <div class="form-group space-top-bottom">
                <label for="detailedReport"><strong>Subject</strong> <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            <div class="form-group space-top-bottom">
                <label for="detailedReport"><strong>Message</strong> <span class="text-danger">*</span></label>
                <textarea class="form-control" id="detailedReport" name="detailedReport" rows="3" required></textarea>
            </div>

            <button id="submitIssue" type="submit" name="submitIssue" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <b>Faculty of Agriculture</b>
    <p>Dalhousie University<br/>
        PO Box 550<br/>
        Truro, NS B2N 5E3</p>
    <p></p>
    <b>David Percival</b>
    <p>Department of Environmental Sciences <br/>
        Email: <a href="mailto:email123@gmail.com"> email123@gmail.com </a>
        <br/>Phone: (902) 893-7852
    </p>
    <p></p>
    <b>MacRae Library </b>
    <p>Email: <a href="mailto:macrae.library@dal.ca"> macrae.library@dal.ca </a>
        <br/> Phone: (902) 893-6669
    </p>
    <hr>

    <h3>Frequently Asked Questions</h3>
    Click <a href="FAQ.php">here</a> to view.

<?php include "includes/footer.php"; ?>
