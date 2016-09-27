<div class="content">
    <table>
        <tbody>
            <tr>
                <td>
                    <p class="callout"><strong><?php _e( 'Event:', 'event_espresso' ); ?> [EVENT_LINK]
                            <?php _e( 'Venue:', 'event_espresso' ); ?>
                            <a href="[VENUE_URL]" target="_blank">[VENUE_TITLE]</a> ([VENUE_CITY], [VENUE_STATE])</strong>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="column-wrap">
    <div class="column-large">
        <table align="left">
            <tbody>
                <tr>
                    <td>
                        <h3><?php _e( 'Registration:', 'event_espresso' ); ?></h3>
                        <h4>[RECIPIENT_FNAME] [RECIPIENT_LNAME]</h4>
                        <ul>
                            <li>
                                <strong><?php _e( 'Registration Code:', 'event_espresso' ); ?></strong> [RECIPIENT_REGISTRATION_CODE]
                            </li>
                            <li><strong><?php _e( 'Tickets:', 'event_espresso' ); ?></strong></li>
                            <li>
                                <ul>[RECIPIENT_TICKET_LIST]</ul>
                            </li>
                        </ul>
                        <hr/>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="column-large">
        <table align="left">
            <tbody>
                <tr>
                    <td>
                        <ul class="sidebar">
                            <li><h5><?php _e( 'Venue Details', 'event_espresso' ); ?> :</h5></li>
                            <li>[VENUE_TITLE]</li>
                            <!--<li>[VENUE_IMAGE]</li>-->
                            <li>[VENUE_ADDRESS], [VENUE_CITY]</li>
                            <li>[GOOGLE_MAP_IMAGE]</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="clear"></div>
</div>