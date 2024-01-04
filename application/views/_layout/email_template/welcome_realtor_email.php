<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:display=swap" rel="stylesheet">

<div style="width: 600px; margin-left:auto; margin-right:auto; background-color:whitesmoke; padding:50px 50px 50px 25px;">
    <table style="width: 100%;">
        <tr>
            <td>
                <table style="width: 100%;">
                    <tr>
                        <td style="width: 100%;">
                            <img src="<?php echo get_image($logo['logo_image_path'], $logo['logo_image']) ?>" alt="img" />
                            <!-- <img src="http:/designprosusa.com/cleantoclose_dev_v16/assets/uploads/logo/logo162387121590162578611097.png" alt=""> -->
                        </td>
                    </tr>

                    <!-- <tr>
                        <td style="text-align: center;padding-top:40px">
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;">Welcome To CLEAN TO CLOSE™</span>
                        </td>
                    </tr> -->
                </table>
                </br>
                </br>
                </br>
                <table>
                    <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">Hello </span>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;"> <?php echo ucfirst($realtor_email['signup_name']) ?> <?php echo $realtor_email['signup_lastname'] ?>,</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="margin-top: 1rem;font-size: 12px;font-family: 'Poppins', sans-serif;color:#666;margin-bottom:1rem">
                                Welcome to Clean To Close! We are so excited that you’re here! Below are your login details
                                for your records. We look forward to partnering with you!
                            </p>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">Name:</span>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#000"><?php echo ucfirst($realtor_email['signup_name']) ?> <?php echo $realtor_email['signup_lastname'] ?></span>
                        </td>
                    </tr> -->
                    <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">Username/Email:</span> <span style="color:#000;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;"><?php echo $realtor_email['signup_email'] ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">Password:</span> <span style="color:#000;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;"><?php echo $realtor_email['signup_password_show'] ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <p style="margin-top:1rem;font-size: 12px;font-family: 'Poppins', sans-serif;color:#666">
                                All our best,
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <p style="margin-top:0.5rem;font-size:12px;font-family: 'Poppins', sans-serif;color:#666">
                            Your Clean To Close™ Team
                            </p>
                        </td>
                    </tr>
                </table>
                </br>
                </br>
                </br>
             
            </td>
        </tr>
    </table>
</div>