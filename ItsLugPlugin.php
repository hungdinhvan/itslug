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
		return 'Thay thế hàm convert slug mặc định của  Craft';
	}

	public function getVersion()
	{
		return '1.0.1';
	}
  public function getSchemaVersion()
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
  public function getReleaseFeedUrl()
  {
    return 'https://raw.githubusercontent.com/tetaba/itslug/master/releases.json';
  }

	public function init()
	{
    if ( craft()->request->isCpRequest() && craft()->userSession->isLoggedIn() )
    {
      craft()->templates->includeJsResource('itslug/js/itslug.js');
    }

	}

}