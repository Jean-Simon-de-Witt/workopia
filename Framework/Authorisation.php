<?php
    namespace Framework;
    use Framework\Session;

    class Authorisation {
        /**
         * Check if currently logged in user owns a resource
         * @param int $resourceID
         * @return bool
         */
        public static function isOwner($resourceID) {
            $sessionUser = Session::get('user');

            if ($sessionUser !== null && isset($sessionUser['id'])) {
                $sessionUserID = (int) $sessionUser['id'];
                return $sessionUserID === $resourceID;
            }
            return false;
        }
    }
?>