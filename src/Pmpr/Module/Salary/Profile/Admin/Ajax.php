<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240a5569f6ea             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Salary\Model\Payment; use Pmpr\Module\Salary\Model\Withdraw; use Pmpr\Module\Salary\Profile\Common; class Ajax extends Common { const kqewokmaycweqkco = "\163\x61\x6c\x61\x72\x79\137\141\x64\x64\x5f\156\145\x77\x5f\x77\x69\164\150\144\x72\x61\x77\137\141\143\164\x69\157\156"; const kusssokwyuiygyqq = "\x73\141\154\x61\x72\171\x5f\x61\144\x64\x5f\156\145\x77\x5f\160\x61\x79\155\x65\x6e\x74\x5f\141\143\x74\x69\157\x6e"; const myikkigscysoykgy = ["\x61\144\x64\137\156\x65\167\137\160\x61\x79\155\145\156\164" => self::kqewokmaycweqkco, "\141\x64\x64\137\156\145\167\x5f\x77\x69\164\x68\144\x72\x61\x77" => self::kqewokmaycweqkco]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::kqewokmaycweqkco, [$this, "\153\147\171\x6d\165\161\x73\161\x6d\161\165\147\161\x73\155\x77"])->koaegcswmcqsiykq(self::kqewokmaycweqkco, [$this, "\x75\x6f\x73\x69\x75\x6f\161\171\x73\171\x6f\x6b\x73\x65\x71\145"]); parent::wigskegsqequoeks(); } public function kgymuqsqmqugqsmw() { $icwicymcioeyeyek = $_POST; $uamcoiueqaamsqma = ''; $occymigcemkqucuw = false; if ($this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto cmegwsegsosyqcai; } $uamcoiueqaamsqma = __("\131\157\x75\162\40\162\145\161\x75\x65\x73\x74\40\151\x73\x20\156\x6f\164\40\x76\x61\154\151\144\56", PR__MDL__SALARY); goto wmywuusgukmmaams; cmegwsegsosyqcai: $eiuuauwyukskgois = ManipulateArray::get($icwicymcioeyeyek, Payment::owskgkyceomsskgm, 0); $euakemkgmcigqycw = ManipulateArray::get($icwicymcioeyeyek, Payment::qyeimiaoamokwygy, 0); if ($eiuuauwyukskgois && $euakemkgmcigqycw) { goto giaacoqqqsekcayy; } $uamcoiueqaamsqma = __("\x53\157\155\145\40\162\x65\x71\165\x69\162\145\x20\160\141\x72\x61\155\x65\164\x65\162\x73\40\x69\x73\x20\155\151\163\x73\x69\x6e\x67\x2e", PR__MDL__SALARY); goto ewymsmkkiksgwysk; giaacoqqqsekcayy: $sogksuscggsicmac = Payment::symcgieuakksimmu()->gscuuyuyauokoyuo([]); $occymigcemkqucuw = ManipulateArray::get($sogksuscggsicmac, self::ckcawaoawwioqecq, $occymigcemkqucuw); if ($occymigcemkqucuw) { goto syiqkaasoueowwui; } $uamcoiueqaamsqma = ManipulateArray::get($sogksuscggsicmac, self::iwyueouqaqegmcas, $occymigcemkqucuw); syiqkaasoueowwui: ewymsmkkiksgwysk: wmywuusgukmmaams: if (!$uamcoiueqaamsqma) { goto gkyawqqcmigqgaiq; } $uamcoiueqaamsqma = ManipulateHTML::ueyuicgwuyuiioie($uamcoiueqaamsqma, $occymigcemkqucuw); gkyawqqcmigqgaiq: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } public function uosiuoqysyokseqe() { $icwicymcioeyeyek = $_POST; $occymigcemkqucuw = false; if ($this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto scisgsyemmsekgos; } $uamcoiueqaamsqma = __("\x59\157\x75\x72\40\x72\x65\x71\165\x65\163\164\40\x69\163\x20\156\157\x74\x20\166\141\x6c\151\x64\56", PR__MDL__SALARY); goto cewmoqyysgsmuiya; scisgsyemmsekgos: $miowmmgaiagcuyoo = ManipulateArray::get($icwicymcioeyeyek, Admin::iockmgiyoygcswog); $wayieuwuoeasekks = ManipulateArray::get($icwicymcioeyeyek, Admin::qagqayweyigciamg); $wssiaomiwukaiwmw = ManipulateArray::get($icwicymcioeyeyek, Admin::equssioqikiumyki); if ($wayieuwuoeasekks && $wssiaomiwukaiwmw && $miowmmgaiagcuyoo) { goto ooeausyowguqicuo; } $uamcoiueqaamsqma = __("\123\x6f\155\145\x20\x72\145\x71\165\x69\162\145\x20\x70\x61\162\x61\155\x65\164\x65\x72\x73\x20\151\163\40\155\151\163\163\x69\x6e\147\x2e", PR__MDL__SALARY); goto egyyiccaeeiooaua; ooeausyowguqicuo: $sogksuscggsicmac = Withdraw::symcgieuakksimmu()->mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $wssiaomiwukaiwmw, $wayieuwuoeasekks); $uamcoiueqaamsqma = ManipulateArray::get($sogksuscggsicmac, self::eoskkkieowogacws); $occymigcemkqucuw = ManipulateArray::get($sogksuscggsicmac, self::ckcawaoawwioqecq, $occymigcemkqucuw); egyyiccaeeiooaua: cewmoqyysgsmuiya: if (!$uamcoiueqaamsqma) { goto igooksugieceoege; } $uamcoiueqaamsqma = ManipulateHTML::ueyuicgwuyuiioie($uamcoiueqaamsqma, $occymigcemkqucuw); igooksugieceoege: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } }
