<?php


class GlobalController
{

	/**
	 * Go to the homepage
	 * @return view
	 */
	public function landing()
	{
		return Helper::view('home/index', ['title' => 'Tibma']);
	}
	
	public function stats()
	{
		// Defining services
		// $violationRecapService = ViolationRecapService::getInstance();
		// $recaps = $violationRecapService->getRecap();

		$data = [
			// 'recaps' => $recaps
		];

		return Helper::view('global/stats', $data);
	}

	/**
	 * [about description]
	 * @return [type] [description]
	 */
	public function about()
	{
		return Helper::view('global/about');
	}

	public function test($id, $id2)
	{
		echo $id;
		echo $id2;
		return Helper::view('global/about');
	}

	/**
	 * [contact description]
	 * @return [type] [description]
	 */
	public function contact()
	{
		return Helper::view('contact');
	}
}
//test
