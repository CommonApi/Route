<?php
/**
 * Route Interface
 *
 * @package    Route
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Route;

/**
 * Route Interface
 *
 * @package    Route
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      0.1
 */
interface RouteInterface
{
    /**
     * Determine if secure protocol required and in use
     *
     * @return  object
     * @since   0.1
     */
    public function verifySecureProtocol();

    /**
     * Determine if request is for home page
     *
     * @return  object
     * @since   0.1
     */
    public function verifyHome();

    /**
     * Set Action from HTTP Method
     *
     * @return  object
     * @since   0.1
     */
    public function setRequest();

    /**
     * Set Route
     *
     * @return  object
     * @since   0.1
     */
    public function setRoute();
}
