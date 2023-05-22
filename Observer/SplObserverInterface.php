<?php

/**
 * The <b>SplObserver</b> interface is used alongside
 * <b>SplSubject</b> to implement the Observer Design Pattern.
 * @link https://php.net/manual/en/class.splobserver.php
 */
interface SplObserver  {

        /**
         * Receive update from subject
         * @link https://php.net/manual/en/splobserver.update.php
         * @param SplSubject $subject <p>
    * The <b>SplSubject</b> notifying the observer of an update.
         * </p>
         * @return void 
         * @since 5.1.0
         */
        public function update (SplSubject $subject);

}
