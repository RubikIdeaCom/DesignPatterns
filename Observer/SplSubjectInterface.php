<?php

/**
 * The <b>SplSubject</b> interface is used alongside
 * <b>SplObserver</b> to implement the Observer Design Pattern.
 * @link https://php.net/manual/en/class.splsubject.php
 */
interface SplSubject  {

        /**
         * Attach an SplObserver
         * @link https://php.net/manual/en/splsubject.attach.php
         * @param SplObserver $observer <p>
    * The <b>SplObserver</b> to attach.
         * </p>
         * @return void 
         * @since 5.1.0
         */
        public function attach (SplObserver $observer);

        /**
         * Detach an observer
         * @link https://php.net/manual/en/splsubject.detach.php
         * @param SplObserver $observer <p>
    * The <b>SplObserver</b> to detach.
         * </p>
         * @return void 
         * @since 5.1.0
         */
        public function detach (SplObserver $observer);

        /**
         * Notify an observer
         * @link https://php.net/manual/en/splsubject.notify.php
         * @return void 
         * @since 5.1.0
         */
        public function notify ();

}