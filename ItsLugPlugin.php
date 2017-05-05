<?php
namespace Craft;
/**
 * Created by PhpStorm.
 * User: dinhhung
 * Date: 5/5/17
 * Time: 11:59 AM
 */
class ItsLugPlugin extends BasePlugin
{
	public function getName()
	{
		return Craft::t('ItsLug');
	}
	public function getDescription()
	{
		return 'Thay thế hàm convert slug mặc định của  ';
	}

	public function getVersion()
	{
		return '1.0.0';
	}

	public function getDeveloper()
	{
		return 'IT Solution (Hung Dinh)';
	}

	public function getDeveloperUrl()
	{
		return 'https://gl.it-s.vn/area51/itslug';
	}
	public function init()
	{
		craft()->templates->includeJsResource('itslug/js/itslug.js');

	}

}