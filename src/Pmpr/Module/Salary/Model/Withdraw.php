<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661e423b713ee             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Exception; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Salary\Setting; use Pmpr\Module\Salary\User; class Withdraw extends Common { const owskgkyceomsskgm = "\143\x72\145\141\x74\x6f\x72"; const sseuikaiuuscgcge = "\x69\156\143\157\155\145\137\x69\144"; const msoeaooscimowuyw = "\x70\141\x79\155\145\156\164\x5f\151\144"; const cmiegiycgiucucgs = "\x72\x65\x71\x75\145\163\x74\137\151\144"; const owmueawayysqcsqo = "\142\x61\x6e\153\x5f\141\x63\143\x6f\165\156\164"; const aioqyewkwawaqgqe = "\141\x6d\157\165\x6e\164"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->eesuqwkusmukgwma()->yioesawwewqaigow(IconInterface::gucgemsgiqmwqwgu)->guiaswksukmgageq(__("\x57\151\164\x68\144\162\141\167", PR__MDL__SALARY))->muuwuqssqkaieqge(__("\x57\151\164\x68\x64\x72\x61\167\x73", PR__MDL__SALARY))->ckaeqgiaiqwsccke(7)->aseucqksocwomwos()->wkesqcmiekqoykag()->qemeyueyiwgsokuc(); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->qoemykoeuecmsmwe(self::owskgkyceomsskgm)->gswweykyogmsyawy(__("\x43\x72\145\141\164\157\x72", PR__MDL__SALARY))->acokiqqgsmoqaeyu(), $this->yyuiuwgokmwioomq(self::ciywsqoeiymemsys)->kesomeowemmyygey(1, self::sgoswgskyiiwkyuo, __("\120\x65\x6e\x64\151\x6e\x67\x20\x50\141\171\x6d\145\x6e\x74", PR__MDL__SALARY))->kesomeowemmyygey(2, self::cwiummueqsucqayc, __("\101\143\x63\x65\160\164\x65\144", PR__MDL__SALARY))->kesomeowemmyygey(3, self::ayucqsmaykqegwqo, __("\122\x65\x66\165\x73\145\144", PR__MDL__SALARY))->gswweykyogmsyawy(__("\123\x74\141\164\165\163", PR__MDL__SALARY)), $this->usqseiuaeauwuwus(self::owmueawayysqcsqo)->acceqyqygswoecwe(8)->gswweykyogmsyawy(__("\x42\141\156\x6b\40\101\143\x63\x6f\x75\x6e\x74\x20\111\156\146\157\162\155\x61\164\151\157\x6e", PR__MDL__SALARY)), $this->eoaomaokwkwqyqiq(self::cmiegiycgiucucgs)->uwmyqckcyamwaiww(Request::class)->gswweykyogmsyawy(__("\x52\x65\161\x75\145\x73\x74\x73", PR__MDL__SALARY))->ckmqkgwcusyaegmm()->kkeymosoimmgsaug(), $this->eoaomaokwkwqyqiq(self::sseuikaiuuscgcge)->uwmyqckcyamwaiww(Income::class)->gswweykyogmsyawy(__("\111\x6e\143\x6f\x6d\x65\x73", PR__MDL__SALARY))->ckgquisaimmgwuyu(), $this->eoaomaokwkwqyqiq(self::msoeaooscimowuyw)->uwmyqckcyamwaiww(Payment::class)->gswweykyogmsyawy(__("\x50\x61\171\155\x65\x6e\164", PR__MDL__SALARY))->ckgquisaimmgwuyu()]); parent::ewaqwooqoqmcoomi(); } public function aoqwywcqmoqaukkq() { $this->mkksewyosgeumwsa($this->uccuieiyckcoaqsk()->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::ciywsqoeiymemsys))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::msoeaooscimowuyw)->omsoosuoikgueyke())); } public function gascwoasakiqyumc($iueymcwwscwqkiyq = null) { return $this->yomgsemomcmgekyi(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq); } public function kyisicoeikyckoge($miowmmgaiagcuyoo, $iueymcwwscwqkiyq, $cackiyicawmkyqqg = "\x3d") : int { $gaeqamemwmwsyukm = 0; $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye(self::iockmgiyoygcswog, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($miowmmgaiagcuyoo, true)); if (!$siykeiywomwwuoiw) { goto igwkcikeyoowosoi; } $gaeqamemwmwsyukm = $this->ieieyoeqmmeysauc(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, $cackiyicawmkyqqg, $siykeiywomwwuoiw); igwkcikeyoowosoi: return $gaeqamemwmwsyukm; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, &$mksyucucyswaukig = null) { if (isset($mksyucucyswaukig->amount)) { goto iqsgossweywksoia; } $mksyucucyswaukig->amount = 0; iqsgossweywksoia: switch ($qgoqiacsiccwoawi) { case self::owmueawayysqcsqo: $miowmmgaiagcuyoo = $this->qogaqkcsogcqiaic($mksyucucyswaukig, self::iockmgiyoygcswog); $wusccgcckucqsqwe = User::symcgieuakksimmu(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto qyeswawykmasuqye; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eqgoocgaqwqcimie = $wusccgcckucqsqwe->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $eqgoocgaqwqcimie); $qmomekeesaiaoegu = $gkyciwoiiisgywcs->get($eqgoocgaqwqcimie, $wusccgcckucqsqwe::oogeqgcgkamuoaoe); $ygogqywsaqoukoqy = $gkyciwoiiisgywcs->get($eqgoocgaqwqcimie, $wusccgcckucqsqwe::cqkcksqwkcsiykuq); if (!$qmomekeesaiaoegu) { goto ggeoqeowscwkeumy; } $eqgoocgaqwqcimie[$wusccgcckucqsqwe::qgqyauaqwqmqseim] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->kwagkemgawuoacwy($qmomekeesaiaoegu); $eqgoocgaqwqcimie[$wusccgcckucqsqwe::oogeqgcgkamuoaoe] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->eoemoqciaweskqkk($qmomekeesaiaoegu); $eqgoocgaqwqcimie[$wusccgcckucqsqwe::cqkcksqwkcsiykuq] = $this->msywmyaoqmaegsuy($ygogqywsaqoukoqy); ggeoqeowscwkeumy: goto uwaimsisescsgyqk; qyeswawykmasuqye: $eqgoocgaqwqcimie = $wusccgcckucqsqwe->kkqikgwyqqmukogk($miowmmgaiagcuyoo, $eqgoocgaqwqcimie); uwaimsisescsgyqk: goto awaqksikyomsuaeo; case self::owskgkyceomsskgm: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([self::squoamkioomemiyi => self::meksegaoamowuwoq, self::ckmqoekmugkggeym => $eqgoocgaqwqcimie]); goto awaqksikyomsuaeo; case self::ciywsqoeiymemsys: if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto uqcsksaywyqeumig; } $eqgoocgaqwqcimie = $this->usouqioywgosyqqy($eqgoocgaqwqcimie, $this->gascwoasakiqyumc($eqgoocgaqwqcimie)); uqcsksaywyqeumig: goto awaqksikyomsuaeo; case self::aioqyewkwawaqgqe: case self::sseuikaiuuscgcge: $eqgoocgaqwqcimie = $this->uoemumeeowowuqaq($mksyucucyswaukig, false); $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($eqgoocgaqwqcimie); goto awaqksikyomsuaeo; } cuommomwmsackoqc: awaqksikyomsuaeo: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function uoemumeeowowuqaq($mksyucucyswaukig, string $mgkceomocowocqyo = self::uwycywkimsycqwcy) { return $this->yqcgeogiccmkwuic($mksyucucyswaukig, self::sseuikaiuuscgcge, $mgkceomocowocqyo); } public function mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $ywqqikcsamcaycgm, $kooascmqqwmaskmi) : array { $occymigcemkqucuw = false; $ckeskcacgiywwoua = $this->kyisicoeikyckoge($miowmmgaiagcuyoo, self::sgoswgskyiiwkyuo); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if ($ckeskcacgiywwoua <= 0) { goto esqwswmoegiqcckg; } $uamcoiueqaamsqma = sprintf(__("\131\157\x75\40\141\154\x72\145\141\144\x79\x20\x68\x61\166\x65\40\141\x20\167\151\164\150\x64\x72\x61\167\x20\x77\151\x74\150\40\x25\x73\40\163\x74\141\164\165\163\56", PR__MDL__SALARY), $swqimwqeweekeusq->ciuuiyckmsygceis($this->gascwoasakiqyumc(self::sgoswgskyiiwkyuo))); goto qmokwkocmcyeyesc; esqwswmoegiqcckg: if ($ywqqikcsamcaycgm) { goto mwieyyqamgwicgco; } $uamcoiueqaamsqma = __("\101\x67\x72\x65\145\155\x65\156\164\40\x6e\x6f\x74\40\146\x6f\x75\x6e\x64\x2e", PR__MDL__SALARY); goto wkiymcoqqiigqaaw; mwieyyqamgwicgco: $ogekyekymoyuywog = Income::symcgieuakksimmu(); $cseccogesusskess = $ogekyekymoyuywog->cwkywyqksyucoyia([$ogekyekymoyuywog::iockmgiyoygcswog => $miowmmgaiagcuyoo, $ogekyekymoyuywog::cmiegiycgiucucgs => [self::ciyoccqkiamemcmm => $ywqqikcsamcaycgm, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc], $ogekyekymoyuywog::eiiuyoyiygsickwe => $ogekyekymoyuywog::youiiwsayswmyuum]); $ygeuioagqoqumwuw = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::iqkskgussyuogioe, 0); $gkimsiseuqckqkso = $this->cseaisoguykosgem($cseccogesusskess); if ($gkimsiseuqckqkso > $ygeuioagqoqumwuw) { goto kceuusiekagyeoys; } $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $uamcoiueqaamsqma = sprintf(__("\131\x6f\x75\x72\x20\x72\x65\161\165\145\x73\x74\145\144\40\x61\155\157\x75\156\164\x20\x28\45\163\51\x20\x69\163\40\154\145\163\163\x20\x74\x68\x61\156\40\x79\x6f\165\162\x20\141\147\162\145\x65\155\x65\x6e\x74\x20\142\x61\154\141\156\143\x65\x20\x74\150\x72\x65\163\150\157\x6c\144\x20\x28\45\163\51\56", PR__MDL__SALARY), $swqimwqeweekeusq->ciuuiyckmsygceis($cgceoyqmmwumqyqa->aumscagymwyyicag($gkimsiseuqckqkso)), $swqimwqeweekeusq->ciuuiyckmsygceis($cgceoyqmmwumqyqa->aumscagymwyyicag($ygeuioagqoqumwuw))); goto uyeyscsaigimsqwq; kceuusiekagyeoys: if ($cseccogesusskess) { goto gkoaeuekqockuoiq; } $uamcoiueqaamsqma = sprintf(__("\x59\x6f\165\40\144\x6f\156\47\x74\x20\x68\x61\x76\x65\40\x61\156\x79\40\151\x6e\x63\157\x6d\x65\40\x75\156\x74\x69\x6c\40\x6e\157\167\54\40\167\151\x74\x68\40\x73\164\141\164\x75\x73\40\45\163\56", PR__MDL__SALARY), $swqimwqeweekeusq->ciuuiyckmsygceis($ogekyekymoyuywog->iowygaiuiqkqimio($ogekyekymoyuywog::youiiwsayswmyuum))); goto eekaiaeqewiqkkgm; gkoaeuekqockuoiq: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($cseccogesusskess as $momcykaoccoymeig => $yuywqkssaukwuiwe) { $cseccogesusskess[$momcykaoccoymeig] = $gkyciwoiiisgywcs->set($yuywqkssaukwuiwe, [$ogekyekymoyuywog::eiiuyoyiygsickwe => $ogekyekymoyuywog::ycmomqymkecsysum]); ukwoswyyogmsygqg: } yggmaskeguaqkusc: $sogksuscggsicmac = $this->gscuuyuyauokoyuo([self::iockmgiyoygcswog => $miowmmgaiagcuyoo, self::ciywsqoeiymemsys => self::sgoswgskyiiwkyuo, self::owskgkyceomsskgm => $miowmmgaiagcuyoo, self::sseuikaiuuscgcge => $cseccogesusskess, self::owmueawayysqcsqo => $kooascmqqwmaskmi]); if ($euakemkgmcigqycw = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::ckmqoekmugkggeym)) { goto kwmiwaecqcgiaqye; } $ueeagokqmgisgauy = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::iwyueouqaqegmcas, []); $uamcoiueqaamsqma = sprintf(__("\103\x61\x6e\40\x6e\157\x74\x20\x61\x64\x64\x20\141\x20\156\x65\167\40\167\151\x74\x68\x64\162\141\x77\x3a\x20\x25\163", PR__MDL__SALARY), implode("\74\x62\162\x2f\x3e", $ueeagokqmgisgauy)); goto yqicwmekwuoywyus; kwmiwaecqcgiaqye: try { User::symcgieuakksimmu()->oiagiswyysamcyag($miowmmgaiagcuyoo, $kooascmqqwmaskmi); $uamcoiueqaamsqma = __("\x59\x6f\165\162\40\x77\151\x74\150\x64\162\x61\167\x20\x69\x73\x20\x73\x75\142\155\151\x74\x74\145\x64\x20\163\x75\143\143\x65\x73\163\146\x75\154\x6c\171\56", PR__MDL__SALARY); $occymigcemkqucuw = true; } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf(__("\x43\141\156\x20\156\157\164\40\163\141\x76\x65\x20\x72\x65\x6c\x61\164\151\157\x6e\40\x73\x68\151\x70\x3a\x20\45\163", PR__MDL__SALARY), $wgaoewqkwgomoaai->sagusgigmkeysock()); } if ($occymigcemkqucuw) { goto jsmisuccwyukksgc; } try { $euakemkgmcigqycw->delete(); } catch (Exception $wgaoewqkwgomoaai) { } jsmisuccwyukksgc: yqicwmekwuoywyus: eekaiaeqewiqkkgm: uyeyscsaigimsqwq: wkiymcoqqiigqaaw: qmokwkocmcyeyesc: return [self::ckcawaoawwioqecq => $occymigcemkqucuw, self::eoskkkieowogacws => $uamcoiueqaamsqma]; } }
