<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abce985ecd6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Model\Payment; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Model\Withdraw as Model; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\BankAccount as BankAccountModel; use Pmpr\Module\Salary\Setting; use Pmpr\Module\Salary\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Withdraw extends Controller { const muwsgygqegywogka = "\141\147\x72\145\x65\x6d\145\x6e\164\x73"; public function __construct() { $this->rest_base = "\167\151\x74\150\144\x72\141\x77"; parent::__construct(); } public function register_routes() { $this->register("\x2f\147\145\164\55\154\x69\x73\164\55\x62\x79\x2d\165\x73\145\x72", [Constants::wwgusigoaksqmwsm => [$this, "\143\x75\x61\153\151\x65\153\163\x73\147\x6b\145\171\x73\167\141"]]); $this->register("\57\x67\145\164\55\x66\151\145\154\x64\x73", [Constants::wwgusigoaksqmwsm => [$this, "\165\147\x6d\143\x65\x63\143\147\x77\x61\x61\x61\x69\x67\x69\171"]]); $this->register("\57\163\x75\x62\x6d\151\164", ["\155\x65\164\150\157\x64\x73" => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x61\x65\x61\161\x67\171\163\x67\x61\145\157\x77\x61\x67\165\147"]]); $this->register("\57\143\141\x6c\x63\x75\154\x61\x74\x65", ["\155\145\x74\x68\157\144\163" => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\167\x73\x6f\145\165\x65\x6b\x61\155\x65\x65\x69\x63\x61\x73\x63"]]); $this->register("\57\x67\145\164\x2d\167\x69\x74\x68\x64\162\x61\x77", [Constants::wwgusigoaksqmwsm => [$this, "\163\143\x73\x69\145\x63\147\171\141\x6d\147\171\x69\x69\x61\x61"]]); $this->register("\57\x67\x65\x74\x2d\x69\x6e\x63\157\x6d\145\163", [Constants::wwgusigoaksqmwsm => [$this, "\x75\x79\x65\143\x63\157\171\x61\x73\x73\147\x6f\145\x77\x69\x77"]]); $this->register("\57\147\x65\x74\55\x70\x61\x79\x6d\145\156\x74\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x6b\x73\x77\151\x65\x6f\143\163\x6d\141\x61\x67\167\x6d\x6b\x71"]]); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $saqgcoqwmimycgim = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu); $euakemkgmcigqycw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\167\x69\164\x68\144\x72\x61\167"); if ($euakemkgmcigqycw) { $ogekyekymoyuywog = Income::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [Constants::yauicucwkgqyygas => $saqgcoqwmimycgim, $ogekyekymoyuywog::qyeimiaoamokwygy => $euakemkgmcigqycw]); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\157\155\x65\40\x72\x65\x71\x75\x69\x72\x65\40\x70\141\162\x61\x6d\x65\x74\145\162\163\x20\x69\x73\40\x6d\x69\x73\163\x69\x6e\x67\56", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kswieocsmaagwmkq(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $euakemkgmcigqycw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x77\x69\x74\150\144\x72\x61\167"); if ($euakemkgmcigqycw) { $oesweawoiuucekmw = Payment::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $oesweawoiuucekmw, [$oesweawoiuucekmw::qyeimiaoamokwygy => $euakemkgmcigqycw]); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\157\155\145\40\162\145\x71\165\151\162\x65\40\160\x61\x72\141\x6d\145\164\145\162\163\x20\151\163\40\x6d\151\x73\x73\151\156\x67\56", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function scsiecgyamgyiiaa(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x77\x69\x74\150\x64\162\x61\x77"); $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu); if ($aokagokqyuysuksm && $ycoeoaakqyskgykq) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $euakemkgmcigqycw = $jwsqucqyaoaasykk->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::yauicucwkgqyygas, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($jwsqucqyaoaasykk->kumuygiiqswoyasy(), $aokagokqyuysuksm)]); if ($euakemkgmcigqycw) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $euakemkgmcigqycw = $jwsqucqyaoaasykk->scqakcemaqsqkema($euakemkgmcigqycw); $icwicymcioeyeyek = [$jwsqucqyaoaasykk::wecooowsgcqkcoce => '', Constants::ciywsqoeiymemsys => '', Constants::aioqyewkwawaqgqe => '', Constants::CREATED_AT => '']; foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $igqsaukqcqscimok) { $wkaqekwwgqsqwcoi = ''; $meqocwsecsywiiqs = ''; $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($euakemkgmcigqycw, $uusmaiomayssaecw); switch ($uusmaiomayssaecw) { case $jwsqucqyaoaasykk::wecooowsgcqkcoce: if ($eqgoocgaqwqcimie) { $meqocwsecsywiiqs = __("\102\x61\156\153\40\x41\x63\143\x6f\x75\156\164", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($eqgoocgaqwqcimie, Constants::qgqyauaqwqmqseim, IconInterface::iwayyimcuywiagyy); $eqgoocgaqwqcimie = sprintf("\x25\x73\40\50\45\x73\x29", $gkyciwoiiisgywcs->get($eqgoocgaqwqcimie, User::oogeqgcgkamuoaoe), $gkyciwoiiisgywcs->get($eqgoocgaqwqcimie, Constants::iockmgiyoygcswog)); } break; case Constants::ciywsqoeiymemsys: $meqocwsecsywiiqs = __("\123\x74\x61\x74\165\x73", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = IconInterface::uywgggmcoacosiqa; break; case Constants::aioqyewkwawaqgqe: $meqocwsecsywiiqs = __("\101\155\x6f\165\156\164", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = IconInterface::eckamoaqmuuqkugg; break; case Constants::CREATED_AT: $meqocwsecsywiiqs = __("\x44\x61\x74\x65", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = IconInterface::uoouwyaycseeiysk; break; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [Constants::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; } $keccaugmemegoimu = $gkyciwoiiisgywcs->set($euakemkgmcigqycw, [Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek]); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\145\x71\165\145\x73\164\x65\144\40\167\x69\164\150\x64\x72\141\x77\40\156\157\164\x20\146\x6f\x75\x6e\x64\x2e", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\157\155\145\40\x72\x65\x71\165\151\162\145\40\x70\141\x72\x61\x6d\145\x74\x65\x72\163\x20\151\163\40\155\x69\x73\163\151\x6e\x67\x2e", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wsoeuekameeicasc(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu, true); $ywqqikcsamcaycgm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muwsgygqegywogka); if ($ycoeoaakqyskgykq && $ywqqikcsamcaycgm) { $suuagcecoyuweoqk = []; $ogekyekymoyuywog = Income::symcgieuakksimmu(); $oqseeekuqisekiwy = [$ogekyekymoyuywog::wagwccqcqwgsoyoi, $ogekyekymoyuywog::youiiwsayswmyuum, $ogekyekymoyuywog::gweieugwqicugemk]; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { $uoomaookgsyciacm = [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::yauicucwkgqyygas, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($ogekyekymoyuywog::cmiegiycgiucucgs, $xssuewsokckmigqk)]; foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq) { $uoomaookgsyciacm[] = $eqwoegegiamegqsm->gimqoiwysgoimciu()->asykgyemqgqyguei($iueymcwwscwqkiyq)->ykyiuaaycumywcqo($ogekyekymoyuywog::eiiuyoyiygsickwe, $iueymcwwscwqkiyq)->gwmaucmkaoasqgug($ogekyekymoyuywog::aioqyewkwawaqgqe); } $wcsgguaigguiiwcy = $ogekyekymoyuywog->iekyeyicoyyawomk()->cieaqygkucwoqwke($uoomaookgsyciacm); if ($wcsgguaigguiiwcy) { $wcsgguaigguiiwcy = (array) reset($wcsgguaigguiiwcy); $wcsgguaigguiiwcy[Constants::uiiqiokqwmccomiu] = array_sum($wcsgguaigguiiwcy); $suuagcecoyuweoqk[$xssuewsokckmigqk] = $wcsgguaigguiiwcy; } } $keccaugmemegoimu = [Constants::uiiqiokqwmccomiu => 0]; foreach ($suuagcecoyuweoqk as $wcsgguaigguiiwcy) { foreach ($wcsgguaigguiiwcy as $iueymcwwscwqkiyq => $qsmaqqyoggcuyukq) { if (!isset($keccaugmemegoimu[$iueymcwwscwqkiyq])) { $keccaugmemegoimu[$iueymcwwscwqkiyq] = $qsmaqqyoggcuyukq; } else { $keccaugmemegoimu[$iueymcwwscwqkiyq] += $qsmaqqyoggcuyukq; } } } $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $bsgyawiqyuquqmyy = 0; $uaesckuogcakkmaw = false; $ygeuioagqoqumwuw = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::iqkskgussyuogioe, 0); foreach ($keccaugmemegoimu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $ukwokcuqauuosmoo = ''; $qoiwmokisgikggia = ''; $sqqewmoeaekuyyas = 0; switch ($uusmaiomayssaecw) { case Constants::uiiqiokqwmccomiu: $ukwokcuqauuosmoo = __("\x54\x6f\164\141\154\x20\x6f\146\x20\x79\157\x75\162\x20\x69\x6e\143\157\x6d\x65\163\x20\146\157\x72\40\163\145\154\145\x63\164\145\x64\x20\x61\147\x72\145\x65\155\x65\156\x74\x73", PR__MDL__SALARY); $meqocwsecsywiiqs = __("\124\157\x74\141\x6c", PR__MDL__SALARY); $qoiwmokisgikggia = "\x64\x61\x72\x6b\55\x35\x30"; $sqqewmoeaekuyyas = 5; break; default: $meqocwsecsywiiqs = $ogekyekymoyuywog->iowygaiuiqkqimio($uusmaiomayssaecw); switch ($uusmaiomayssaecw) { case $ogekyekymoyuywog::wagwccqcqwgsoyoi: case $ogekyekymoyuywog::gweieugwqicugemk: if ($eqgoocgaqwqcimie) { $qoiwmokisgikggia = Constants::wyaqwomqwwaoiwas; $sqqewmoeaekuyyas = 10; if ($uusmaiomayssaecw === $ogekyekymoyuywog::wagwccqcqwgsoyoi) { $ukwokcuqauuosmoo = __("\111\155\160\x6f\163\163\x69\x62\x6c\145\x20\x74\157\x20\167\151\x74\150\144\162\141\x77\40\142\x65\x63\x61\x75\x73\x65\40\157\x66\40\x73\157\155\x65\x20\155\x61\156\x61\x67\145\162\151\x61\x6c\40\162\145\x61\x73\157\x6e\x73", PR__MDL__SALARY); } else { $ukwokcuqauuosmoo = __("\x49\155\160\x6f\x73\x73\151\x62\154\x65\x20\164\x6f\x20\167\151\164\x68\x64\162\x61\167\x20\x62\145\x63\x61\x75\163\145\x20\x6f\x66\x20\151\156\163\165\146\x66\151\x63\x69\145\156\164\x20\x73\141\154\145\163\x20\x76\157\x6c\165\155\x65", PR__MDL__SALARY); } $uaesckuogcakkmaw = true; } else { $meqocwsecsywiiqs = ''; } break; case $ogekyekymoyuywog::youiiwsayswmyuum: $bsgyawiqyuquqmyy = $eqgoocgaqwqcimie; if ($eqgoocgaqwqcimie < $ygeuioagqoqumwuw) { $eqgoocgaqwqcimie = 0; } $qoiwmokisgikggia = Constants::ckcawaoawwioqecq; $sqqewmoeaekuyyas = 100; $ukwokcuqauuosmoo = sprintf(__("\x59\x6f\165\162\40\164\157\x74\141\154\40\151\x6e\143\x6f\x6d\145\x20\164\x68\141\164\40\151\x73\40\150\151\x67\x68\x65\162\x20\164\150\x61\x6e\40\x25\x73", PR__MDL__SALARY), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis($ekymkycgewkiouqe->uqowqskaykgqokso($ygeuioagqoqumwuw))); break; } } if ($meqocwsecsywiiqs) { $keccaugmemegoimu[$uusmaiomayssaecw] = [Constants::ciyoccqkiamemcmm => $ekymkycgewkiouqe->uqowqskaykgqokso($eqgoocgaqwqcimie), Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::igssuqwuicwawgam => $qoiwmokisgikggia, Constants::iuqumwggccmcuyem => $sqqewmoeaekuyyas, Constants::eqkeooqcsscoggia => $ukwokcuqauuosmoo]; if ($uaesckuogcakkmaw && !isset($keccaugmemegoimu["\162\145\x6d\141\x69\x6e"])) { $keccaugmemegoimu["\162\145\155\141\x69\x6e"] = [Constants::ciyoccqkiamemcmm => $ekymkycgewkiouqe->uqowqskaykgqokso($bsgyawiqyuquqmyy), Constants::qescuiwgsyuikume => __("\x52\145\155\x61\151\x6e", PR__MDL__SALARY), Constants::igssuqwuicwawgam => "\144\x61\162\153\55\65\60", Constants::iuqumwggccmcuyem => 50, Constants::eqkeooqcsscoggia => __("\x54\157\x74\141\x6c\x20\171\x6f\165\x72\x20\x72\145\143\x65\x69\166\x61\x62\x6c\x65\163", PR__MDL__SALARY)]; } } else { $gkyciwoiiisgywcs->unset($keccaugmemegoimu, $uusmaiomayssaecw); } } if ($keccaugmemegoimu) { $keccaugmemegoimu = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($keccaugmemegoimu); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\x6f\x6d\145\40\x72\x65\x71\x75\x69\x72\145\40\160\x61\x72\141\x6d\x65\x74\145\162\163\x20\151\x73\40\155\x69\x73\163\x69\x6e\x67", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function aeaqgysgaeowagug(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $miowmmgaiagcuyoo = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu, true); $ccamueccusigaaio = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::mgsccwumkcawaqcy); $ywqqikcsamcaycgm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muwsgygqegywogka); if ($miowmmgaiagcuyoo && $ywqqikcsamcaycgm && $ccamueccusigaaio) { $sogksuscggsicmac = Model::symcgieuakksimmu()->mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $ywqqikcsamcaycgm, $ccamueccusigaaio); $uamcoiueqaamsqma = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, Constants::eoskkkieowogacws); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $keccaugmemegoimu = $this->qasywwyamoesisyi($uamcoiueqaamsqma); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($uamcoiueqaamsqma, 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\x6f\155\x65\40\x72\x65\161\165\151\x72\x65\40\x70\141\x72\141\155\x65\164\145\162\x73\40\x69\163\40\155\151\x73\163\x69\x6e\147", PR__MDL__SALARY)); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function cuakiekssgkeyswa(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($keccaugmemegoimu, true); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [$this->caokeucsksukesyo()->skckwsgymkimyuwo()->megqywqeuquawkim($jwsqucqyaoaasykk::owskgkyceomsskgm, $ycoeoaakqyskgykq)]); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->geosscgquaqosyse($keccaugmemegoimu); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->ayssaocauwgssywa($keccaugmemegoimu); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function geosscgquaqosyse($ycoeoaakqyskgykq) { [$qecuekqmeaiykeek, $iwkyyocymeukcceu, $ykiyyumywksqcisg] = BankAccountModel::symcgieuakksimmu()->sswoemewoyqeqoya($ycoeoaakqyskgykq, Constants::mgsccwumkcawaqcy); if ($iwkyyocymeukcceu && $ykiyyumywksqcisg) { $ygikoqaokckisawo = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($iwkyyocymeukcceu as $aokagokqyuysuksm => $pkyyagewkiyckmwy) { $ygikoqaokckisawo[] = [ Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::qgqyauaqwqmqseim => $gkyciwoiiisgywcs->get($ykiyyumywksqcisg, $aokagokqyuysuksm, IconInterface::iwayyimcuywiagyy), Constants::uissasisiuymwsmu => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($pkyyagewkiyckmwy), "\151\143\157\x6e\137\x63\154\141\163\x73" => "\x69\x63\x6f\x6e\55\x6e\x6f\x2d\x63\x6f\154\157\162", ]; } $qiouiwasaauyaaue = []; $kueeocmceokoouqa = Request::symcgieuakksimmu(); $okycmmskgswewacc = $kueeocmceokoouqa->iekyeyicoyyawomk()->cieaqygkucwoqwke($this->caokeucsksukesyo()->skckwsgymkimyuwo()->gwumowwouoisykio([Constants::meksegaoamowuwoq => $ycoeoaakqyskgykq, Constants::ciywsqoeiymemsys => Constants::cwiummueqsucqayc])); if ($okycmmskgswewacc) { $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); foreach ($okycmmskgswewacc as $aqmwamyiwgeeymqa) { $gikyaoiioawywyeu = $kueeocmceokoouqa->waecsyqmwascmqoa($aqmwamyiwgeeymqa, $kueeocmceokoouqa::woagckamiequeoyu, 0); if ($gikyaoiioawywyeu) { $qiouiwasaauyaaue[$gikyaoiioawywyeu] = $mssuumukiiaqmcka->uikgwcuascgeissw($gikyaoiioawywyeu); } } $sskgoaykaawmsuik = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $sogksuscggsicmac = [$sskgoaykaawmsuik->mccagaqeagiikkec(self::muwsgygqegywogka)->oikgogcweiiaocka()->gswweykyogmsyawy(__("\101\147\x72\145\x65\155\x65\156\164", PR__MDL__SALARY))->acauweqyyugwisqc($qiouiwasaauyaaue)->gucwmccyimoagwcm(__("\x43\150\x6f\x6f\x73\145\x20\164\x68\x65\x20\x61\147\x72\x65\145\x6d\x65\x6e\164\163\x20\x74\150\x61\x74\x20\x79\x6f\x75\x20\167\x61\156\164\40\164\157\40\142\145\40\143\162\145\144\151\164\x65\x64\40\167\151\x74\150", PR__MDL__SALARY)), $sskgoaykaawmsuik->mccagaqeagiikkec(Constants::mgsccwumkcawaqcy)->gswweykyogmsyawy(__("\102\x61\x6e\x6b\x20\x41\143\x63\157\165\156\x74", PR__MDL__SALARY))->acauweqyyugwisqc($ygikoqaokckisawo)->ccewgoaawmaoiqqq($qecuekqmeaiykeek)]; } else { $iwywmkygwewiamwm = $this->wigcmmuseymwogeg("\x2f\163\141\x6c\141\162\x79\x2f\141\x70\x70\x6c\x79", __("\123\x74\x61\x72\164\40\x45\141\x72\156\40\115\x6f\156\x65\171", PR__MDL__SALARY)); $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\131\157\x75\x20\141\x72\145\x20\x6e\157\x74\40\x6d\145\155\x62\145\x72\40\157\146\x20\x61\156\171\x20\x61\147\x72\x65\x65\x6d\145\x6e\x74\40\x79\145\x74\54\40\171\157\x75\40\x63\141\156\x20\146\151\x6e\x64\x20\141\x70\160\x6c\151\141\x62\154\x65\x20\141\x67\x72\145\x65\x6d\145\x6e\x74\163\40\151\x6e\40\x25\x73\x20\x74\157\x20\141\160\160\x6c\x79\x20\164\x68\x65\x6d\145\x2e", PR__MDL__SALARY), $iwywmkygwewiamwm)); } } else { $iwywmkygwewiamwm = $this->wigcmmuseymwogeg("\57\x75\163\145\x72\57\160\162\x6f\146\x69\x6c\145\57\x62\141\x6e\x6b\x2d\141\143\x63\157\x75\x6e\164\163", __("\x55\x73\x65\x72\x20\120\x72\157\x66\x69\154\x65", PR__MDL__SALARY)); $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\131\x6f\165\40\163\x68\x6f\165\154\144\40\x66\151\x72\163\164\54\x20\x66\151\154\x6c\x20\151\156\x20\171\157\165\162\40\x62\x61\x6e\x6b\x20\x61\143\x63\x6f\165\156\x74\x20\x69\156\x66\157\162\x6d\141\x74\151\x6f\x6e\x20\x69\x6e\x73\151\x64\145\40\171\x6f\x75\x72\40\45\163\54\x20\164\x6f\40\163\x75\x62\155\151\164\40\141\x20\x77\x69\x74\150\x64\162\141\167", PR__MDL__SALARY), $iwywmkygwewiamwm)); } return $sogksuscggsicmac; } }
