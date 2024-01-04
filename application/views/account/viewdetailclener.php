<style>
    @media print {
        @page {
            size: 12in 20in;
            margin: 0;
        }
    }
</style>

<div class="Main">
    <div class="dashboard  ">


        <div class="contantPart ">
            <div class="container">
                
                <div class="Main mt70">
                    <!-- <div class="invoicePageHeading d-flex justify-content-center mt10 mb1">
                        <h2>Invoice/Summery</h2>
                    </div> -->
                    <div class="hadingbox">
                        <div class="img text-center mb-3" style="visibility:hidden;display:none">
                            <img src="https://cleantocloseco.com/assets/uploads/logo/logo162387121590162578611097.png" alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb20">
                            <!-- <div class="img" style="visibility:hidden !important">
                                <img src="https://designprosusa.com/cleantoclose_dev_v5/assets/uploads/logo/logo162387121590162578611097.png" alt="">
                            </div> -->
                            <div class="invoicePageHeading d-flex justify-content-center mt10 mb3 w-100">
                                <h2>Invoice/Summary</h2>
                            </div>
                        </div>
                        <h1>
                            <!-- <?php echo $cleaning_inovice['cleaning_service_address'] ?> -->
                            <?php echo $cleaning_inovice['cleaning_service_address']; ?>, <?php echo $cleaning_inovice['cleaning_service_city']; ?>, <?php echo $cleaning_inovice['cleaning_service_state']; ?>, <?php echo $cleaning_inovice['cleaning_service_zipcode']; ?>
                        </h1>
                        <p>
                            Order # <span>
                                <?php echo $cleaning_inovice['cleaning_service_id'] ?>
                            </span>
                        </p>
                        <p>
                            Order Date: <span>
                                <?php echo date("m/d/Y", strtotime($cleaning_inovice['cleaning_service_createdon'])) ?>
                            </span>
                        </p>
                        <p>
                            Order Status: <span>
                                <?php
                                if ($cleaning_inovice['cleaning_service_status'] == 1) { ?>
                                    Open
                                <? } elseif ($cleaning_inovice['cleaning_service_status'] == 3) { ?>
                                    Accepted

                                <? } elseif ($cleaning_inovice['cleaning_service_status'] == 4) { ?>
                                    submitted
                                <? } elseif ($cleaning_inovice['cleaning_service_status'] == 6) { ?>
                                    Canceled Order
                                    <?}else{?>
                                        Closed
                                <?php
                                }
                                ?>
                            </span>
                        </p>


                    </div>
                    <!-- first tab -->
                    <!-- <div class="d-flex propertyAddBox6-1 flex-column mt20">
                        <div class='proNameB1'>
                            <h6 class='proNameP'>Access Details</h6>
                        </div>
                        <div style="width:100%" class="dcol mt10 align-items-baseline">
                            <div class='proAddBox'>
                                <div class="d-flex align-items-center justify-content-between prodAddflex">
                                    <label for="" class='proAddLabel'>LOCKBOX</label>
                                </div>
                                <div class='proAddAdd'>
                                    <?php echo $cleaning_inovice['cleaning_service_lockbox']  ?: 'N/A' ?>
                                </div>
                            </div>
                            <div class='proAddBox'>
                                <div class="d-flex align-items-center justify-content-between prodAddflex">
                                    <label for="" class='proAddLabel'>Code Information</label>
                                </div>
                                <div class='proAddAdd'>
                                    <?php echo $cleaning_inovice['cleaning_service_code_info'] ?: 'N/A' ?>
                                </div>
                            </div>
                            <div class='proAddBox'>
                                <div class="d-flex align-items-center justify-content-between prodAddflex">
                                    <label for="" class='proAddLabel'>Location of Lockbox</label>
                                </div>
                                <div class='proAddAdd'>
                                    <?php echo $cleaning_inovice['cleaning_service_location_of_lockbox'] ?: 'N/A'  ?>
                                </div>
                            </div>
                            <div class='proAddBox'>
                                <div class="d-flex align-items-center justify-content-between prodAddflex">
                                    <label for="" class='proAddLabel'>One Day Code Or CBS Code</label>
                                </div>
                                <div class='proAddAdd'>
                                    <?php echo $cleaning_inovice['cleaning_service_supra_cbs_code'] ?: 'N/A'  ?>
                                </div>
                            </div>
                            <div class='proAddBox'>
                                <div class="d-flex align-items-center justify-content-between prodAddflex">
                                    <label for="" class='proAddLabel'>Additional Information For Access</label>
                                </div>
                                <div class='proAddAdd'>
                                    <?php echo $cleaning_inovice['cleaning_service_garage'] ?: 'N/A'  ?>
                                </div>
                            </div>
                           
                        </div>
                    </div> -->
                    <!-- second tab -->
                    <div class="d-flex propertyAddBox6-1 flex-column mt20">
                        <div class='proNameB1'>
                            <h6 class='proNameP'>Property Details</h6>
                        </div>
                        <div style="width:100%" class="dcol mt10 align-items-baseline">
                            <div class='proAddBox'>
                                <div class="d-flex align-items-center justify-content-between prodAddflex">
                                    <label for="" class='proAddLabel'>Property Type</label>
                                </div>
                                <div class='proAddAdd'>
                                    <?php echo $cleaning_inovice['cleaning_service_type_residence'] ?>
                                </div>
                            </div>
                            <div class='proAddBox'>
                                <div class="d-flex align-items-center justify-content-between prodAddflex">
                                    <label for="" class='proAddLabel'>Square Footage</label>
                                </div>
                                <div class='proAddAdd'>
                                    <?php echo $cleaning_inovice['sqft_area'] ?>
                                </div>
                            </div>
                            <div class='proAddBox'>
                                <div class="d-flex align-items-center justify-content-between prodAddflex">
                                    <label for="" class='proAddLabel'>MLS #</label>
                                </div>
                                <div class='proAddAdd'>
                                    <?php echo $cleaning_inovice['cleaning_service_mls'] ?: 'N/A'  ?>
                                </div>
                            </div>
                            <div class='proAddBox'>
                                <div class="d-flex align-items-center justify-content-between prodAddflex">
                                    <label for="" class='proAddLabel'>Bedrooms</label>
                                </div>
                                <div class='proAddAdd'>
                                    <?php echo $cleaning_inovice['cleaning_service_bedrooms'] ?>
                                </div>
                            </div>
                            <div class='proAddBox'>
                                <div class="d-flex align-items-center justify-content-between prodAddflex">
                                    <label for="" class='proAddLabel'>Full Baths</label>
                                </div>
                                <div class='proAddAdd'>
                                    <?php echo $cleaning_inovice['cleaning_service_bathroom'] ?>
                                </div>
                            </div>
                            <div class='proAddBox'>
                                <div class="d-flex align-items-center justify-content-between prodAddflex">
                                    <label for="" class='proAddLabel'>Half Baths</label>
                                </div>
                                <div class='proAddAdd'>
                                    <?php echo $cleaning_inovice['cleaning_service_full_bathroom'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- third tab -->
                    <?php if ($cleaning_inovice['cleaning_service_representing'] == 'Buyer') { ?>
                        <div class="d-flex propertyAddBox6-1 flex-column mt20">
                            <div class='proNameB1'>
                                <h6 class='proNameP'>Agent Information</h6>
                            </div>
                            <!-- buyer -->
                           
                            <div class="proNameB1 mt20">
                                <h5 class="proNameP">Ordering Agent Info</h5>
                            </div>
                            <div style="width:100%" class="dcol d-flex mt5">
                                <div class="proAddBox">
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class="proAddLabel">First Name</label>
                                    </div>
                                    <div class="proAddAdd">
                                        <?php echo $user_data['signup_name'] ?>
                                    </div>
                                </div>
                                <div class="proAddBox">
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class="proAddLabel">Last Name</label>
                                    </div>
                                    <div class="proAddAdd">
                                        <?php echo $user_data['signup_lastname'] ?>
                                    </div>
                                </div>
                                <div class="proAddBox">
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class="proAddLabel">Email</label>
                                    </div>
                                    <div class="proAddAdd">
                                        <?php echo $user_data['signup_email'] ?>
                                    </div>
                                </div>
                                <div class="proAddBox">
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class="proAddLabel">Phone</label>
                                    </div>
                                    <div class="proAddAdd">
                                        <?php echo $user_data['signup_contact'] ?>
                                    </div>
                                </div>
                            </div>
                            <!-- buyer info -->
                            <div class='proNameB1 mt20'>
                                <h5 class='proNameP'>Buyer Information</h5>
                            </div>
                            <div style="width:100%" class="dcol d-flex mt5">
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>First Name</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_buyer_name'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Last Name</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_buyer_last_name'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Email</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_buyer_email'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Phone</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_buyer_contact'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Cooperating Agents Informations -->
                            <div class='proNameB1 mt20'>
                                <h5 class='proNameP'>Cooperating Agent Informations</h5>
                            </div>
                            <div style="width:100%" class="dcol d-flex mt5">
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>First Name</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_agent_buyer_name'] ?: 'N/A' ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Last Name</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_agent_buyer_last_name'] ?: 'N/A' ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Email</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_agent_buyer_email'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Phone</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_agent_buyer_phone'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                            </div>
                            <!-- seller info -->
                            <div class='proNameB1 mt20'>
                                <h5 class='proNameP'>Seller Information</h5>
                            </div>
                            <div style="width:100%" class="dcol d-flex mt5">
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>First Name</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_other_seller_fullname'] ?: 'N/A' ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Last Name</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_other_seller_lastname'] ?: 'N/A' ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Email</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_other_seller_email'] ?: 'N/A' ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Phone</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_other_seller_phone'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? } elseif ($cleaning_inovice['cleaning_service_representing'] == 'Seller') { ?>
                        <div class="d-flex propertyAddBox6-1 flex-column mt20">
                            <div class='proNameB1'>
                                <h6 class='proNameP'>Agent Information</h6>
                            </div>
                            <!-- buyer -->
                           

                            <div class="proNameB1 mt20">
                                <h5 class="proNameP">Ordering Agent Info</h5>
                            </div>
                            <div style="width:100%" class="dcol d-flex mt5">
                                <div class="proAddBox">
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class="proAddLabel">First Name</label>
                                    </div>
                                    <div class="proAddAdd">
                                        <?php echo $user_data['signup_name'] ?>
                                    </div>
                                </div>
                                <div class="proAddBox">
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class="proAddLabel">Last Name</label>
                                    </div>
                                    <div class="proAddAdd">
                                        <?php echo $user_data['signup_lastname'] ?>
                                    </div>
                                </div>
                                <div class="proAddBox">
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class="proAddLabel">Email</label>
                                    </div>
                                    <div class="proAddAdd">
                                        <?php echo $user_data['signup_email'] ?>
                                    </div>
                                </div>
                                <div class="proAddBox">
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class="proAddLabel">Phone</label>
                                    </div>
                                    <div class="proAddAdd">
                                        <?php echo $user_data['signup_contact'] ?>
                                    </div>
                                </div>
                            </div>

                            <!-- buyer info -->
                            <div class='proNameB1 mt20'>
                                <h5 class='proNameP'>Seller Information</h5>
                            </div>
                            <div style="width:100%" class="dcol d-flex mt5">
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>First Name</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_seller_name'] ?: 'N/A' ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Last Name</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_seller_last_name'] ?: 'N/A' ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Email</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_seller_email'] ?: 'N/A' ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Phone</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_seller_contact'] ?: 'N/A' ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Cooperating Agents Informations -->
                            <div class='proNameB1 mt20'>
                                <h5 class='proNameP'>Cooperating Agent Informations</h5>
                            </div>
                            <div style="width:100%" class="dcol d-flex mt5">
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>First Name</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_agent_seller_name'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Last Name</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_agent_seller_last_name'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Email</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_agent_seller_email'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Phone</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_agent_seller_phone'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                            </div>
                            <!-- seller info -->
                            <div class='proNameB1 mt20'>
                                <h5 class='proNameP'>Buyer Information</h5>
                            </div>
                            <div style="width:100%" class="dcol d-flex mt5">
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>First Name</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_other_buyer_fullname'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Last Name</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_other_buyer_lastname'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Email</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_other_buyer_email'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Phone</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_other_buyer_phone'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? } else { ?>
                        <div class="d-flex propertyAddBox6-1 flex-column mt20">
                            <div class='proNameB1'>
                                <h6 class='proNameP'>Agent Information</h6>
                            </div>
                            <!-- buyer -->
                         
                            <div class="proNameB1 mt20">
                                <h5 class="proNameP">Ordering Agent  Info</h5>
                            </div>
                            <div style="width:100%" class="dcol d-flex mt5">
                                <div class="proAddBox">
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class="proAddLabel">First Name</label>
                                    </div>
                                    <div class="proAddAdd">
                                        <?php echo $user_data['signup_name'] ?>
                                    </div>
                                </div>
                                <div class="proAddBox">
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class="proAddLabel">Last Name</label>
                                    </div>
                                    <div class="proAddAdd">
                                        <?php echo $user_data['signup_lastname'] ?>
                                    </div>
                                </div>
                                <div class="proAddBox">
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class="proAddLabel">Email</label>
                                    </div>
                                    <div class="proAddAdd">
                                        <?php echo $user_data['signup_email'] ?>
                                    </div>
                                </div>
                                <div class="proAddBox">
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class="proAddLabel">Phone</label>
                                    </div>
                                    <div class="proAddAdd">
                                        <?php echo $user_data['signup_contact'] ?>
                                    </div>
                                </div>
                            </div>
                            <!-- seller info -->
                            <div class='proNameB1 mt20'>
                                <h5 class='proNameP'>Buyer Information</h5>
                            </div>
                            <div style="width:100%" class="dcol d-flex mt5">
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>First Name</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_first_name'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Last Name</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_last_name'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Email</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_email'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Phone</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_contact'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                            </div>
                            <!-- buyer info -->
                            <div class='proNameB1 mt20'>
                                <h5 class='proNameP'>Seller Information</h5>
                            </div>
                            <div style="width:100%" class="dcol d-flex mt5">
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>First Name</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_first_name_seller'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Last Name</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_last_name_seller'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Email</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_email_seller'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                                <div class='proAddBox'>
                                    <div class="d-flex align-items-center justify-content-between prodAddflex">
                                        <label for="" class='proAddLabel'>Phone</label>
                                    </div>
                                    <div class='proAddAdd'>
                                        <?php echo $cleaning_inovice['cleaning_service_contact_seller'] ?: 'N/A'  ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    } ?>
                    <!-- fourth tab -->
                    <div class="d-flex propertyAddBox6-1 flex-column mt20">
                        <div class='proNameB1'>
                            <h6 class='proNameP'>Closing Information</h6>
                        </div>
                        <div style="width:100%" class="dcol mt10 align-items-baseline">
                            <div class='proAddBox'>
                                <div class="d-flex align-items-center justify-content-between prodAddflex">
                                    <label for="" class='proAddLabel'>Service Date</label>
                                </div>
                                <div class='proAddAdd'>
                                    <?php echo date("m/d/Y", strtotime($cleaning_inovice['cleaning_service_closing_date'])) ?>
                                </div>
                            </div>

                            <div class='proAddBox'>
                                <div class="d-flex align-items-center justify-content-between prodAddflex">
                                    <label for="" class='proAddLabel'>Service Time</label>
                                </div>
                                <div class='proAddAdd'>
                                    <?php echo date("g:i A", strtotime($cleaning_inovice['cleaning_service_closing_time'])) ?>
                                </div>
                            </div>
                            <div class='proAddBox'>
                                <div class="d-flex align-items-center justify-content-between prodAddflex">
                                    <label for="" class='proAddLabel'>Closing Date</label>
                                </div>
                                <div class='proAddAdd'>
                                    <?php echo date("m/d/Y", strtotime($cleaning_inovice['cleaning_service_projected_closing_date'])) ?>
                                </div>
                            </div>
                            <div class='proAddBox'>
                                <div class="d-flex align-items-center justify-content-between prodAddflex">
                                    <label for="" class='proAddLabel'>Closing Title Company</label>
                                </div>
                                <div class='proAddAdd'>
                                    <?php echo $cleaning_inovice['cleaning_service_closing_tittle_company'] ?>
                                </div>
                            </div>

                            <div class='proAddBox'>
                                <div class="d-flex align-items-center justify-content-between prodAddflex">
                                    <label for="" class='proAddLabel'>Company Email</label>
                                </div>
                                <div class='proAddAdd'>
                                    <?php echo $cleaning_inovice['cleaning_service_closing_tittle_company_email'] ?: 'N/A' ?>
                                </div>
                            </div>

                            <div class='proAddBox'>
                                <div class="d-flex align-items-center justify-content-between prodAddflex">
                                    <label for="" class='proAddLabel'>Company Phone Number</label>
                                </div>
                                <div class='proAddAdd'>
                                    <?php echo $cleaning_inovice['cleaning_service_closing_tittle_company_phone_number'] ?>
                                </div>
                            </div>

                            <div class='proAddBox'>
                                <div class="d-flex align-items-center justify-content-between prodAddflex">
                                    <label for="" class='proAddLabel'>Who Is Responsible For Payment?</label>
                                </div>
                                <?php
                                $params['joins'][] = array(
                                    "table" => "cleaning_service",
                                    "joint" => "cleaning_service.cleaning_service_user_id = signup.signup_id"
                                );
                                $params['where']['cleaning_service_user_id'] = $this->userid;
                                $params['where']['signup_type'] = 1;
                                $relator_name = $this->model_signup->find_one($params);
                                // debug($relator_name,1);
                                ?>
                                <div class='proAddAdd'>
                                    <?php if ($cleaning_inovice['cleaning_service_responsible_payment'] == 'Buyer') { ?>
                                        <?php echo 'Buyer' ?: 'N/A'  ?>
                                    <? } elseif ($cleaning_inovice['cleaning_service_responsible_payment'] == 'Seller') { ?>
                                        <?php echo 'Seller' ?: 'N/A'  ?>
                                    <? } elseif ($cleaning_inovice['cleaning_service_responsible_payment'] == 'Agent') { ?>
                                        <?php echo 'Agent' ?: 'N/A'  ?>
                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fiveth tab -->
                    <div class="d-flex propertyAddBoxtab3">

                        <div class="propertyAddTab3">
                            <div class="">
                                <h5 class='proNamePtab1'>Plans And Coverage<h5>
                                        <p></p>
                            </div>
                            <div class="">
                                <p class='propertyAddTab3h'>Package</p>
                                <p class='propertyAddTab3p packagename'> <?php echo $cleaning_inovice['cleaning_service_package_name'] ?: 'N/A' ?> </p>
                                
                            </div>
                         
                            <div class="">
                                    <p class='propertyAddTab3h'>Additional Add-Ons</p>
                                    <?php
                                    $cleaning_additional = unserialize($cleaning_inovice['cleaning_service_additional_kitchen']);
                                if($cleaning_additional == '' || $cleaning_additional == 'N\A'){
                                }else{
                                    foreach ($cleaning_additional as $key => $value) {
                                        $param1['where']['additional_add_ons_id'] = $value;
                                        $param1['where']['additional_add_ons_type'] = 1;
                                        $additional_add_3 = $this->model_additional_add_ons->find_all_active($param1);
                                    ?>
                                        <p class='propertyAddTab3p adds'><?php echo $additional_add_3[0]['additional_add_ons_name'] ?: 'N/A' ?> </p>
                                    <?php
                                    }}
                                    ?>
                            </div>
                            <div class="">
                                <p class='propertyAddTab3h'></p>
                                <p class='propertyAddTab3p'></p>
                            </div>

                        </div>

                        <div class="tab7Summary">
                            <div class="row">

                                <div class="col-lg-12 mt10 d-flex justify-content-between ">
                                    <h5>Summary</h5>
                                </div>

                                <div class="col-lg-12 mt10 d-flex justify-content-between">
                                    <div class="box1 packagename">
                                        <?php echo $cleaning_inovice['cleaning_service_package_name'] ?>
                                    </div>
                                    <span class="package_value">$<?php echo $cleaning_inovice['cleaning_service_package_amount'] ?: 0 ?></span>
                                </div>

                                <div class="col-lg-12 mt10 d-flex justify-content-between">
                                    <div class="box1">
                                        Total Options
                                    </div>
                                    <span class="total_sum">$<?php echo $cleaning_inovice['cleaning_service_total_option_amount']?></span>
                                </div>
                                

                                <div class="col-lg-12 mt10 d-flex justify-content-between summaryTopLine">
                                    <div class="box1">
                                        <b> Due at Closing </b>
                                    </div>
                                    <span class="totalamount">$<?php echo $cleaning_inovice['cleaning_service_total_amount'] ?: 'N/A' ?></span>
                                </div>

                            </div>


                        </div>

                        <table>
                            <tr>
                                <td>
                                    <table style="width:100%;text-align: center;margin-top:15px">
                                        <tr>
                                            <td style="color:#000;font-family: 'gilroybold';">
                                                Please Send Payments To
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php
                                                $invoice_amount = $this->model_cleaner_invoice->find_all();
                                                // debug($invoice_amount,1);
                                                ?>
                                                <table style="width:100%;text-align: center;margin-top:15px">
                                                    <tr>
                                                        <td style="color:#000;font-size: 14px; font-family: 'gilroymedium';">
                                                            <?php echo $invoice_amount[0]['cleaner_invoice_value'] ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color:#000;font-size: 14px;font-family: 'gilroymedium';">
                                                            P0 Box <?php echo $invoice_amount[1]['cleaner_invoice_value'] ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color:#000;font-size: 14px;    font-family: 'gilroymedium';">
                                                        <?php echo $invoice_amount[2]['cleaner_invoice_value']?>
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
                    <div class="nxtBtn1 d-flex justify-content-end">
                        <!--<button type="button" data-toggle="modal" data-target="#orderModal" class="greenBtn" style="margin-right: 39px">Send Mail</button>-->
                    </div>
                    <div class="nxtBtn1 d-flex justify-content-between">
                        <div>
                            <a href="<?=g('base_url')?>account/orderhistory">
                                <button type="button" class="greenBtn dnono">Back</button>
                            </a>
                        </div>
                       <div>
                       <button type="button" data-toggle="modal" data-target="#orderModal" class="greenBtn dnono" style="margin-right: 10px">Email Invoice</button>
                        <a>
                            <button onclick="printDiv('printMe')" class="greenBtn dnono" id="invoice_btn">Print Invoice</button>
                        </a>
                       </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal-body">
                <div class="order-gen-head">
                <div></div>
                    <h5 class="mb1 " style="text-align: center;  font-family: 'gilroymedium';">Choose recipients that will receive an Invoice/Summary</h5>
                    <!-- <h4 class="mb2">Send documents</h4>
                    <h5 class="mb1">Select documents and recipients</h5>
                    <p>Choose which document to send to the recipients</p> -->
                </div>
                <form action="<?= g('base_url') ?>account/save_submit" method="Post" id="saveForm" class="footTop">

                <!-- <input hidden value="<?php echo $_GET['id']?>" name="sendmail[id]"> -->
                    <div class="order-gen-table">
                        <div class="row1 d-flex">
                            <!-- <div class="col1 bd-text">
                                <h6>Confirmation</h6>
                            </div> -->
                            <div class="col1 bd-text">
                                <h6>Invoice</h6>
                            </div>
                            <div class="col1 bd-text">
                                <h6>Recipient</h6>
                            </div>
                        </div>
                        <div class="row1 d-flex autoChk">
                            <!-- <div class="col1">
                                <input type="checkbox" name="" id="">
                            </div> -->
                            <div class="col1">
                                <input type="checkbox" name="" id="">
                            </div>
                            <div class="col1 bd-text">
                                <label style="text-align: left;" for="">Ordering Agent</label>
                            </div>
                            <div class="col1 em-col">
                                <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[realtoremail]" value="<?php echo $user_data['signup_email'] ?>" readonly>
                            </div>
                        </div>
                        <hr>
                        <!-- Buyer Email -->
                        <? if ($cleaning_inovice['cleaning_service_representing'] == 'Buyer') { ?>
                            <div class="row1 d-flex autoChk">
                                <!-- <div class="col1">
                                <input type="checkbox" name="" id="">
                            </div> -->
                                <div class="col1">
                                    <input type="checkbox" name="" id="">
                                </div>
                                <div class="col1 bd-text">
                                    <label style="text-align: left;" for="">Buyer</label>
                                </div>
                                <div class="col1 em-col">
                                    <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[buyeremail]" value="<?php echo $cleaning_inovice['cleaning_buyer_email'] ?>">
                                </div>
                            </div>
                            <div class="row1 d-flex autoChk">
                                <div class="col1">
                                    <input type="checkbox" name="" id="">
                                </div>
                                <div class="col1 bd-text">
                                    <label style="text-align: left;" for="">Cooperating Agent</label>
                                </div>
                                <div class="col1 em-col">
                                    <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[cooperating_agents_informations_buyer]" value="<?php echo $cleaning_inovice['cleaning_service_agent_buyer_email'] ?>">
                                </div>
                            </div>
                            <div class="row1 d-flex autoChk">
                                <div class="col1">
                                    <input type="checkbox" name="" id="">
                                </div>
                                <div class="col1 bd-text">
                                    <label style="text-align: left;" for="">Seller</label>
                                </div>
                                <div class="col1 em-col">
                                    <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[seller_information]" value="<?php echo $cleaning_inovice['cleaning_service_other_seller_email'] ?>">
                                </div>
                            </div>
                            <!-- Seller email -->
                        <? } elseif ($cleaning_inovice['cleaning_service_representing'] == 'Seller') { ?>
                            <div class="row1 d-flex autoChk">
                                <!-- <div class="col1">
                                <input type="checkbox" name="" id="">
                            </div> -->
                                <div class="col1">
                                    <input type="checkbox" name="" id="">
                                </div>
                                <div class="col1 bd-text">
                                    <label style="text-align: left;" for="">Seller</label>
                                </div>
                                <div class="col1 em-col">
                                    <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[selleremail]" value="<?php echo $cleaning_inovice['cleaning_seller_email'] ?>">
                                </div>
                            </div>
                            <div class="row1 d-flex autoChk">
                                <div class="col1">
                                    <input type="checkbox" name="" id="">
                                </div>
                                <div class="col1 bd-text">
                                    <label style="text-align: left;" for="">Cooperating Agent</label>
                                </div>
                                <div class="col1 em-col">
                                    <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[cooperating_agents_informations_seller]" value="<?php echo $cleaning_inovice['cleaning_service_agent_seller_email'] ?>">
                                </div>
                            </div>
                            <div class="row1 d-flex autoChk">
                                <div class="col1">
                                    <input type="checkbox" name="" id="">
                                </div>
                                <div class="col1 bd-text">
                                    <label style="text-align: left;" for="">Buyer</label>
                                </div>
                                <div class="col1 em-col">
                                    <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[buyer_information]" value="<?php echo $cleaning_inovice['cleaning_service_other_buyer_email'] ?>">
                                </div>
                            </div>
                            <!-- Both email -->
                        <? } else { ?>
                            <div class="row1 d-flex autoChk">
                                <div class="col1">
                                    <input type="checkbox" name="" id="">
                                </div>
                                <div class="col1 bd-text">
                                    <label style="text-align: left;" for="">Buyer</label>
                                </div>
                                <div class="col1 em-col">
                                    <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[buyer_email]" value="<?php echo $cleaning_inovice['cleaning_service_email'] ?>">
                                </div>
                            </div>
                            <div class="row1 d-flex autoChk">
                                <div class="col1">
                                    <input type="checkbox" name="" id="">
                                </div>
                                <div class="col1 bd-text">
                                    <label style="text-align: left;" for="">Seller</label>
                                </div>
                                <div class="col1 em-col">
                                    <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[seller_email]" value="<?php echo $cleaning_inovice['cleaning_service_email_seller'] ?>">
                                </div>
                            </div>

                        <?php
                        }
                        ?>
                        <div class="row1 d-flex autoChk">
                                <div class="col1">
                                    <input type="checkbox" name="" id="">
                                </div>
                                <div class="col1 bd-text">
                                    <label style="text-align: left;" for="">Title Company Email</label>
                                </div>
                                <div class="col1 em-col">
                                    <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[tittle_company_email]" value="<?php echo $cleaning_inovice['cleaning_service_closing_tittle_company_email'] ?>">
                                </div>
                            </div>
                        <hr>
                        <div class="row1 d-flex">
                            <!-- <div class="col1">
                                <input type="checkbox" name="" id="">
                            </div> -->
                            <div class="col1">
                                <input type="checkbox" name="" id="">
                            </div>
                            <div class="col1 bd-text">
                                <label style="text-align: left;" for="">Other</label>
                            </div>
                            <div class="col1 em-col">
                                <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[otheremail][]">
                               
                            </div>
                        </div>
                    </div>
                    <a class="add-rec">
                        <i class="fa fa-plus"></i>
                        Add and additional recipients
                    </a>
                    <div class="row modal-fot-btns">
                        <div class="col-sm-2 d-flex justify-content-end">
                            <a type="button" class="cancel-doc" data-dismiss="modal" aria-label="Close">Cancel</a>
                        </div>
                        <div class="col-sm-4 d-flex justify-content-end">
                            <button type="" class="send-doc" id="submitInfo">Send Documents</button>

                        </div>
                    </div>
                </form>
                <!--<form action="<?= g('base_url') ?>account/testsubmit" method="Post" id="cleanidforid" class="footTop">-->
                <input hidden value="<?php echo $_GET['id']?>" name="test[id]" id="testid">
                <button hidden type="button" class="send-doc" id="forid">Send Documents</button>
                <!--</form>-->
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#submitInfo').click(function(e){
            $("#forid").trigger("click");
        });
    $("#forid").click(function(e) {
      var cleanid = document.getElementById("testid").value;
      var params = {};
      params.clean = cleanid;
      var data = AjaxRequest.fire('<?= base_url(); ?>account/testsubmit', params);
      if (data.status == '3') {
           Loader.show();
        return true
      } else {
        return false;
      }

    })
    });
    </script>
    
<script>
    $('.autoChk input:checkbox').prop('checked', true);
    function printDiv(divName) {
        // var printContents = document.getElementById(divName).innerHTML;
        document.querySelector('footer').style.display = 'none'
        $('.heading.mt50').css('display', 'none');
        $('.dnono').css('display', 'none');
        $('.hadingbox .img').css({
            'display': 'block',
            'visibility': 'visible'
        });
        setTimeout(() => {
            var head = document.querySelector('head').innerHTML;
            var body = document.querySelector('body').innerHTML;
            console.log(body)
            var printContents = head + body
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            return location.reload();
            document.body.innerHTML = originalContents;
        }, 100)
    }
</script>
<script>
    
    $('.add-rec').on('click', () => {
        $(".order-gen-table").append(`
        <div class="new-rec-div">
        <hr>
        <button class="del-rec">
                    <i class="fa fa-minus fa-lg"></i>
                </button>
        <div class="row1 d-flex">
        <div class="col1">
                                <input type="checkbox" name="" id="">
                            </div>
                        <div class="col1 bd-text">
                            <label style="text-align: left;" for="">Other</label>
                        </div>
                        <div class="col1 em-col">
                            <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[otheremail][]">
                        </div>
                    </div>
                    </div>
        `)
    })
    $(document).on('click', '.del-rec', function(e) {
        // alert('hello')
        e.target.parentNode.parentNode.remove();
    });
    var obj;
    $("#submitInfo").click(function(e) {
       
        var trry = [];
        trry.push({
            otheremail: []
        })
        $('#saveForm .order-gen-table .row1.d-flex input[type="checkbox"]').each(function(i, element) {
            if (element.checked) {
                if ($(this.parentNode.parentNode).find('input[type="email"]').attr('name').split('[')[1].split(']')[0] != 'otheremail') {
                    trry[0][$(this.parentNode.parentNode).find('input[type="email"]').attr('name').split('[')[1].split(']')[0]] = $(this.parentNode.parentNode).find('input[type="email"]').val()
                } else {
                    trry[0]['otheremail'].push($(this.parentNode.parentNode).find('input[type="email"]').val())
                }
            }
        })
        console.log(trry)


        // return false;
        e.preventDefault();
         Loader.show();
        var fg = JSON.stringify(trry)
        console.log(fg)
        setTimeout(function() {
            // Prevent form submit
            var obj = $("#saveForm");
            // Get form data
            var data = JSON.stringify(trry);
            // Get post url
            var url = obj.attr('action');
            // Submit action
            var response = AjaxRequest.fire(url, data);
            if (response.status) {
                // $("#submitInfo").text("Countine");
                // $("#countine").show();
                window.location.href = '<?= base_url(); ?>account/orderhistory';
                // location.reload();
            }
            // Add return
            return false;
        }, 1000);
        return false;
    });
</script>