<?php
    namespace App\Controllers;
    class ErrorController {
        protected $db;

        /**
         * 403 unauthorised error
         * @return void
         */
        public static function unauthorised($message = 'You are not authorised to view this resource') {
            http_response_code(403);
            loadView('error', ['status' => '403', 'message' => $message]);
        }

        /**
         * 404 not found error
         * @return void
         */
        public static function notFound($message = 'Resource not found') {
            http_response_code(404);
            loadView('error', ['status' => '404', 'message' => $message]);
        }
    }
?>