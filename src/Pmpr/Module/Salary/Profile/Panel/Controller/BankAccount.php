<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c0cbfa217c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Salary\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class BankAccount extends Controller { protected ?User $userManager = null; public function __construct() { $this->rest_base = "\x62\141\x6e\153\55\141\143\143\x6f\x75\x6e\164"; $this->userManager = User::symcgieuakksimmu(); parent::__construct(); } public function gomiusgyskywsqai() : ?User { return $this->userManager; } public function register_routes() { $this->register("\57\x67\x65\x74\55\154\x69\163\x74", [self::wwgusigoaksqmwsm => [$this, "\x63\151\x75\x67\x77\x6f\157\141\163\141\161\143\171\x77\141\163"]]); $this->register("\57\x67\145\164\55\146\x69\145\154\144\x73", [self::wwgusigoaksqmwsm => [$this, "\x75\x67\155\x63\145\143\x63\147\167\141\141\141\x69\147\151\x79"]]); $this->register("\x2f\x73\x61\x76\145", ["\x6d\x65\164\x68\157\144\163" => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\163\x61\x76\145"]]); $this->register("\57\x64\x65\x6c\x65\164\145", ["\155\145\164\x68\x6f\x64\x73" => self::kqqquayqkucokyqi, self::wwgusigoaksqmwsm => [$this, "\x64\x65\154\x65\164\x65"]]); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->geosscgquaqosyse(); $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function delete(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto egsycocugqyyswsi; } if ($uusmaiomayssaecw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm)) { goto qkcsykuocwuyaice; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\141\143\x63\157\x75\156\164\x20\x70\x61\x72\x61\155\x65\164\x65\162\x20\x69\x73\40\155\151\163\163\151\156\x67", PR__MDL__SALARY)); goto uoeasoimegouymka; qkcsykuocwuyaice: $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); $ygikoqaokckisawo = $wusccgcckucqsqwe->guimqgyewioyekuy($mkucggyaiaukqoce); $eiwicgsqoiaeawkk = ManipulateArray::get($ygikoqaokckisawo, $uusmaiomayssaecw); if ($eiwicgsqoiaeawkk) { goto syuaummumssgwwee; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x43\141\x6e\40\x6e\157\164\40\146\x69\x6e\x64\x20\162\145\161\165\x65\x73\x74\x65\x64\40\x61\143\x63\157\x75\156\x74", PR__MDL__SALARY)); goto oocuemosmeeekgas; syuaummumssgwwee: if (!ManipulateArray::get($eiwicgsqoiaeawkk, $wusccgcckucqsqwe::wagwccqcqwgsoyoi)) { goto sguskaeaaqcagqgc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\x6f\165\x72\x20\x72\145\x71\x75\145\163\x74\x65\x64\40\x61\x63\x63\157\165\x6e\164\40\x66\157\x72\40\162\145\155\157\x76\145\x20\x69\x73\40\154\x6f\x63\153\x65\144", PR__MDL__SALARY)); goto agkmiayuawacakau; sguskaeaaqcagqgc: ManipulateArray::unset($ygikoqaokckisawo, $uusmaiomayssaecw); if ($wusccgcckucqsqwe->ksmqawcowkmegigw($ygikoqaokckisawo, $mkucggyaiaukqoce)) { goto ucuoeymyqeokgsya; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\x6d\145\x74\x68\x69\156\x67\40\167\x72\157\156\147\x20\x6f\x6e\40\162\x65\x6d\157\166\x65\40\160\x72\157\143\x65\x73\x73\54\x20\x70\154\x65\x61\x73\145\x20\164\x72\x79\40\x61\147\141\151\156", PR__MDL__SALARY)); goto yuuyikiacmmueosu; ucuoeymyqeokgsya: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\102\141\x6e\x6b\40\x61\x63\x63\x6f\x75\156\164\40\162\x65\155\157\166\145\144\x20\163\165\143\x63\145\163\x73\146\x75\154\154\x79", PR__MDL__SALARY)); yuuyikiacmmueosu: agkmiayuawacakau: oocuemosmeeekgas: uoeasoimegouymka: goto qiaimmucomukkeka; egsycocugqyyswsi: $keccaugmemegoimu = $mkucggyaiaukqoce; qiaimmucomukkeka: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function save(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->cukkomiaseyomacg($aqmwamyiwgeeymqa, $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm)); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto oyiuemaaykgkqqam; } $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); $oammesyieqmwuwyi = $wusccgcckucqsqwe->guimqgyewioyekuy($keccaugmemegoimu); $oammesyieqmwuwyi = ManipulateArray::yaeiiwwyckwugsem($oammesyieqmwuwyi, self::ascagqcquwgmygkm); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oammesyieqmwuwyi, function ($aqmwamyiwgeeymqa, $igqsaukqcqscimok) use($wusccgcckucqsqwe) { $eaoumsseceiowgsk = []; $icwicymcioeyeyek = []; $sqeykgyoooqysmca = $wusccgcckucqsqwe->mmymimkumuekmmgi()->yuuwwswmwmgmcyem(ManipulateArray::get($igqsaukqcqscimok, self::squoamkioomemiyi)); $sogksuscggsicmac = []; foreach ($igqsaukqcqscimok as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $uescmseksquycukc = false; $meqocwsecsywiiqs = ''; $sqqewmoeaekuyyas = 0; switch ($uusmaiomayssaecw) { case $wusccgcckucqsqwe::wagwccqcqwgsoyoi: $uescmseksquycukc = true; $sogksuscggsicmac[self::ciywsqoeiymemsys] = $eqgoocgaqwqcimie ? "\154\x6f\143\x6b\x65\144" : "\145\144\151\164\141\x62\154\145"; $sogksuscggsicmac[self::ciywsqoeiymemsys . self::icmokuskwoskgace] = $eqgoocgaqwqcimie ? __("\114\x6f\143\153\x65\144", PR__MDL__SALARY) : __("\x45\144\151\x74\x61\142\154\x65", PR__MDL__SALARY); goto ciucewqgyoiouesq; case $wusccgcckucqsqwe::squoamkioomemiyi: $meqocwsecsywiiqs = __("\124\171\x70\x65", PR__MDL__SALARY); $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $eqgoocgaqwqcimie = $sqeykgyoooqysmca; $sqqewmoeaekuyyas = 2; goto ciucewqgyoiouesq; case $wusccgcckucqsqwe::oogeqgcgkamuoaoe: $uescmseksquycukc = true; $meqocwsecsywiiqs = __("\x42\141\156\153", PR__MDL__SALARY); $sogksuscggsicmac[self::qgqyauaqwqmqseim] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->kwagkemgawuoacwy($eqgoocgaqwqcimie); $eqgoocgaqwqcimie = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->eoemoqciaweskqkk($eqgoocgaqwqcimie); $sqqewmoeaekuyyas = 1; goto ciucewqgyoiouesq; case $wusccgcckucqsqwe::iockmgiyoygcswog: $uescmseksquycukc = true; $meqocwsecsywiiqs = sprintf(__("\117\x77\156\x65\162\40\x6f\x66\x20\x25\x73", PR__MDL__SALARY), $sqeykgyoooqysmca); $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $sqqewmoeaekuyyas = 0; goto ciucewqgyoiouesq; case $wusccgcckucqsqwe::wyqmcowecikgawuu: case $wusccgcckucqsqwe::skyceaacaaaamiii: $uescmseksquycukc = true; $eaoumsseceiowgsk[$uusmaiomayssaecw] = ManipulateArray::get($igqsaukqcqscimok, $wusccgcckucqsqwe::cqkcksqwkcsiykuq); $eqgoocgaqwqcimie = $this->msywmyaoqmaegsuy($eqgoocgaqwqcimie); $meqocwsecsywiiqs = sprintf(__("\x4e\165\x6d\142\x65\x72\x20\x6f\146\40\x25\163", PR__MDL__SALARY), $sqeykgyoooqysmca); $sqqewmoeaekuyyas = 99; goto ciucewqgyoiouesq; case $wusccgcckucqsqwe::ascagqcquwgmygkm: case $wusccgcckucqsqwe::cqkcksqwkcsiykuq: $uescmseksquycukc = true; $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; goto ciucewqgyoiouesq; } cgmgqucewwssmicq: ciucewqgyoiouesq: if (!$uescmseksquycukc) { goto mkomygccqkmkumsi; } $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; mkomygccqkmkumsi: if (!$meqocwsecsywiiqs) { goto ussceseaimqywuiy; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [self::iuqumwggccmcuyem => $sqqewmoeaekuyyas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; ussceseaimqywuiy: osuscoaaomwcqkew: } aoquoewagkseayug: $sogksuscggsicmac["\x66\157\162\x6d"] = $eaoumsseceiowgsk; $sogksuscggsicmac[self::uiwqcumqkgikqyue] = ManipulateArray::yaeiiwwyckwugsem($icwicymcioeyeyek); return $sogksuscggsicmac; }); oyiuemaaykgkqqam: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function cukkomiaseyomacg($aqmwamyiwgeeymqa, $uusmaiomayssaecw = false) { $keccaugmemegoimu = null; $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto yamyagayiooyeekg; } $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); $uqyaagwcuoewkkss = $wusccgcckucqsqwe->mmymimkumuekmmgi(); $miowmmgaiagcuyoo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $wusccgcckucqsqwe::iockmgiyoygcswog); $sqeykgyoooqysmca = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $wusccgcckucqsqwe::squoamkioomemiyi); if ($miowmmgaiagcuyoo && $sqeykgyoooqysmca) { goto smiemmcqqukyguuu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\115\x69\x73\x73\151\156\x67\x20\163\x6f\x6d\x65\x20\x72\x65\161\165\x69\x72\145\40\146\151\x65\154\x64\163", PR__MDL__SALARY), 400); goto iksewmsaugayqaqq; smiemmcqqukyguuu: $eqgoocgaqwqcimie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $sqeykgyoooqysmca); if ($eqgoocgaqwqcimie) { goto yuqgwwmqwqiuwmaw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x56\141\x6c\x75\145\x20\x6f\146\x20\45\163\x20\x69\163\x20\x72\145\x71\165\x69\x72\145", PR__MDL__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem($sqeykgyoooqysmca)), 400); goto quaqmuusokiyqgqe; yuqgwwmqwqiuwmaw: $qmomekeesaiaoegu = $uqyaagwcuoewkkss->gcquickqgyqooyyu($eqgoocgaqwqcimie, $sqeykgyoooqysmca); if ($qmomekeesaiaoegu) { goto qkuiwoqksgayqqmg; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\131\157\165\x72\x20\142\x61\x6e\x6b\x20\151\x73\x20\156\x6f\164\x20\x73\165\x70\x70\157\x72\164\40\157\162\40\171\157\165\162\x20\145\x6e\164\x65\x72\145\144\40\x25\x73\40\x69\163\40\156\x6f\x74\40\166\141\154\x69\x64", PR__MDL__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem($sqeykgyoooqysmca)), 400); goto easqmyamcmeesgya; qkuiwoqksgayqqmg: $gmcgeogogyqsgawk = $wusccgcckucqsqwe->aceogymkeuswukyi([$sqeykgyoooqysmca => $eqgoocgaqwqcimie, $wusccgcckucqsqwe::iockmgiyoygcswog => $miowmmgaiagcuyoo, $wusccgcckucqsqwe::squoamkioomemiyi => $sqeykgyoooqysmca, $wusccgcckucqsqwe::oogeqgcgkamuoaoe => $qmomekeesaiaoegu]); if (!is_wp_error($gmcgeogogyqsgawk)) { goto goqmywuiicciasyk; } $keccaugmemegoimu = $gmcgeogogyqsgawk; goto siecswkggyikqkga; goqmywuiicciasyk: $ygikoqaokckisawo = $wusccgcckucqsqwe->guimqgyewioyekuy($mkucggyaiaukqoce); if (!$uusmaiomayssaecw) { goto uycesqqkoeamocgm; } $eiwicgsqoiaeawkk = ManipulateArray::get($ygikoqaokckisawo, $uusmaiomayssaecw); if (!$eiwicgsqoiaeawkk) { goto gqmewagyagamokok; } ManipulateArray::unset($ygikoqaokckisawo, $uusmaiomayssaecw); $gmcgeogogyqsgawk[self::ascagqcquwgmygkm] = $uusmaiomayssaecw; goto sqmoqymckwsogsqg; gqmewagyagamokok: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\x6f\x75\40\162\145\161\x75\145\163\164\x65\x64\40\141\x63\x63\157\x75\x6e\164\x20\x66\157\x72\40\x65\x64\x69\x74\x20\164\150\141\x74\x20\156\157\164\x20\x65\170\151\163\x74", PR__MDL__SALARY), 400); sqmoqymckwsogsqg: uycesqqkoeamocgm: $ygogqywsaqoukoqy = $gmcgeogogyqsgawk[$wusccgcckucqsqwe::cqkcksqwkcsiykuq]; [$ksiyqouuaoymsycg, $gwsycqoiookakscg] = ManipulateArray::ksiyqouuaoymsycg($ygikoqaokckisawo, $wusccgcckucqsqwe::cqkcksqwkcsiykuq, $ygogqywsaqoukoqy); if (!$ksiyqouuaoymsycg) { goto ceiwqkyquikcemmo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\157\165\x20\141\154\162\145\x61\144\x79\x20\x61\144\144\x65\x64\40\164\x68\x69\x73\40\x61\143\143\157\x75\x6e\164\x20\156\x75\155\x62\145\x72", PR__MDL__SALARY), 400); ceiwqkyquikcemmo: if (is_wp_error($keccaugmemegoimu)) { goto oyiuyywyeoskckuw; } $ygikoqaokckisawo[$uusmaiomayssaecw] = $gmcgeogogyqsgawk; if ($wusccgcckucqsqwe->ksmqawcowkmegigw($ygikoqaokckisawo, $mkucggyaiaukqoce)) { goto ukomuiwukymcoaso; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\155\x65\x74\x68\x69\x6e\147\40\x77\x72\x6f\x6e\x67\40\157\x6e\40\163\141\x76\151\156\147\x20\160\162\x6f\x63\145\163\x73\54\x20\x70\x6c\145\x61\x73\145\40\x74\x72\171\x20\141\147\x61\151\156", PR__MDL__SALARY)); goto wkgskiuiukiuyque; ukomuiwukymcoaso: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\102\141\156\153\x20\141\143\x63\x6f\165\156\x74\x20\x73\x61\166\145\x64\40\x73\x75\x63\143\145\x73\163\146\x75\x6c\154\x79", PR__MDL__SALARY)); wkgskiuiukiuyque: oyiuyywyeoskckuw: siecswkggyikqkga: easqmyamcmeesgya: quaqmuusokiyqgqe: iksewmsaugayqaqq: goto yoagcooekomeokwg; yamyagayiooyeekg: $keccaugmemegoimu = $mkucggyaiaukqoce; yoagcooekomeokwg: return $keccaugmemegoimu; } private function geosscgquaqosyse() : array { return [Form::ymuegqgyuagyucws(User::iockmgiyoygcswog, __("\101\x63\x63\157\x75\156\x74\40\x4f\x77\x6e\145\x72\40\116\141\x6d\145", PR__MDL__SALARY))->eumecwmqmukqgyea(), Form::yyuwuqsiucweeoue(User::squoamkioomemiyi, __("\101\143\x63\x6f\165\x6e\164\x20\x54\x79\x70\x65", PR__MDL__SALARY))->kesomeowemmyygey(User::wyqmcowecikgawuu, __("\111\x42\x41\x4e", PR__MDL__SALARY))->kesomeowemmyygey(User::skyceaacaaaamiii, __("\104\x65\142\151\x74\40\103\141\162\144", PR__MDL__SALARY))->agywyaaquwawwuiy([User::wyqmcowecikgawuu => User::wyqmcowecikgawuu, User::skyceaacaaaamiii => User::skyceaacaaaamiii])->eumecwmqmukqgyea(), Form::ymuegqgyuagyucws(User::wyqmcowecikgawuu, __("\x49\102\x41\116", PR__MDL__SALARY))->uagmgmommooaewkk()->eumecwmqmukqgyea(), Form::ymuegqgyuagyucws(User::skyceaacaaaamiii, __("\104\x65\142\x69\x74\40\103\x61\x72\144", PR__MDL__SALARY))->wykoackkeuuqeyss()->eumecwmqmukqgyea()]; } }
