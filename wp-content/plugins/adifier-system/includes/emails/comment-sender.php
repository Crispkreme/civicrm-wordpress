<table style="background-color:#f2f2f2" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
    <tbody>
        <tr>
           <td style="padding:40px 20px" align="center" valign="top">
               <table style="width:600px" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td style="padding-bottom:30px" align="center" valign="top">
                                <table style="background-color:#ffffff;border-collapse:separate!important;border-radius:4px" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                        <tr>
                                           <td style="padding-top:40px;padding-right:40px;padding-bottom:0;padding-left:40px" align="center" valign="top">
                                               <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td style="padding-bottom:40px;color:#606060;font-family:Helvetica,Arial,sans-serif;font-size:15px;line-height:150%;text-align:center" align="center" valign="middle">
                                                                <h1 style="color:#202020!important;font-family:Helvetica,Arial,sans-serif;font-size:26px;font-weight:bold;letter-spacing:-1px;line-height:115%;margin:0;padding:0;text-align:center"><?php esc_html_e( 'Comment Reply', 'adifier'); ?></h1>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:center;" align="center" valign="top">
                                                                <?php include( get_theme_file_path( 'includes/emails/email-logo.php' ) ); ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color:#606060;font-family:Helvetica,Arial,sans-serif;font-size:15px;line-height:150%;padding-top:40px;padding-right:40px;padding-bottom:20px;padding-left:40px;text-align:center" align="center" valign="top">
                                               <?php echo sprintf( esc_html__( '%s has replied on your comment on ad %s', 'adifier' ), '<strong>'.$author_name.'</strong>', '<a href="'.esc_url( $advert_url ).'" style="color:'.adifier_get_option( 'main_color' ).';text-decoration:none"><strong>'.$advert_title.'</strong></a>' ); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color:#606060;font-family:Helvetica,Arial,sans-serif;font-size:13px;font-style:italic;line-height:150%;padding-top:0px;padding-right:40px;padding-bottom:20px;padding-left:40px;text-align:center" align="center" valign="top">
                                               <?php echo $comment_content; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-right:40px;padding-bottom:40px;padding-left:40px" align="center" valign="middle">
                                                <table style="background-color:<?php echo adifier_get_option( 'main_color' ) ?>;border-collapse:separate!important;border-radius:3px" border="0" cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td style="color:#ffffff;font-family:Helvetica,Arial,sans-serif;font-size:15px;font-weight:bold;line-height:100%" align="center" valign="middle">
                                                                <a href="<?php echo esc_url( $comment_url ) ?>" style="color:<?php echo adifier_get_option( 'main_color_font' ); ?>;text-decoration:none;padding-top:15px;padding-right:20px;padding-bottom:15px;padding-left:20px;display:block;" target="_blank"><?php esc_html_e( 'Visit Ad', 'adifier' ) ?></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>