<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b3f9e904396             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Module\Salary\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class BankAccount extends Controller { protected ?User $userManager = null; public function __construct() { $this->rest_base = "\142\x61\156\153\55\x61\143\x63\157\x75\x6e\x74"; $this->userManager = User::symcgieuakksimmu(); parent::__construct(); } public function gomiusgyskywsqai() : ?User { return $this->userManager; } public function register_routes() { $this->register("\x2f\147\x65\164\x2d\154\x69\x73\164", [self::wwgusigoaksqmwsm => [$this, "\143\151\165\147\x77\157\157\x61\x73\141\x71\x63\171\167\141\x73"]]); $this->register("\x2f\x67\145\164\55\x66\x69\x65\154\x64\163", [self::wwgusigoaksqmwsm => [$this, "\x75\x67\x6d\143\145\143\143\147\167\x61\x61\x61\x69\147\151\x79"]]); $this->register("\57\163\x61\x76\145", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\x73\141\x76\145"]]); $this->register("\57\x64\145\x6c\145\164\145", [self::oaggieeykyaoiiyw => self::kqqquayqkucokyqi, self::wwgusigoaksqmwsm => [$this, "\x64\145\x6c\145\164\x65"]]); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->geosscgquaqosyse(); $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function delete(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto osuscoaaomwcqkew; } if ($uusmaiomayssaecw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm)) { goto qiaimmucomukkeka; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x61\143\x63\157\x75\x6e\164\40\160\x61\162\141\155\145\164\x65\162\40\151\163\x20\x6d\x69\x73\x73\151\156\x67", PR__MDL__SALARY)); goto aoquoewagkseayug; qiaimmucomukkeka: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); $ygikoqaokckisawo = $wusccgcckucqsqwe->guimqgyewioyekuy($mkucggyaiaukqoce); if ($eiwicgsqoiaeawkk = $gkyciwoiiisgywcs->get($ygikoqaokckisawo, $uusmaiomayssaecw)) { goto uoeasoimegouymka; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\103\x61\x6e\x20\156\x6f\x74\x20\146\151\x6e\144\40\162\145\x71\x75\x65\163\x74\145\x64\40\x61\x63\143\x6f\x75\x6e\x74", PR__MDL__SALARY)); goto egsycocugqyyswsi; uoeasoimegouymka: if (!$gkyciwoiiisgywcs->get($eiwicgsqoiaeawkk, $wusccgcckucqsqwe::wagwccqcqwgsoyoi)) { goto oocuemosmeeekgas; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\157\165\162\40\x72\x65\161\165\x65\163\164\145\x64\x20\x61\x63\143\x6f\165\x6e\x74\40\146\x6f\162\40\162\x65\155\157\166\145\x20\151\x73\x20\154\157\143\x6b\x65\144", PR__MDL__SALARY)); goto qkcsykuocwuyaice; oocuemosmeeekgas: $gkyciwoiiisgywcs->unset($ygikoqaokckisawo, $uusmaiomayssaecw); if ($wusccgcckucqsqwe->ksmqawcowkmegigw($ygikoqaokckisawo, $mkucggyaiaukqoce)) { goto agkmiayuawacakau; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\x6d\x65\x74\x68\151\156\x67\x20\167\x72\x6f\x6e\x67\x20\x6f\156\x20\x72\x65\155\157\x76\145\x20\x70\x72\157\x63\145\x73\x73\x2c\40\x70\154\145\141\163\x65\40\x74\x72\171\40\x61\x67\141\x69\156", PR__MDL__SALARY)); goto syuaummumssgwwee; agkmiayuawacakau: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\102\141\156\153\x20\141\143\143\157\165\156\164\x20\162\x65\155\157\x76\x65\144\x20\x73\165\143\143\x65\163\163\x66\165\154\x6c\171", PR__MDL__SALARY)); syuaummumssgwwee: qkcsykuocwuyaice: egsycocugqyyswsi: aoquoewagkseayug: goto ciucewqgyoiouesq; osuscoaaomwcqkew: $keccaugmemegoimu = $mkucggyaiaukqoce; ciucewqgyoiouesq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function save(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->cukkomiaseyomacg($aqmwamyiwgeeymqa, $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm)); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto uycesqqkoeamocgm; } $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); $oammesyieqmwuwyi = $wusccgcckucqsqwe->guimqgyewioyekuy($keccaugmemegoimu); $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oammesyieqmwuwyi, self::ascagqcquwgmygkm); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oammesyieqmwuwyi, function ($aqmwamyiwgeeymqa, $igqsaukqcqscimok) use($wusccgcckucqsqwe) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $eaoumsseceiowgsk = []; $icwicymcioeyeyek = []; $sqeykgyoooqysmca = $wusccgcckucqsqwe->mmymimkumuekmmgi()->yuuwwswmwmgmcyem($gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::squoamkioomemiyi)); $sogksuscggsicmac = []; foreach ($igqsaukqcqscimok as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $uescmseksquycukc = false; $meqocwsecsywiiqs = ''; $sqqewmoeaekuyyas = 0; switch ($uusmaiomayssaecw) { case $wusccgcckucqsqwe::wagwccqcqwgsoyoi: $uescmseksquycukc = true; $sogksuscggsicmac[self::ciywsqoeiymemsys] = $eqgoocgaqwqcimie ? "\154\157\143\153\145\x64" : "\145\144\x69\164\141\142\154\145"; $sogksuscggsicmac[self::ciywsqoeiymemsys . self::icmokuskwoskgace] = $eqgoocgaqwqcimie ? __("\x4c\157\x63\153\145\x64", PR__MDL__SALARY) : __("\x45\x64\x69\x74\141\x62\154\x65", PR__MDL__SALARY); goto ussceseaimqywuiy; case $wusccgcckucqsqwe::squoamkioomemiyi: $meqocwsecsywiiqs = __("\x54\x79\x70\x65", PR__MDL__SALARY); $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $eqgoocgaqwqcimie = $sqeykgyoooqysmca; $sqqewmoeaekuyyas = 2; goto ussceseaimqywuiy; case $wusccgcckucqsqwe::oogeqgcgkamuoaoe: $uescmseksquycukc = true; $meqocwsecsywiiqs = __("\x42\x61\x6e\153", PR__MDL__SALARY); $sogksuscggsicmac[self::qgqyauaqwqmqseim] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->kwagkemgawuoacwy($eqgoocgaqwqcimie); $eqgoocgaqwqcimie = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->eoemoqciaweskqkk($eqgoocgaqwqcimie); $sqqewmoeaekuyyas = 1; goto ussceseaimqywuiy; case $wusccgcckucqsqwe::iockmgiyoygcswog: $uescmseksquycukc = true; $meqocwsecsywiiqs = sprintf(__("\x4f\x77\x6e\145\x72\40\157\146\40\x25\x73", PR__MDL__SALARY), $sqeykgyoooqysmca); $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $sqqewmoeaekuyyas = 0; goto ussceseaimqywuiy; case $wusccgcckucqsqwe::wyqmcowecikgawuu: case $wusccgcckucqsqwe::skyceaacaaaamiii: $uescmseksquycukc = true; $eaoumsseceiowgsk[$uusmaiomayssaecw] = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $wusccgcckucqsqwe::cqkcksqwkcsiykuq); $eqgoocgaqwqcimie = $this->msywmyaoqmaegsuy($eqgoocgaqwqcimie); $meqocwsecsywiiqs = sprintf(__("\x4e\165\x6d\142\145\x72\40\157\x66\40\x25\163", PR__MDL__SALARY), $sqeykgyoooqysmca); $sqqewmoeaekuyyas = 99; goto ussceseaimqywuiy; case $wusccgcckucqsqwe::ascagqcquwgmygkm: case $wusccgcckucqsqwe::cqkcksqwkcsiykuq: $uescmseksquycukc = true; $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; goto ussceseaimqywuiy; } oyiuemaaykgkqqam: ussceseaimqywuiy: if (!$uescmseksquycukc) { goto gqmewagyagamokok; } $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; gqmewagyagamokok: if (!$meqocwsecsywiiqs) { goto sqmoqymckwsogsqg; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [self::iuqumwggccmcuyem => $sqqewmoeaekuyyas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; sqmoqymckwsogsqg: mkomygccqkmkumsi: } cgmgqucewwssmicq: $sogksuscggsicmac[self::ygeqsmugcaeeeuwu] = $eaoumsseceiowgsk; $sogksuscggsicmac[self::uiwqcumqkgikqyue] = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($icwicymcioeyeyek); return $sogksuscggsicmac; }); uycesqqkoeamocgm: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function cukkomiaseyomacg($aqmwamyiwgeeymqa, $uusmaiomayssaecw = false) { $keccaugmemegoimu = null; $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto ecouwqosmoyyqmkw; } $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); $uqyaagwcuoewkkss = $wusccgcckucqsqwe->mmymimkumuekmmgi(); $miowmmgaiagcuyoo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $wusccgcckucqsqwe::iockmgiyoygcswog); $sqeykgyoooqysmca = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $wusccgcckucqsqwe::squoamkioomemiyi); if ($miowmmgaiagcuyoo && $sqeykgyoooqysmca) { goto yoagcooekomeokwg; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4d\151\x73\163\151\x6e\x67\x20\163\x6f\155\x65\40\162\x65\161\165\x69\x72\145\40\x66\151\x65\x6c\x64\x73", PR__MDL__SALARY), 400); goto eckcqesiokgwkkiw; yoagcooekomeokwg: $eqgoocgaqwqcimie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $sqeykgyoooqysmca); if ($eqgoocgaqwqcimie) { goto iksewmsaugayqaqq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\x61\x6c\165\x65\x20\157\x66\x20\x25\x73\40\151\x73\40\162\145\161\165\x69\162\x65", PR__MDL__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem($sqeykgyoooqysmca)), 400); goto yamyagayiooyeekg; iksewmsaugayqaqq: $qmomekeesaiaoegu = $uqyaagwcuoewkkss->gcquickqgyqooyyu($eqgoocgaqwqcimie, $sqeykgyoooqysmca); if ($qmomekeesaiaoegu) { goto quaqmuusokiyqgqe; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\131\x6f\x75\162\x20\x62\x61\x6e\153\40\151\x73\40\156\x6f\164\x20\x73\x75\x70\160\157\x72\x74\x20\x6f\162\x20\x79\x6f\x75\162\x20\x65\x6e\x74\x65\162\x65\x64\x20\x25\163\x20\x69\x73\x20\156\x6f\164\x20\x76\x61\x6c\x69\x64", PR__MDL__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem($sqeykgyoooqysmca)), 400); goto smiemmcqqukyguuu; quaqmuusokiyqgqe: $gmcgeogogyqsgawk = $wusccgcckucqsqwe->aceogymkeuswukyi([$sqeykgyoooqysmca => $eqgoocgaqwqcimie, $wusccgcckucqsqwe::iockmgiyoygcswog => $miowmmgaiagcuyoo, $wusccgcckucqsqwe::squoamkioomemiyi => $sqeykgyoooqysmca, $wusccgcckucqsqwe::oogeqgcgkamuoaoe => $qmomekeesaiaoegu]); if (!is_wp_error($gmcgeogogyqsgawk)) { goto easqmyamcmeesgya; } $keccaugmemegoimu = $gmcgeogogyqsgawk; goto yuqgwwmqwqiuwmaw; easqmyamcmeesgya: $ygikoqaokckisawo = $wusccgcckucqsqwe->guimqgyewioyekuy($mkucggyaiaukqoce); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!$uusmaiomayssaecw) { goto wkgskiuiukiuyque; } $eiwicgsqoiaeawkk = $gkyciwoiiisgywcs->get($ygikoqaokckisawo, $uusmaiomayssaecw); if (!$eiwicgsqoiaeawkk) { goto ceiwqkyquikcemmo; } $gkyciwoiiisgywcs->unset($ygikoqaokckisawo, $uusmaiomayssaecw); $gmcgeogogyqsgawk[self::ascagqcquwgmygkm] = $uusmaiomayssaecw; goto ukomuiwukymcoaso; ceiwqkyquikcemmo: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\157\165\x20\162\x65\x71\x75\x65\x73\x74\145\144\40\x61\x63\x63\157\x75\x6e\164\x20\x66\x6f\162\40\145\x64\x69\164\x20\164\x68\141\164\x20\x6e\157\164\40\145\170\151\163\x74", PR__MDL__SALARY), 400); ukomuiwukymcoaso: wkgskiuiukiuyque: $ygogqywsaqoukoqy = $gmcgeogogyqsgawk[$wusccgcckucqsqwe::cqkcksqwkcsiykuq]; [$ksiyqouuaoymsycg, $gwsycqoiookakscg] = $gkyciwoiiisgywcs->find($ygikoqaokckisawo, $wusccgcckucqsqwe::cqkcksqwkcsiykuq, $ygogqywsaqoukoqy); if (!$ksiyqouuaoymsycg) { goto oyiuyywyeoskckuw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\157\x75\40\141\x6c\162\x65\x61\144\171\40\x61\144\144\145\144\40\164\150\151\163\40\141\143\x63\x6f\x75\156\x74\x20\156\165\155\x62\145\162", PR__MDL__SALARY), 400); oyiuyywyeoskckuw: if (is_wp_error($keccaugmemegoimu)) { goto qkuiwoqksgayqqmg; } $ygikoqaokckisawo[$uusmaiomayssaecw] = $gmcgeogogyqsgawk; if ($wusccgcckucqsqwe->ksmqawcowkmegigw($ygikoqaokckisawo, $mkucggyaiaukqoce)) { goto goqmywuiicciasyk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf("\x25\x73\74\x62\x72\76\45\x73", __("\123\157\x6d\x65\x74\x68\151\156\147\40\x77\162\x6f\x6e\147\40\157\156\x20\x73\x61\x76\151\x6e\x67\x20\x70\162\157\x63\x65\x73\x73\54\40\x70\154\145\x61\163\145\x20\164\x72\171\x20\141\147\141\x69\156", PR__MDL__SALARY), __("\x4d\141\171\x62\145\x20\x79\x6f\x75\40\x63\x68\x61\156\x67\145\40\156\157\164\150\151\x6e\x67\x2e", PR__MDL__SALARY))); goto siecswkggyikqkga; goqmywuiicciasyk: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x42\x61\x6e\153\x20\x61\143\143\x6f\165\x6e\x74\40\x73\141\x76\145\x64\40\163\165\143\143\145\x73\163\x66\165\154\x6c\x79", PR__MDL__SALARY)); siecswkggyikqkga: qkuiwoqksgayqqmg: yuqgwwmqwqiuwmaw: smiemmcqqukyguuu: yamyagayiooyeekg: eckcqesiokgwkkiw: goto mqiiqkuaoekeuswo; ecouwqosmoyyqmkw: $keccaugmemegoimu = $mkucggyaiaukqoce; mqiiqkuaoekeuswo: return $keccaugmemegoimu; } private function geosscgquaqosyse() : array { $ogougosiwuoqymou = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); return [$ogougosiwuoqymou->ymuegqgyuagyucws(self::iockmgiyoygcswog)->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\101\143\x63\157\165\x6e\164\40\x4f\x77\156\145\162\40\116\x61\155\145", PR__MDL__SALARY)), $ogougosiwuoqymou->yyuwuqsiucweeoue(self::squoamkioomemiyi)->gswweykyogmsyawy(__("\x41\x63\143\x6f\165\156\164\x20\124\171\x70\145", PR__MDL__SALARY))->kesomeowemmyygey(User::wyqmcowecikgawuu, __("\x49\x42\x41\x4e", PR__MDL__SALARY))->kesomeowemmyygey(User::skyceaacaaaamiii, __("\104\145\x62\x69\164\40\x43\141\x72\x64", PR__MDL__SALARY))->qyucewwiggkyeaso(User::wyqmcowecikgawuu, User::wyqmcowecikgawuu)->qyucewwiggkyeaso(User::skyceaacaaaamiii, User::skyceaacaaaamiii)->eumecwmqmukqgyea(), $ogougosiwuoqymou->ymuegqgyuagyucws(User::wyqmcowecikgawuu)->gswweykyogmsyawy(__("\x49\102\x41\x4e", PR__MDL__SALARY))->uagmgmommooaewkk()->eumecwmqmukqgyea(), $ogougosiwuoqymou->ymuegqgyuagyucws(User::skyceaacaaaamiii)->gswweykyogmsyawy(__("\x44\x65\x62\151\164\40\103\x61\x72\x64", PR__MDL__SALARY))->wykoackkeuuqeyss()->eumecwmqmukqgyea()]; } }
