<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63275ca640d6a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Request; abstract class AbstractSalary extends Container { protected ?string $title = null; public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x73\x61\154\141\x72\171\137\143\141\154\154\x62\141\x63\153\163"), [$this, "\165\161\x79\157\145\x63\x67\157\x77\x6d\x61\147\x79\x71\157\x6f"]); } public final function uqyoecgowmagyqoo($gsoeomygymgeosya) : array { if (is_array($gsoeomygymgeosya)) { goto cakuguiciaiaeukg; } $gsoeomygymgeosya = []; cakuguiciaiaeukg: $gsoeomygymgeosya[self::uqggkiomyiceyooa()] = $this->qcgakseyaikigqco(); return $gsoeomygymgeosya; } public final function yceacaoomkmkesym($xssuewsokckmigqk) : ?string { $oeucsuyqysaciasy = null; if (!($mssuumukiiaqmcka = Agreement::symcgieuakksimmu())) { goto wswikooyuaaouqgk; } $oeucsuyqysaciasy = $mssuumukiiaqmcka->qogaqkcsogcqiaic($xssuewsokckmigqk, $mssuumukiiaqmcka::iimaoeeqksicsawa); wswikooyuaaouqgk: return $oeucsuyqysaciasy; } public final function rkwqmomqeowwyaam($xssuewsokckmigqk, $mkucggyaiaukqoce) : ?object { $aqmwamyiwgeeymqa = null; if (!($mkucggyaiaukqoce && ManipulateUser::myagqecycsaiyqsk($mkucggyaiaukqoce) && ($ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce)))) { goto ckwmkquuyyugigom; } $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); if (!($mssuumukiiaqmcka && $kueeocmceokoouqa)) { goto awwaiioyywmokwsm; } $aqmwamyiwgeeymqa = $kueeocmceokoouqa->oqomcmyuuakigusk([$kueeocmceokoouqa::meksegaoamowuwoq => $ycoeoaakqyskgykq, $kueeocmceokoouqa::woagckamiequeoyu => $mssuumukiiaqmcka->keeuqgyooycqoygw($xssuewsokckmigqk)]); awwaiioyywmokwsm: ckwmkquuyyugigom: return $aqmwamyiwgeeymqa; } public abstract function ksikyqoayeggqssg($xssuewsokckmigqk, $cawesmkieccckaae, $product) : array; }
