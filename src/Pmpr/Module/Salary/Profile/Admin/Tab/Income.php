<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             626987ce52ae7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\Tab; use Pmpr\Module\Salary\Profile\Admin\ListTable\IncomeListTable; use Pmpr\Module\Salary\Model\Income as Model; class Income extends ORMTab { public function __construct() { $this->id = "\151\x6e\143\x6f\155\x65\x73"; $this->title = __("\x49\x6e\x63\157\155\145\163", PR__MDL__SALARY); $this->priority = 10; parent::__construct(); } public function eiieguqemowyacgi() { $this->listTable = new IncomeListTable(Model::symcgieuakksimmu()); parent::eiieguqemowyacgi(); } }
