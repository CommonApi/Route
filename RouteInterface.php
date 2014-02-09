<?php
/**
 * Route Interface
 *
 * @package    Route
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Route;

/**
 * Route Interface
 *
 * @package    Route
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface RouteInterface
{
    /**
     * Determine if secure protocol required and in use
     *
     * @return  object
     * @since   1.0
     */
    public function verifySecureProtocol();

    /**
     * Determine if request is for home page
     *
     * @return  object
     * @since   1.0
     */
    public function verifyHome();

    /**
     * Set Action from HTTP Method
     *
     * @return  object
     * @since   1.0
     */
    public function setRequest();

    /**
     * Set Route
     *
     * @return  object
     * @since   1.0
     */
    public function setRoute();
}
