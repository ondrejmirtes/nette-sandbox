<?php

namespace App\Presenters;

use Nette,
	App\Model;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
	}

	public function createComponentForm()
	{
		$form = new \Nette\Application\UI\Form();
		$form->addRadioList('test', 'Test', ['One', 'Two'])
			->setRequired('Select test')
			->setDefaultValue(1);
		$form->addSubmit('submit');

		return $form;
	}

}
