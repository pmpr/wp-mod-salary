<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62496faaa4e00             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Model\Payment; use Pmpr\Module\Salary\Model\Withdraw as Model; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Setting; use Pmpr\Module\Salary\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Withdraw extends Controller { const muwsgygqegywogka = "\x61\x67\162\x65\145\x6d\x65\x6e\164\163"; public function __construct() { $this->rest_base = "\x77\x69\164\150\144\x72\x61\x77"; parent::__construct(); } public function register_routes() { $this->register("\57\147\x65\x74\x2d\x6c\151\x73\x74\x2d\x62\x79\55\x75\x73\145\x72", [self::wwgusigoaksqmwsm => [$this, "\143\x75\141\153\x69\145\153\163\x73\147\153\x65\x79\x73\x77\141"]]); $this->register("\x2f\147\145\x74\x2d\146\x69\145\x6c\144\x73", [self::wwgusigoaksqmwsm => [$this, "\165\x67\155\143\145\x63\143\147\167\x61\141\141\151\147\x69\x79"]]); $this->register("\x2f\163\x75\x62\155\x69\164", ["\155\x65\x74\x68\157\144\x73" => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\141\x65\141\161\147\171\163\x67\x61\145\x6f\x77\x61\147\165\x67"]]); $this->register("\x2f\143\141\154\143\x75\154\141\x74\x65", ["\x6d\145\164\150\157\144\163" => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\167\x73\157\145\x75\x65\x6b\141\155\145\x65\x69\x63\x61\163\x63"]]); $this->register("\57\147\145\164\x2d\x77\151\164\150\x64\162\141\167", [self::wwgusigoaksqmwsm => [$this, "\x73\x63\163\x69\145\x63\x67\x79\x61\x6d\x67\x79\151\151\141\141"]]); $this->register("\57\147\145\x74\x2d\x69\x6e\x63\x6f\155\145\x73", [self::wwgusigoaksqmwsm => [$this, "\165\x79\x65\143\x63\157\x79\x61\163\x73\x67\x6f\145\167\151\x77"]]); $this->register("\57\147\x65\x74\x2d\160\x61\x79\155\145\x6e\164\x73", [self::wwgusigoaksqmwsm => [$this, "\153\163\x77\151\145\157\x63\x73\x6d\141\x61\147\x77\155\x6b\161"]]); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto qsgqwyqaqiowkmco; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); $euakemkgmcigqycw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\167\x69\164\x68\144\162\141\x77"); if ($euakemkgmcigqycw) { goto wwukgaquuyoissgy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\x6d\145\40\162\145\161\x75\x69\x72\x65\x20\160\141\x72\141\x6d\x65\x74\x65\x72\x73\40\x69\x73\40\155\151\163\163\151\156\x67\56", PR__MDL__SALARY)); goto gsygwgsiawgmqiyi; wwukgaquuyoissgy: $ogekyekymoyuywog = Income::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [$ogekyekymoyuywog::iockmgiyoygcswog => $saqgcoqwmimycgim, $ogekyekymoyuywog::qyeimiaoamokwygy => $euakemkgmcigqycw]); gsygwgsiawgmqiyi: qsgqwyqaqiowkmco: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kswieocsmaagwmkq(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto eucqomyqykgoiuge; } $euakemkgmcigqycw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\167\x69\164\150\x64\162\x61\167"); if ($euakemkgmcigqycw) { goto yqagomygmeoecwey; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\155\145\x20\x72\x65\x71\165\151\x72\145\x20\160\141\162\141\x6d\145\x74\145\162\163\x20\151\163\x20\x6d\x69\163\x73\x69\156\x67\56", PR__MDL__SALARY)); goto qikaewekoecykeou; yqagomygmeoecwey: $oesweawoiuucekmw = Payment::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $oesweawoiuucekmw, [$oesweawoiuucekmw::qyeimiaoamokwygy => $euakemkgmcigqycw]); qikaewekoecykeou: eucqomyqykgoiuge: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function scsiecgyamgyiiaa(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto yuuyikiacmmueosu; } $aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\167\151\x74\150\x64\x72\141\x77"); $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); if ($aokagokqyuysuksm && $saqgcoqwmimycgim) { goto egmayaiikwsskgmy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\155\x65\x20\x72\145\x71\x75\151\x72\145\40\x70\x61\162\x61\x6d\x65\x74\145\x72\163\40\x69\x73\40\x6d\x69\163\x73\x69\x6e\x67\56", PR__MDL__SALARY)); goto ucuoeymyqeokgsya; egmayaiikwsskgmy: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $euakemkgmcigqycw = $jwsqucqyaoaasykk->oqomcmyuuakigusk([$jwsqucqyaoaasykk::iockmgiyoygcswog => $saqgcoqwmimycgim, $jwsqucqyaoaasykk->kumuygiiqswoyasy() => $aokagokqyuysuksm]); if ($euakemkgmcigqycw) { goto aueaceeyommgkicu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\145\161\x75\145\163\164\x65\144\x20\x77\x69\x74\x68\x64\x72\x61\x77\40\156\157\x74\x20\146\157\x75\x6e\x64\x2e", PR__MDL__SALARY)); goto mysueeoswqgccmui; aueaceeyommgkicu: $euakemkgmcigqycw = $jwsqucqyaoaasykk->scqakcemaqsqkema($euakemkgmcigqycw); $icwicymcioeyeyek = [$jwsqucqyaoaasykk::owmueawayysqcsqo => '', $jwsqucqyaoaasykk::ciywsqoeiymemsys => '', $jwsqucqyaoaasykk::aioqyewkwawaqgqe => '', $jwsqucqyaoaasykk::CREATED_AT => '']; foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $igqsaukqcqscimok) { $wkaqekwwgqsqwcoi = ''; $meqocwsecsywiiqs = ''; $eqgoocgaqwqcimie = ManipulateArray::get($euakemkgmcigqycw, $uusmaiomayssaecw); switch ($uusmaiomayssaecw) { case $jwsqucqyaoaasykk::owmueawayysqcsqo: if (!$eqgoocgaqwqcimie) { goto zayqqeqgcwkekwws; } $meqocwsecsywiiqs = __("\102\x61\156\153\40\101\x63\x63\157\x75\x6e\x74", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = ManipulateArray::get($eqgoocgaqwqcimie, self::qgqyauaqwqmqseim); $eqgoocgaqwqcimie = sprintf("\45\x73\x20\x28\45\x73\51", ManipulateArray::get($eqgoocgaqwqcimie, User::oogeqgcgkamuoaoe), ManipulateArray::get($eqgoocgaqwqcimie, self::iockmgiyoygcswog)); zayqqeqgcwkekwws: goto sqyokemumceysegy; case $jwsqucqyaoaasykk::ciywsqoeiymemsys: $meqocwsecsywiiqs = __("\123\x74\x61\164\x75\x73", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = IconFontawesomeInterface::csokoeeoycsigcuq; goto sqyokemumceysegy; case $jwsqucqyaoaasykk::aioqyewkwawaqgqe: $meqocwsecsywiiqs = __("\x41\x6d\x6f\x75\x6e\164", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = IconFontawesomeInterface::saokeumaawmmaswg; goto sqyokemumceysegy; case $jwsqucqyaoaasykk::CREATED_AT: $meqocwsecsywiiqs = __("\104\141\x74\x65", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = IconFontawesomeInterface::veamaqiowoucocwy; goto sqyokemumceysegy; } oqousikwiiqagoyw: sqyokemumceysegy: $icwicymcioeyeyek[$uusmaiomayssaecw] = [self::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; aiccyaswigkaycqk: } usymasgsyqgsuocg: $keccaugmemegoimu = ManipulateArray::set($euakemkgmcigqycw, [self::uiwqcumqkgikqyue => $icwicymcioeyeyek]); mysueeoswqgccmui: ucuoeymyqeokgsya: yuuyikiacmmueosu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wsoeuekameeicasc(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto smiemmcqqukyguuu; } $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu, true); $ywqqikcsamcaycgm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muwsgygqegywogka); if ($miowmmgaiagcuyoo && $ywqqikcsamcaycgm) { goto yuqgwwmqwqiuwmaw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\155\x65\x20\162\x65\161\165\x69\x72\145\40\160\141\x72\141\x6d\x65\164\145\x72\163\40\151\163\40\x6d\x69\163\163\151\156\147", PR__MDL__SALARY)); goto quaqmuusokiyqgqe; yuqgwwmqwqiuwmaw: $suuagcecoyuweoqk = []; $ogekyekymoyuywog = Income::symcgieuakksimmu(); $oqseeekuqisekiwy = [$ogekyekymoyuywog::wqmsciicmogewwoa, $ogekyekymoyuywog::ugswgyqgycqguios, $ogekyekymoyuywog::uwgcogaigssumqay]; foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { $uoomaookgsyciacm = [$ogekyekymoyuywog::iockmgiyoygcswog => $miowmmgaiagcuyoo, $ogekyekymoyuywog::woagckamiequeoyu => $xssuewsokckmigqk]; foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq) { $uoomaookgsyciacm[] = [self::wsgoaaeiyusigoym => $iueymcwwscwqkiyq, self::euoaaiqkqcqcgeco => self::oeusoaowacmykwsm, self::SELECT => [self::sgyowqgsmegoocaw => [$ogekyekymoyuywog::eiiuyoyiygsickwe => $iueymcwwscwqkiyq], self::mskoigqmkguawcac => $ogekyekymoyuywog::aioqyewkwawaqgqe]]; oocuemosmeeekgas: } syuaummumssgwwee: $wcsgguaigguiiwcy = $ogekyekymoyuywog->cwkywyqksyucoyia($uoomaookgsyciacm); if (!$wcsgguaigguiiwcy) { goto qkcsykuocwuyaice; } $wcsgguaigguiiwcy = (array) reset($wcsgguaigguiiwcy); $wcsgguaigguiiwcy[self::uiiqiokqwmccomiu] = array_sum($wcsgguaigguiiwcy); $suuagcecoyuweoqk[$xssuewsokckmigqk] = $wcsgguaigguiiwcy; qkcsykuocwuyaice: agkmiayuawacakau: } sguskaeaaqcagqgc: $keccaugmemegoimu = [self::uiiqiokqwmccomiu => 0]; foreach ($suuagcecoyuweoqk as $wcsgguaigguiiwcy) { foreach ($wcsgguaigguiiwcy as $iueymcwwscwqkiyq => $qsmaqqyoggcuyukq) { if (!isset($keccaugmemegoimu[$iueymcwwscwqkiyq])) { goto osuscoaaomwcqkew; } $keccaugmemegoimu[$iueymcwwscwqkiyq] += $qsmaqqyoggcuyukq; goto ciucewqgyoiouesq; osuscoaaomwcqkew: $keccaugmemegoimu[$iueymcwwscwqkiyq] = $qsmaqqyoggcuyukq; ciucewqgyoiouesq: aoquoewagkseayug: } qiaimmucomukkeka: egsycocugqyyswsi: } uoeasoimegouymka: $bsgyawiqyuquqmyy = 0; $uaesckuogcakkmaw = false; $ygeuioagqoqumwuw = Setting::eiwcuqigayigimak(Setting::iqkskgussyuogioe, 0); foreach ($keccaugmemegoimu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $ukwokcuqauuosmoo = ''; $qoiwmokisgikggia = ''; $sqqewmoeaekuyyas = 0; switch ($uusmaiomayssaecw) { case self::uiiqiokqwmccomiu: $ukwokcuqauuosmoo = __("\x54\x6f\x74\141\154\x20\x6f\x66\40\171\157\165\162\40\x69\x6e\143\157\x6d\x65\163\40\146\157\162\x20\163\145\x6c\x65\143\x74\145\x64\x20\141\x67\x72\x65\x65\155\145\x6e\x74\x73", PR__MDL__SALARY); $meqocwsecsywiiqs = __("\x54\x6f\x74\x61\x6c", PR__MDL__SALARY); $qoiwmokisgikggia = "\144\141\162\153\x2d\65\60"; $sqqewmoeaekuyyas = 5; goto ussceseaimqywuiy; default: $meqocwsecsywiiqs = $ogekyekymoyuywog->cysukeiuucugyiqq($uusmaiomayssaecw); switch ($uusmaiomayssaecw) { case $ogekyekymoyuywog::wqmsciicmogewwoa: case $ogekyekymoyuywog::uwgcogaigssumqay: if ($eqgoocgaqwqcimie) { goto ukomuiwukymcoaso; } $meqocwsecsywiiqs = ''; goto wkgskiuiukiuyque; ukomuiwukymcoaso: $qoiwmokisgikggia = self::wyaqwomqwwaoiwas; $sqqewmoeaekuyyas = 10; if ($uusmaiomayssaecw == $ogekyekymoyuywog::wqmsciicmogewwoa) { goto uycesqqkoeamocgm; } $ukwokcuqauuosmoo = __("\x49\155\x70\157\x73\x73\151\x62\x6c\145\x20\x74\x6f\40\x77\x69\164\x68\144\162\141\167\x20\142\x65\x63\141\165\x73\145\x20\157\x66\40\x69\x6e\x73\x75\x66\146\151\x63\x69\x65\156\164\x20\x73\141\154\145\163\x20\166\157\154\165\x6d\x65", PR__MDL__SALARY); goto ceiwqkyquikcemmo; uycesqqkoeamocgm: $ukwokcuqauuosmoo = __("\x49\x6d\x70\157\163\163\x69\x62\154\x65\40\164\157\x20\167\x69\164\150\x64\x72\141\x77\x20\142\145\x63\141\x75\x73\145\x20\x6f\x66\40\163\x6f\155\x65\x20\155\x61\x6e\141\147\145\162\x69\141\x6c\40\x72\145\x61\x73\x6f\156\x73", PR__MDL__SALARY); ceiwqkyquikcemmo: $uaesckuogcakkmaw = true; wkgskiuiukiuyque: goto gqmewagyagamokok; case $ogekyekymoyuywog::ugswgyqgycqguios: $bsgyawiqyuquqmyy = $eqgoocgaqwqcimie; if (!($eqgoocgaqwqcimie < $ygeuioagqoqumwuw)) { goto oyiuyywyeoskckuw; } $eqgoocgaqwqcimie = 0; oyiuyywyeoskckuw: $qoiwmokisgikggia = self::ckcawaoawwioqecq; $sqqewmoeaekuyyas = 100; $ukwokcuqauuosmoo = sprintf(__("\x59\x6f\x75\x72\40\164\x6f\164\141\x6c\40\x69\x6e\x63\x6f\155\145\x20\164\x68\x61\164\x20\x69\163\x20\x68\x69\147\x68\x65\x72\x20\164\x68\x61\x6e\x20\45\x73", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis(ManipulateWoocommerce::mcgaskyiamgqmqgu($ygeuioagqoqumwuw))); goto gqmewagyagamokok; } sqmoqymckwsogsqg: gqmewagyagamokok: } oyiuemaaykgkqqam: ussceseaimqywuiy: if ($meqocwsecsywiiqs) { goto siecswkggyikqkga; } ManipulateArray::unset($keccaugmemegoimu, $uusmaiomayssaecw); goto qkuiwoqksgayqqmg; siecswkggyikqkga: $keccaugmemegoimu[$uusmaiomayssaecw] = [self::ciyoccqkiamemcmm => ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie), self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::igssuqwuicwawgam => $qoiwmokisgikggia, self::iuqumwggccmcuyem => $sqqewmoeaekuyyas, self::eqkeooqcsscoggia => $ukwokcuqauuosmoo]; if (!($uaesckuogcakkmaw && !isset($keccaugmemegoimu["\x72\x65\x6d\141\x69\x6e"]))) { goto goqmywuiicciasyk; } $keccaugmemegoimu["\x72\145\155\141\151\x6e"] = [self::ciyoccqkiamemcmm => ManipulateWoocommerce::mcgaskyiamgqmqgu($bsgyawiqyuquqmyy), self::qescuiwgsyuikume => __("\x52\x65\x6d\141\151\156", PR__MDL__SALARY), self::igssuqwuicwawgam => "\x64\141\x72\153\x2d\x35\60", self::iuqumwggccmcuyem => 50, self::eqkeooqcsscoggia => __("\x54\x6f\x74\x61\x6c\40\171\157\x75\x72\40\x72\145\143\x65\151\166\141\142\x6c\x65\x73", PR__MDL__SALARY)]; goqmywuiicciasyk: qkuiwoqksgayqqmg: mkomygccqkmkumsi: } cgmgqucewwssmicq: if (!$keccaugmemegoimu) { goto easqmyamcmeesgya; } $keccaugmemegoimu = ManipulateArray::yaeiiwwyckwugsem($keccaugmemegoimu); easqmyamcmeesgya: quaqmuusokiyqgqe: smiemmcqqukyguuu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function aeaqgysgaeowagug(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ecouwqosmoyyqmkw; } $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu, true); $ccamueccusigaaio = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::mgsccwumkcawaqcy); $ywqqikcsamcaycgm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muwsgygqegywogka); if ($miowmmgaiagcuyoo && $ywqqikcsamcaycgm && $ccamueccusigaaio) { goto yoagcooekomeokwg; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\x6d\145\40\162\x65\x71\x75\151\x72\145\40\160\141\162\141\x6d\x65\x74\145\162\x73\40\x69\163\40\x6d\x69\x73\163\151\x6e\x67", PR__MDL__SALARY)); goto eckcqesiokgwkkiw; yoagcooekomeokwg: $sogksuscggsicmac = Model::symcgieuakksimmu()->mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $ywqqikcsamcaycgm, $ccamueccusigaaio); $uamcoiueqaamsqma = ManipulateArray::get($sogksuscggsicmac, self::eoskkkieowogacws); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto iksewmsaugayqaqq; } $keccaugmemegoimu = $this->oemauiimmycumcsk($uamcoiueqaamsqma, 400); goto yamyagayiooyeekg; iksewmsaugayqaqq: $keccaugmemegoimu = $this->qasywwyamoesisyi($uamcoiueqaamsqma); yamyagayiooyeekg: eckcqesiokgwkkiw: ecouwqosmoyyqmkw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function cuakiekssgkeyswa(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto mqiiqkuaoekeuswo; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu, true); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [$jwsqucqyaoaasykk::iockmgiyoygcswog => $saqgcoqwmimycgim]); mqiiqkuaoekeuswo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto sgiwoiscywusgmmm; } $keccaugmemegoimu = $this->geosscgquaqosyse($keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto qmoocweoekqueuyy; } $keccaugmemegoimu = $this->ayssaocauwgssywa($keccaugmemegoimu); qmoocweoekqueuyy: sgiwoiscywusgmmm: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function geosscgquaqosyse($mkucggyaiaukqoce) { [$qecuekqmeaiykeek, $iwkyyocymeukcceu, $ykiyyumywksqcisg] = User::symcgieuakksimmu()->uwoesmooocquykum($mkucggyaiaukqoce, self::mgsccwumkcawaqcy); if ($iwkyyocymeukcceu && $ykiyyumywksqcisg) { goto eoyiumycaigawmmc; } $iwywmkygwewiamwm = $this->wigcmmuseymwogeg("\x2f\165\x73\145\x72\x2f\x70\x72\x6f\x66\x69\x6c\145\x2f\x62\x61\156\x6b\55\x61\143\x63\x6f\165\156\x74\x73", __("\125\x73\145\162\40\120\162\x6f\x66\x69\154\145", PR__MDL__SALARY)); $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf(__("\131\157\x75\x20\163\150\157\x75\x6c\x64\x20\x66\151\x72\x73\164\x2c\x20\146\x69\x6c\154\x20\x69\x6e\40\171\x6f\165\x72\40\x62\141\x6e\x6b\40\141\x63\143\157\x75\x6e\164\x20\x69\156\x66\157\162\x6d\141\164\151\157\156\40\x69\x6e\163\151\x64\145\40\171\157\165\x72\40\x25\x73\x2c\x20\164\x6f\x20\163\165\x62\155\151\164\x20\x61\40\x77\151\x74\x68\x64\x72\x61\x77", PR__MDL__SALARY), $iwywmkygwewiamwm)); goto yuoeumyiuqkuouey; eoyiumycaigawmmc: $ygikoqaokckisawo = []; foreach ($iwkyyocymeukcceu as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $ygikoqaokckisawo[] = [ self::gouqcwikiiygyasc => $uusmaiomayssaecw, self::qgqyauaqwqmqseim => ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw), self::uissasisiuymwsmu => $this->msywmyaoqmaegsuy($pkyyagewkiyckmwy), "\151\x63\157\156\137\143\x6c\x61\x73\x73" => "\163\x76\x67\x2d\156\x6f\55\143\157\154\157\162", ]; quyogmwugsyoaaiu: } skuqigsokaguscas: $qiouiwasaauyaaue = []; $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $ywqqikcsamcaycgm = $mssuumukiiaqmcka->coyaqyocmqmmgeew($mkucggyaiaukqoce); if ($ywqqikcsamcaycgm) { goto smcguieygyqcaqgs; } $iwywmkygwewiamwm = $this->wigcmmuseymwogeg("\57\x73\141\154\141\x72\x79\57\x61\x70\x70\x6c\171", __("\123\x74\141\x72\x74\x20\x45\x61\162\156\x20\115\157\x6e\x65\171", PR__MDL__SALARY)); $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf(__("\131\x6f\x75\40\141\162\x65\x20\x6e\x6f\164\x20\155\145\x6d\142\145\x72\40\157\146\x20\141\156\171\x20\141\x67\162\145\x65\x6d\145\156\x74\40\x79\145\164\x2c\x20\x79\x6f\x75\x20\143\141\156\x20\x66\151\x6e\144\x20\x61\160\160\154\x69\x61\142\x6c\x65\x20\141\147\162\145\x65\155\x65\156\x74\163\40\151\156\40\x25\163\x20\164\157\x20\x61\160\160\x6c\171\x20\164\150\145\155\145\x2e", PR__MDL__SALARY), $iwywmkygwewiamwm)); goto mgcuiguaomoqwwwm; smcguieygyqcaqgs: foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { $qiouiwasaauyaaue[$mssuumukiiaqmcka->keeuqgyooycqoygw($xssuewsokckmigqk)] = $mssuumukiiaqmcka->uikgwcuascgeissw($xssuewsokckmigqk); wmumywgyyeagqoeq: } mmgmqogugasaqkgg: $sogksuscggsicmac = [Form::mccagaqeagiikkec(self::muwsgygqegywogka, __("\101\147\162\x65\x65\x6d\145\x6e\164", PR__MDL__SALARY))->eumecwmqmukqgyea()->ccmwycqioaicegoc(__("\x43\x68\157\x6f\163\x65\x20\164\x68\x65\40\141\147\162\145\145\155\x65\x6e\164\x73\x20\x74\150\x61\164\x20\x79\157\165\40\167\141\156\164\40\164\157\40\142\145\x20\143\x72\145\x64\151\164\x65\144\40\167\x69\x74\x68", PR__MDL__SALARY))->acauweqyyugwisqc($qiouiwasaauyaaue)->ioayksieaoewquom()->oikgogcweiiaocka(), Form::mccagaqeagiikkec(self::mgsccwumkcawaqcy, __("\102\x61\156\153\x20\x41\x63\143\157\165\156\x74", PR__MDL__SALARY))->acauweqyyugwisqc($ygikoqaokckisawo)->ccewgoaawmaoiqqq($qecuekqmeaiykeek)->eumecwmqmukqgyea()]; mgcuiguaomoqwwwm: yuoeumyiuqkuouey: return $sogksuscggsicmac; } }
