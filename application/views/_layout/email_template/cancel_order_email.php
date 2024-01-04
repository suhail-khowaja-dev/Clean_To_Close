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
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;">Job Cancellation</span>
                        </td>
                    </tr>
                </table>
                </br>
                </br>
                </br>
                <table>
                    <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;">Hi,</span>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">Job(<span style="color:#000;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;"><?php echo $cancel_document['cleaning_service_id']?></span>) has been canceled by Realtor(<span style="color:#000;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;"><?php echo $cancel__person_email['signup_name']?></span>). Details are below</span>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">Job No:</span> <span style="color:#000;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;"><?php echo $cancel_document['cleaning_service_id']?></span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">Cleaning Date/Time:</span> <span style="color:#000;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;"><?php echo date("m/d/Y", strtotime($cancel_document['cleaning_service_closing_date'])) ?> <?php echo date("g:i A", strtotime($cancel_document['cleaning_service_closing_time'])) ?></span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">Cleaner Name:</span> <span style="color:#000;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;"><?php echo $cancel__cleaner_email['signup_name']?></span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span style="font-size: 12px;font-weight: bold;font-family: 'Poppins', sans-serif;color:#666">Address:</span> <span style="color:#000;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;"><?php echo $cancel_document['cleaning_service_address']?></span>
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
                            <span style="font-size: 15px;font-weight: bold;font-family: 'Poppins', sans-serif;font-size: 12px;"><?=g('site_name')?></span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>