<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c039ae18cf0             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\FormMaker\Front\Field\Field; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\Salary\Model\Agreement as Model; use Pmpr\Package\Salary\Model\Request; use Pmpr\Package\Salary\Model\Income; use Pmpr\Package\Salary\Setting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Agreement extends Controller { public function __construct() { $this->rest_base = "\x61\x67\x72\145\145\155\145\x6e\164"; parent::__construct(); } public function register_routes() { $this->register("\x2f\147\x65\x74\x2d\154\151\x73\x74\x2d\x62\x79\55\165\163\145\x72", ["\x61\x72\147\x73" => [], "\x6d\145\164\x68\157\144\163" => self::uigoseacoukemwqc, "\x63\141\x6c\x6c\x62\x61\143\153" => [$this, "\143\x75\x61\153\x69\145\153\163\x73\x67\x6b\x65\171\163\x77\x61"]]); $this->register("\x2f\x67\x65\x74\55\141\147\162\x65\x65\155\145\x6e\164", ["\x61\x72\x67\163" => [], "\x6d\145\164\x68\157\144\163" => self::uigoseacoukemwqc, "\x63\x61\x6c\x6c\x62\141\143\153" => [$this, "\x79\171\x63\x69\155\x63\x61\153\x75\x69\x79\155\163\141\157\x71"]]); $this->register("\x2f\x67\x65\x74\55\x69\x6e\x63\x6f\155\x65\163", ["\x61\x72\x67\x73" => [], "\x6d\x65\x74\150\157\144\x73" => self::uigoseacoukemwqc, "\143\141\154\x6c\142\141\x63\153" => [$this, "\x75\x79\145\x63\x63\157\171\141\x73\x73\147\157\x65\x77\151\x77"]]); $this->register("\57\147\x65\164\55\x70\x72\x6f\144\165\143\x74\163", ["\x61\x72\147\x73" => [], "\155\x65\x74\x68\x6f\x64\163" => self::uigoseacoukemwqc, "\x63\x61\x6c\154\x62\x61\x63\x6b" => [$this, "\141\147\x65\x71\x73\167\x77\x6b\153\x71\x79\x77\143\x6b\143\x6f"]]); $this->register("\x2f\147\145\164\55\x63\141\x74\145\x67\x6f\x72\x69\145\163", ["\x61\x72\147\163" => [], "\x6d\145\164\x68\157\144\163" => self::uigoseacoukemwqc, "\x63\x61\154\x6c\x62\141\143\x6b" => [$this, "\x6d\145\163\141\153\x6b\x79\x63\157\155\171\165\165\x77\167\x6d"]]); $this->register("\57\x67\145\x74\x2d\160\165\142\154\x69\x63\163", ["\141\x72\x67\163" => [], "\155\x65\164\x68\157\x64\163" => self::uigoseacoukemwqc, "\143\x61\x6c\154\142\141\143\153" => [$this, "\145\141\151\x79\153\157\x6d\x65\155\155\x69\151\167\155\153\151"]]); $this->register("\57\x67\145\x74\x2d\141\x70\x70\154\171\x2d\162\x65\x71\x75\151\x72\x65\x73", ["\x61\162\x67\163" => [], "\x6d\145\164\x68\x6f\x64\163" => self::uigoseacoukemwqc, "\143\141\154\x6c\142\141\x63\153" => [$this, "\x6f\143\165\145\x67\167\163\x75\x71\167\153\161\155\x6f\151\x69"]]); $this->register("\57\x73\x75\142\155\x69\x74\55\141\x70\x70\154\171", ["\x61\x72\x67\x73" => [], "\155\145\x74\150\x6f\x64\x73" => self::qucyckeykeuuaquw, "\143\141\x6c\154\x62\141\143\153" => [$this, "\163\171\x67\x77\x63\167\143\165\141\x65\x77\x69\x75\x69\x6b\x63"]]); } private function okqaggqwqcaieqoc($aqmwamyiwgeeymqa) { return $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\x70\160\154\171", false); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto qyeswawykmasuqye; } $ogekyekymoyuywog = Income::symcgieuakksimmu(); $xssuewsokckmigqk = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\x67\x72\145\x65\x6d\x65\156\x74"); if ($xssuewsokckmigqk) { goto cuommomwmsackoqc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\101\147\x72\x65\145\x6d\x65\x6e\x74\40\151\x73\40\x72\x65\x71\x75\x69\162\x65", PR__PKG__SALARY), 404); goto ggeoqeowscwkeumy; cuommomwmsackoqc: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [$ogekyekymoyuywog::iockmgiyoygcswog => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce, true), $ogekyekymoyuywog::AGREEMENT_ID => $xssuewsokckmigqk]); ggeoqeowscwkeumy: goto uwaimsisescsgyqk; qyeswawykmasuqye: $keccaugmemegoimu = $mkucggyaiaukqoce; uwaimsisescsgyqk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function sygwcwcuaewiuikc(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto kmooekeyemqgucci; } if ($this->qsyweymowowcmsww($mkucggyaiaukqoce)["\141\x70\160\x6c\x69\x61\142\x6c\145"]) { goto mosuacsuaasssciu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\157\165\162\x20\x76\x65\x72\151\x66\151\x61\142\154\145\x20\146\151\145\x6c\144\163\40\x69\x73\40\x6e\x6f\164\40\166\145\x72\151\x66\x69\x65\144\54\40\x63\x61\156\x27\164\40\x73\x75\x62\155\x69\x74\40\x79\x6f\x75\162\40\x72\145\161\165\145\163\164", PR__PKG__SALARY)); goto qksckewucmosemuo; mosuacsuaasssciu: $wsoeeiiqguoauciy = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\143\141\x6e\x5f\x61\160\x70\x6c\171"); if ($wsoeeiiqguoauciy) { goto esqwswmoegiqcckg; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x50\154\x65\x61\x73\145\40\x61\143\x63\145\x70\164\x20\164\x65\x72\x6d\163\x20\x66\151\162\x73\x74\x20\x6f\x72\40\x6d\x61\153\x65\40\x73\x75\162\x65\x20\171\157\165\x72\40\x76\145\x72\x69\x66\x79\x20\x72\145\x71\x75\x69\x72\145\x20\x66\151\x65\154\144\163\40\x69\x73\40\166\145\x72\x69\146\x69\145\x64", PR__PKG__SALARY), 400); goto qmokwkocmcyeyesc; esqwswmoegiqcckg: $gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\147\162\x65\145\155\145\x6e\164"); if ($gimugccgakegomoq) { goto mwieyyqamgwicgco; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x61\147\x72\x65\x65\155\145\x6e\164\x20\151\144\x20\151\x73\40\x61\40\x72\x65\161\165\x69\x72\x65\x20\146\x69\145\x6c\x64", PR__PKG__SALARY), 400); goto wkiymcoqqiigqaaw; mwieyyqamgwicgco: $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if (!$kueeocmceokoouqa->qumqowkwyaceeqwu([$kueeocmceokoouqa::meksegaoamowuwoq => $saqgcoqwmimycgim, $kueeocmceokoouqa::AGREEMENT_ID => $gimugccgakegomoq])) { goto kceuusiekagyeoys; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\x6f\165\x20\x61\154\x72\145\x61\144\171\x20\x73\165\x62\x6d\x69\164\x20\x72\x65\161\x75\145\x73\x74\x20\146\157\162\40\164\150\x69\163\x20\x61\147\162\145\145\x6d\145\156\x74", PR__PKG__SALARY), 400); goto uyeyscsaigimsqwq; kceuusiekagyeoys: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = $jwsqucqyaoaasykk->akkkoiiymmamsauc($gimugccgakegomoq); if ($xssuewsokckmigqk && $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::AS_PUBLIC)) { goto gkoaeuekqockuoiq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\162\x65\161\x75\x65\x73\x74\x65\144\x20\x61\x67\162\145\x65\x6d\x65\156\x74\x20\x69\x73\x20\156\x6f\x74\x20\x76\x61\154\x69\144\54\x20\160\x6c\145\x61\163\145\40\162\x65\146\162\145\x73\150\40\x70\x61\x67\x65\x20\141\x6e\x64\x20\x74\x72\171\x20\x61\147\141\151\x6e", PR__PKG__SALARY), 400); goto eekaiaeqewiqkkgm; gkoaeuekqockuoiq: $xwemcsusuaukogau = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::eyqgmoumkowegyse); if ($xwemcsusuaukogau) { goto kwmiwaecqcgiaqye; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\x6f\165\x72\40\x72\145\x71\x75\145\163\x74\145\x64\40\141\147\162\145\145\x6d\x65\x6e\164\40\151\163\40\156\x6f\164\40\x61\40\x76\141\x6c\x69\x64\x20\141\147\x72\x65\x65\155\145\156\x74", PR__PKG__SALARY), 400); goto yqicwmekwuoywyus; kwmiwaecqcgiaqye: if (!ManipulateUser::askmkgcmgekiqwsg($xwemcsusuaukogau, $mkucggyaiaukqoce, true)) { goto ukwoswyyogmsygqg; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\157\165\x20\141\x6c\x72\145\141\144\x79\x20\151\x6e\x63\x6c\165\x64\x65\x64\x20\164\157\x20\164\x68\151\x73\40\141\x67\x72\145\x65\155\145\156\164", PR__PKG__SALARY), 400); goto jsmisuccwyukksgc; ukwoswyyogmsygqg: $sogksuscggsicmac = $kueeocmceokoouqa->gscuuyuyauokoyuo([$kueeocmceokoouqa::meksegaoamowuwoq => $saqgcoqwmimycgim, $kueeocmceokoouqa::ciywsqoeiymemsys => $kueeocmceokoouqa::cwiummueqsucqayc, $kueeocmceokoouqa::AGREEMENT_ID => $gimugccgakegomoq]); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto uqcsksaywyqeumig; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\x6d\145\x74\x68\151\156\147\40\x77\x72\x6f\x6e\x67\x20\x6f\x6e\40\x73\165\142\155\x69\164\164\151\156\147\40\x79\157\165\x72\40\x72\x65\x71\x75\145\x73\x74\x2c\40\x70\x6c\x65\x61\x73\145\40\x74\x72\171\x20\141\x66\164\145\162\x20\146\145\x77\40\155\x69\156\165\x74\145\163", PR__PKG__SALARY), 400); goto yggmaskeguaqkusc; uqcsksaywyqeumig: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x59\157\165\40\162\145\x71\165\x65\x73\x74\x20\163\x75\x62\155\x69\164\x74\x65\144\40\x73\x75\143\x63\x65\x73\163\146\x75\x6c\x6c\171", PR__PKG__SALARY)); yggmaskeguaqkusc: jsmisuccwyukksgc: yqicwmekwuoywyus: eekaiaeqewiqkkgm: uyeyscsaigimsqwq: wkiymcoqqiigqaaw: qmokwkocmcyeyesc: qksckewucmosemuo: goto skuuyysooocugyww; kmooekeyemqgucci: $keccaugmemegoimu = $mkucggyaiaukqoce; skuuyysooocugyww: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ageqswwkkqywckco(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto skwusmoyomgqkimm; } $gimugccgakegomoq = $this->sgmcgsqycoockoku($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, false); if ($gimugccgakegomoq) { goto cmmusgkieoqyymgs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x41\147\162\145\x65\155\145\156\x74\x20\151\163\40\x72\x65\161\165\x69\162\145", PR__PKG__SALARY), 404); goto mkgmaguyswskyioa; cmmusgkieoqyymgs: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = $this->sgmcgsqycoockoku($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, false); $oksqskmgoqiqciis = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::kmqmeaywmyiqqkqw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oksqskmgoqiqciis, [$this, "\153\x75\x77\x6f\145\171\x6b\167\x77\x69\x67\x6f\145\141\x6f\x71"], [self::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), "\x61\x67\x72\x65\145\155\145\x6e\164" => $gimugccgakegomoq]); mkgmaguyswskyioa: goto usyckeewsgwaysam; skwusmoyomgqkimm: $keccaugmemegoimu = $mkucggyaiaukqoce; usyckeewsgwaysam: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function yycimcakuiymsaoq(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto yseyyukqaowwouua; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = $this->sgmcgsqycoockoku($aqmwamyiwgeeymqa, $mkucggyaiaukqoce); if ($xssuewsokckmigqk) { goto qsokkkyoackoycie; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\x6f\165\162\x20\x72\145\x71\165\x65\163\x74\145\144\40\x61\147\162\x65\145\x6d\145\156\164\x20\156\x6f\164\40\146\157\x75\156\x64", PR__PKG__SALARY), 404); goto casgoamcqkekgeeo; qsokkkyoackoycie: $yygmoeguaqyumuui = [$jwsqucqyaoaasykk::kkeogqiyysoyuemk => IconFontawesomeInterface::ICON_HAND_HOLDING_DOLLAR, $jwsqucqyaoaasykk::METHOD_VALUE => IconFontawesomeInterface::ICON_SACK_DOLLAR, $jwsqucqyaoaasykk::ORDER_THRESHOLD_MIN => IconFontawesomeInterface::ICON_UP_FROM_LINE, $jwsqucqyaoaasykk::ORDER_THRESHOLD_MAX => IconFontawesomeInterface::ICON_UP_TO_LINE]; $icwicymcioeyeyek = []; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { $eqgoocgaqwqcimie = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $uusmaiomayssaecw); if (!$eqgoocgaqwqcimie) { goto ismeikacqqyqcmqe; } if (!($aaqqkgyougeiueyq = $jwsqucqyaoaasykk->oyeskqayoscwciem()->uqeoyqiwywwmsiew($uusmaiomayssaecw))) { goto cysgqimowcqoqqsc; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [self::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, self::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi]; cysgqimowcqoqqsc: ismeikacqqyqcmqe: kakkuyeccaacewyo: } gicuuwuuuwumyooa: $keccaugmemegoimu = [self::uiwqcumqkgikqyue => $icwicymcioeyeyek, $jwsqucqyaoaasykk::gouqcwikiiygyasc => $jwsqucqyaoaasykk->keeuqgyooycqoygw($xssuewsokckmigqk), $jwsqucqyaoaasykk::qescuiwgsyuikume => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::qescuiwgsyuikume), $jwsqucqyaoaasykk::ucoiewcoucauqwko => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::ucoiewcoucauqwko), $jwsqucqyaoaasykk::eqkeooqcsscoggia => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::eqkeooqcsscoggia)]; casgoamcqkekgeeo: goto qcgyggiaowuqswuw; yseyyukqaowwouua: $keccaugmemegoimu = $mkucggyaiaukqoce; qcgyggiaowuqswuw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function cuakiekssgkeyswa(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto sooecucuakgkuyis; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $uoomaookgsyciacm = $jwsqucqyaoaasykk->sewmuymswawyuiki($mkucggyaiaukqoce); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, $uoomaookgsyciacm); goto ywqakqkmmcoceqka; sooecucuakgkuyis: $keccaugmemegoimu = $mkucggyaiaukqoce; ywqakqkmmcoceqka: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mesakkycomyuuwwm(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto koukiyqaccegmquc; } $gimugccgakegomoq = $this->sgmcgsqycoockoku($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, false); if ($gimugccgakegomoq) { goto kwsqgqmwyyeykgum; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x41\x67\162\145\x65\155\145\156\164\40\151\x73\40\162\145\x71\x75\x69\x72\145", PR__PKG__SALARY), 404); goto emauuoieewwoeyqq; kwsqgqmwyyeykgum: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = $this->sgmcgsqycoockoku($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, false); $eyscsimwcyaqakqg = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::PRODUCT_CATS, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $eyscsimwcyaqakqg, [$this, "\141\x77\x67\143\147\141\171\x79\x6f\x71\x69\x6b\x6d\155\161\x6f"], [self::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), "\x61\x67\x72\x65\x65\155\x65\156\x74" => $gimugccgakegomoq]); emauuoieewwoeyqq: goto ekakkiuuquqkccse; koukiyqaccegmquc: $keccaugmemegoimu = $mkucggyaiaukqoce; ekakkiuuquqkccse: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function qsyweymowowcmsww($mkucggyaiaukqoce) : array { $sogksuscggsicmac = []; $wsoeeiiqguoauciy = true; $ouwoukcecmicoeos = Setting::eiwcuqigayigimak(Setting::APPLY_REQUIRE_FIELD); if (!$ouwoukcecmicoeos) { goto iaomqomgiwiegoca; } $ikgwqyuyckaewsow = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x61\156\x65\x6c\x5f\x75\x73\145\162\x5f\147\145\164\137\146\x69\145\x6c\x64\163"), [], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::ackcaikowcokggsc => $ouwoukcecmicoeos, self::wacsysugayaeayag => true]); $ocqaciyqwmcuuuue = ["\166\x65\162\x69\x66\x69\145\144" => __("\x56\x65\x72\151\x66\x69\x65\144", PR__PKG__SALARY), "\165\x6e\x63\x6f\x6d\160\154\145\x74\145\144" => __("\125\156\143\157\x6d\x70\154\x65\164\x65\144", PR__PKG__SALARY), self::sgoswgskyiiwkyuo => __("\x50\145\156\x64\151\156\147", PR__PKG__SALARY)]; if (!$ikgwqyuyckaewsow) { goto goaowamiyyamueiw; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto gsqcoqqsioiyoykq; } $iueymcwwscwqkiyq = "\165\156\143\157\155\160\x6c\145\x74\145\x64"; if ($aiowsaccomcoikus->iokkueaqiswaewyq()) { goto cumeycwmuuqawwyu; } if (!$aiowsaccomcoikus->qooeaookuemoqecm()) { goto ckwmkquuyyugigom; } $iueymcwwscwqkiyq = "\166\x65\162\151\146\x69\x65\144"; ckwmkquuyyugigom: goto uaicwcqwauosmsqm; cumeycwmuuqawwyu: if ($aiowsaccomcoikus->iokkueaqiswaewyq() && $aiowsaccomcoikus->wowamsaiqwikqoqa()) { goto wswikooyuaaouqgk; } if (!$aiowsaccomcoikus->qooeaookuemoqecm()) { goto cakuguiciaiaeukg; } $iueymcwwscwqkiyq = self::sgoswgskyiiwkyuo; cakuguiciaiaeukg: goto awwaiioyywmokwsm; wswikooyuaaouqgk: $iueymcwwscwqkiyq = "\166\x65\162\x69\146\x69\145\144"; awwaiioyywmokwsm: uaicwcqwauosmsqm: $kqwygogeauwwyoca = $iueymcwwscwqkiyq == "\x76\145\162\x69\146\151\145\144"; $wsoeeiiqguoauciy = $wsoeeiiqguoauciy && $kqwygogeauwwyoca; $sogksuscggsicmac[$aiowsaccomcoikus->mwikyscisascoeea()] = ["\x76\145\x72\x69\146\151\145\144" => $kqwygogeauwwyoca, self::qgqyauaqwqmqseim => $kqwygogeauwwyoca ? IconFontawesomeInterface::ICON_CHECK : IconFontawesomeInterface::ICON_XMARK, self::qescuiwgsyuikume => $aiowsaccomcoikus->uikgwcuascgeissw(), self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::iuqumwggccmcuyem => $kqwygogeauwwyoca ? 2 : ($iueymcwwscwqkiyq == self::sgoswgskyiiwkyuo ? 1 : 0), self::ciywsqoeiymemsys . self::_TITLE => ManipulateArray::get($ocqaciyqwmcuuuue, $iueymcwwscwqkiyq)]; gsqcoqqsioiyoykq: egkeqqgakieyimuq: } oqwwacmigasucsoc: goaowamiyyamueiw: iaomqomgiwiegoca: return ["\x61\160\160\154\x69\x61\x62\154\x65" => $wsoeeiiqguoauciy, self::ymckmcsiymwqucoq => ManipulateArray::yaeiiwwyckwugsem($sogksuscggsicmac)]; } public function eaiykomemmiiwmki(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto ugswokwmkumcmigc; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [$jwsqucqyaoaasykk::AS_PUBLIC => true, $jwsqucqyaoaasykk::REQUEST_ID => [self::euoaaiqkqcqcgeco => self::LEFT_JOIN, self::ciyoccqkiamemcmm => $kueeocmceokoouqa::AGREEMENT_ID, self::iowgsqgiaamyuswi => [$kueeocmceokoouqa::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), $kueeocmceokoouqa::ciywsqoeiymemsys => [self::euoaaiqkqcqcgeco => self::ORDER_BY]]]], null, [self::soquiwyuimckgiow => [$jwsqucqyaoaasykk->kumuygiiqswoyasy(true), $jwsqucqyaoaasykk::eyqgmoumkowegyse, $jwsqucqyaoaasykk::qescuiwgsyuikume, $jwsqucqyaoaasykk::eqieykacgqwskmag, $kueeocmceokoouqa->myywwqkyiwawwquy($kueeocmceokoouqa::ciywsqoeiymemsys), $kueeocmceokoouqa->myywwqkyiwawwquy($kueeocmceokoouqa::CREATED_AT)], self::FILTER_VALUE => false]); if (!($oammesyieqmwuwyi = ManipulateArray::get($keccaugmemegoimu, self::qwumqqyuasyskkkc))) { goto qiaaqkymeuuueoqk; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $iueymcwwscwqkiyq = ManipulateArray::get($igqsaukqcqscimok, self::ciywsqoeiymemsys); if (!$iueymcwwscwqkiyq) { goto acesyuieuuqwgkwm; } $kiimiykcuusisqiu = $kueeocmceokoouqa->agausceiyceikeag($iueymcwwscwqkiyq); goto asaowisseacciyia; acesyuieuuqwgkwm: $oeucsuyqysaciasy = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($igqsaukqcqscimok, $jwsqucqyaoaasykk::eyqgmoumkowegyse); $acmmwkyiqsecacee = false; if ($oeucsuyqysaciasy) { goto cuseccewekgcgkyg; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $kcugcsqiuqaomqom = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($igqsaukqcqscimok, $jwsqucqyaoaasykk::eqieykacgqwskmag); if (!is_array($kcugcsqiuqaomqom)) { goto ookcgumoacskyymy; } $acmmwkyiqsecacee = in_array($saqgcoqwmimycgim, $kcugcsqiuqaomqom); ookcgumoacskyymy: goto kgysyqkoqgwmoscq; cuseccewekgcgkyg: $acmmwkyiqsecacee = ManipulateUser::askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce, true); kgysyqkoqgwmoscq: if ($acmmwkyiqsecacee) { goto makomwwyomweyamm; } $iueymcwwscwqkiyq = "\162\x65\x71\x75\x65\x73\164\x61\142\x6c\145"; $kiimiykcuusisqiu = __("\x52\145\161\165\145\x73\164\x61\142\x6c\145", PR__PKG__SALARY); goto oqwcmgwimeisusoe; makomwwyomweyamm: $iueymcwwscwqkiyq = $kueeocmceokoouqa::cwiummueqsucqayc; $kiimiykcuusisqiu = $kueeocmceokoouqa->agausceiyceikeag($iueymcwwscwqkiyq); oqwcmgwimeisusoe: asaowisseacciyia: $muocgugcqiewywag = [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::ciywsqoeiymemsys . self::_TITLE => $kiimiykcuusisqiu]; $kwkmegesqkqwyska = ManipulateArray::get($igqsaukqcqscimok, $kueeocmceokoouqa::CREATED_AT); $muocgugcqiewywag[$jwsqucqyaoaasykk::CREATED_AT] = $jwsqucqyaoaasykk->kamyqikiiuwqiiuw($kueeocmceokoouqa::CREATED_AT, $kwkmegesqkqwyska, $igqsaukqcqscimok); $oammesyieqmwuwyi[$momcykaoccoymeig] = ManipulateArray::set($igqsaukqcqscimok, $muocgugcqiewywag); owisckseoogsugqq: } ysweqawmawicakeo: $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; qiaaqkymeuuueoqk: goto gwiaimosqoiquwkc; ugswokwmkumcmigc: $keccaugmemegoimu = $mkucggyaiaukqoce; gwiaimosqoiquwkc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ocuegwsuqwkqmoii(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto owgakkqgckqcegoi; } $keccaugmemegoimu = $this->qsyweymowowcmsww($mkucggyaiaukqoce); goto cigesysuauaiccms; owgakkqgckqcegoi: $keccaugmemegoimu = $mkucggyaiaukqoce; cigesysuauaiccms: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function sgmcgsqycoockoku($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $tsuauommsquiesmk = true) { $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = null; $gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\x67\x72\145\x65\x6d\145\x6e\x74"); if (!$gimugccgakegomoq) { goto ocgkwqqmgasuoies; } $uoomaookgsyciacm = [$jwsqucqyaoaasykk->kumuygiiqswoyasy() => $gimugccgakegomoq]; $xssuewsokckmigqk = $jwsqucqyaoaasykk->oqomcmyuuakigusk($jwsqucqyaoaasykk->sewmuymswawyuiki($mkucggyaiaukqoce, $uoomaookgsyciacm)); if (!$this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { goto wwswmaewcaisauei; } if (!$xssuewsokckmigqk) { goto gcskyqewysqaceeg; } $xssuewsokckmigqk = null; goto kkewoqqowugagwoy; gcskyqewysqaceeg: $kueeocmceokoouqa = Request::symcgieuakksimmu(); if ($kueeocmceokoouqa->qumqowkwyaceeqwu([$kueeocmceokoouqa::meksegaoamowuwoq => $saqgcoqwmimycgim, $kueeocmceokoouqa::AGREEMENT_ID => $gimugccgakegomoq])) { goto qumkwsqqocooyuoq; } $uoomaookgsyciacm[$jwsqucqyaoaasykk::AS_PUBLIC] = true; $xssuewsokckmigqk = $jwsqucqyaoaasykk->oqomcmyuuakigusk($uoomaookgsyciacm); qumkwsqqocooyuoq: kkewoqqowugagwoy: wwswmaewcaisauei: if (!($xssuewsokckmigqk && $tsuauommsquiesmk)) { goto wsemeeocquawyauo; } $xssuewsokckmigqk = $jwsqucqyaoaasykk->scqakcemaqsqkema($xssuewsokckmigqk); wsemeeocquawyauo: ocgkwqqmgasuoies: return $xssuewsokckmigqk; } public function kuwoeykwwigoeaoq($aqmwamyiwgeeymqa, $product, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product) { goto aaogeemgkogagkai; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $ogekyekymoyuywog = Income::symcgieuakksimmu(); $meqocwsecsywiiqs = $jwsqucqyaoaasykk->geyuyukmwaoksywa($product->get_permalink(), $product->get_title(), [self::mgsccwumkcawaqcy => "\137\x62\154\141\156\153"]); $sogksuscggsicmac = [self::qescuiwgsyuikume => $meqocwsecsywiiqs]; if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { goto ooysmgyeqoiesgqm; } $qecuekqmeaiykeek = $product->get_children(); $qecuekqmeaiykeek[] = $product->get_id(); $saqgcoqwmimycgim = ManipulateArray::get($ywmkwiwkosakssii, self::meksegaoamowuwoq); $gimugccgakegomoq = ManipulateArray::get($ywmkwiwkosakssii, "\x61\147\162\145\x65\155\145\156\164\x5f\151\144"); $uoomaookgsyciacm = [$ogekyekymoyuywog::iockmgiyoygcswog => $saqgcoqwmimycgim, $ogekyekymoyuywog::oguseymmyyoyaako => $qecuekqmeaiykeek, $ogekyekymoyuywog::AGREEMENT_ID => $gimugccgakegomoq]; $sogksuscggsicmac["\151\x6e\143\157\x6d\145\x73\137\163\165\155"] = ManipulateWoocommerce::mcgaskyiamgqmqgu($ogekyekymoyuywog->qgiewwqykwugcuoo($ogekyekymoyuywog::aioqyewkwawaqgqe, $uoomaookgsyciacm)); $sogksuscggsicmac["\151\156\x63\x6f\x6d\145\163\137\x63\157\x75\156\164"] = $jwsqucqyaoaasykk->msywmyaoqmaegsuy($ogekyekymoyuywog->asskucacysemeoiu($uoomaookgsyciacm)); goto kwoyiysciqumswcy; ooysmgyeqoiesgqm: $aumscagymwyyicag = $product->get_price_html(); if ($aumscagymwyyicag) { goto wmaeicoyyciuaiuy; } $aumscagymwyyicag = __("\x57\x69\x74\x68\x6f\165\x74\x20\x50\162\151\143\x65", PR__PKG__SALARY); wmaeicoyyciuaiuy: $sogksuscggsicmac["\160\162\151\x63\145"] = $aumscagymwyyicag; kwoyiysciqumswcy: aaogeemgkogagkai: return $sogksuscggsicmac; } public function awgcgayyoqikmmqo($aqmwamyiwgeeymqa, $guwumyyyakswawas, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; $guwumyyyakswawas = ManipulateTerm::get($guwumyyyakswawas); if (!$guwumyyyakswawas) { goto ukogwqiuuuakkawy; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $ogekyekymoyuywog = Income::symcgieuakksimmu(); $oksqskmgoqiqciis = ManipulateTerm::iyssgoiwgwygeacg($guwumyyyakswawas, self::oguseymmyyoyaako, [self::ymckmcsiymwqucoq => self::oyaoekcogwkcekcc]); $qecuekqmeaiykeek = []; foreach ($oksqskmgoqiqciis as $product) { $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product) { goto oiiqqgyqmggyiums; } $qecuekqmeaiykeek[] = $product->get_id(); $qecuekqmeaiykeek = array_merge($qecuekqmeaiykeek, $product->get_children()); oiiqqgyqmggyiums: isqwwmikecauwyuc: } qqmmycmsoqegcqqw: $meqocwsecsywiiqs = $jwsqucqyaoaasykk->geyuyukmwaoksywa(ManipulateTerm::qmgcisuuikgmqcsu($guwumyyyakswawas), ManipulateTerm::qcgakseyaikigqco($guwumyyyakswawas), [self::mgsccwumkcawaqcy => "\x5f\142\154\141\x6e\153"]); $sogksuscggsicmac = [self::qescuiwgsyuikume => $meqocwsecsywiiqs, "\160\162\x6f\144\165\143\x74\163" => $jwsqucqyaoaasykk->msywmyaoqmaegsuy(count($oksqskmgoqiqciis))]; if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { goto magymcqykamwqigw; } $saqgcoqwmimycgim = ManipulateArray::get($ywmkwiwkosakssii, self::meksegaoamowuwoq); $gimugccgakegomoq = ManipulateArray::get($ywmkwiwkosakssii, "\x61\x67\162\145\x65\155\x65\x6e\x74\137\151\x64"); $uoomaookgsyciacm = [$ogekyekymoyuywog::iockmgiyoygcswog => $saqgcoqwmimycgim, $ogekyekymoyuywog::oguseymmyyoyaako => $qecuekqmeaiykeek, $ogekyekymoyuywog::AGREEMENT_ID => $gimugccgakegomoq]; $sogksuscggsicmac["\151\x6e\143\157\x6d\x65\x73\x5f\x73\165\x6d"] = ManipulateWoocommerce::mcgaskyiamgqmqgu($ogekyekymoyuywog->qgiewwqykwugcuoo($ogekyekymoyuywog::aioqyewkwawaqgqe, $uoomaookgsyciacm)); $sogksuscggsicmac["\151\156\143\157\x6d\145\x73\x5f\143\x6f\x75\x6e\164"] = $jwsqucqyaoaasykk->msywmyaoqmaegsuy($ogekyekymoyuywog->asskucacysemeoiu($uoomaookgsyciacm)); magymcqykamwqigw: ukogwqiuuuakkawy: return $sogksuscggsicmac; } }