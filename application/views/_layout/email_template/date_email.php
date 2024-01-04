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
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;">Reschedule Job</span>
                        </td>
                    </tr>
                </table>
                </br>
                </br>
                </br>
                <table>
                    <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;">Hello, Admin</span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">The job previously scheduled for <?php echo date("m/d/Y", strtotime( $update_date_admin['cleaning_service_closing_date_old']))?> at <?php echo date("g:i A", strtotime($update_date_admin['cleaning_service_closing_time_old'])) ?>, located at <?php echo $update_date_admin['cleaning_service_address']?> has been RESCHEDULED.</span>
                        </td>
                    </tr>


                
                </table>
               
            </td>
        </tr>
    </table>
</div>