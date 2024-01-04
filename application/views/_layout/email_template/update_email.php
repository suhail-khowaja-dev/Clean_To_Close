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

                    <tr>
                        <td style="text-align: center;padding-top:40px">
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;">Schedule Change</span>
                        </td>
                    </tr>
                </table>
                </br>
                </br>
                </br>
                <table>
                    <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;">Hello <?php echo $update_cleaner_email['signup_name']?> <?php echo $update_cleaner_email['signup_lastname']?>,</span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">The job previously scheduled for <?php echo date("m/d/Y", strtotime( $cleaning_data['cleaning_service_closing_date_old']))?> at <?php echo date("g:i A", strtotime($cleaning_data['cleaning_service_closing_time_old'])) ?>, located at <?php echo $cleaning_data['cleaning_service_address']?> has been RESCHEDULED.  The new date and time is <?php echo date("m/d/Y", strtotime($cleaning_data['cleaning_service_closing_date'])) ?> at <?php echo date("g:i A", strtotime($cleaning_data['cleaning_service_closing_time'])) ?>.  Please sign into your account to accept the new time or release it if it no longer works in your schedule.   We apologize for any inconvenience.  Thank you for your partnership!" </span>
                        </td>
                    </tr>


                    <!-- <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">Job(<span style="color:#000;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;"><?php echo $cleaning_data['cleaning_service_id']?></span>) has been Updated by Realtor(<span style="color:#000;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;"><?php echo $update_relator_email['signup_name']?> <?php echo $update_relator_email['signup_lastname']?></span>). Details are below</span>
                        </td>
                    </tr> -->


                    <!-- <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">Job No:</span> <span style="color:#000;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;"><?php echo $cleaning_data['cleaning_service_id']?></span>
                        </td>
                    </tr> -->

                    <!-- <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">New Cleaning Date/Time:</span> <span style="color:#000;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;"><?php echo date("m/d/Y", strtotime($cleaning_data['cleaning_service_closing_date'])) ?> <?php echo date("g:i A", strtotime($cleaning_data['cleaning_service_closing_time'])) ?></span>
                        </td>
                    </tr> -->

                    <!-- <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">Cleaner Name:</span> <span style="color:#000;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;"><?php echo $update_cleaner_email['signup_name']?> <?php echo $update_cleaner_email['signup_lastname']?></span>
                        </td>
                    </tr> -->

                    <!-- <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">Address:</span> <span style="color:#000;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;"><?php echo $cleaning_data['cleaning_service_address']?></span>
                        </td>
                    </tr> -->
                </table>
                <!-- </br>
                </br>
                </br> -->
                <table>
                    <tr>
                        <td>
                            <span style="font-size: 15px;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;">Your Clean To Close™ Team</span>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td>
                            <span style="font-size: 15px;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;"><?=g('site_name')?></span>
                        </td>
                    </tr> -->
                </table>
            </td>
        </tr>
    </table>
</div>