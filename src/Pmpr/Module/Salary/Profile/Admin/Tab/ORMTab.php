<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6797767398cf9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\Tab; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Profile\Admin\ListTable\ORMListTable; abstract class ORMTab extends Tab { protected ?ORMListTable $listTable = null; public function waeasakssissiuqg() : ?ORMListTable { return $this->listTable; } public function eiieguqemowyacgi() { if ($this->waeasakssissiuqg()) { $this->waeasakssissiuqg()->prepare_items(); } parent::eiieguqemowyacgi(); } public function gayqqwwuycceosii() : array { $qookweymeqawmcwo = []; $qsyooiqcmkcieyuk = $this->waeasakssissiuqg(); if ($qsyooiqcmkcieyuk) { $meywaqqsugaoeyys = $qsyooiqcmkcieyuk->mgogaykgkoogasim(); $qookweymeqawmcwo = ["\x6c\151\163\164\x5f\164\141\x62\x6c\145" => $qsyooiqcmkcieyuk, Constants::NAME => $meywaqqsugaoeyys->miwqiiqeegeqcwis(), Constants::qescuiwgsyuikume => $meywaqqsugaoeyys->oyeskqayoscwciem()->uikgwcuascgeissw(Constants::mmieaueggwwaokig), Constants::qwumqqyuasyskkkc => $meywaqqsugaoeyys->oyeskqayoscwciem()->uikgwcuascgeissw("\163\145\141\162\143\150\x5f\151\x74\145\155\x73"), Constants::kyyscqqmsikeuaea => $qsyooiqcmkcieyuk->umaeoegyykkkqmia(), Constants::myikkigscysoykgy => $meywaqqsugaoeyys->easkmgsoqaqeyayo()]; } return $qookweymeqawmcwo; } }
