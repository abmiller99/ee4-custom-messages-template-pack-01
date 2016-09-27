<table class="head-wrap" bgcolor="#f4f4f4">
    <tbody>
        <tr>
            <td></td>
            <td class="header container" bgcolor="#FFFFFF">
                <div class="content">
                    <table>
                        <tbody>
                            <tr>
                                <td>[CO_LOGO]</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </td>
            <td></td>
        </tr>
    </tbody>
</table>
<table class="body-wrap" bgcolor="#f4f4f4">
    <tbody>
        <tr>
            <td></td>
            <td class="container" bgcolor="#FFFFFF">
                <div class="content">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <h1><?php printf( __( 'Hello, %s:', 'event_espresso' ), '[PRIMARY_REGISTRANT_FNAME]' ); ?></h1>
                                    <?php _e( 'Your registration(s) is/are pending payment for the following events:', 'event_espresso' ); ?>
                                    <div>
                                        [EVENT_LIST]
                                    </div>
                                    <p class="callout"><?php printf( __( 'You can %smake a payment here »%s', 'event_espresso' ), '<a href="[PAYMENT_URL]">', '</a>' ); ?>.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </td>
            <td></td>
        </tr>
    </tbody>
</table>
<table class="footer-wrap" bgcolor="#f4f4f4">
    <tbody>
        <tr>
            <td>
                <table class="flexible" width="600" align="center" style="margin:0 auto !important;" cellpadding="0" cellspacing="0" bgcolor="#555555">
                    <tr>
                        <td style="padding: 20px 0 0;">
                            <table class="flexible" width="600" align="center" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                <tr>
                                    <td class="aligncenter" style="font:bold 16px/24px Arial, Helvetica, sans-serif; color:#fff;text-align:center">Connect / Get Social:</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:10px 0 30px;">
                            <table align="center" style="margin:0 auto !important;" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <a href="[CO_TWITTER_URL]" target="_blank"><img src="./images/ico-twitter.png" border="0" style="vertical-align:top;" width="34" height="34" alt="Twitter"></a>
                                    </td>
                                    <td class="width-5" width="10"></td>
                                    <td>
                                        <a href="[CO_FACEBOOK_URL]" target="_blank"><img src="./images/ico-facebook.png" border="0" style="vertical-align:top;" width="34" height="34" alt="Facebook"></a>
                                    </td>
                                    <td class="width-5" width="10"></td>
                                    <td>
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>feed/" target="_blank"><img src="./images/ico-rss.png" border="0" style="vertical-align:top;" width="34" height="34" alt="RSS"></a>
                                    </td>
                                    <td class="width-5" width="10"></td>
                                    <td>
                                        <a href="[CO_GOOGLE_URL]" target="_blank"><img src="./images/ico-google-plus.png" border="0" style="vertical-align:top;" width="34" height="34" alt="Google+"></a>
                                    </td>
                                    <td class="width-5" width="10"></td>
                                    <td>
                                        <a href="https://www.youtube.com/" target="_blank"><img src="./images/ico-youtube.png" border="0" style="vertical-align:top;" width="34" height="34" alt="YouTube"></a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-top:1px solid #9acced; padding: 13px 0;">
                            <table class="flexible" width="600" align="center" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                <tr>
                                    <td height="15" class="aligncenter" align="right" style="font:bold 9px/11px Arial, Helvetica, sans-serif; color:#fff;text-align:center">This email was sent to <a style="text-decoration:none; color:#fff;" href="mailto:[RECIPIENT_EMAIL]">[RECIPIENT_EMAIL]
                                </a></td>
                                </tr>
                            </table>
                            <table class="flexible" width="600" align="center" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                <tr>
                                    <td height="15" class="aligncenter" style="font:normal 9px/11px Arial, Helvetica, sans-serif; color:#fff;text-align:center">Copyright
                                        <?php echo date("Y"); ?> [COMPANY]. All Rights Reserved.</td>
                                </tr>
                                <tr>
                                    <td height="15"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>
