<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

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
                                Hi, Admin
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="width:50%;padding:10px;background-color: #eee;">
                            <p>
                                I am  <?php echo $signup_team_member['signup_name'] ?> <?php echo $signup_team_member['signup_lastname'] ?> 
                                i add a new team member in my company.
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="width:50%;padding:10px;background-color: #eee;">
                            <p>
                                Team Member Name : <?php echo $team_member['team_name_memeber'] ?>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="width:50%;padding:10px;background-color: #eee;">
                            <p>
                                Team Member Contact : <?php echo $team_member['team_name_contact'] ?>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="width:50%;padding:10px;background-color: #eee;">
                            <p>
                                Team Member Email : <?php echo $team_member['team_name_email'] ?>
                            </p>
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