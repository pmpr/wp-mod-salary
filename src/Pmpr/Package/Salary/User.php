<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148bd4c51e00             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Select; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class User extends Container { protected ?Validator $validator = null; public function mmymimkumuekmmgi() : ?Validator { return $this->validator; } public function __construct() { $this->validator = Validator::symcgieuakksimmu(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\x69\164", [$this, "\151\156\x69\x74"])->qcsmikeggeemccuu("\x73\x68\157\167\137\165\x73\x65\162\137\x70\x72\x6f\146\x69\154\x65", [$this, "\x61\167\x6b\161\153\161\141\x75\x77\167\x75\161\x67\x65\x77\165"])->qcsmikeggeemccuu("\x65\x64\x69\x74\x5f\x75\163\x65\x72\137\x70\162\157\146\151\x6c\145", [$this, "\141\x77\153\x71\153\x71\141\165\167\x77\x75\161\147\145\167\165"])->qcsmikeggeemccuu("\x70\145\162\163\x6f\x6e\x61\x6c\137\157\160\164\151\157\156\163\137\165\160\x64\x61\x74\145", [$this, "\155\163\x79\x73\147\x71\x65\145\x77\x6b\x71\147\163\x63\x77\145"])->qcsmikeggeemccuu("\x65\x64\151\164\137\x75\163\145\x72\x5f\160\162\x6f\146\151\154\x65\137\x75\x70\x64\x61\164\x65", [$this, "\x6d\163\171\163\147\161\145\x65\x77\153\161\x67\163\x63\167\x65"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\x6f\x6f\x63\157\x6d\x6d\145\162\143\x65\x5f\x64\151\x73\141\142\x6c\x65\137\141\144\x6d\151\x6e\x5f\x62\x61\162", [$this, "\x65\x6f\x73\x73\x6d\157\x79\147\x73\145\151\x65\x6b\x65\x77\161"]); parent::kgquecmsgcouyaya(); } public function init() { add_role(self::COLLABORATOR_ROLE, __("\103\157\154\154\141\142\x6f\x72\x61\164\x6f\x72", PR__PKG__SALARY), ["\162\145\141\x64" => true]); if (!ManipulateUser::eoyueosccuoeqkee()) { goto usquiuuyiyqaeyiu; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $uqyaagwcuoewkkss = Validator::symcgieuakksimmu(); $kgkkgoqacescqgsy = __("\111\x74\47\x73\40\156\157\x74\x20\x61\40\x76\141\x6c\x69\144\x20\x25\163", PR__PKG__SALARY); $oucioakwecwsakic = __("\120\x6c\x65\x61\163\x65\40\x73\x65\x6c\x65\143\x74\40\x61\40\45\x73", PR__PKG__SALARY); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\165\x73\x65\162", $eygsasmqycagyayw->get("\x75\163\145\162\56\x6a\x73"))->ayuciigykaswwqeo("\152\161\x75\x65\x72\171"))->ikqyiskqaaymscgw("\x6d\145\x73\x73\x61\x67\145\163", ["\x69\x6e\166\x61\x6c\151\x64" => ["\141\144\x64\x5f\156\x65\x77" => $this->imqmyggquiyewkww(__("\123\157\162\162\171\x2c\x20\171\x6f\x75\40\143\141\156\40\156\157\x74\40\x61\x64\144\40\x6e\x65\x77\x20\142\141\x6e\153\40\x69\156\146\157\x2c\x20\163\157\x6d\x65\x20\160\x72\x65\x76\x69\157\165\163\x20\x69\x74\145\x6d\40\151\163\40\x6e\157\x74\x20\x76\x61\154\151\x64\56", PR__PKG__SALARY), ["\143\154\x61\163\x73" => "\x6d\154\x2d\62"]), self::BANK => sprintf($oucioakwecwsakic, __("\x42\141\156\x6b", PR__PKG__SALARY)), self::OWNER => sprintf($kgkkgoqacescqgsy, __("\x4f\x77\x6e\145\x72", PR__PKG__SALARY)) . "\x2e\x20" . sprintf(__("\x50\154\x65\141\163\145\40\145\x6e\164\145\x72\x20\141\164\x20\154\145\141\x73\164\x20\x25\163\40\x63\150\141\162\141\143\x74\145\x72\163", PR__PKG__SALARY), $this->msywmyaoqmaegsuy(6)), self::IBAN => sprintf($kgkkgoqacescqgsy, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::IBAN)), self::TYPE => sprintf($oucioakwecwsakic, __("\x41\143\143\x6f\165\156\164\x20\111\156\x66\157\162\x6d\x61\164\x69\x6f\x6e\x20\x54\x79\160\145", PR__PKG__SALARY)), self::DEBIT_CARD => sprintf($kgkkgoqacescqgsy, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::DEBIT_CARD)), "\x62\141\x6e\x6b\x5f\x6e\157\164\137\144\x65\164\x65\143\164\x65\x64" => __("\131\157\x75\x72\x20\x61\143\x63\157\165\156\164\40\x73\x70\145\143\x69\x66\151\x63\x61\x74\151\157\x6e\163\x20\156\157\x74\40\x73\x75\160\x70\x6f\x72\x74\145\x64\54\40\x70\x6c\145\141\x73\145\x20\141\x64\144\40\x69\156\x66\157\x72\x6d\141\x74\x69\157\x6e\x20\142\x61\x73\145\x64\40\157\156\40\163\165\x70\x70\157\x72\164\145\144\40\142\141\156\x6b\163\x2e", PR__PKG__SALARY), "\144\165\x70\154\151\143\141\x74\145\137\x73\160\145\143\x69\x66\151\143\141\x74\x69\157\156" => __("\x53\157\162\x72\x79\54\x20\x74\150\x69\x73\40\x76\141\x6c\x75\145\40\141\154\x72\x65\141\x64\171\40\145\170\x69\163\164\40\x69\156\40\160\x72\x65\166\x69\x6f\165\x73\x20\151\x74\145\155\163\56", PR__PKG__SALARY)]])->ikqyiskqaaymscgw("\x70\162\x65\146\x69\170\x65\x73", [self::IBAN => $uqyaagwcuoewkkss->cyuweacmssmikssi(), self::DEBIT_CARD => $uqyaagwcuoewkkss->cmkgoqaaysaasiom()]); usquiuuyiyqaeyiu: } public function eossmoygseiekewq($ikcaescyugmgiegq) { if (!DecoratorUser::scmcyesmmikkucie(self::COLLABORATOR_ROLE)) { goto qicwaskssogcokgm; } $ikcaescyugmgiegq = false; qicwaskssogcokgm: return $ikcaescyugmgiegq; } public function awkqkqauwwuqgewu($mkucggyaiaukqoce) { $aumukmqosmqwuucq = $this->mgokaysycmigquaw($mkucggyaiaukqoce, "\x69\x6e\x64\145\x78"); $uqyaagwcuoewkkss = $this->mmymimkumuekmmgi(); $ikgwqyuyckaewsow = [MetaBox::iseogkiymousogom(self::BANK_INFO, __("\x42\x61\x6e\153\x20\x41\x63\x63\x6f\165\x6e\x74\x20\x49\156\x66\157\162\x6d\x61\164\151\x6f\x6e", PR__PKG__SALARY))->mkksewyosgeumwsa($uqyaagwcuoewkkss->auawsikwmsucqccc(self::BANK)->eumecwmqmukqgyea())->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::TYPE, __("\x41\x63\143\x6f\x75\x6e\164\40\x49\x6e\146\157\x72\x6d\141\x74\x69\x6f\156\x20\x54\x79\x70\145", PR__PKG__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem())->wmwikuasuocmqycw(["\x66\x69\x65\154\x64\x73" => self::BANK, "\x76\141\x72\x69\x61\164\151\157\x6e\163" => $this->uyocacmiaawcwkyy()])->oeeumggeiyyckkom(self::IBAN, self::IBAN)->oeeumggeiyyckkom(self::DEBIT_CARD, self::DEBIT_CARD)->qigsyyqgewgskemg("\x61\x63\x63\157\165\x6e\x74\55\164\x79\x70\145")->eumecwmqmukqgyea())->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::DEBIT_CARD, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::DEBIT_CARD))->wykoackkeuuqeyss()->qigsyyqgewgskemg("\143\141\162\x64\x2d\166\141\154\x75\x65"))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::IBAN, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::IBAN))->uagmgmommooaewkk()->qigsyyqgewgskemg("\151\142\141\156\x2d\x76\x61\154\165\x65"))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::OWNER, __("\x41\x63\x63\157\165\x6e\x74\40\x4f\x77\156\x65\162\x20\x4e\141\x6d\x65", PR__PKG__SALARY))->eumecwmqmukqgyea()->qigsyyqgewgskemg("\x61\143\x63\x6f\x75\156\x74\55\x6f\x77\x6e\145\x72"))->mkksewyosgeumwsa(MetaBox::cwiuiiakukcsaakw(self::LOCKED)->qigsyyqgewgskemg("\x61\x63\x63\x6f\x75\x6e\x74\x2d\x6c\x6f\143\x6b\x65\x64"))->qigsyyqgewgskemg("\143\x6f\154\x2d\x78\154\x2d\x34")->iygyugseyaqwywyg($aumukmqosmqwuucq)]; foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto gaomwagkcciesyqy; } $ymqmyyeuycgmigyo = $aiowsaccomcoikus->aakmagwggmkoiiyu(); $aiowsaccomcoikus->usuqmwksoeaayaig(''); $woiqcqksaumcwwuc = "\x6c\x61\x62\145\154"; if (!$aiowsaccomcoikus instanceof Group) { goto esuiysskoweawsue; } $woiqcqksaumcwwuc = "\x74\151\x74\x6c\x65"; esuiysskoweawsue: $ikgwqyuyckaewsow[$momcykaoccoymeig] = ["\x69\144" => $aiowsaccomcoikus->mwikyscisascoeea(), "\x68\164\x6d\x6c" => $aiowsaccomcoikus->render(false), $woiqcqksaumcwwuc => $ymqmyyeuycgmigyo]; gaomwagkcciesyqy: uqqaiagaeqgqgaiy: } uguigkcmukuouway: if (!$ikgwqyuyckaewsow) { goto aegysmeecgcgayyw; } echo $this->iuygowkemiiwqmiw("\x70\162\157\x66\x69\x6c\x65", ["\x74\151\164\154\145" => __("\x49\x6e\143\x6f\155\145\x20\141\156\144\40\120\141\x79\155\x65\x6e\x74", PR__PKG__SALARY), "\146\151\x65\154\x64\163" => $ikgwqyuyckaewsow]); aegysmeecgcgayyw: } public function msysgqeewkqgscwe($mkucggyaiaukqoce) { $oammesyieqmwuwyi = []; $aumukmqosmqwuucq = ManipulateServer::ayueggmoqeeukqmq(self::BANK_INFO, []); if (!($aumukmqosmqwuucq && is_array($aumukmqosmqwuucq))) { goto ewymsmkkiksgwysk; } $gwscsiewquwmkkgu = $this->mgokaysycmigquaw($mkucggyaiaukqoce, self::LOCKED); $uqyaagwcuoewkkss = $this->mmymimkumuekmmgi(); foreach ($aumukmqosmqwuucq as $momcykaoccoymeig => $yyimiwcuegayoskq) { if (ManipulateArray::uuegkqwagymmusiy($yyimiwcuegayoskq, [self::TYPE, self::OWNER, self::BANK])) { goto syiqkaasoueowwui; } $qmomekeesaiaoegu = ManipulateArray::get($yyimiwcuegayoskq, self::BANK); $sqeykgyoooqysmca = ManipulateArray::get($yyimiwcuegayoskq, self::TYPE); $miowmmgaiagcuyoo = ManipulateArray::get($yyimiwcuegayoskq, self::OWNER); $eqgoocgaqwqcimie = ManipulateArray::get($yyimiwcuegayoskq, $sqeykgyoooqysmca, ''); $ygogqywsaqoukoqy = str_replace("\40", '', $eqgoocgaqwqcimie); if (!($uqyaagwcuoewkkss->uqyqsuqogawkesee($qmomekeesaiaoegu) && strlen($miowmmgaiagcuyoo) >= 6)) { goto cgiscsqwwgqqaeqi; } if (isset($gwscsiewquwmkkgu[$ygogqywsaqoukoqy])) { goto skkamseieeusycye; } if (!$uqyaagwcuoewkkss->kuuugksiksqcaaaa(["\x76\x61\x6c\165\145" => $eqgoocgaqwqcimie, "\164\171\160\x65" => ManipulateArray::get($yyimiwcuegayoskq, self::TYPE), "\x62\x61\x6e\x6b" => $qmomekeesaiaoegu])) { goto wiysogeqqwgioyka; } $oammesyieqmwuwyi[$ygogqywsaqoukoqy] = [$sqeykgyoooqysmca => $eqgoocgaqwqcimie, self::TYPE => $sqeykgyoooqysmca, self::BANK => $qmomekeesaiaoegu, self::OWNER => $miowmmgaiagcuyoo, self::LOCKED => false, self::ESCAPED => $ygogqywsaqoukoqy]; wiysogeqqwgioyka: skkamseieeusycye: cgiscsqwwgqqaeqi: syiqkaasoueowwui: soaccwqimeksgwiw: } suqkuqygkkgwyaie: if (!$gwscsiewquwmkkgu) { goto giaacoqqqsekcayy; } $oammesyieqmwuwyi = $gwscsiewquwmkkgu + $oammesyieqmwuwyi; giaacoqqqsekcayy: ManipulateUser::ksmqawcowkmegigw(self::BANK_INFO, $oammesyieqmwuwyi, $mkucggyaiaukqoce); ewymsmkkiksgwysk: } public function oiagiswyysamcyag($mkucggyaiaukqoce, $uusmaiomayssaecw) { $aumukmqosmqwuucq = $this->mgokaysycmigquaw($mkucggyaiaukqoce); $yyimiwcuegayoskq = ManipulateArray::get($aumukmqosmqwuucq, $uusmaiomayssaecw, false); if (!$yyimiwcuegayoskq) { goto cmegwsegsosyqcai; } $yyimiwcuegayoskq[self::LOCKED] = true; $aumukmqosmqwuucq[$uusmaiomayssaecw] = $yyimiwcuegayoskq; ManipulateUser::ksmqawcowkmegigw(self::BANK_INFO, $aumukmqosmqwuucq, $mkucggyaiaukqoce); cmegwsegsosyqcai: } public function ikgqwgkoiuwacgoo($miowmmgaiagcuyoo, $uusmaiomayssaecw) { $wayieuwuoeasekks = $this->soiekwmcuuaowsgo($miowmmgaiagcuyoo, $uusmaiomayssaecw); $ymqmyyeuycgmigyo = ManipulateArray::get($wayieuwuoeasekks, self::OWNER); $ygogqywsaqoukoqy = ManipulateArray::get($wayieuwuoeasekks, self::ESCAPED); return sprintf("\x25\x73\x20\74\x68\x72\x2f\76\40\45\x73", $ymqmyyeuycgmigyo, $ygogqywsaqoukoqy); } public function soiekwmcuuaowsgo($mkucggyaiaukqoce, $uusmaiomayssaecw) { $aumukmqosmqwuucq = $this->mgokaysycmigquaw($mkucggyaiaukqoce); return ManipulateArray::get($aumukmqosmqwuucq, $uusmaiomayssaecw, false); } public function mgokaysycmigquaw($mkucggyaiaukqoce, $aqykuigiuwmmcieu = self::ALL) { $oammesyieqmwuwyi = []; $aumukmqosmqwuucq = ManipulateUser::igawqaomowicuayw(self::BANK_INFO, $mkucggyaiaukqoce, true); if (!(is_array($aumukmqosmqwuucq) && $aumukmqosmqwuucq)) { goto igooksugieceoege; } foreach ($aumukmqosmqwuucq as $yyimiwcuegayoskq) { $ygogqywsaqoukoqy = ManipulateArray::get($yyimiwcuegayoskq, self::ESCAPED); $yyimiwcuegayoskq[self::VALUE] = ManipulateArray::get($yyimiwcuegayoskq, self::TYPE, $ygogqywsaqoukoqy); if ($aqykuigiuwmmcieu === "\x69\156\x64\145\x78") { goto scisgsyemmsekgos; } if ($aqykuigiuwmmcieu === self::ALL || ManipulateArray::get($yyimiwcuegayoskq, $aqykuigiuwmmcieu, false)) { goto cewmoqyysgsmuiya; } goto egyyiccaeeiooaua; scisgsyemmsekgos: $oammesyieqmwuwyi[] = $yyimiwcuegayoskq; goto egyyiccaeeiooaua; cewmoqyysgsmuiya: if (!$ygogqywsaqoukoqy) { goto ooeausyowguqicuo; } $oammesyieqmwuwyi[$ygogqywsaqoukoqy] = $yyimiwcuegayoskq; ooeausyowguqicuo: egyyiccaeeiooaua: gkyawqqcmigqgaiq: } wmywuusgukmmaams: igooksugieceoege: return $oammesyieqmwuwyi; } public function uyocacmiaawcwkyy() { $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); $qecuekqmeaiykeek = []; if (!is_array($aacykmqwasyaykgu)) { goto wakmayaoqoskekqy; } foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $aqsekqkimiekimei = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::BANK_NAME); $qgeeqyucwycemwmo = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::ACCOUNT_TYPE); if (!($qgeeqyucwycemwmo && $aqsekqkimiekimei)) { goto wkeuuycukmuqiaom; } foreach ($aqsekqkimiekimei as $qmomekeesaiaoegu) { foreach ($qgeeqyucwycemwmo as $sqeykgyoooqysmca) { $qecuekqmeaiykeek[] = $this->mqyckeaqgokeqwuq($qqqskcogoyswqaum, [self::TYPE => $sqeykgyoooqysmca, self::BANK => $qmomekeesaiaoegu]); sggawugoykqcmsug: } ueigkucgaucgeimc: kqgcyoscsusgoaqi: } wgewmqieuamsoayy: wkeuuycukmuqiaom: ugqaaewwmkocwwgy: } omqiayeucoioqoao: wakmayaoqoskekqy: return array_filter($qecuekqmeaiykeek); } public function wmouogmqeaiuukqe($mkucggyaiaukqoce, $aokagokqyuysuksm = "\x62\141\x6e\153\x5f\x69\156\x66\x6f\163") { $gmksciycsesoouoi = null; $oyggesqwsywsmcsi = User::symcgieuakksimmu()->mgokaysycmigquaw($mkucggyaiaukqoce); if (!$oyggesqwsywsmcsi) { goto qoqskyuuwueqkquk; } $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); $qecuekqmeaiykeek = []; $ykiyyumywksqcisg = $iwkyyocymeukcceu = []; foreach ($oyggesqwsywsmcsi as $ygogqywsaqoukoqy => $yyimiwcuegayoskq) { $qmomekeesaiaoegu = ManipulateArray::get($yyimiwcuegayoskq, self::BANK); $sqeykgyoooqysmca = ManipulateArray::get($yyimiwcuegayoskq, self::TYPE); $miowmmgaiagcuyoo = ManipulateArray::get($yyimiwcuegayoskq, self::OWNER); if (!($sqeykgyoooqysmca && $qmomekeesaiaoegu && $miowmmgaiagcuyoo)) { goto msemumccgceyugmg; } $eqgoocgaqwqcimie = ManipulateArray::get($yyimiwcuegayoskq, $sqeykgyoooqysmca, $ygogqywsaqoukoqy); $ykiyyumywksqcisg[$ygogqywsaqoukoqy] = $this->mmymimkumuekmmgi()->kwagkemgawuoacwy($qmomekeesaiaoegu); $iwkyyocymeukcceu[$ygogqywsaqoukoqy] = sprintf("\45\x73\x20\x2d\x20\45\x73", $miowmmgaiagcuyoo, $eqgoocgaqwqcimie); foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $qgeeqyucwycemwmo = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::ACCOUNT_TYPE); $aqsekqkimiekimei = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::BANK_NAME); if (!(in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo) && in_array($qmomekeesaiaoegu, $aqsekqkimiekimei))) { goto eogwckcymuugikuy; } $qecuekqmeaiykeek[] = $this->mqyckeaqgokeqwuq($qqqskcogoyswqaum, [$aokagokqyuysuksm => $ygogqywsaqoukoqy]); eogwckcymuugikuy: eeauyscekuckoues: } mwsmsguqqkcwiiuk: msemumccgceyugmg: owmuceyswmgueasi: } qmuwoecuacmkwgem: if (!($ykiyyumywksqcisg && $iwkyyocymeukcceu)) { goto wagqgeqymeqoeuyi; } $gmksciycsesoouoi = MetaBox::auouusgocuwkgaok($aokagokqyuysuksm, $ykiyyumywksqcisg, $iwkyyocymeukcceu)->wmwikuasuocmqycw(["\166\141\x72\x69\x61\164\151\157\x6e\163" => $qecuekqmeaiykeek])->qigsyyqgewgskemg("\x77\x2d\155\x64\x2d\61\60\60")->usuqmwksoeaayaig(__("\x42\141\x6e\x6b\40\101\x63\x63\x6f\165\x6e\x74\x20\111\156\x66\157\x72\x6d\x61\x74\x69\x6f\156", PR__PKG__SALARY)); wagqgeqymeqoeuyi: qoqskyuuwueqkquk: return $gmksciycsesoouoi; } }
