<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             626987ce52ae7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Salary\Salary; use Pmpr\Module\Salary\Setting; use Pmpr\Module\Salary\User; class Withdraw extends Common { const owskgkyceomsskgm = "\x63\162\145\141\x74\x6f\162"; const sseuikaiuuscgcge = "\151\156\x63\157\x6d\x65\x5f\151\x64"; const msoeaooscimowuyw = "\160\141\x79\x6d\x65\156\164\137\x69\x64"; const cmiegiycgiucucgs = "\162\145\x71\165\x65\163\x74\x5f\151\144"; const owmueawayysqcsqo = "\x62\141\156\153\x5f\x61\143\143\157\165\x6e\x74"; const aioqyewkwawaqgqe = "\141\x6d\157\x75\156\x74"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->eesuqwkusmukgwma()->yioesawwewqaigow(IconFontawesomeInterface::iguwuwgqymyiyoee)->guiaswksukmgageq(__("\127\x69\164\x68\144\162\141\x77", PR__MDL__SALARY))->muuwuqssqkaieqge(__("\x57\x69\x74\x68\x64\x72\141\x77\163", PR__MDL__SALARY))->ckaeqgiaiqwsccke(7)->aseucqksocwomwos()->wkesqcmiekqoykag()->qemeyueyiwgsokuc(); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->geqyygqiwiqusekc(self::iockmgiyoygcswog)->gswweykyogmsyawy(__("\x4f\167\156\x65\162", PR__MDL__SALARY)), $this->geqyygqiwiqusekc(self::owskgkyceomsskgm)->gswweykyogmsyawy(__("\x43\162\x65\x61\x74\x6f\162", PR__MDL__SALARY))->acokiqqgsmoqaeyu(), $this->owgikiusoocuqqgo(self::ciywsqoeiymemsys, $this->agausceiyceikeag())->gswweykyogmsyawy(__("\x53\x74\141\164\165\x73", PR__MDL__SALARY)), $this->qcyqgwuuymykkcke(self::owmueawayysqcsqo)->acceqyqygswoecwe(8)->gswweykyogmsyawy(__("\102\x61\x6e\153\x20\x41\143\x63\157\x75\x6e\x74\x20\x49\x6e\146\157\x72\x6d\x61\x74\x69\157\156", PR__MDL__SALARY)), $this->ggiieomioscuigco(self::cmiegiycgiucucgs)->uwmyqckcyamwaiww(Request::class)->gswweykyogmsyawy(__("\122\x65\x71\165\145\163\x74\x73", PR__MDL__SALARY))->ckmqkgwcusyaegmm()->kkeymosoimmgsaug(), $this->ggiieomioscuigco(self::sseuikaiuuscgcge)->uwmyqckcyamwaiww(Income::class)->gswweykyogmsyawy(__("\111\x6e\143\157\x6d\x65\x73", PR__MDL__SALARY))->ckgquisaimmgwuyu(), $this->ggiieomioscuigco(self::msoeaooscimowuyw)->uwmyqckcyamwaiww(Payment::class)->gswweykyogmsyawy(__("\120\x61\x79\x6d\145\x6e\x74", PR__MDL__SALARY))->ckgquisaimmgwuyu()]); parent::ewaqwooqoqmcoomi(); } public function kssgsuewkcwgiksa() : array { return [self::ciywsqoeiymemsys => ["\x63\157\154" => "\x6d\144\x2d\66\40\154\x67\55\x33", "\164\171\160\x65" => "\142\163\x73\x65\x6c\145\x63\164", "\x6f\x70\164\x69\157\156\x73" => $this->agausceiyceikeag(), "\x72\x65\x71\165\x69\162\145\144"], self::msoeaooscimowuyw => ["\x63\157\x6c" => "\61\x32", "\x74\x79\160\x65" => "\x67\x72\157\x75\160", "\x74\167\157\55\x63\157\154\x75\155\x6e"]]; } public function agausceiyceikeag($iueymcwwscwqkiyq = null) { $oqseeekuqisekiwy = [self::sgoswgskyiiwkyuo => __("\120\x65\x6e\144\151\156\x67\x20\120\x61\171\155\145\156\x74", PR__MDL__SALARY), self::cwiummueqsucqayc => __("\x41\x63\x63\145\160\x74\x65\x64", PR__MDL__SALARY), self::ayucqsmaykqegwqo => __("\x52\x65\146\165\163\x65\x64", PR__MDL__SALARY)]; return ManipulateArray::get($oqseeekuqisekiwy, $iueymcwwscwqkiyq, $oqseeekuqisekiwy); } public function kyisicoeikyckoge($miowmmgaiagcuyoo, $iueymcwwscwqkiyq, $cackiyicawmkyqqg = "\75") : int { $gaeqamemwmwsyukm = 0; $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye(self::iockmgiyoygcswog, ManipulateUser::mwikyscisascoeea($miowmmgaiagcuyoo)); if (!$siykeiywomwwuoiw) { goto omuauimgkygcecsc; } $gaeqamemwmwsyukm = $this->ieieyoeqmmeysauc(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, $cackiyicawmkyqqg, $siykeiywomwwuoiw); omuauimgkygcecsc: return $gaeqamemwmwsyukm; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { if (isset($mksyucucyswaukig->amount)) { goto wwcqoeuwskquakwy; } $mksyucucyswaukig->amount = 0; wwcqoeuwskquakwy: switch ($qgoqiacsiccwoawi) { case self::owmueawayysqcsqo: $miowmmgaiagcuyoo = $this->qogaqkcsogcqiaic($mksyucucyswaukig, self::iockmgiyoygcswog); $wusccgcckucqsqwe = User::symcgieuakksimmu(); if (ManipulateQuery::euqowsuwmgokuqqo()) { goto mugscgugcogcasue; } $eqgoocgaqwqcimie = $wusccgcckucqsqwe->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $eqgoocgaqwqcimie); $qmomekeesaiaoegu = ManipulateArray::get($eqgoocgaqwqcimie, $wusccgcckucqsqwe::oogeqgcgkamuoaoe); $ygogqywsaqoukoqy = ManipulateArray::get($eqgoocgaqwqcimie, $wusccgcckucqsqwe::cqkcksqwkcsiykuq); if (!$qmomekeesaiaoegu) { goto iymaiwqimisgacmk; } $eqgoocgaqwqcimie[$wusccgcckucqsqwe::qgqyauaqwqmqseim] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->kwagkemgawuoacwy($qmomekeesaiaoegu); $eqgoocgaqwqcimie[$wusccgcckucqsqwe::oogeqgcgkamuoaoe] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->eoemoqciaweskqkk($qmomekeesaiaoegu); $eqgoocgaqwqcimie[$wusccgcckucqsqwe::cqkcksqwkcsiykuq] = $this->msywmyaoqmaegsuy($ygogqywsaqoukoqy); iymaiwqimisgacmk: goto qyyyycwaookqaoke; mugscgugcogcasue: $eqgoocgaqwqcimie = $wusccgcckucqsqwe->kkqikgwyqqmukogk($miowmmgaiagcuyoo, $eqgoocgaqwqcimie); qyyyycwaookqaoke: goto quamuugoocyyceec; case self::iockmgiyoygcswog: case self::owskgkyceomsskgm: $miowmmgaiagcuyoo = ManipulateUser::get($eqgoocgaqwqcimie, true); if (!$miowmmgaiagcuyoo) { goto ssywsaaqqaucesau; } $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($miowmmgaiagcuyoo, "\x64\x69\163\160\154\x61\x79\x5f\x6e\141\x6d\x65", true); $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(ManipulateUser::yyykkcyiksewsoqy($miowmmgaiagcuyoo), $ymqmyyeuycgmigyo); ssywsaaqqaucesau: goto quamuugoocyyceec; case self::ciywsqoeiymemsys: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto ygcgoaokauigwuus; } $meqocwsecsywiiqs = ManipulateArray::get($this->agausceiyceikeag(), $eqgoocgaqwqcimie); $eqgoocgaqwqcimie = $this->usouqioywgosyqqy($eqgoocgaqwqcimie, $meqocwsecsywiiqs); ygcgoaokauigwuus: goto quamuugoocyyceec; case self::aioqyewkwawaqgqe: case self::sseuikaiuuscgcge: $eqgoocgaqwqcimie = $this->uoemumeeowowuqaq($mksyucucyswaukig, false); $eqgoocgaqwqcimie = ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie); goto quamuugoocyyceec; } qcssigmcayuyweiy: quamuugoocyyceec: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function uoemumeeowowuqaq($mksyucucyswaukig, $mgkceomocowocqyo = "\166\x69\x65\x77") { return $this->yqcgeogiccmkwuic($mksyucucyswaukig, self::sseuikaiuuscgcge, $mgkceomocowocqyo); } public function qeowcucuoaqyqwuw($umwgoasiowmqcumw, $siykeiywomwwuoiw = null) : array { $oqseeekuqisekiwy = $this->agausceiyceikeag(); foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq => $meqocwsecsywiiqs) { $umwgoasiowmqcumw[$iueymcwwscwqkiyq] = [self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::qiyqwyiiwykeccmo => $this->ieieyoeqmmeysauc(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, "\x3d", clone $siykeiywomwwuoiw)]; auumaoycmsmsgigs: } ysiqakyaiooyscwy: return parent::qeowcucuoaqyqwuw($umwgoasiowmqcumw, $siykeiywomwwuoiw); } public function mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $ywqqikcsamcaycgm, $kooascmqqwmaskmi) : array { $occymigcemkqucuw = false; $ckeskcacgiywwoua = $this->kyisicoeikyckoge($miowmmgaiagcuyoo, self::sgoswgskyiiwkyuo); if ($ckeskcacgiywwoua <= 0) { goto giugwaeuwaomossq; } $uamcoiueqaamsqma = sprintf(__("\x59\x6f\165\40\x61\154\x72\x65\141\144\171\40\150\141\166\x65\40\x61\40\167\x69\x74\150\x64\x72\141\167\x20\167\x69\x74\x68\40\x25\163\40\163\164\x61\164\165\163\x2e", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis($this->agausceiyceikeag(self::sgoswgskyiiwkyuo))); goto acgqaeakoyasgkku; giugwaeuwaomossq: if ($ywqqikcsamcaycgm) { goto yoqsigmoyaaceqky; } $uamcoiueqaamsqma = __("\x41\147\x72\x65\x65\155\145\x6e\x74\40\156\157\164\x20\x66\x6f\x75\x6e\x64\x2e", PR__MDL__SALARY); goto suqckoccuyeeymww; yoqsigmoyaaceqky: $ogekyekymoyuywog = Income::symcgieuakksimmu(); $cseccogesusskess = $ogekyekymoyuywog->cwkywyqksyucoyia([$ogekyekymoyuywog::iockmgiyoygcswog => $miowmmgaiagcuyoo, $ogekyekymoyuywog::cmiegiycgiucucgs => [self::ciyoccqkiamemcmm => $ywqqikcsamcaycgm, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc], $ogekyekymoyuywog::eiiuyoyiygsickwe => $ogekyekymoyuywog::ugswgyqgycqguios]); $ygeuioagqoqumwuw = Setting::eiwcuqigayigimak(Setting::iqkskgussyuogioe, 0); $gkimsiseuqckqkso = $this->cseaisoguykosgem($cseccogesusskess); if ($gkimsiseuqckqkso > $ygeuioagqoqumwuw) { goto masakmomqmeocqqg; } $uamcoiueqaamsqma = sprintf(__("\x59\x6f\165\162\x20\162\145\x71\165\145\163\164\x65\x64\x20\x61\155\157\165\156\x74\40\50\45\163\51\40\x69\163\40\x6c\x65\x73\x73\x20\x74\150\x61\x6e\40\171\157\x75\162\x20\x61\147\x72\145\x65\x6d\145\156\164\40\142\141\x6c\141\x6e\143\x65\40\164\150\162\x65\x73\150\157\x6c\144\x20\50\45\x73\x29\56", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis(ManipulateWoocommerce::mcgaskyiamgqmqgu($gkimsiseuqckqkso)), ManipulateHTML::ciuuiyckmsygceis(ManipulateWoocommerce::mcgaskyiamgqmqgu($ygeuioagqoqumwuw))); goto yksywwikmeksikqc; masakmomqmeocqqg: if ($cseccogesusskess) { goto yqcusaeysomccaok; } $uamcoiueqaamsqma = sprintf(__("\131\x6f\165\x20\x64\x6f\x6e\47\164\40\150\x61\x76\145\40\141\156\171\x20\151\x6e\143\157\x6d\145\x20\165\x6e\x74\x69\154\40\156\157\x77\54\40\167\x69\164\150\x20\163\164\141\164\165\x73\x20\x25\x73\x2e", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis($ogekyekymoyuywog->cysukeiuucugyiqq($ogekyekymoyuywog::ugswgyqgycqguios))); goto iwkckkeimmeoquyq; yqcusaeysomccaok: foreach ($cseccogesusskess as $momcykaoccoymeig => $yuywqkssaukwuiwe) { $cseccogesusskess[$momcykaoccoymeig] = ManipulateArray::set($yuywqkssaukwuiwe, [$ogekyekymoyuywog::eiiuyoyiygsickwe => $ogekyekymoyuywog::aquouykoyqcwccay]); qeuyekusasqmcqms: } ousmyagwsiooumos: $sogksuscggsicmac = $this->gscuuyuyauokoyuo([self::iockmgiyoygcswog => $miowmmgaiagcuyoo, self::ciywsqoeiymemsys => self::sgoswgskyiiwkyuo, self::owskgkyceomsskgm => $miowmmgaiagcuyoo, self::sseuikaiuuscgcge => $cseccogesusskess, self::owmueawayysqcsqo => $kooascmqqwmaskmi]); $euakemkgmcigqycw = ManipulateArray::get($sogksuscggsicmac, "\x6f\142\152\145\143\164"); if ($euakemkgmcigqycw instanceof Withdraw) { goto sgocecweikecwwgq; } $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, self::iwyueouqaqegmcas, []); $uamcoiueqaamsqma = sprintf(__("\103\141\x6e\40\x6e\x6f\164\40\x61\144\x64\40\141\40\x6e\145\x77\x20\167\x69\x74\150\144\x72\x61\x77\x3a\x20\45\x73", PR__MDL__SALARY), implode("\74\x62\x72\57\x3e", $ueeagokqmgisgauy)); goto qwisiamkmkkwucyo; sgocecweikecwwgq: try { User::symcgieuakksimmu()->oiagiswyysamcyag($miowmmgaiagcuyoo, $kooascmqqwmaskmi); $uamcoiueqaamsqma = __("\131\x6f\165\162\40\x77\x69\x74\150\x64\162\x61\x77\x20\x69\163\x20\x73\165\x62\155\151\164\x74\x65\x64\40\x73\x75\x63\x63\145\163\x73\x66\165\154\154\x79\x2e", PR__MDL__SALARY); $occymigcemkqucuw = true; } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf(__("\103\x61\156\40\156\x6f\164\x20\x73\x61\166\145\x20\x72\145\x6c\141\x74\151\157\x6e\40\x73\150\x69\x70\x3a\40\x25\x73", PR__MDL__SALARY), $wgaoewqkwgomoaai->sagusgigmkeysock()); } if ($occymigcemkqucuw) { goto yiceawuuiusakwiq; } try { $euakemkgmcigqycw->delete(); } catch (Exception $wgaoewqkwgomoaai) { } yiceawuuiusakwiq: qwisiamkmkkwucyo: iwkckkeimmeoquyq: yksywwikmeksikqc: suqckoccuyeeymww: acgqaeakoyasgkku: return [self::ckcawaoawwioqecq => $occymigcemkqucuw, self::eoskkkieowogacws => $uamcoiueqaamsqma]; } }
