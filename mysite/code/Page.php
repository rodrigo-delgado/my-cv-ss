<?php

class Page extends SiteTree
{
    private static $db = array(
    );

    private static $has_one = array(
    );
}
class Page_Controller extends ContentController {
	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();
    Requirements::css("{$this->ThemeDir()}/css/font-awesome.min.css");
    Requirements::css("{$this->ThemeDir()}/css/jquery.fancybox.css");
    Requirements::css("{$this->ThemeDir()}/css/bootstrap.min.css");
    Requirements::css("{$this->ThemeDir()}/css/owl.carousel.css");
    Requirements::css("{$this->ThemeDir()}/css/slit-slider.css");
    Requirements::css("{$this->ThemeDir()}/css/animate.css");
    Requirements::css("{$this->ThemeDir()}/css/main.css");
    Requirements::javascript("{$this->ThemeDir()}/js/modernizr-2.6.2.min.js");
    Requirements::javascript("https://js.cit.api.here.com/v3/3.0/mapsjs-core.js");
    Requirements::javascript("https://js.cit.api.here.com/v3/3.0/mapsjs-service.js");
    Requirements::javascript("https://js.cit.api.here.com/v3/3.0/mapsjs-ui.js");
    Requirements::javascript("https://js.cit.api.here.com/v3/3.0/mapsjs-mapevents.js");
    Requirements::javascript("{$this->ThemeDir()}/js/jquery-1.11.1.min.js");
    Requirements::javascript("{$this->ThemeDir()}/js/bootstrap.min.js");
    Requirements::javascript("{$this->ThemeDir()}/js/jquery.singlePageNav.min.js");
    Requirements::javascript("{$this->ThemeDir()}/js/jquery.fancybox.pack.js");
    Requirements::javascript("https://maps.googleapis.com/maps/api/js?key=AIzaSyBs_m8c6fY3k7fNJZmIMztbSMZtCOGhvXk&callback=initMap");
    Requirements::javascript("{$this->ThemeDir()}/js/owl.carousel.min.js");
    Requirements::javascript("{$this->ThemeDir()}/js/jquery.easing.min.js");
    Requirements::javascript("{$this->ThemeDir()}/js/jquery.slitslider.js");
    Requirements::javascript("{$this->ThemeDir()}/js/jquery.ba-cond.min.js");
    Requirements::javascript("{$this->ThemeDir()}/js/jquery.slitslider.js");
    Requirements::javascript("{$this->ThemeDir()}/js/wow.min.js");
    Requirements::javascript("{$this->ThemeDir()}/js/main.js");
  }
}
