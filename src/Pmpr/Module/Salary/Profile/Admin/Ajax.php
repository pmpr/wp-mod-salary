<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63275ca640d6a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Salary\Model\Payment; use Pmpr\Module\Salary\Model\Withdraw; use Pmpr\Module\Salary\Profile\Common; class Ajax extends Common { const kqewokmaycweqkco = "\x73\141\x6c\x61\162\171\137\141\x64\x64\137\156\x65\167\x5f\x77\x69\x74\x68\x64\x72\x61\x77\x5f\141\x63\x74\151\x6f\x6e"; const kusssokwyuiygyqq = "\x73\x61\154\x61\162\x79\137\141\144\144\x5f\x6e\x65\x77\x5f\160\141\x79\155\x65\x6e\164\137\141\143\164\151\x6f\x6e"; const myikkigscysoykgy = ["\141\144\x64\137\156\145\167\x5f\160\x61\x79\155\145\156\164" => self::kqewokmaycweqkco, "\141\144\x64\x5f\x6e\145\x77\x5f\x77\151\x74\x68\x64\162\141\x77" => self::kqewokmaycweqkco]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::kqewokmaycweqkco, [$this, "\153\147\x79\x6d\x75\x71\163\161\x6d\161\165\147\x71\163\x6d\167"])->koaegcswmcqsiykq(self::kqewokmaycweqkco, [$this, "\165\x6f\163\151\x75\157\161\171\163\171\x6f\153\x73\145\x71\145"]); parent::wigskegsqequoeks(); } public function kgymuqsqmqugqsmw() { $icwicymcioeyeyek = $_POST; $uamcoiueqaamsqma = ''; $occymigcemkqucuw = false; if ($this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto coywmiyqgsweuiic; } $uamcoiueqaamsqma = __("\x59\157\165\x72\40\162\145\x71\165\145\x73\164\40\x69\163\40\156\x6f\164\x20\166\141\x6c\151\x64\x2e", PR__MDL__SALARY); goto siqagquguiemuoku; coywmiyqgsweuiic: $eiuuauwyukskgois = ManipulateArray::get($icwicymcioeyeyek, Payment::owskgkyceomsskgm, 0); $euakemkgmcigqycw = ManipulateArray::get($icwicymcioeyeyek, Payment::qyeimiaoamokwygy, 0); if ($eiuuauwyukskgois && $euakemkgmcigqycw) { goto yssscwioiyygssec; } $uamcoiueqaamsqma = __("\x53\157\155\145\40\x72\145\161\x75\151\x72\145\x20\x70\x61\162\x61\x6d\145\164\x65\162\x73\x20\x69\163\x20\x6d\151\x73\x73\x69\156\x67\56", PR__MDL__SALARY); goto ieumumsgyguceusy; yssscwioiyygssec: $sogksuscggsicmac = Payment::symcgieuakksimmu()->gscuuyuyauokoyuo([]); $occymigcemkqucuw = ManipulateArray::get($sogksuscggsicmac, self::ckcawaoawwioqecq, $occymigcemkqucuw); if ($occymigcemkqucuw) { goto qcessicwuikwqsis; } $uamcoiueqaamsqma = ManipulateArray::get($sogksuscggsicmac, self::iwyueouqaqegmcas, $occymigcemkqucuw); qcessicwuikwqsis: ieumumsgyguceusy: siqagquguiemuoku: if (!$uamcoiueqaamsqma) { goto ycakugokkqkuqyiu; } $uamcoiueqaamsqma = ManipulateHTML::ueyuicgwuyuiioie($uamcoiueqaamsqma, $occymigcemkqucuw); ycakugokkqkuqyiu: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function uosiuoqysyokseqe() { $icwicymcioeyeyek = $_POST; $occymigcemkqucuw = false; if ($this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto gygawoqywkukmqee; } $uamcoiueqaamsqma = __("\x59\x6f\x75\162\40\x72\x65\161\x75\x65\x73\x74\x20\x69\163\40\x6e\x6f\x74\x20\166\x61\154\x69\x64\56", PR__MDL__SALARY); goto kciouyuaqkyqomam; gygawoqywkukmqee: $miowmmgaiagcuyoo = ManipulateArray::get($icwicymcioeyeyek, Admin::iockmgiyoygcswog); $wayieuwuoeasekks = ManipulateArray::get($icwicymcioeyeyek, Admin::qagqayweyigciamg); $wssiaomiwukaiwmw = ManipulateArray::get($icwicymcioeyeyek, Admin::equssioqikiumyki); if ($wayieuwuoeasekks && $wssiaomiwukaiwmw && $miowmmgaiagcuyoo) { goto oouoqimaaqcmccay; } $uamcoiueqaamsqma = __("\x53\157\155\x65\40\x72\x65\x71\165\x69\162\145\40\x70\141\x72\x61\155\x65\x74\145\x72\163\x20\151\x73\40\155\151\x73\163\x69\156\x67\56", PR__MDL__SALARY); goto sycygoiaiqqageym; oouoqimaaqcmccay: $sogksuscggsicmac = Withdraw::symcgieuakksimmu()->mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $wssiaomiwukaiwmw, $wayieuwuoeasekks); $uamcoiueqaamsqma = ManipulateArray::get($sogksuscggsicmac, self::eoskkkieowogacws); $occymigcemkqucuw = ManipulateArray::get($sogksuscggsicmac, self::ckcawaoawwioqecq); sycygoiaiqqageym: kciouyuaqkyqomam: if (!$uamcoiueqaamsqma) { goto wwkgkaecgiwggcck; } $uamcoiueqaamsqma = ManipulateHTML::ueyuicgwuyuiioie($uamcoiueqaamsqma, $occymigcemkqucuw); wwkgkaecgiwggcck: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } }
