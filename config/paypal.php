<?php
return array(
    // set your paypal credential
    'client_id' => 'AUQiXrt0B-uR11r9YizZXSbW8mMzi8JCceKfAy0lRjXWXWIlZIn3Am2pdJir8IxF07ZS_8v9YjW_oBKL',
    'secret' => 'EN2EwCoxgB-ncZlG_QDChW15Y7J0YZNCRNvuf4LgVqXh9AmFYGAVmHs7jAT2gOP12WeEyUZ7OvFdz-Uk',

    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'live',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 500,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);
