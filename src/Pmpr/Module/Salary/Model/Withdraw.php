<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c0cbfa217c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\Salary\Salary; use Pmpr\Module\Salary\Setting; use Pmpr\Module\Salary\User; class Withdraw extends Common { const owskgkyceomsskgm = "\143\x72\145\x61\164\x6f\162"; const sseuikaiuuscgcge = "\151\156\143\x6f\155\x65\x5f\x69\x64"; const msoeaooscimowuyw = "\x70\141\x79\155\145\x6e\x74\137\151\x64"; const owmueawayysqcsqo = "\x62\141\156\x6b\137\141\143\x63\x6f\165\x6e\164"; const aioqyewkwawaqgqe = "\x61\x6d\x6f\165\156\164"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->guiaswksukmgageq(__("\x57\x69\x74\150\144\162\141\167", PR__MDL__SALARY))->muuwuqssqkaieqge(__("\127\151\x74\150\x64\x72\x61\167\x73", PR__MDL__SALARY))->aseucqksocwomwos()->wkesqcmiekqoykag()->qemeyueyiwgsokuc(["\160\x6f\163\x69\x74\151\157\156" => 3, "\x6d\x65\156\165\x5f\x74\x69\164\x6c\x65" => __("\101\x6c\x6c\x20\x57\x69\x74\150\144\162\141\x77\163", PR__MDL__SALARY)]); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->geqyygqiwiqusekc(self::iockmgiyoygcswog)->gswweykyogmsyawy(__("\x4f\167\156\145\162", PR__MDL__SALARY)), $this->geqyygqiwiqusekc(self::owskgkyceomsskgm)->gswweykyogmsyawy(__("\103\x72\145\141\x74\157\x72", PR__MDL__SALARY))->acokiqqgsmoqaeyu(), $this->owgikiusoocuqqgo(self::ciywsqoeiymemsys, $this->agausceiyceikeag())->gswweykyogmsyawy(__("\x53\164\141\164\x75\x73", PR__MDL__SALARY)), $this->qcyqgwuuymykkcke(self::owmueawayysqcsqo)->acceqyqygswoecwe(8)->gswweykyogmsyawy(__("\x42\x61\156\153\40\x41\x63\143\157\x75\156\x74\x20\x49\156\x66\157\162\x6d\x61\x74\x69\157\x6e", PR__MDL__SALARY)), $this->ggiieomioscuigco(self::sseuikaiuuscgcge)->uwmyqckcyamwaiww(Income::class)->gswweykyogmsyawy(__("\111\x6e\143\157\x6d\145\163", PR__MDL__SALARY))->ckgquisaimmgwuyu(), $this->ggiieomioscuigco(self::msoeaooscimowuyw)->uwmyqckcyamwaiww(Payment::class)->gswweykyogmsyawy(__("\x50\x61\x79\155\145\156\164", PR__MDL__SALARY))->ckgquisaimmgwuyu()]); parent::ewaqwooqoqmcoomi(); } public function kssgsuewkcwgiksa() : array { return [self::ciywsqoeiymemsys => ["\x63\157\154" => "\x6d\x64\55\66\x20\x6c\147\x2d\63", "\x74\x79\160\145" => "\x62\x73\x73\145\x6c\x65\x63\164", "\x6f\160\x74\x69\x6f\156\163" => $this->agausceiyceikeag(), "\x72\145\161\165\x69\x72\x65\x64"], self::msoeaooscimowuyw => ["\143\157\154" => "\61\x32", "\164\x79\x70\145" => "\147\162\x6f\x75\160", "\164\x77\157\55\x63\x6f\x6c\x75\x6d\x6e"]]; } public function agausceiyceikeag($iueymcwwscwqkiyq = null) { $oqseeekuqisekiwy = [self::sgoswgskyiiwkyuo => __("\120\145\156\144\x69\x6e\147\40\120\141\x79\x6d\145\x6e\x74", PR__MDL__SALARY), self::cwiummueqsucqayc => __("\101\x63\143\x65\160\164\145\144", PR__MDL__SALARY), self::ayucqsmaykqegwqo => __("\122\x65\146\x75\x73\145\x64", PR__MDL__SALARY)]; return ManipulateArray::get($oqseeekuqisekiwy, $iueymcwwscwqkiyq, $oqseeekuqisekiwy); } public function kyisicoeikyckoge($miowmmgaiagcuyoo, $iueymcwwscwqkiyq, $cackiyicawmkyqqg = "\75") : int { $gaeqamemwmwsyukm = 0; $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye(self::iockmgiyoygcswog, ManipulateUser::mwikyscisascoeea($miowmmgaiagcuyoo)); if (!$siykeiywomwwuoiw) { goto ugykmcouiwiscoqu; } $gaeqamemwmwsyukm = $this->ieieyoeqmmeysauc(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, $cackiyicawmkyqqg, $siykeiywomwwuoiw); ugykmcouiwiscoqu: return $gaeqamemwmwsyukm; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { if (isset($mksyucucyswaukig->amount)) { goto isewysikysqewkis; } $mksyucucyswaukig->amount = 0; isewysikysqewkis: switch ($qgoqiacsiccwoawi) { case self::owmueawayysqcsqo: $miowmmgaiagcuyoo = $this->qogaqkcsogcqiaic($mksyucucyswaukig, self::iockmgiyoygcswog); $wusccgcckucqsqwe = User::symcgieuakksimmu(); if (ManipulateQuery::euqowsuwmgokuqqo()) { goto sqwuqegeiisoiiuq; } $eqgoocgaqwqcimie = $wusccgcckucqsqwe->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $eqgoocgaqwqcimie); $qmomekeesaiaoegu = ManipulateArray::get($eqgoocgaqwqcimie, $wusccgcckucqsqwe::oogeqgcgkamuoaoe); $ygogqywsaqoukoqy = ManipulateArray::get($eqgoocgaqwqcimie, $wusccgcckucqsqwe::cqkcksqwkcsiykuq); if (!$qmomekeesaiaoegu) { goto eouwacqiommmeaqc; } $eqgoocgaqwqcimie[$wusccgcckucqsqwe::qgqyauaqwqmqseim] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->kwagkemgawuoacwy($qmomekeesaiaoegu); $eqgoocgaqwqcimie[$wusccgcckucqsqwe::oogeqgcgkamuoaoe] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->eoemoqciaweskqkk($qmomekeesaiaoegu); $eqgoocgaqwqcimie[$wusccgcckucqsqwe::cqkcksqwkcsiykuq] = $this->msywmyaoqmaegsuy($ygogqywsaqoukoqy); eouwacqiommmeaqc: goto uscokkmquayiukag; sqwuqegeiisoiiuq: $eqgoocgaqwqcimie = $wusccgcckucqsqwe->kkqikgwyqqmukogk($miowmmgaiagcuyoo, $eqgoocgaqwqcimie); uscokkmquayiukag: goto wiwoiyoakywqyaiy; case self::iockmgiyoygcswog: case self::owskgkyceomsskgm: $miowmmgaiagcuyoo = ManipulateUser::get($eqgoocgaqwqcimie, true); if (!$miowmmgaiagcuyoo) { goto ykqsuiyyosyeyscc; } $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($miowmmgaiagcuyoo, "\144\x69\163\160\x6c\x61\171\137\156\x61\155\x65", true); $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(ManipulateUser::yyykkcyiksewsoqy($miowmmgaiagcuyoo), $ymqmyyeuycgmigyo); ykqsuiyyosyeyscc: goto wiwoiyoakywqyaiy; case self::ciywsqoeiymemsys: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto ugogoekeckgcmuaw; } $meqocwsecsywiiqs = ManipulateArray::get($this->agausceiyceikeag(), $eqgoocgaqwqcimie); $eqgoocgaqwqcimie = $this->usouqioywgosyqqy($eqgoocgaqwqcimie, $meqocwsecsywiiqs); ugogoekeckgcmuaw: goto wiwoiyoakywqyaiy; case self::aioqyewkwawaqgqe: case self::sseuikaiuuscgcge: $eqgoocgaqwqcimie = $this->uoemumeeowowuqaq($mksyucucyswaukig, false); $eqgoocgaqwqcimie = ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie); goto wiwoiyoakywqyaiy; } igmmqwyawcuuckkq: wiwoiyoakywqyaiy: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function uoemumeeowowuqaq($mksyucucyswaukig, $mgkceomocowocqyo = "\166\151\x65\167") { return $this->yqcgeogiccmkwuic($mksyucucyswaukig, self::sseuikaiuuscgcge, $mgkceomocowocqyo); } public function qeowcucuoaqyqwuw($umwgoasiowmqcumw, $siykeiywomwwuoiw = null) : array { $oqseeekuqisekiwy = $this->agausceiyceikeag(); foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq => $meqocwsecsywiiqs) { $umwgoasiowmqcumw[$iueymcwwscwqkiyq] = [self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::qiyqwyiiwykeccmo => $this->ieieyoeqmmeysauc(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, "\75", clone $siykeiywomwwuoiw)]; syusgosewwkoagoq: } egesuwkqkmaigaoe: return parent::qeowcucuoaqyqwuw($umwgoasiowmqcumw, $siykeiywomwwuoiw); } public function mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $ywqqikcsamcaycgm, $kooascmqqwmaskmi) : array { $occymigcemkqucuw = false; $ckeskcacgiywwoua = $this->kyisicoeikyckoge($miowmmgaiagcuyoo, self::sgoswgskyiiwkyuo); if ($ckeskcacgiywwoua <= 0) { goto qkyciyiwkmgkmquk; } $uamcoiueqaamsqma = sprintf(__("\x59\x6f\165\x20\x61\154\x72\x65\141\144\171\x20\150\x61\166\x65\40\x61\40\167\151\164\150\144\162\141\167\x20\167\x69\x74\150\40\45\163\40\x73\164\x61\164\165\x73\56", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis($this->agausceiyceikeag(self::sgoswgskyiiwkyuo))); goto sksgcusuyqcwqswe; qkyciyiwkmgkmquk: if ($ywqqikcsamcaycgm) { goto esagiiawomyacuiw; } $uamcoiueqaamsqma = __("\101\147\162\145\145\x6d\145\x6e\164\40\156\157\x74\40\x66\157\165\156\x64\x2e", PR__MDL__SALARY); goto maaisuqwkymeguys; esagiiawomyacuiw: $ogekyekymoyuywog = Income::symcgieuakksimmu(); $cseccogesusskess = $ogekyekymoyuywog->cwkywyqksyucoyia([$ogekyekymoyuywog::iockmgiyoygcswog => $miowmmgaiagcuyoo, $ogekyekymoyuywog::woagckamiequeoyu => [self::ciyoccqkiamemcmm => $ywqqikcsamcaycgm, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc], $ogekyekymoyuywog::eiiuyoyiygsickwe => $ogekyekymoyuywog::ugswgyqgycqguios]); $ygeuioagqoqumwuw = Setting::eiwcuqigayigimak(Setting::iqkskgussyuogioe, 0); $gkimsiseuqckqkso = $this->cseaisoguykosgem($cseccogesusskess); if ($gkimsiseuqckqkso > $ygeuioagqoqumwuw) { goto gqimwsyemoewagcy; } $uamcoiueqaamsqma = sprintf(__("\x59\x6f\165\x72\x20\162\145\161\165\145\x73\x74\x65\x64\40\141\x6d\x6f\x75\156\164\40\50\x25\x73\x29\40\151\163\x20\x6c\x65\163\163\x20\164\x68\x61\156\40\x79\x6f\x75\x72\40\141\147\162\145\145\155\145\x6e\164\x20\x62\x61\x6c\x61\156\x63\x65\40\x74\x68\x72\145\x73\150\157\154\x64\40\50\45\x73\x29\x2e", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis(ManipulateWoocommerce::mcgaskyiamgqmqgu($gkimsiseuqckqkso)), ManipulateHTML::ciuuiyckmsygceis(ManipulateWoocommerce::mcgaskyiamgqmqgu($ygeuioagqoqumwuw))); goto aoaqwygkaagiuuws; gqimwsyemoewagcy: if ($cseccogesusskess) { goto kyiwsiakwgiwouyi; } $uamcoiueqaamsqma = sprintf(__("\131\x6f\165\40\x64\x6f\x6e\x27\164\x20\150\x61\x76\145\40\141\156\x79\x20\151\156\x63\x6f\x6d\145\x20\x75\156\164\151\x6c\40\156\157\x77\x2c\x20\167\x69\164\x68\40\x73\x74\x61\164\165\163\40\x25\163\56", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis($ogekyekymoyuywog->cysukeiuucugyiqq($ogekyekymoyuywog::ugswgyqgycqguios))); goto awgmegueeqeyqamu; kyiwsiakwgiwouyi: foreach ($cseccogesusskess as $momcykaoccoymeig => $yuywqkssaukwuiwe) { $cseccogesusskess[$momcykaoccoymeig] = ManipulateArray::set($yuywqkssaukwuiwe, [$ogekyekymoyuywog::eiiuyoyiygsickwe => $ogekyekymoyuywog::aquouykoyqcwccay]); eweaaismksecwagy: } mcqucouuiuoagqwc: $sogksuscggsicmac = $this->gscuuyuyauokoyuo([self::iockmgiyoygcswog => $miowmmgaiagcuyoo, self::ciywsqoeiymemsys => self::sgoswgskyiiwkyuo, self::owskgkyceomsskgm => $miowmmgaiagcuyoo, self::sseuikaiuuscgcge => $cseccogesusskess, self::owmueawayysqcsqo => $kooascmqqwmaskmi]); $euakemkgmcigqycw = ManipulateArray::get($sogksuscggsicmac, "\157\x62\x6a\145\x63\164"); if ($euakemkgmcigqycw instanceof Withdraw) { goto oeamoqweiueaueay; } $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, self::iwyueouqaqegmcas, []); $uamcoiueqaamsqma = sprintf(__("\x43\x61\156\x20\156\x6f\x74\40\141\x64\x64\40\x61\x20\156\x65\167\x20\167\151\x74\x68\x64\x72\x61\167\x3a\x20\45\x73", PR__MDL__SALARY), implode("\74\142\162\57\x3e", $ueeagokqmgisgauy)); goto owgsameoayaogsma; oeamoqweiueaueay: try { User::symcgieuakksimmu()->oiagiswyysamcyag($miowmmgaiagcuyoo, $kooascmqqwmaskmi); $uamcoiueqaamsqma = __("\x59\x6f\x75\162\x20\x77\151\x74\150\x64\x72\141\167\x20\x69\x73\x20\x73\165\x62\x6d\x69\x74\x74\145\x64\x20\x73\x75\143\143\145\x73\163\x66\165\154\154\x79\x2e", PR__MDL__SALARY); $occymigcemkqucuw = true; } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf(__("\x43\141\x6e\x20\156\x6f\164\40\x73\141\x76\x65\40\162\145\x6c\141\164\x69\x6f\156\40\163\150\x69\x70\x3a\x20\45\x73", PR__MDL__SALARY), $wgaoewqkwgomoaai->sagusgigmkeysock()); } if ($occymigcemkqucuw) { goto icumkkykaoqycqqu; } try { $euakemkgmcigqycw->delete(); } catch (Exception $wgaoewqkwgomoaai) { } icumkkykaoqycqqu: owgsameoayaogsma: awgmegueeqeyqamu: aoaqwygkaagiuuws: maaisuqwkymeguys: sksgcusuyqcwqswe: return [self::ckcawaoawwioqecq => $occymigcemkqucuw, self::eoskkkieowogacws => $uamcoiueqaamsqma]; } }
