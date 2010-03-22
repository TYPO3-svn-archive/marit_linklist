<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2010 Marit AG, Lina Wolf <extensions@marit.ag>, Marit AG
*  			
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Controller for the link object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

// TODO: As your extension matures, you should use Tx_Extbase_MVC_Controller_ActionController as base class, instead of the ScaffoldingController used below.
class Tx_MaritLinklist_Controller_linkController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * @var Tx_BlogExample_Domain_Model_BlogRepository
	 */
	protected $linkRepository;
	
	public function initializeAction() {
		$this->linkRepository = t3lib_div::makeInstance('Tx_MaritLinklist_Domain_Repository_LinkRepository');
	}
	
	public function indexAction() {
		$this->view->assign('links', $this->linkRepository->findAll());
	//	t3lib_div::debug($this->view);
	}
	
	/**
	 * list action
	 *
	 * @return string The rendered list action
	 */
	public function listAction() {
		$this->view->assign('link', $this->linkRepository->findAll());
	}
	
	/**
	 * edit action
	 *
	 * @return string The rendered edit action
	 */
	public function editAction() {
	}
	
	/**
	 * create action
	 *
	 * @return string The rendered create action
	 */
	public function newAction() {
	}
	
	public function createAction(Tx_MaritLinklist_Domain_Model_Link $link) {
		t3lib_div::debug('3');
		$this->blogRepository->add($link);
		$this->flashMessages->add('Your new link was created.');
		$this->redirect('index');
	}
	
		/**
	 * Creates a several new blogs
	 *
	 * @return void
	 */
	public function populateAction() {
		$link = t3lib_div::makeInstance('Tx_MaritLinklist_Domain_Model_Link', 'Stephen', 'Smith', 'foo.bar@example.com', 'foo');
		$this->linkRepository->add($link);
		$this->redirect('index');
	}
	
}
?>
