<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             630b4b8596610             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Request; abstract class AbstractSalary extends Container { protected ?string $title = null; public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\163\141\x6c\141\x72\x79\137\143\141\154\x6c\x62\141\x63\153\163"), [$this, "\x75\x71\171\x6f\x65\143\x67\157\167\x6d\141\147\171\x71\x6f\157"]); } public final function uqyoecgowmagyqoo($gsoeomygymgeosya) : array { if (is_array($gsoeomygymgeosya)) { goto cakuguiciaiaeukg; } $gsoeomygymgeosya = []; cakuguiciaiaeukg: $gsoeomygymgeosya[self::uqggkiomyiceyooa()] = $this->qcgakseyaikigqco(); return $gsoeomygymgeosya; } public final function yceacaoomkmkesym($xssuewsokckmigqk) : ?string { $oeucsuyqysaciasy = null; if (!($mssuumukiiaqmcka = Agreement::symcgieuakksimmu())) { goto wswikooyuaaouqgk; } $oeucsuyqysaciasy = $mssuumukiiaqmcka->qogaqkcsogcqiaic($xssuewsokckmigqk, $mssuumukiiaqmcka::iimaoeeqksicsawa); wswikooyuaaouqgk: return $oeucsuyqysaciasy; } public final function rkwqmomqeowwyaam($xssuewsokckmigqk, $mkucggyaiaukqoce) : ?object { $aqmwamyiwgeeymqa = null; if (!($mkucggyaiaukqoce && ManipulateUser::myagqecycsaiyqsk($mkucggyaiaukqoce) && ($ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce)))) { goto ckwmkquuyyugigom; } $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); if (!($mssuumukiiaqmcka && $kueeocmceokoouqa)) { goto awwaiioyywmokwsm; } $aqmwamyiwgeeymqa = $kueeocmceokoouqa->oqomcmyuuakigusk([$kueeocmceokoouqa::meksegaoamowuwoq => $ycoeoaakqyskgykq, $kueeocmceokoouqa::woagckamiequeoyu => $mssuumukiiaqmcka->keeuqgyooycqoygw($xssuewsokckmigqk)]); awwaiioyywmokwsm: ckwmkquuyyugigom: return $aqmwamyiwgeeymqa; } public abstract function ksikyqoayeggqssg($xssuewsokckmigqk, $cawesmkieccckaae, $product) : array; }
