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
                            <!-- <img src="https:/designprosusa.com/cleantoclose_dev_v16/assets/uploads/logo/logo162387121590162578611097.png" alt=""> -->
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: center;padding-top:40px">
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;">Welcome To CLEAN TO CLOSE™</span>
                        </td>
                    </tr>
                </table>
                </br>
                </br>
                </br>
                <table>
                    <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;">Congratulations <?php echo ucfirst($update_cleaner_email['signup_name']) ?> <?php echo $update_cleaner_email['signup_lastname'] ?>!</span><br>

                            <span style="color:#000;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;">Your account has been approved and you are now able to start claiming jobs!</span>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">Name:</span>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#000"><?php echo ucfirst($update_cleaner_email['signup_name']) ?> <?php echo $update_cleaner_email['signup_lastname'] ?></span>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">Email:</span> <span style="color:#000;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;"><?php echo $update_cleaner_email['signup_email'] ?></span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <?php
                            $param['where']['signup_id'] = $update_cleaner_email['signup_id'];
                            $password = $this->model_signup_cleaner->find_one($param);
                            ?>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">Password:</span> <span style="color:#000;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;"><?php echo $password['signup_password_show'] ?></span>
                        </td>
                    </tr>
                  
                </table>
                </br>
                </br>
                </br>
                <table>
                    <tr>
                        <td>
                            <span style="font-size: 15px;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;">Thank You</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span style="font-size: 15px;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;">Your Clean To Close™ Team</span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>