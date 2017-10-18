<?php
namespace App\Http\Controllers\Home;

use Packages\AmazonProAdvAPI\src\BrowseNodeLookup;


use App\Http\Controllers\Controller;
Use Illuminate\Http\Request;


class IndexController extends Controller{
    protected $browseNodeLookup;
    function __construct()
    {
        $this->browseNodeLookup = new BrowseNodeLookup;

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
        $responseGroup = ['R1','R2','R3'];
        $params['SearchIndex'] = 'hello';
        $params['ResponseGroup'] = $responseGroup;
        $params['BrowseNode'] = '1757252';
        $this->browseNodeLookup->browseNodeLookup($params);
    }
    private function loadAccessoriesSubSec(){
        //load accessories - Top Seller
    }
}
