<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
</head>
<style>
 ul {
  list-style: none;
  padding: 10px;
  
}

ul li.check1:before {
  content: '✓';
}
ul li.cross1:before {
  content: 'x';
}

</style>
<body style="font:14px/20px 'Open Sans', sans-serif;">
    <table style="width: 100% !important;height: 100%;-webkit-font-smoothing: antialiased;-webkit-text-size-adjust: none;border-collapse:collapse;" cellpadding="0" cellspacing="0">
        <tr>
            <td class="container" style="display: block !important;clear: both !important;margin: 0 auto !important;max-width: 580px !important;">
                <table style="border-collapse:collapse;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td colspan="2" style="padding:10px;border:1px solid #eee;">
                            <a href="<?= g('base_url') ?>"><img src="<?php echo get_image($logo['logo_image_path'], $logo['logo_image']) ?>" alt="img" /></a>
                        </td>
                    </tr>

                    <tr>
                        <td style="width:50%;padding:10px;background-color: #eee;">
                            <p>
                                Order No # <?php echo $cleaning_id['cleaning_service_id'] ?>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="width:50%;padding:10px;background-color: #eee;">
                            <p>
                                Hi,<?php echo $user_data['signup_name'] ?>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="width:50%;padding:10px;background-color: #eee;">
                            <p>
                                I've arrive at <?php echo $arrival_time['arrival_time_datetime'] ?>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="width:50%;padding:10px;background-color: #eee;">
                            <p>
                                I've Left at <?php echo $left_time['left_time_datetime'] ?>
                            </p>
                        </td>
                    </tr>
                    <?php
                    if ($upload_document['upload_document_task'] == 1) { ?>
                        <tr>
                            <td style="background-color: #eee;">
                            <ul>
                                <li class="check1">
                                Property task Complete
                                </li>
                            </ul>
                                <!-- <p>
                                
                                </p> -->
                            </td>
                        </tr>
                    <? } else { ?>
                        <tr>
                            <td style="background-color: #eee;">
                            <ul>
                                <li class="cross1">
                                Property task InComplete
                                </li>
                            </ul>
                               
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <tr>
                        <td style="width:50%;padding:10px;background-color: #eee;">
                            <p>
                                Before:
                            </p>
                        </td>

                    </tr>
                    <tr>
                        <td style="width:50%;padding:10px;background-color: #eee;">
                        <?php if($upload_document['upload_document_before1_image'] != null){?>
                            <a href="<?php echo  get_image($upload_document['upload_document_before1_path'],$upload_document['upload_document_before1_image']) ?>" target="_blank">Image 1</a><br>
                            <? } else { ?>
                                <?php
                            }
                            ?>
                            <?php if($upload_document['upload_document_before2_image'] != null){?>
                                <a href="<?php echo  get_image($upload_document['upload_document_before2_path'],$upload_document['upload_document_before2_image'])?>" target="_blank">Image 2</a><br>
                            <? } else { ?>
                                <?php
                            }
                            ?>
                            <?php if($upload_document['upload_document_before3_image'] != null){?>
                                <a href="<?php echo  get_image($upload_document['upload_document_before3_path'],$upload_document['upload_document_before3_image'])?>" target="_blank">Image 3</a><br>
                            <? } else { ?>
                                <?php
                            }
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td style="width:50%;padding:10px;background-color: #eee;">
                            <p>
                                After:
                            </p>
                        </td>

                    </tr>
                    <tr>
                    <td style="width:50%;padding:10px;background-color: #eee;">
                        <?php if($upload_document['upload_document_after1_image'] != null){?>
                            <a href="<?php echo  get_image($upload_document['upload_document_after1_path'],$upload_document['upload_document_after1_image'])?>" target="_blank">Image 1</a><br>
                            <? } else { ?>
                                <?php
                            }
                            ?>
                              <?php if($upload_document['upload_document_after2_image'] != null){?>
                              <a href="<?php echo  get_image($upload_document['upload_document_after2_path'],$upload_document['upload_document_after2_image'])?>" target="_blank">Image 2</a><br>
                            <? } else { ?>
                               <?php
                            }
                            ?>
                            <?php if($upload_document['upload_document_after3_image'] != null){?>
                                <a href="<?php echo  get_image($upload_document['upload_document_after3_path'],$upload_document['upload_document_after3_image'])?>" target="_blank">Image 3</a><br>
                            <? } else { ?>
                                <?php
                            }
                            ?>
                        </td>
                
                    </tr>

                    <tr>
                        <td style="width:50%;padding:10px;background-color: #eee;">
                            <p>
                            View Document:
                            </p>
                        </td>

                    </tr>
                    <tr>
                    <td style="width:50%;padding:10px;background-color: #eee;">
                    <?php if($upload_document['upload_document_signed_image'] != null){?>
                         <a href="<?php echo  get_image($upload_document['upload_document_signed_path'],$upload_document['upload_document_signed_image'])?>" target="_blank">Signed Completion</a>
                            <? } else { ?>
                                <?php
                            }
                            ?>
                    </td>
                    </tr>

                    <tr>
                        <td style="width:50%;padding:10px;background-color: #eee;">
                            <p>
                                <b>Thank You,</b>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div style="height:112px;background:url('<?= g('images_root') ?>footer-strip.jpg') repeat-x;"></div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>