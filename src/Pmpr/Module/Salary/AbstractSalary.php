<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638a6c75b5887             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Request; abstract class AbstractSalary extends Container { protected ?string $title = null; public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x73\x61\x6c\x61\162\171\x5f\143\141\x6c\x6c\x62\141\143\x6b\163"), [$this, "\x75\x71\x79\x6f\145\143\147\x6f\x77\x6d\141\x67\x79\161\x6f\157"]); } public final function uqyoecgowmagyqoo($gsoeomygymgeosya) : array { if (is_array($gsoeomygymgeosya)) { goto iuuuususuuuaieem; } $gsoeomygymgeosya = []; iuuuususuuuaieem: $gsoeomygymgeosya[self::uqggkiomyiceyooa()] = $this->qcgakseyaikigqco(); return $gsoeomygymgeosya; } public final function yceacaoomkmkesym($xssuewsokckmigqk) : ?string { $oeucsuyqysaciasy = null; if (!($mssuumukiiaqmcka = Agreement::symcgieuakksimmu())) { goto kocqqoyymosmuksu; } $oeucsuyqysaciasy = $mssuumukiiaqmcka->qogaqkcsogcqiaic($xssuewsokckmigqk, $mssuumukiiaqmcka::iimaoeeqksicsawa); kocqqoyymosmuksu: return $oeucsuyqysaciasy; } public final function rkwqmomqeowwyaam($xssuewsokckmigqk, $mkucggyaiaukqoce) : ?object { $aqmwamyiwgeeymqa = null; if (!($mkucggyaiaukqoce && ManipulateUser::myagqecycsaiyqsk($mkucggyaiaukqoce) && ($ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce)))) { goto qukocuwgakemmyga; } $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); if (!($mssuumukiiaqmcka && $kueeocmceokoouqa)) { goto uqokiksoqcwwqgio; } $aqmwamyiwgeeymqa = $kueeocmceokoouqa->oqomcmyuuakigusk([$kueeocmceokoouqa::meksegaoamowuwoq => $ycoeoaakqyskgykq, $kueeocmceokoouqa::woagckamiequeoyu => $mssuumukiiaqmcka->keeuqgyooycqoygw($xssuewsokckmigqk)]); uqokiksoqcwwqgio: qukocuwgakemmyga: return $aqmwamyiwgeeymqa; } public abstract function ksikyqoayeggqssg($xssuewsokckmigqk, $cawesmkieccckaae, $product) : array; }
