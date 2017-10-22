<?php
namespace App\Http\Controllers\Home;

use Packages\AmazonProAdvAPI\src\BrowseNodeLookup;
use Packages\AmazonProAdvAPI\src\ItemSearch;

use App\Http\Controllers\Controller;
Use Illuminate\Http\Request;


class IndexController extends Controller{
    protected $browseNodeLookup;
    protected $itemSearch;

    function __construct()
    {
        $this->browseNodeLookup = new BrowseNodeLookup;
        $this->itemSearch = new ItemSearch();


    }

    public function index(){
//        $this->browseNodeLookup = new BrowseNodeLookup();
//		return view('homes.index');
		//get slider
        //get categories
        //get sidebar
        //load Section 1
        $this->loadElectronicsContainer();
	}
	private function loadElectronicsContainer(){
	    //load mobiles Section
        $this->loadMobilesSec();
        //load Cameras Section - Top Wished

    }
    private function loadMobilesSec(){
	    //load devices - Top Seller
        $this->loadDevicesSubSec();
        //load accessories - Top Seller
        $this->loadAccessoriesSubSec();

    }
    private function loadDevicesSubSec(){
        //load devices - Top Seller
        $params = Array();
        $responseGroup = ['Accessories','Offers'];
//        $params['BrowseNodeId'] = '2619526011';
        $params['BrowseNode'] = '2619526011';
        $params['SearchIndex'] = 'All';

        $params['ResponseGroup'] = $responseGroup;
//        $this->browseNodeLookup->browseNodeLookup($params);
        $this->itemSearch->itemSearch($params);

    }
    private function loadAccessoriesSubSec(){
        //load accessories - Top Seller
    }
}
