<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6554aeeb327ff             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Module\Salary\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class BankAccount extends Controller { protected ?User $userManager = null; public function __construct() { $this->rest_base = "\142\141\156\x6b\x2d\141\143\143\157\165\x6e\164"; $this->userManager = User::symcgieuakksimmu(); parent::__construct(); } public function gomiusgyskywsqai() : ?User { return $this->userManager; } public function register_routes() { $this->register("\x2f\x67\x65\x74\x2d\x6c\x69\163\164", [self::wwgusigoaksqmwsm => [$this, "\143\151\165\x67\167\x6f\x6f\141\163\141\x71\143\x79\x77\141\163"]]); $this->register("\57\147\145\x74\55\146\151\x65\x6c\144\x73", [self::wwgusigoaksqmwsm => [$this, "\x75\x67\x6d\143\x65\143\x63\x67\x77\x61\x61\x61\151\147\151\171"]]); $this->register("\x2f\163\141\166\145", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\163\141\166\x65"]]); $this->register("\x2f\x64\x65\x6c\x65\x74\x65", [self::oaggieeykyaoiiyw => self::kqqquayqkucokyqi, self::wwgusigoaksqmwsm => [$this, "\144\145\154\145\164\145"]]); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->geosscgquaqosyse(); $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function delete(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto suswcqoyyqkkquuo; } if ($uusmaiomayssaecw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm)) { goto soqqemyioggmoakg; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\141\143\143\x6f\x75\156\164\x20\160\141\162\x61\155\145\164\145\162\x20\x69\163\40\x6d\151\163\x73\x69\x6e\x67", PR__MDL__SALARY)); goto acaqummmoyiemqss; soqqemyioggmoakg: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); $ygikoqaokckisawo = $wusccgcckucqsqwe->guimqgyewioyekuy($mkucggyaiaukqoce); if ($eiwicgsqoiaeawkk = $gkyciwoiiisgywcs->get($ygikoqaokckisawo, $uusmaiomayssaecw)) { goto ywqgcegomwaiuquc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x43\x61\156\40\x6e\x6f\164\40\146\151\156\x64\x20\162\x65\161\165\x65\163\164\x65\144\x20\x61\x63\143\157\x75\x6e\164", PR__MDL__SALARY)); goto wmmggowmigekyoso; ywqgcegomwaiuquc: if (!$gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, $wusccgcckucqsqwe::wagwccqcqwgsoyoi)) { goto miyqyeiwquwsacsm; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\157\165\x72\40\162\145\x71\165\145\163\x74\x65\x64\40\x61\143\x63\x6f\x75\156\x74\40\146\x6f\162\x20\162\145\x6d\157\x76\x65\x20\x69\x73\x20\x6c\x6f\x63\153\145\x64", PR__MDL__SALARY)); goto eegqyykygiccaoeo; miyqyeiwquwsacsm: $gkyciwoiiisgywcs->unset($ygikoqaokckisawo, $uusmaiomayssaecw); if ($wusccgcckucqsqwe->ksmqawcowkmegigw($ygikoqaokckisawo, $mkucggyaiaukqoce)) { goto ssoucoucsgccekwe; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\155\145\x74\150\x69\156\x67\x20\x77\x72\157\156\147\x20\x6f\156\40\x72\145\155\157\x76\145\40\160\x72\x6f\143\145\163\x73\54\40\x70\154\145\x61\163\145\x20\164\162\171\x20\x61\147\x61\151\156", PR__MDL__SALARY)); goto qkcyqocqqwmqgqww; ssoucoucsgccekwe: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x42\141\156\x6b\x20\x61\143\x63\x6f\165\x6e\x74\40\x72\145\155\x6f\x76\145\144\x20\x73\x75\x63\143\x65\x73\x73\x66\x75\154\154\171", PR__MDL__SALARY)); qkcyqocqqwmqgqww: eegqyykygiccaoeo: wmmggowmigekyoso: acaqummmoyiemqss: goto eeqesooyqagwawae; suswcqoyyqkkquuo: $keccaugmemegoimu = $mkucggyaiaukqoce; eeqesooyqagwawae: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function save(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->cukkomiaseyomacg($aqmwamyiwgeeymqa, $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm)); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto qicwaskssogcokgm; } $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); $oammesyieqmwuwyi = $wusccgcckucqsqwe->guimqgyewioyekuy($keccaugmemegoimu); $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oammesyieqmwuwyi, self::ascagqcquwgmygkm); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oammesyieqmwuwyi, function ($aqmwamyiwgeeymqa, $igqsaukqcqscimok) use($wusccgcckucqsqwe) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eaoumsseceiowgsk = []; $icwicymcioeyeyek = []; $sqeykgyoooqysmca = $wusccgcckucqsqwe->mmymimkumuekmmgi()->yuuwwswmwmgmcyem($gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::squoamkioomemiyi)); $sogksuscggsicmac = []; foreach ($igqsaukqcqscimok as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $uescmseksquycukc = false; $meqocwsecsywiiqs = ''; $sqqewmoeaekuyyas = 0; switch ($uusmaiomayssaecw) { case $wusccgcckucqsqwe::wagwccqcqwgsoyoi: $uescmseksquycukc = true; $sogksuscggsicmac[self::ciywsqoeiymemsys] = $eqgoocgaqwqcimie ? "\x6c\x6f\143\x6b\145\144" : "\x65\144\151\x74\141\x62\x6c\145"; $sogksuscggsicmac[self::ciywsqoeiymemsys . self::icmokuskwoskgace] = $eqgoocgaqwqcimie ? __("\114\157\143\153\x65\x64", PR__MDL__SALARY) : __("\105\144\151\x74\x61\x62\154\x65", PR__MDL__SALARY); goto iekumemscwieugqw; case $wusccgcckucqsqwe::squoamkioomemiyi: $meqocwsecsywiiqs = __("\x54\x79\x70\145", PR__MDL__SALARY); $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $eqgoocgaqwqcimie = $sqeykgyoooqysmca; $sqqewmoeaekuyyas = 2; goto iekumemscwieugqw; case $wusccgcckucqsqwe::oogeqgcgkamuoaoe: $uescmseksquycukc = true; $meqocwsecsywiiqs = __("\x42\x61\x6e\x6b", PR__MDL__SALARY); $sogksuscggsicmac[self::qgqyauaqwqmqseim] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->kwagkemgawuoacwy($eqgoocgaqwqcimie); $eqgoocgaqwqcimie = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->eoemoqciaweskqkk($eqgoocgaqwqcimie); $sqqewmoeaekuyyas = 1; goto iekumemscwieugqw; case $wusccgcckucqsqwe::iockmgiyoygcswog: $uescmseksquycukc = true; $meqocwsecsywiiqs = sprintf(__("\x4f\167\156\145\162\x20\157\146\x20\x25\x73", PR__MDL__SALARY), $sqeykgyoooqysmca); $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $sqqewmoeaekuyyas = 0; goto iekumemscwieugqw; case $wusccgcckucqsqwe::wyqmcowecikgawuu: case $wusccgcckucqsqwe::skyceaacaaaamiii: $uescmseksquycukc = true; $eaoumsseceiowgsk[$uusmaiomayssaecw] = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $wusccgcckucqsqwe::cqkcksqwkcsiykuq); $eqgoocgaqwqcimie = $this->msywmyaoqmaegsuy($eqgoocgaqwqcimie); $meqocwsecsywiiqs = sprintf(__("\x4e\165\x6d\x62\x65\x72\x20\x6f\x66\x20\45\163", PR__MDL__SALARY), $sqeykgyoooqysmca); $sqqewmoeaekuyyas = 99; goto iekumemscwieugqw; case $wusccgcckucqsqwe::ascagqcquwgmygkm: case $wusccgcckucqsqwe::cqkcksqwkcsiykuq: $uescmseksquycukc = true; $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; goto iekumemscwieugqw; } hoeeyiowekaeemko: iekumemscwieugqw: if (!$uescmseksquycukc) { goto kymkucucyeoeikim; } $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; kymkucucyeoeikim: if (!$meqocwsecsywiiqs) { goto usquiuuyiyqaeyiu; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [self::iuqumwggccmcuyem => $sqqewmoeaekuyyas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; usquiuuyiyqaeyiu: foeeqckqsyockkak: } oqugqwcyomiaaoqu: $sogksuscggsicmac[self::ygeqsmugcaeeeuwu] = $eaoumsseceiowgsk; $sogksuscggsicmac[self::uiwqcumqkgikqyue] = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($icwicymcioeyeyek); return $sogksuscggsicmac; }); qicwaskssogcokgm: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function cukkomiaseyomacg($aqmwamyiwgeeymqa, $uusmaiomayssaecw = false) { $keccaugmemegoimu = null; $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto gkyawqqcmigqgaiq; } $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); $uqyaagwcuoewkkss = $wusccgcckucqsqwe->mmymimkumuekmmgi(); $miowmmgaiagcuyoo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $wusccgcckucqsqwe::iockmgiyoygcswog); $sqeykgyoooqysmca = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $wusccgcckucqsqwe::squoamkioomemiyi); if ($miowmmgaiagcuyoo && $sqeykgyoooqysmca) { goto cmegwsegsosyqcai; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4d\x69\163\163\x69\156\x67\x20\163\157\155\145\40\162\145\x71\165\x69\x72\145\x20\146\x69\145\x6c\144\x73", PR__MDL__SALARY), 400); goto wmywuusgukmmaams; cmegwsegsosyqcai: $eqgoocgaqwqcimie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $sqeykgyoooqysmca); if ($eqgoocgaqwqcimie) { goto giaacoqqqsekcayy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\141\x6c\x75\145\x20\157\146\40\45\x73\x20\151\163\x20\x72\x65\161\x75\151\x72\145", PR__MDL__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem($sqeykgyoooqysmca)), 400); goto ewymsmkkiksgwysk; giaacoqqqsekcayy: $qmomekeesaiaoegu = $uqyaagwcuoewkkss->gcquickqgyqooyyu($eqgoocgaqwqcimie, $sqeykgyoooqysmca); if ($qmomekeesaiaoegu) { goto cgiscsqwwgqqaeqi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\131\x6f\x75\162\40\x62\x61\156\x6b\x20\151\x73\40\x6e\x6f\x74\40\x73\x75\160\x70\157\162\164\x20\x6f\162\x20\171\x6f\165\x72\x20\145\156\x74\145\x72\145\144\x20\45\163\40\x69\x73\x20\156\157\x74\40\166\141\x6c\x69\144", PR__MDL__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem($sqeykgyoooqysmca)), 400); goto syiqkaasoueowwui; cgiscsqwwgqqaeqi: $gmcgeogogyqsgawk = $wusccgcckucqsqwe->aceogymkeuswukyi([$sqeykgyoooqysmca => $eqgoocgaqwqcimie, $wusccgcckucqsqwe::iockmgiyoygcswog => $miowmmgaiagcuyoo, $wusccgcckucqsqwe::squoamkioomemiyi => $sqeykgyoooqysmca, $wusccgcckucqsqwe::oogeqgcgkamuoaoe => $qmomekeesaiaoegu]); if (!is_wp_error($gmcgeogogyqsgawk)) { goto wiysogeqqwgioyka; } $keccaugmemegoimu = $gmcgeogogyqsgawk; goto skkamseieeusycye; wiysogeqqwgioyka: $ygikoqaokckisawo = $wusccgcckucqsqwe->guimqgyewioyekuy($mkucggyaiaukqoce); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!$uusmaiomayssaecw) { goto esuiysskoweawsue; } $eiwicgsqoiaeawkk = $gkyciwoiiisgywcs->get($ygikoqaokckisawo, $uusmaiomayssaecw); if (!$eiwicgsqoiaeawkk) { goto uguigkcmukuouway; } $gkyciwoiiisgywcs->unset($ygikoqaokckisawo, $uusmaiomayssaecw); $gmcgeogogyqsgawk[self::ascagqcquwgmygkm] = $uusmaiomayssaecw; goto uqqaiagaeqgqgaiy; uguigkcmukuouway: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\157\x75\x20\x72\x65\x71\x75\145\163\x74\x65\144\x20\x61\143\x63\x6f\x75\x6e\x74\40\146\x6f\162\x20\x65\144\x69\164\x20\164\x68\x61\x74\40\156\157\164\x20\x65\170\x69\163\164", PR__MDL__SALARY), 400); uqqaiagaeqgqgaiy: esuiysskoweawsue: $ygogqywsaqoukoqy = $gmcgeogogyqsgawk[$wusccgcckucqsqwe::cqkcksqwkcsiykuq]; [$ksiyqouuaoymsycg, $gwsycqoiookakscg] = $gkyciwoiiisgywcs->ksiyqouuaoymsycg($ygikoqaokckisawo, $wusccgcckucqsqwe::cqkcksqwkcsiykuq, $ygogqywsaqoukoqy); if (!$ksiyqouuaoymsycg) { goto gaomwagkcciesyqy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\x6f\x75\x20\141\154\162\x65\141\144\x79\40\141\x64\144\x65\144\x20\164\150\x69\163\40\141\x63\x63\157\165\x6e\164\x20\156\165\155\x62\x65\162", PR__MDL__SALARY), 400); gaomwagkcciesyqy: if (is_wp_error($keccaugmemegoimu)) { goto soaccwqimeksgwiw; } $ygikoqaokckisawo[$uusmaiomayssaecw] = $gmcgeogogyqsgawk; if ($wusccgcckucqsqwe->ksmqawcowkmegigw($ygikoqaokckisawo, $mkucggyaiaukqoce)) { goto aegysmeecgcgayyw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf("\45\x73\74\x62\162\76\45\x73", __("\x53\157\155\145\x74\150\151\156\147\x20\167\162\157\156\x67\40\157\x6e\40\163\x61\166\151\156\x67\x20\160\x72\x6f\x63\x65\163\x73\x2c\40\160\x6c\145\x61\163\145\40\x74\162\171\x20\x61\147\141\151\x6e", PR__MDL__SALARY), __("\115\141\171\x62\x65\40\171\157\x75\x20\x63\150\141\156\x67\145\40\x6e\157\x74\150\151\x6e\x67\x2e", PR__MDL__SALARY))); goto suqkuqygkkgwyaie; aegysmeecgcgayyw: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x42\141\156\153\x20\141\143\x63\x6f\165\156\x74\40\x73\x61\x76\x65\144\x20\163\165\143\x63\145\163\x73\x66\x75\154\x6c\x79", PR__MDL__SALARY)); suqkuqygkkgwyaie: soaccwqimeksgwiw: skkamseieeusycye: syiqkaasoueowwui: ewymsmkkiksgwysk: wmywuusgukmmaams: goto ooeausyowguqicuo; gkyawqqcmigqgaiq: $keccaugmemegoimu = $mkucggyaiaukqoce; ooeausyowguqicuo: return $keccaugmemegoimu; } private function geosscgquaqosyse() : array { $ogougosiwuoqymou = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); return [$ogougosiwuoqymou->ymuegqgyuagyucws(self::iockmgiyoygcswog)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\101\143\143\157\x75\x6e\164\40\117\x77\156\145\162\x20\x4e\x61\x6d\x65", PR__MDL__SALARY)), $ogougosiwuoqymou->yyuwuqsiucweeoue(self::squoamkioomemiyi)->gswweykyogmsyawy(__("\x41\143\143\157\x75\156\x74\40\124\x79\160\145", PR__MDL__SALARY))->kesomeowemmyygey(User::wyqmcowecikgawuu, __("\x49\102\101\116", PR__MDL__SALARY))->kesomeowemmyygey(User::skyceaacaaaamiii, __("\x44\145\142\151\164\x20\x43\x61\x72\x64", PR__MDL__SALARY))->oeeumggeiyyckkom(User::wyqmcowecikgawuu, User::wyqmcowecikgawuu)->oeeumggeiyyckkom(User::skyceaacaaaamiii, User::skyceaacaaaamiii)->eumecwmqmukqgyea(), $ogougosiwuoqymou->ymuegqgyuagyucws(User::wyqmcowecikgawuu)->gswweykyogmsyawy(__("\111\x42\101\116", PR__MDL__SALARY))->uagmgmommooaewkk()->eumecwmqmukqgyea(), $ogougosiwuoqymou->ymuegqgyuagyucws(User::skyceaacaaaamiii)->gswweykyogmsyawy(__("\104\145\x62\x69\164\40\103\141\162\x64", PR__MDL__SALARY))->wykoackkeuuqeyss()->eumecwmqmukqgyea()]; } }
