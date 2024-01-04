<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit&family=Roboto&display=swap" rel="stylesheet">


<style>
    td {
        font-family: 'Outfit', sans-serif;
    }
</style>



<div style="width: 600px;margin:auto;">
    <table class="table" style="width: 100%;background-color:whitesmoke; margin:auto;padding:10px;">
        <tr>
            <td style="text-align: center;">
                <table style="width:100%;margin-top:30px">
                    <tr>
                        <td style="text-align: center;">
                            <img src="<?php echo get_image($logo['logo_image_path'], $logo['logo_image']) ?>" alt="img" />
                            <!-- <img src="https:/designprosusa.com/cleantoclose_dev_v16/assets/uploads/logo/logo162387121590162578611097.png" width="300" alt=""> -->
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <table style="margin-top:30px;text-align: right;width:100%">
                    <tr>
                        <td style="text-align: right">
                            <span style="font-size: 22px;font-weight: bold;font-family: 'gilroybold', sans-serif;">Invoice/Summary</span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <table style="width: 100%;margin-top:15px">
                    <tr>
                        <td>
                            <h4 style="font-size: 14px;"><?php echo $cleaning['cleaning_service_address'] ?>, <?php echo $cleaning['cleaning_service_city']; ?>, <?php echo $cleaning['cleaning_service_state']; ?> <?php echo $cleaning['cleaning_service_zipcode']; ?></h4>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <table style="width: 100%;margin-top:0px">
                    <tr>
                        <td>
                            <label for="" style="font-size: 13px;">Order # <strong style="font-size: 11px;"><?php echo $cleaning['cleaning_service_id'] ?></strong> </label>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%;margin-top:0px">
                    <tr>
                        <td>
                            <label for="" style="font-size: 13px;">Order Date: <strong style="font-size: 11px;"><?php echo date("m/d/Y", strtotime($cleaning['cleaning_service_createdon'])) ?></strong> </label>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%;margin-top:0px">
                    <tr>
                        <td>
                            <label for="" style="font-size: 13px;">Order Status: <strong style="font-size: 11px;">
                            <?php
                                if ($cleaning['cleaning_service_status'] == 1) { ?>
                                    Open
                                <? } elseif ($cleaning['cleaning_service_status'] == 3) { ?>
                                    Accepted

                                <? } elseif ($cleaning['cleaning_service_status'] == 4) { ?>
                                    submitted
                                <? } elseif ($cleaning['cleaning_service_status'] == 6) { ?>
                                    Canceled Order
                                    <?}else{?>
                                        Closed
                                <?php
                                }
                                ?>
                                </strong> </label>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>


        <tr>
            <td>
                <table style="width: 100%;">
                    <tr>
                        <td>
                            <table style="background-color: #fff;border-radius:10px;padding:10px;margin-top:30px;width: 100%;">
                                <tr>
                                    <td>
                                        <h2 style="font-size: 18px">PROPERTY DETAILS</h2>
                                    </td>
                                </tr>
                                <tr style=" width:100%;text-align: left;">
                                    <td style="width:120px;float:left;padding-right:10px">
                                        <h5 for="" style="font-size: 13px;"> PROPERTY TYPE </h5>
                                        <label for="" style="font-size: 11px;"> <?php echo $cleaning['cleaning_service_type_residence'] ?></label>
                                    </td>
                                    <td style="width:120px;float:left;padding-right:10px">
                                        <h5 for="" style="font-size: 13px;"> SQUARE FOOTAGE </h5>
                                        <label for="" style="font-size: 11px;"> <?php echo $cleaning['sqft_area'] ?> </label>
                                    </td>
                                    <td style="width:70px;float:left;padding-right:10px">
                                        <h5 for="" style="font-size: 13px;">MLS  # </h5>
                                        <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_mls'] ?> </label>
                                    </td>
                                    <td style="width:80px;float:left;padding-right:10px">
                                        <h5 for="" style="font-size: 13px;">BEDROOMS </h5>
                                        <label for="" style="font-size: 11px;"> <?php echo $cleaning['cleaning_service_bedrooms'] ?> </label>
                                    </td>
                                    <td style="width:100px;float:left;padding-right:10px">
                                        <h5 for="" style="font-size: 13px;"> FULL BATHS</h5>
                                        <label for="" style="font-size: 11px;"> <?php echo $cleaning['cleaning_service_bathroom'] ?> </label>
                                    </td>
                                    <td style="width:100px;float:left;padding-right:10px">
                                        <h5 for="" style="font-size: 13px;"> HALF BATHS</h5>
                                        <label for="" style="font-size: 11px;"> <?php echo $cleaning['cleaning_service_full_bathroom'] ?> </label>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <table style="width:100%">
                    <tr>
                        <td>
                            <?php if ($cleaning['cleaning_service_representing'] == 'Buyer') { ?>
                                <table style="background-color: #fff;border-radius:10px;padding:10px;margin-top:5px;width:100%">
                                    <tr>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <h2 style="font-size: 18px">AGENT INFORMATION</h2>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr style=" width:100%; display:flex; flex-direction:column;">
                                                                <td style="width:100%;">
                                                                    <table>
                                                                        <!-- <tr>
                                                                            <td style="width: 100px;">
                                                                                <div class="checkedDiv" style="height: 16px;width: 16px;border:1px solid lightgrey;border-radius:50px;float: left;">
                                                                                    <div style="background-color: #b4c3c0;height:12px;width: 12px;border-radius:50px;margin-top:2px;margin-left:2px">
                                                                                    </div>
                                                                                </div>
                                                                                <label for="" style="float: left;padding-left:8px;padding-top:1px;font-size:13px"> Buyer</label>
                                                                            </td>
                                                                            <td style="width: 100px;">
                                                                                <div class="checkedDiv" style="height: 16px;width: 16px;border:1px solid lightgrey;border-radius:50px;float: left;">
                                                                                </div>
                                                                                <label for="" style="float: left;padding-left:8px;padding-top:1px;font-size:13px"> Seller</label>
                                                                            </td>
                                                                            <td style="width: 100px;">
                                                                                <div class="checkedDiv" style="height: 16px;width: 16px;border:1px solid lightgrey;border-radius:50px;float: left;">
                                                                                </div>
                                                                                <label for="" style="float: left;padding-left:8px;padding-top:1px;font-size:13px"> Both</label>
                                                                            </td>
                                                                        </tr> -->
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="width: 100%;margin-top:25px">
                                                <tr>
                                                    <td style="width:100%;">
                                                        <h3>
                                                            Ordering Agent Info
                                                        </h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">First NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $user['signup_name'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">Last NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $user['signup_lastname'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">EMAIL</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $user['signup_email'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">PHONE</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $user['signup_contact'] ?></label>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="width:100%;margin-top:25px">
                                                <tr>
                                                    <td style="width:100%;">
                                                        <h3>
                                                            Buyer Information
                                                        </h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">FIRST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_buyer_name'] ?> </label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">Last NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_buyer_last_name'] ?> </label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">EMAIL</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_buyer_email'] ?> </label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">PHONE</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_buyer_contact'] ?> </label>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="width:100%;margin-top:25px">
                                                <tr>
                                                    <td style="width:100%;">
                                                        <h3>
                                                            Cooperating Agent Information
                                                        </h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">FIRST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_agent_buyer_name'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">LAST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_agent_buyer_last_name'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">EMAIL</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_agent_buyer_email'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">PHONE</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_agent_buyer_phone'] ?></label>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="width: 100%;margin-top:25px">
                                                <tr>
                                                    <td style="width:100%;">
                                                        <h3>
                                                            Seller Information
                                                        </h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">FIRST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_other_seller_fullname'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">LAST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_other_seller_lastname'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">EMAIL</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_other_seller_email'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">PHONE</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_other_seller_phone'] ?></label>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                </table>
                            <? } elseif ($cleaning['cleaning_service_representing'] == 'Seller') { ?>
                                <table style="background-color: #fff;border-radius:10px;padding:10px;margin-top:5px;width:100%">
                                    <tr>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <h2 style="font-size: 18px">AGENT INFORMATION</h2>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr style=" width:100%; display:flex; flex-direction:column;">
                                                                <td style="width:100%;">
                                                                    <table>
                                                                        <!-- <tr>
                                                                            <td style="width: 100px;">
                                                                                <div class="checkedDiv" style="height: 16px;width: 16px;border:1px solid lightgrey;border-radius:50px;float: left;">
                                                                                    <div style="background-color: #b4c3c0;height:12px;width: 12px;border-radius:50px;margin-top:2px;margin-left:2px">
                                                                                    </div>
                                                                                </div>
                                                                                <label for="" style="float: left;padding-left:8px;padding-top:1px;font-size:13px"> Buyer</label>
                                                                            </td>
                                                                            <td style="width: 100px;">
                                                                                <div class="checkedDiv" style="height: 16px;width: 16px;border:1px solid lightgrey;border-radius:50px;float: left;">
                                                                                </div>
                                                                                <label for="" style="float: left;padding-left:8px;padding-top:1px;font-size:13px"> Seller</label>
                                                                            </td>
                                                                            <td style="width: 100px;">
                                                                                <div class="checkedDiv" style="height: 16px;width: 16px;border:1px solid lightgrey;border-radius:50px;float: left;">

                                                                                </div>
                                                                                <label for="" style="float: left;padding-left:8px;padding-top:1px;font-size:13px"> Both</label>
                                                                            </td>
                                                                        </tr> -->
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="width: 100%;margin-top:25px">
                                                <tr>
                                                    <td style="width:100%;">
                                                        <h3>
                                                            Ordering Agent Info
                                                        </h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">FIRST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $user['signup_name'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">LAST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $user['signup_lastname'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">EMAIL</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $user['signup_email'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">PHONE</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $user['signup_contact'] ?></label>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="width: 100%;margin-top:25px">
                                                <tr>
                                                    <td style="width:100%;">
                                                        <h3>
                                                            Seller Information
                                                        </h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">FIRST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_seller_name'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">LAST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_seller_last_name'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">EMAIL</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_seller_email'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">PHONE</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_seller_contact'] ?></label>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="width:100%;margin-top:25px">
                                                <tr>
                                                    <td style="width:100%;">
                                                        <h3>
                                                            Cooperating Agent Information
                                                        </h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">FIRST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_agent_seller_name'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">LAST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_agent_seller_last_name'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">EMAIL</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_agent_seller_email'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">PHONE</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_agent_seller_phone'] ?></label>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="width:100%;margin-top:25px">
                                                <tr>
                                                    <td style="width:100%;">
                                                        <h3>
                                                            Buyer Information
                                                        </h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">FIRST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_other_buyer_fullname'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">LAST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_other_buyer_lastname'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">EMAIL</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_other_buyer_email'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">PHONE</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_other_buyer_phone'] ?></label>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            <? } else { ?>
                                <table style="background-color: #fff;border-radius:10px;padding:10px;margin-top:5px;width:100%">
                                    <tr>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <h2 style="font-size: 18px">AGENT INFORMATION</h2>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr style=" width:100%; display:flex; flex-direction:column;">
                                                                <td style="width:100%;">
                                                                    <table>
                                                                        <!-- <tr>
                                                                            <td style="width: 100px;">
                                                                                <div class="checkedDiv" style="height: 16px;width: 16px;border:1px solid lightgrey;border-radius:50px;float: left;">
                                                                                    <div style="background-color: #b4c3c0;height:12px;width: 12px;border-radius:50px;margin-top:2px;margin-left:2px">
                                                                                    </div>
                                                                                </div>
                                                                                <label for="" style="float: left;padding-left:8px;padding-top:1px;font-size:13px"> Buyer</label>
                                                                            </td>
                                                                            <td style="width: 100px;">
                                                                                <div class="checkedDiv" style="height: 16px;width: 16px;border:1px solid lightgrey;border-radius:50px;float: left;">
                                                                                </div>
                                                                                <label for="" style="float: left;padding-left:8px;padding-top:1px;font-size:13px"> Seller</label>
                                                                            </td>
                                                                            <td style="width: 100px;">
                                                                                <div class="checkedDiv" style="height: 16px;width: 16px;border:1px solid lightgrey;border-radius:50px;float: left;">

                                                                                </div>
                                                                                <label for="" style="float: left;padding-left:8px;padding-top:1px;font-size:13px"> Both</label>
                                                                            </td>
                                                                        </tr> -->
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="width: 100%;margin-top:25px">
                                                <tr>
                                                    <td style="width:100%;">
                                                        <h3>
                                                            Ordering Agent Info
                                                        </h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">FIRST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $user['signup_name'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">LAST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $user['signup_lastname'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">EMAIL</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $user['signup_email'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">PHONE</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $user['signup_contact'] ?></label>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="width:100%;margin-top:25px">
                                                <tr>
                                                    <td style="width:100%;">
                                                        <h3>
                                                            Buyer Information
                                                        </h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">FIRST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_first_name'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">LAST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_last_name'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">EMAIL</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_email'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">PHONE</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_contact'] ?></label>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="width: 100%;margin-top:25px">
                                                <tr>
                                                    <td style="width:100%;">
                                                        <h3>
                                                            Seller Information
                                                        </h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">FIRST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_first_name_seller'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">LAST NAME</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_last_name_seller'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">EMAIL</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_email_seller'] ?></label>
                                                                </td>
                                                                <td style="width:350px;">
                                                                    <h5 style="font-size: 13px;">PHONE</h5>
                                                                    <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_contact_seller'] ?></label>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <table style="width: 100%;">
                    <tr>
                        <td>
                            <table style="background-color: #fff;border-radius:10px;padding:10px;margin-top:5px;width: 100%;">
                                <tr>
                                    <td>
                                        <h2 style="font-size: 18px">CLOSING INFORMATION</h2>
                                    </td>
                                </tr>
                                <tr style=" width:100%;text-align: left;">
                                    <td style="width:100px;float:left">
                                        <h5 style="min-height: 50px;font-size: 13px;"> SERVICE DATE </h5>
                                        <label for="" style="font-size: 11px;"> <?php echo date("m/d/Y", strtotime($cleaning['cleaning_service_closing_date'])) ?></label>
                                    </td>
                                    <td style="width:100px;float:left">
                                        <h5 style="min-height: 50px;font-size: 13px;"> SERVICE TIME </h5>
                                        <label for="" style="font-size: 11px;"> <?php echo date("g:i A", strtotime($cleaning['cleaning_service_closing_time'])) ?> </label>
                                    </td>
                                    <td style="width:110px;float:left">
                                        <h5 style="min-height: 50px;font-size: 13px;">CLOSING DATE </h5>
                                        <label for="" style="font-size: 11px;"><?php echo date("m/d/Y", strtotime($cleaning['cleaning_service_projected_closing_date'])) ?></label>
                                    </td>
                                    <td style="width:110px;float:left">
                                        <h5 style="min-height: 50px;font-size: 13px;">CLOSING TITLE COMPANY </h5>
                                        <label for="" style="font-size: 11px;"><?php echo $cleaning['cleaning_service_closing_tittle_company'] ?></label>
                                    </td>
                                    <td style="width:100px;float:left">
                                        <h5 style="min-height: 50px;font-size: 13px;"> WHO IS RESPONSIBLE FOR PAYMENT</h5>
                                        <label for="" style="font-size: 11px;">
                                            <?php
                                            $params['joins'][] = array(
                                                "table" => "cleaning_service",
                                                "joint" => "cleaning_service.cleaning_service_user_id = signup.signup_id"
                                            );
                                            $params['where']['signup_type'] = 1;
                                            $relator_name = $this->model_signup->find_one($params);

                                            ?>
                                            <div class='proAddAdd'>
                                                <?php if ($cleaning['cleaning_service_responsible_payment'] == 'Buyer') { ?>
                                                    <?php echo 'Buyer' ?: 'N/A'  ?>
                                                <? } elseif ($cleaning['cleaning_service_responsible_payment'] == 'Seller') { ?>
                                                    <?php echo 'Seller' ?: 'N/A'  ?>
                                                <? } elseif ($cleaning['cleaning_service_responsible_payment'] == 'Agent') { ?>
                                                    <?php echo 'Agent' ?: 'N/A'  ?>
                                                <?php
                                                }
                                                ?>
                                        </label>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <table style="width: 100%;">
                    <tr>
                        <td>
                            <table style="background-color: #fff;border-radius:10px;padding:10px;margin-top:5px;width: 100%;">
                                <tr>
                                    <td>
                                        <table style="width: 100%;">
                                            <tr>
                                                <td style="width: 220px;float:left">
                                                    <h2 style="font-size: 18px">PLANS AND COVERAGE</h2>
                                                </td>
                                                <td style="width: 120px;float:left">
                                                    <h5 style="font-size: 13px;">
                                                        PACKAGE
                                                    </h5>
                                                    <label for="" style="font-size: 11px;">
                                                        <?php echo $cleaning['cleaning_service_package_name'] ?>
                                                    </label>
                                                </td>
                                                <td style="width: 160px;float:left">
                                                    <h5 style="font-size: 13px;">
                                                        ADDITIONAL ADD-ONS
                                                    </h5>
                                                    <?php
                                                    $cleaning_additional = unserialize($cleaning['cleaning_service_additional_kitchen']);
                                                    if ($cleaning_additional == '' || $cleaning_additional == 'N\A') {
                                                    } else {
                                                        foreach ($cleaning_additional as $key => $value) {
                                                            $param1['where']['additional_add_ons_id'] = $value;
                                                            $param1['where']['additional_add_ons_type'] = 1;
                                                            $additional_add_3 = $this->model_additional_add_ons->find_all_active($param1);
                                                    ?>
                                                       <label for="" style="font-size: 11px;">
                                                                <?php echo $additional_add_3[0]['additional_add_ons_name']  ?: 'N/A' ?>
                                                            </label>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr style=" width:100%; display:flex; ">
                                                <td>
                                                    <h2 style="font-size: 18px">SUMMARY</h2>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <table style="width: 100%;height:fit-content">
                                                        <tr>
                                                            <td style="float: left;width:49%;text-align: left">
                                                                <h5 style="font-size: 13px;"> <?php echo $cleaning['cleaning_service_package_name'] ?: 'N/A' ?></h5>
                                                            </td>
                                                            <td style="float: right;width:49%;text-align: right">
                                                                <h5> <strong style="font-size: 11px;">$<?php echo $cleaning['cleaning_service_package_amount'] ?: 'N/A' ?></strong> </h5>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table style="width: 100%;height:fit-content;margin-top:-25px">
                                                        <tr>
                                                            <td style="float: left;width:49%;text-align: left">
                                                                <h5 style="font-size: 13px;">Total Options</h5>
                                                            </td>
                                                            <td style="float: right;width:49%;text-align: right">
                                                                <h5> <strong style="font-size: 11px;">$<?php echo $cleaning['cleaning_service_total_option_amount']  ?: 0 ?> </h5>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table style="width: 100%;height:fit-content;margin-top:-15px">
                                                        <tr>
                                                            <td style="background-color: lightgrey;height:1px;width:100%"></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table style="width: 100%;height:fit-content;margin-top:-25px">
                                                        <tr>
                                                            <td style="float: left;width:49%;text-align: left">
                                                                <h5 style="font-size: 13px;">Due at closing</h5>
                                                            </td>
                                                            <td style="float: right;width:49%;text-align: right">
                                                                <h5> <strong style="font-size: 11px;">$<?php echo $cleaning['cleaning_service_total_amount'] ?: 'N/A' ?> </h5>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <table style="width:100%;text-align: center;margin-top:15px">
                    <tr>
                        <td style="color:#000">
                            Please Send Payments To
                        </td>
                    </tr>
                    <tr>
                        <?php
                        $invoice_amount = $this->model_cleaner_invoice->find_all();
                        // debug($invoice_amount,1); 
                        ?>
                        <td>
                            <table style="width:100%;text-align: center;margin-top:15px">
                                <tr>
                                    <td style="color:#000;font-size: 14px">
                                        <?php echo $invoice_amount[0]['cleaner_invoice_value'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:#000;font-size: 14px">
                                        P0 Box <?php echo $invoice_amount[1]['cleaner_invoice_value'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:#000;font-size: 14px">
                                        <?php echo $invoice_amount[2]['cleaner_invoice_value'] ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>