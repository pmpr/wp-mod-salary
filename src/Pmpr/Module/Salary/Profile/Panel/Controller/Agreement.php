<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc4fa24744             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Module\Salary\Model\Agreement as Model; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Setting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Agreement extends Controller { public function __construct() { $this->rest_base = "\141\147\162\x65\x65\155\x65\x6e\164"; parent::__construct(); } public function register_routes() { $this->register("\57\x73\x75\142\155\151\164\55\141\160\160\154\x79", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x73\171\x67\167\143\x77\x63\165\141\x65\x77\x69\165\x69\153\x63"]])->register("\57\x67\x65\x74\55\160\165\142\x6c\151\x63\163", [Constants::wwgusigoaksqmwsm => [$this, "\145\x61\x69\x79\x6b\x6f\x6d\x65\x6d\x6d\151\151\x77\x6d\153\151"]])->register("\57\x67\145\x74\55\x70\x61\171\155\x65\156\x74\55\x66\151\145\154\144\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x6f\x6f\157\x6b\153\157\x6b\x71\x65\x61\167\x65\x71\163\x69\153"]])->register("\57\x67\145\164\55\141\147\162\145\145\x6d\145\x6e\164", [Constants::wwgusigoaksqmwsm => [$this, "\171\171\143\x69\155\143\x61\153\x75\x69\171\155\163\x61\157\x71"]])->register("\57\147\x65\x74\55\x72\145\161\x75\145\163\x74", [Constants::wwgusigoaksqmwsm => [$this, "\x79\x79\x71\x67\141\x6d\165\167\x77\141\x6b\x67\x63\151\145\171"]])->register("\x2f\x67\145\164\55\x70\x72\x6f\x64\165\x63\x74\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x61\147\145\x71\163\x77\x77\x6b\153\x71\x79\x77\143\x6b\x63\x6f"]])->register("\57\147\145\164\55\143\141\x74\145\147\x6f\162\x69\145\163", [Constants::wwgusigoaksqmwsm => [$this, "\x6d\145\163\x61\153\x6b\x79\143\x6f\x6d\171\x75\165\167\167\x6d"]])->register("\57\x67\x65\164\x2d\141\160\x70\x6c\x79\x2d\x73\164\145\x70\163", [Constants::wwgusigoaksqmwsm => [$this, "\157\145\x75\x73\155\x69\145\x73\x75\x61\167\147\157\143\x63\167"]])->register("\x2f\147\145\164\55\x6c\x69\163\x74\55\142\x79\x2d\x75\x73\x65\x72", [Constants::wwgusigoaksqmwsm => [$this, "\x77\x63\x63\x6b\x61\x6b\x6f\x77\145\x77\151\143\x73\x73\161\x67"]])->register("\57\147\145\x74\x2d\151\156\x63\x6f\x6d\145\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x75\171\x65\x63\143\157\x79\x61\x73\163\147\x6f\145\x77\151\167"]]); } public function eaiykomemmiiwmki(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $mqamowqmoasqycgc = $yoiguusocukqeayg->yksywgmucwascgwk($mkucggyaiaukqoce, true); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gkioossaaiumqqsq = $jwsqucqyaoaasykk->iekyeyicoyyawomk(); $siykeiywomwwuoiw = $gkioossaaiumqqsq->kqewyqqqiyiouaou([$eqwoegegiamegqsm->megqywqeuquawkim()->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($jwsqucqyaoaasykk::mmisekagkomcsowm, $ycoeoaakqyskgykq)->iygikqkegwkaaess()->gouskoeouiqwokqs())->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim($jwsqucqyaoaasykk::aociysagacimyqgu, $mqamowqmoasqycgc)->iygikqkegwkaaess()->gouskoeouiqwokqs())->iygikqkegwkaaess(), $eqwoegegiamegqsm->megqywqeuquawkim()->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::miswkosqicsksgok, Constants::cemyyceucooociss])->oikgyoimkwywogca())->iygikqkegwkaaess(), $eqwoegegiamegqsm->owackeyiuiikegqg()->ggmcoioqwgyccyus()->sokmmiiuyqiuoqia($jwsqucqyaoaasykk::cmiegiycgiucucgs)->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq)->oikgyoimkwywogca()), $eqwoegegiamegqsm->owogyemaccuymycq(Constants::ciywsqoeiymemsys, [Constants::miswkosqicsksgok, Constants::cemyyceucooociss])]); $yoskgaaocqaweqyw = Constants::kumuoysauoagaiiy; $kecaaeasoukoeask = "\162\145\161\x75\x65\x73\x74\x5f\x73\164\x61\164\x75\163"; $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [], $siykeiywomwwuoiw, [Constants::soquiwyuimckgiow => [$jwsqucqyaoaasykk->kumuygiiqswoyasy(true), $jwsqucqyaoaasykk->myywwqkyiwawwquy(Constants::qescuiwgsyuikume), $jwsqucqyaoaasykk->myywwqkyiwawwquy(Constants::ciywsqoeiymemsys), $kueeocmceokoouqa->kmgukcsewikeswco(Constants::ciywsqoeiymemsys, $kecaaeasoukoeask), $kueeocmceokoouqa->kmgukcsewikeswco(Constants::CREATED_AT, $yoskgaaocqaweqyw)], Constants::wosqwewmqmyweqea => false]); $oammesyieqmwuwyi = $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] ?? []; if ($oammesyieqmwuwyi) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $sgcwoeksqaiayucu = $jwsqucqyaoaasykk->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $igqsaukqcqscimok); $wciwsoomyoeueocu = $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $kecaaeasoukoeask)); if ($sgcwoeksqaiayucu !== Constants::miswkosqicsksgok) { $wciwsoomyoeueocu = Constants::oooiesaeqsouwieg; $skikmocgwukomwyq = __("\x55\156\x72\x65\x71\165\x65\x73\x74\x61\142\x6c\145", PR__MDL__SALARY); } else { if (!$wciwsoomyoeueocu) { $wciwsoomyoeueocu = Constants::owiykagmoieoggya; $skikmocgwukomwyq = __("\122\x65\161\165\145\x73\164\141\x62\x6c\145", PR__MDL__SALARY); } else { $skikmocgwukomwyq = $kueeocmceokoouqa->gascwoasakiqyumc($wciwsoomyoeueocu); } } $muocgugcqiewywag = [Constants::kumuoysauoagaiiy => $this->caokeucsksukesyo()->skckwsgymkimyuwo()->wgiecqcgakkauywu($gkyciwoiiisgywcs->get($igqsaukqcqscimok, $yoskgaaocqaweqyw)), Constants::ciywsqoeiymemsys => $wciwsoomyoeueocu, Constants::ciywsqoeiymemsys . Constants::icmokuskwoskgace => $skikmocgwukomwyq]; $oammesyieqmwuwyi[$momcykaoccoymeig] = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, $muocgugcqiewywag); } } $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function yyqgamuwwakgciey(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if (!is_wp_error($keccaugmemegoimu)) { $ycoeoaakqyskgykq = $keccaugmemegoimu; $gikyaoiioawywyeu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\x67\162\x65\x65\x6d\x65\156\164"); if ($gikyaoiioawywyeu) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $qgciakuqggmiywuk = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $gikyaoiioawywyeu)]); if ($qgciakuqggmiywuk) { $keccaugmemegoimu = $kueeocmceokoouqa->scqakcemaqsqkema($qgciakuqggmiywuk); $uiewakwqscemywuo = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::wqeucwyckaoouggq, [], [Constants::cwswygwykwgsqiwu => true, Constants::kyyscqqmsikeuaea => Constants::ciywsqoeiymemsys, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym, Constants::wosqwewmqmyweqea => $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $qgciakuqggmiywuk)]); if (!empty($uiewakwqscemywuo[Constants::eqkeooqcsscoggia])) { $keccaugmemegoimu["\x73\x74\x61\x74\x75\163\x5f\x64\145\163\143\x72\x69\x70\x74\x69\157\156"] = $uiewakwqscemywuo[Constants::eqkeooqcsscoggia]; } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x59\157\x75\x20\141\x72\x65\40\x6e\157\164\40\141\160\160\x6c\x79\x20\157\156\x20\164\x68\x69\x73\x20\141\x67\162\x65\x65\155\x65\x6e\164\x20\171\145\164\56", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\141\x67\162\x65\x65\x6d\145\156\x74\40\151\144\x20\151\x73\40\x61\40\162\145\161\165\151\162\x65\x20\146\151\x65\154\144", PR__MDL__SALARY), 400); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function oookkokqeaweqsik(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->oausasacgwqmkycw($aqmwamyiwgeeymqa, $keccaugmemegoimu); if (!is_wp_error($keccaugmemegoimu)) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $iueymcwwscwqkiyq = $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $keccaugmemegoimu); if ($iueymcwwscwqkiyq === Constants::oomiykwyawmigaui) { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $ackukeowwsmgogoy = $this->caokeucsksukesyo()->wikusamwomuogoau()->omugyqoocwwewimm(); foreach ($ackukeowwsmgogoy as $aokagokqyuysuksm => $aacgiamwycisuaoe) { $wkaqekwwgqsqwcoi = $aacgiamwycisuaoe->get_icon(); if ($wkaqekwwgqsqwcoi && $smuykqsageuocuos->has($wkaqekwwgqsqwcoi, "\x69\155\x67")) { $wkaqekwwgqsqwcoi = $smuykqsageuocuos->igmaewykumgwoaoy($wkaqekwwgqsqwcoi, ["\151\x6d\147" => [Constants::qomookamaskuoswk => "\62\65\x70\x78", Constants::sogmkkcwuamuqegw => "\x32\65\160\x78"]]); } $ackukeowwsmgogoy[$aokagokqyuysuksm] = [Constants::ciyoccqkiamemcmm => $aokagokqyuysuksm, Constants::TEXT => $wkaqekwwgqsqwcoi . "\x3c\163\x70\141\156\40\143\154\x61\x73\x73\x3d\x27\x6d\x6c\55\62\x27\x3e{$aacgiamwycisuaoe->get_title()}\74\x2f\x73\x70\x61\156\x3e", Constants::eqkeooqcsscoggia => $aacgiamwycisuaoe->get_description()]; } $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $ikgwqyuyckaewsow = []; if ($ackukeowwsmgogoy) { $ikgwqyuyckaewsow[] = $gusoaiguqeaommcc->yyuwuqsiucweeoue(Constants::kkeogqiyysoyuemk)->gswweykyogmsyawy(__("\120\x61\171\x6d\x65\x6e\164\x20\115\145\x74\x68\157\x64", PR__MDL__SALARY))->acauweqyyugwisqc($ackukeowwsmgogoy)->eumecwmqmukqgyea(); } $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x59\x6f\x75\162\x20\162\145\x71\165\145\x73\164\40\x63\x61\156\x20\156\157\x74\40\142\x65\40\160\141\x79\x65\144\x20\162\151\147\150\164\x20\x6e\157\167\x20\157\x72\x20\144\x6f\156\164\x20\x6e\x65\145\144\40\164\x6f\x20\x62\x65\40\160\141\x79\145\144\x2e", PR__MDL__SALARY)); } } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function yycimcakuiymsaoq(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, true); if (!is_wp_error($keccaugmemegoimu)) { $xssuewsokckmigqk = $keccaugmemegoimu; $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $yygmoeguaqyumuui = [Constants::kkeogqiyysoyuemk => IconInterface::okgwkgguoawyiecg, $jwsqucqyaoaasykk::siwsmgcqgcqmaeui => IconInterface::cyeyqyiaoagiucws, $jwsqucqyaoaasykk::weumemyqgykuwqok => IconInterface::kacscoqyuismekww, $jwsqucqyaoaasykk::yykcmqogieykgkus => IconInterface::gqusoyqaekkgqmas]; $icwicymcioeyeyek = []; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { $eqgoocgaqwqcimie = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $uusmaiomayssaecw); $aaqqkgyougeiueyq = $jwsqucqyaoaasykk->uqeoyqiwywwmsiew($uusmaiomayssaecw); if ($aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Enum) { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->ymgomemcusiiyksw($eqgoocgaqwqcimie); } $icwicymcioeyeyek[$uusmaiomayssaecw] = [Constants::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi]; } } $keccaugmemegoimu = [Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek, Constants::gouqcwikiiygyasc => $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk), Constants::qescuiwgsyuikume => $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::qescuiwgsyuikume), Constants::ucoiewcoucauqwko => $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::ucoiewcoucauqwko), Constants::eqkeooqcsscoggia => $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::eqkeooqcsscoggia)]; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x59\x6f\165\x72\40\162\145\161\165\x65\163\x74\x65\144\x20\141\147\x72\145\145\155\145\x6e\164\40\156\157\x74\40\146\157\x75\156\144", PR__MDL__SALARY), 404); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ageqswwkkqywckco(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $keccaugmemegoimu = $this->cmkqiucqwwmuiuug($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, false); if (!is_wp_error($keccaugmemegoimu)) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = $keccaugmemegoimu; $oksqskmgoqiqciis = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::kmqmeaywmyiqqkqw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oksqskmgoqiqciis, [$this, "\153\165\x77\157\x65\171\x6b\x77\x77\151\147\157\145\x61\x6f\161"], [Constants::meksegaoamowuwoq => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), "\141\147\x72\145\145\x6d\145\x6e\x74" => $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk)]); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mesakkycomyuuwwm(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $keccaugmemegoimu = $this->cmkqiucqwwmuiuug($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, false); if (!is_wp_error($keccaugmemegoimu)) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = $keccaugmemegoimu; $eyscsimwcyaqakqg = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::guksqgkoswygwycw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $eyscsimwcyaqakqg, [$this, "\141\x77\147\143\147\x61\171\x79\x6f\x71\x69\x6b\x6d\155\x71\157"], [Constants::meksegaoamowuwoq => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), "\x61\x67\x72\x65\145\x6d\145\x6e\x74" => $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk)]); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function sygwcwcuaewiuikc(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { if ($gikyaoiioawywyeu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\x67\x72\145\145\155\x65\156\x74")) { if ($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x63\x6f\156\163\x65\x6e\164") === Constants::ON) { if ($this->kigooyssyoymamko($mkucggyaiaukqoce)) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if (!$kueeocmceokoouqa->iekyeyicoyyawomk()->exists([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce, true)), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $gikyaoiioawywyeu)])) { $xssuewsokckmigqk = $this->cmkqiucqwwmuiuug($aqmwamyiwgeeymqa, $mkucggyaiaukqoce); if (!is_wp_error($xssuewsokckmigqk)) { $sogksuscggsicmac = $kueeocmceokoouqa->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::meksegaoamowuwoq => $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce), Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo, $kueeocmceokoouqa::woagckamiequeoyu => $gikyaoiioawywyeu]); if (!is_wp_error($sogksuscggsicmac)) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\131\157\x75\40\x72\x65\161\x75\145\163\164\x20\x73\x75\x62\x6d\151\x74\164\x65\x64\40\x73\x75\143\x63\145\x73\x73\146\165\x6c\x6c\x79", PR__MDL__SALARY)); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\157\x6d\x65\x74\x68\x69\x6e\x67\x20\x77\x72\157\x6e\147\40\157\x6e\40\x73\x75\x62\x6d\151\x74\164\x69\156\x67\40\171\157\x75\x72\40\162\x65\161\x75\145\163\164\x2c\40\160\154\145\x61\x73\x65\40\x74\162\x79\40\x61\x67\141\151\x6e\x20\141\x66\x74\145\162\40\146\x65\167\40\155\151\156\165\x74\145\x73", PR__MDL__SALARY), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\162\x65\x71\165\145\x73\164\x65\x64\x20\141\147\162\x65\x65\155\145\156\x74\40\x69\163\x20\156\157\164\x20\x76\141\x6c\x69\144\40\x6f\x72\x20\x6e\157\x74\x20\x65\x78\151\x73\164\x2c\40\x70\154\145\x61\x73\x65\40\x72\145\x66\x72\x65\x73\x68\40\x70\141\147\x65\x20\141\x6e\x64\x20\x74\x72\x79\x20\141\x67\x61\x69\x6e", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x79\157\x75\40\141\x6c\x72\145\141\144\x79\x20\x73\165\x62\155\x69\x74\x20\x61\x20\162\145\161\165\145\163\164\40\x6f\x6e\40\164\150\151\163\x20\141\147\162\x65\x65\x6d\x65\156\x74", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\131\x6f\x75\x72\40\166\145\162\151\x66\x69\141\142\x6c\x65\x20\x66\x69\145\x6c\144\163\x20\151\163\x20\x6e\x6f\164\40\x76\x65\x72\x69\x66\151\145\x64\x2c\40\x63\x61\156\47\x74\40\x73\x75\x62\x6d\151\164\x20\171\157\165\162\x20\x72\x65\x71\x75\x65\163\164", PR__MDL__SALARY)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x50\x6c\x65\141\x73\145\40\x61\x63\x63\x65\160\164\x20\x74\x65\162\155\x73\x20\146\151\162\163\164\56", PR__MDL__SALARY), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\141\x67\x72\x65\x65\x6d\x65\156\x74\x20\151\144\x20\x69\163\40\141\40\x72\x65\161\x75\x69\x72\145\40\146\x69\x65\x6c\x64", PR__MDL__SALARY), 400); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa, Constants::gouqcwikiiygyasc); if (!is_wp_error($keccaugmemegoimu)) { $ycoeoaakqyskgykq = $keccaugmemegoimu; $keccaugmemegoimu = $this->oausasacgwqmkycw($aqmwamyiwgeeymqa, $ycoeoaakqyskgykq); if ($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu)) { $wqqmoakyckcwwkua = $keccaugmemegoimu; $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [$eqwoegegiamegqsm->megqywqeuquawkim($ogekyekymoyuywog::cmiegiycgiucucgs, $kueeocmceokoouqa->mwyqswsaeeewsosm($wqqmoakyckcwwkua))]); } else { if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x49\x74\47\163\40\163\x65\145\155\163\40\x79\x6f\165\40\x64\x6f\x6e\x74\40\x73\x75\x62\155\x69\164\x20\141\156\x79\x20\x72\x65\x71\x75\x65\x73\164\40\157\156\40\164\x68\x65\x20\x61\x67\x72\145\x65\155\x65\156\164", PR__MDL__SALARY), 400); } } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wcckakowewicssqg(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { $keccaugmemegoimu = $mkucggyaiaukqoce; } else { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Model::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $siykeiywomwwuoiw = $kueeocmceokoouqa->iekyeyicoyyawomk()->kqewyqqqiyiouaou([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce)), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::cwiummueqsucqayc), $eqwoegegiamegqsm->owackeyiuiikegqg()->sokmmiiuyqiuoqia($kueeocmceokoouqa::woagckamiequeoyu)->ggmcoioqwgyccyus()]); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $kueeocmceokoouqa, [], $siykeiywomwwuoiw, [Constants::soquiwyuimckgiow => [$mssuumukiiaqmcka->kumuygiiqswoyasy(true), $mssuumukiiaqmcka->myywwqkyiwawwquy(Constants::qescuiwgsyuikume), $mssuumukiiaqmcka->myywwqkyiwawwquy($mssuumukiiaqmcka::kmqmeaywmyiqqkqw), $mssuumukiiaqmcka->myywwqkyiwawwquy($mssuumukiiaqmcka::guksqgkoswygwycw)], Constants::wosqwewmqmyweqea => false]); if ($oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($keccaugmemegoimu, Constants::qwumqqyuasyskkkc, [])) { $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $mssuumukiiaqmcka->cwgkcyyaymmsomqa($oammesyieqmwuwyi); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function oeusmiesuawgoccw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $mkucggyaiaukqoce = $keccaugmemegoimu; $xssuewsokckmigqk = $this->cmkqiucqwwmuiuug($aqmwamyiwgeeymqa, $mkucggyaiaukqoce); if ($xssuewsokckmigqk && !is_wp_error($xssuewsokckmigqk)) { $mssuumukiiaqmcka = Model::symcgieuakksimmu(); $keccaugmemegoimu = ["\x64\x65\164\x61\151\154\163" => [Constants::qgqyauaqwqmqseim => IconInterface::qiykkecoigmioaay, Constants::qwumqqyuasyskkkc => $this->qsyweymowowcmsww($keccaugmemegoimu), Constants::uissasisiuymwsmu => __("\103\157\157\x70\145\x72\x61\x74\151\157\x6e\40\x44\145\164\x61\x69\154\163", PR__MDL__SALARY), Constants::qescuiwgsyuikume => $mssuumukiiaqmcka->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::qescuiwgsyuikume), Constants::eymwucuaaiiciymc => 1, Constants::eqkeooqcsscoggia => __("\124\150\151\163\x20\160\x61\x67\x65\x20\160\x72\x6f\166\151\x64\145\163\40\141\x20\x73\x75\x6d\155\x61\x72\x79\40\x6f\x66\x20\x74\150\x65\x20\144\145\164\141\x69\x6c\163\x20\157\146\x20\x68\x6f\x77\x20\164\157\40\143\157\154\154\x61\x62\x6f\x72\141\164\x65\56\40\x49\x66\x20\x79\x6f\165\40\141\162\145\x20\151\x6e\x74\145\x72\x65\163\164\145\x64\x20\151\156\x20\x64\x6f\151\x6e\147\x20\x73\157\54\x20\x70\154\x65\141\x73\145\40\160\162\157\143\145\x65\144\x20\x74\x6f\40\x74\150\x65\40\156\x65\x78\x74\x20\163\164\x65\160\x2e", PR__MDL__SALARY)], "\160\x72\145\x72\x65\161\165\x69\x73\x69\164\145\x73" => [Constants::qgqyauaqwqmqseim => IconInterface::eikwkmckkqcsygys, Constants::qwumqqyuasyskkkc => $this->qsyweymowowcmsww($keccaugmemegoimu), Constants::uissasisiuymwsmu => __("\x50\x72\145\162\145\161\x75\151\x73\151\x74\x65\163", PR__MDL__SALARY), Constants::qescuiwgsyuikume => __("\x43\x6f\x6d\160\154\145\164\145\x20\x50\x72\x6f\146\x69\x6c\145", PR__MDL__SALARY), Constants::eymwucuaaiiciymc => 2, Constants::eqkeooqcsscoggia => __("\103\x6f\x6d\x70\154\145\164\145\x20\x74\x68\145\40\x66\x6f\x6c\154\x6f\x77\151\156\147\40\151\x6e\x66\157\162\155\x61\164\151\x6f\156\x20\151\156\x20\x79\x6f\165\162\40\165\163\145\162\x20\x70\162\157\146\151\154\x65\56\40\111\146\40\164\150\145\40\151\156\146\x6f\162\155\x61\x74\x69\x6f\156\40\x61\x6e\x64\40\x64\157\x63\x75\155\145\156\164\x73\x20\141\162\x65\x20\166\x65\162\151\x66\x69\145\x64\54\40\171\x6f\x75\x20\167\x69\x6c\154\40\x62\x65\40\144\151\x72\145\143\x74\145\144\40\164\157\x20\164\x68\145\40\156\x65\170\164\40\163\x74\x65\x70\x2e\x20\x54\150\145\x20\x76\x65\x72\151\146\151\x63\x61\164\151\157\x6e\40\160\x72\x6f\x63\x65\163\x73\40\167\151\x6c\154\40\x74\141\x6b\145\x20\142\x65\164\x77\145\145\x6e\40\141\x20\x66\145\167\x20\x68\x6f\165\162\163\40\141\156\x64\x20\141\40\146\145\167\40\144\141\171\163\x2e\40\x50\x6c\145\141\163\x65\x20\143\x68\x65\x63\x6b\40\142\141\x63\153\x20\157\156\40\x74\150\151\x73\x20\160\x61\147\x65\40\x69\x6e\x20\164\150\x65\x20\143\157\155\x69\x6e\147\x20\144\141\x79\x73\x20\x74\157\x20\x63\x68\x65\143\x6b\x20\164\x68\145\40\162\145\163\165\154\164\x73\40\157\146\40\x74\x68\x65\x20\166\x65\x72\151\x66\x69\143\141\164\x69\157\156\40\160\x72\x6f\143\x65\163\x73\x2e", PR__MDL__SALARY)], "\164\x65\162\155\163" => [Constants::qgqyauaqwqmqseim => IconInterface::umisosmogyssawss, Constants::ucoiewcoucauqwko => $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->aqiqkkuauegomyoi($mssuumukiiaqmcka->waecsyqmwascmqoa($xssuewsokckmigqk, Constants::ucoiewcoucauqwko)), Constants::uissasisiuymwsmu => __("\103\x6f\157\160\x65\x72\x61\164\x69\157\156\x20\124\145\x72\155\x73", PR__MDL__SALARY), Constants::qescuiwgsyuikume => __("\x43\157\x6f\x70\145\162\x61\x74\151\157\156\x20\124\145\162\155\163", PR__MDL__SALARY), Constants::eymwucuaaiiciymc => 3, Constants::eqkeooqcsscoggia => __("\x42\171\40\163\165\142\x6d\x69\164\164\151\x6e\x67\40\171\157\x75\162\40\143\x6f\157\x70\x65\x72\141\164\x69\157\x6e\x20\162\x65\x71\x75\x65\163\x74\x2c\40\171\x6f\165\x20\141\147\x72\x65\x65\x20\164\x6f\40\164\150\x65\40\x66\157\154\154\157\x77\x69\x6e\147\x20\x74\x65\x72\155\x73\40\141\156\144\x20\143\x6f\156\144\151\x74\151\157\x6e\x73\x2e\x20\111\146\x20\171\x6f\x75\40\x77\x69\163\150\40\x74\157\40\x63\x6f\x6f\160\145\162\141\x74\145\54\40\x70\x6c\145\141\163\x65\40\x63\157\x6e\x66\x69\x72\155\40\164\x68\145\x20\x74\145\162\155\163\x20\x61\x6e\x64\40\x63\x6f\x6e\144\151\x74\151\x6f\156\x73\40\141\156\x64\x20\160\162\157\x63\145\145\x64\40\164\x6f\40\x74\x68\145\x20\x6e\x65\170\164\x20\163\164\x65\160\56", PR__MDL__SALARY)]]; } else { if (is_wp_error($xssuewsokckmigqk)) { $keccaugmemegoimu = $xssuewsokckmigqk; } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\145\161\x75\x65\163\164\x65\144\x20\141\147\162\145\x65\155\145\156\x74\x20\x6e\157\164\x20\x66\x6f\x75\156\x64\41", PR__MDL__SALARY)); } } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kuwoeykwwigoeaoq($aqmwamyiwgeeymqa, $product, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; if ($product) { $meqocwsecsywiiqs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::ckmqoekmugkggeym => $product, Constants::iikosyqiawkweouo => [Constants::mgsccwumkcawaqcy => "\x5f\x62\154\141\x6e\153"]]); $sogksuscggsicmac = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]; $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { $aumscagymwyyicag = $usmsssmiougymckk->iimgkucsckeosmmk($product); if (!$aumscagymwyyicag) { $aumscagymwyyicag = __("\x57\x69\x74\150\x6f\165\164\40\x50\x72\x69\143\x65", PR__MDL__SALARY); } $sogksuscggsicmac[Constants::acymsykymkiewqsy] = $aumscagymwyyicag; } else { $qecuekqmeaiykeek = $usmsssmiougymckk->mmoaikqueyiwcesm($product); $qecuekqmeaiykeek[] = $usmsssmiougymckk->iooowgsqoyqseyuu($product); $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); } } return $sogksuscggsicmac; } public function awgcgayyoqikmmqo($aqmwamyiwgeeymqa, $guwumyyyakswawas, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if ($guwumyyyakswawas = $aoskwucuugeuaeus->get($guwumyyyakswawas)) { $oksqskmgoqiqciis = $aoskwucuugeuaeus->iyssgoiwgwygeacg($guwumyyyakswawas, Constants::oguseymmyyoyaako, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $okcscwesammossuq = []; $qecuekqmeaiykeek = []; foreach ($oksqskmgoqiqciis as $product) { if ($product = $usmsssmiougymckk->get($product)) { $okcscwesammossuq[] = $usmsssmiougymckk->mmoaikqueyiwcesm($product); $qecuekqmeaiykeek[] = $usmsssmiougymckk->iooowgsqoyqseyuu($product); } } $qecuekqmeaiykeek = array_merge([], ...$okcscwesammossuq); $meqocwsecsywiiqs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::squoamkioomemiyi => Constants::yoayaissyomokiui, Constants::ckmqoekmugkggeym => $guwumyyyakswawas, Constants::iikosyqiawkweouo => [Constants::mgsccwumkcawaqcy => "\137\x62\x6c\x61\x6e\x6b"]]); $sogksuscggsicmac = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::kmqmeaywmyiqqkqw => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(count($oksqskmgoqiqciis))]; $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); } return $sogksuscggsicmac; } private function okqaggqwqcaieqoc($aqmwamyiwgeeymqa) { return $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\x70\160\x6c\171", false); } private function kigooyssyoymamko($mkucggyaiaukqoce) : bool { $kqwygogeauwwyoca = true; $ikgwqyuyckaewsow = $this->qsyweymowowcmsww($mkucggyaiaukqoce); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $iueymcwwscwqkiyq = $aiowsaccomcoikus[Constants::ciywsqoeiymemsys] ?? false; if ($iueymcwwscwqkiyq !== Constants::koswkeacksqaocay) { $kqwygogeauwwyoca = false; break; } } return $kqwygogeauwwyoca; } private function qsyweymowowcmsww($mkucggyaiaukqoce) : array { $sogksuscggsicmac = []; $ouwoukcecmicoeos = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::eieeagimaskkekew); if ($ouwoukcecmicoeos) { $ikgwqyuyckaewsow = (array) $this->ocksiywmkyaqseou("\160\141\156\x65\x6c\137\x75\x73\x65\162\x5f\147\x65\164\x5f\146\x69\145\x6c\144\163", [], [Constants::meksegaoamowuwoq => $mkucggyaiaukqoce, Constants::ackcaikowcokggsc => $ouwoukcecmicoeos, Constants::wacsysugayaeayag => true]); $ocqaciyqwmcuuuue = [Constants::sgoswgskyiiwkyuo => __("\x50\145\x6e\x64\151\x6e\147", PR__MDL__SALARY), Constants::koswkeacksqaocay => __("\126\x65\162\x69\x66\x69\145\144", PR__MDL__SALARY), Constants::iiiimowywicukqke => __("\125\156\143\x6f\x6d\160\x6c\x65\x74\145\x64", PR__MDL__SALARY)]; if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $iueymcwwscwqkiyq = Constants::iiiimowywicukqke; if ($aiowsaccomcoikus->iokkueaqiswaewyq()) { if ($aiowsaccomcoikus->wowamsaiqwikqoqa()) { $iueymcwwscwqkiyq = Constants::koswkeacksqaocay; } else { if ($aiowsaccomcoikus->qooeaookuemoqecm()) { $iueymcwwscwqkiyq = Constants::sgoswgskyiiwkyuo; } } } else { if ($aiowsaccomcoikus->qooeaookuemoqecm()) { $iueymcwwscwqkiyq = Constants::koswkeacksqaocay; } } $kqwygogeauwwyoca = Constants::koswkeacksqaocay === $iueymcwwscwqkiyq; $sogksuscggsicmac[$aiowsaccomcoikus->mwikyscisascoeea()] = [Constants::qgqyauaqwqmqseim => $kqwygogeauwwyoca ? IconInterface::ggokgkyiweugsokc : IconInterface::ucomcyskmkiqysee, Constants::qescuiwgsyuikume => $aiowsaccomcoikus->qcgakseyaikigqco(), Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Constants::koswkeacksqaocay => $kqwygogeauwwyoca, Constants::iuqumwggccmcuyem => $kqwygogeauwwyoca ? 2 : (Constants::sgoswgskyiiwkyuo === $iueymcwwscwqkiyq ? 1 : 0), Constants::ciywsqoeiymemsys . Constants::icmokuskwoskgace => $ocqaciyqwmcuuuue[$iueymcwwscwqkiyq] ?? '']; } } } } return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($sogksuscggsicmac); } private function oausasacgwqmkycw(WP_REST_Request $aqmwamyiwgeeymqa, $ycoeoaakqyskgykq) { if ($gikyaoiioawywyeu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\x67\x72\x65\145\x6d\145\156\x74")) { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $sogksuscggsicmac = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $gikyaoiioawywyeu)]); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\x67\162\145\145\x6d\145\156\x74\40\151\x73\40\x72\145\x71\165\151\x72\145\x64", PR__MDL__SALARY)); } return $sogksuscggsicmac; } private function mswqycukmiokeuiu(array $sogksuscggsicmac, WP_REST_Request $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, array $ywmkwiwkosakssii = []) : array { $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if (!$this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ycoeoaakqyskgykq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::meksegaoamowuwoq); $gikyaoiioawywyeu = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, $kueeocmceokoouqa::woagckamiequeoyu); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $qgciakuqggmiywuk = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $gikyaoiioawywyeu)]); $qsmaqqyoggcuyukq = $gaeqamemwmwsyukm = 0; if ($qgciakuqggmiywuk) { $uoomaookgsyciacm = [$eqwoegegiamegqsm->megqywqeuquawkim(Constants::iockmgiyoygcswog, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::oguseymmyyoyaako, $qecuekqmeaiykeek), $eqwoegegiamegqsm->megqywqeuquawkim($ogekyekymoyuywog::cmiegiycgiucucgs, $gikyaoiioawywyeu)]; $qsmaqqyoggcuyukq = $ogekyekymoyuywog->iekyeyicoyyawomk()->qgiewwqykwugcuoo($ogekyekymoyuywog::aioqyewkwawaqgqe, $uoomaookgsyciacm); $gaeqamemwmwsyukm = $ogekyekymoyuywog->iekyeyicoyyawomk()->asskucacysemeoiu($uoomaookgsyciacm); } $sogksuscggsicmac["\151\x6e\143\157\155\145\x73\x5f\x73\165\155"] = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($qsmaqqyoggcuyukq); $sogksuscggsicmac["\x69\156\143\x6f\155\145\x73\137\x63\x6f\165\156\164"] = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm); } return $sogksuscggsicmac; } public function gayyweiqkuooeicq(WP_REST_Request $aqmwamyiwgeeymqa, bool $tsuauommsquiesmk = false) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = null; $gikyaoiioawywyeu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\x67\x72\145\x65\x6d\145\156\164"); if ($gikyaoiioawywyeu) { $xssuewsokckmigqk = $jwsqucqyaoaasykk->iekyeyicoyyawomk()->akkkoiiymmamsauc($gikyaoiioawywyeu); if ($xssuewsokckmigqk && $tsuauommsquiesmk) { $xssuewsokckmigqk = $jwsqucqyaoaasykk->scqakcemaqsqkema($xssuewsokckmigqk); } } return $xssuewsokckmigqk; } private function cmkqiucqwwmuiuug(WP_REST_Request $aqmwamyiwgeeymqa, $mkucggyaiaukqoce, bool $tsuauommsquiesmk = true) { if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa)) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $iueymcwwscwqkiyq = $jwsqucqyaoaasykk->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $xssuewsokckmigqk, Constants::aqugcqsyeisayuog); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $qgciakuqggmiywuk = $kueeocmceokoouqa->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::meksegaoamowuwoq, $ycoeoaakqyskgykq), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $jwsqucqyaoaasykk->mwyqswsaeeewsosm($xssuewsokckmigqk))]); if ($qgciakuqggmiywuk) { if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\x73\x65\162\x20\141\154\x72\145\141\144\171\x20\x73\x75\x62\155\151\164\40\141\x20\162\x65\161\x75\145\x73\164\x20\157\156\x20\164\x68\x69\x73\40\x61\x67\162\145\x65\x6d\145\156\x74", PR__MDL__SALARY)); } if (Constants::yascuqeoeosyewwc === $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $qgciakuqggmiywuk, Constants::sgoswgskyiiwkyuo)) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\x73\145\x72\x20\162\145\x71\x75\x65\163\164\x20\x72\x65\152\x65\143\164\x65\x64\40\x62\x79\40\x61\144\x6d\151\x6e", PR__MDL__SALARY)); } } if (Constants::aqugcqsyeisayuog === $iueymcwwscwqkiyq) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\147\x72\145\x65\155\145\156\164\40\151\163\40\160\x72\x69\x76\141\164\145", PR__MDL__SALARY)); } if ($eiaskqgsuqcysisw = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, [])) { if (!in_array($ycoeoaakqyskgykq, $eiaskqgsuqcysisw, true)) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\147\162\x65\145\x6d\x65\x6e\164\x20\x6e\157\x74\40\x66\157\x72\x20\164\150\x65\x20\x75\163\x65\162", PR__MDL__SALARY)); } } else { if ($guguqsiieswegsiy = $jwsqucqyaoaasykk->waecsyqmwascmqoa($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, [])) { $askmkgcmgekiqwsg = false; foreach ($guguqsiieswegsiy as $iqgguioieaoeaucu) { if ($yoiguusocukqeayg->askmkgcmgekiqwsg($iqgguioieaoeaucu, $mkucggyaiaukqoce, true)) { $askmkgcmgekiqwsg = true; } } if (!$askmkgcmgekiqwsg) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\147\x72\145\145\x6d\145\156\x74\x20\x6e\x6f\x74\40\146\157\162\40\164\150\x65\x20\x75\163\145\162", PR__MDL__SALARY)); } } } if ($tsuauommsquiesmk) { $xssuewsokckmigqk = $jwsqucqyaoaasykk->scqakcemaqsqkema($xssuewsokckmigqk); } return $xssuewsokckmigqk; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\147\162\145\145\x6d\145\156\x74\x20\x6e\x6f\x74\x20\146\157\165\x6e\144\145\x64\x2e", PR__MDL__SALARY)); } }
