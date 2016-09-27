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
                                    <h2><?php printf( __( 'Hello, %s:', 'event_espresso' ), '[RECIPIENT_FNAME]' ); ?></h2>
                                    <p class="lead"><?php _e( "Your [COMPANY] ticket(s) are ready for you to print / download to your smartphone.", 'event_espresso' ); ?></p>
                                    <p class="lead"><a href="[TXN_TICKETS_URL]" target="_blank" style="font-size: 16px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; background-color: #EB7035; border-top: 12px solid #EB7035; border-bottom: 12px solid #EB7035; border-right: 18px solid #EB7035; border-left: 18px solid #EB7035; display: inline-block;">Print your ticket(s)</a></p>
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
                                        <a href="[CO_TWITTER_URL]" target="_blank"><img src="<?php echo plugin_dir_url(__FILE__); ?>images/ico-twitter.png" border="0" style="vertical-align:top;" width="34" height="34" alt="Twitter"></a>
                                    </td>
                                    <td class="width-5" width="10"></td>
                                    <td>
                                        <a href="[CO_FACEBOOK_URL]" target="_blank"><img src="<?php echo plugin_dir_url(__FILE__); ?>images/ico-facebook.png" border="0" style="vertical-align:top;" width="34" height="34" alt="Facebook"></a>
                                    </td>
                                    <td class="width-5" width="10"></td>
                                    <td>
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>feed/" target="_blank"><img src="<?php echo plugin_dir_url(__FILE__); ?>images/ico-rss.png" border="0" style="vertical-align:top;" width="34" height="34" alt="RSS"></a>
                                    </td>
                                    <td class="width-5" width="10"></td>
                                    <td>
                                        <a href="[CO_GOOGLE_URL]" target="_blank"><img src="<?php echo plugin_dir_url(__FILE__); ?>images/ico-google-plus.png" border="0" style="vertical-align:top;" width="34" height="34" alt="Google+"></a>
                                    </td>
                                    <td class="width-5" width="10"></td>
                                    <td>
                                        <a href="https://www.youtube.com/" target="_blank"><img src="<?php echo plugin_dir_url(__FILE__); ?>images/ico-youtube.png" border="0" style="vertical-align:top;" width="34" height="34" alt="YouTube"></a>
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
                                    <td height="15" class="aligncenter" style="font:normal 9px/11px Arial, Helvetica, sans-serif; color:#fff;text-align:center">Copyright <?php echo date("Y"); ?> [COMPANY]. All Rights Reserved.</td>
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