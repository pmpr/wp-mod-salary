<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3d48e8c62             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Container; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Traits\CallbackTrait; use WC_Order_Item_Product; class Product extends Container { use CallbackTrait; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x74\145\x6d\x70\154\x61\x74\145\137\x72\145\x64\151\x72\145\143\x74", [$this, "\145\x6f\163\161\163\145\x71\171\x63\x79\x6b\151\151\151\x73\x73"])->qcsmikeggeemccuu("\167\157\157\143\157\155\x6d\145\x72\x63\145\137\x70\x72\157\144\x75\x63\x74\137\x71\x75\x65\162\171", [$this, "\x61\171\x6b\145\151\x6b\x63\161\x65\x77\151\x6b\151\143\x73\161"]); $this->qcsmikeggeemccuu("\167\x6f\157\x63\157\155\x6d\x65\162\143\x65\x5f\160\141\171\x6d\145\x6e\x74\x5f\x63\157\x6d\160\x6c\x65\x74\x65", [$this, "\x63\171\x71\x71\x77\x79\151\x63\x6f\141\151\x6f\x61\153\x75\163"], 9999)->qcsmikeggeemccuu("\x77\157\157\143\x6f\x6d\155\x65\x72\143\x65\x5f\x6f\162\x64\145\162\137\x73\164\x61\x74\x75\163\137\x63\x6f\x6d\x70\154\145\164\x65\x64", [$this, "\143\x79\161\161\167\171\x69\143\x6f\x61\x69\x6f\x61\153\165\163"], 9999); } public function eosqseqycykiiiss() { if ($this->caokeucsksukesyo()->aqasygcsqysmmyke()->kccakwkaqugygwmq()) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if (Agreement::symcgieuakksimmu()->iekyeyicoyyawomk()->exists([$eqwoegegiamegqsm->megqywqeuquawkim(Agreement::uiwumioqeeggcwwq, Constants::cgkgowiusqeaagwg), $eqwoegegiamegqsm->megqywqeuquawkim(Agreement::xoaoskywwwqwgqkk, $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu())])) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($this->caokeucsksukesyo()->wikusamwomuogoau()->cseyuuekwokecyyw()); exit; } } } public function aykeikcqewikicsq($gqgemcmoicmgaqie) { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg() || $this->caokeucsksukesyo()->owicscwgeuqcqaig()->uywcakyieooyscis()) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $oksqskmgoqiqciis = Agreement::symcgieuakksimmu()->iekyeyicoyyawomk()->ssiyoimagsskwsoi([$eqwoegegiamegqsm->megqywqeuquawkim(Agreement::uiwumioqeeggcwwq, Constants::cgkgowiusqeaagwg), $eqwoegegiamegqsm->megqywqeuquawkim(Agreement::xoaoskywwwqwgqkk)->amwwousckkqyweok()], Agreement::xoaoskywwwqwgqkk); $mmikekwwmyiuwsac = $gqgemcmoicmgaqie->get(Constants::kcaoouwiygwwmiok); if (!is_array($mmikekwwmyiuwsac)) { $mmikekwwmyiuwsac = []; } foreach ($oksqskmgoqiqciis as $product) { $mmikekwwmyiuwsac[] = $product; } $gqgemcmoicmgaqie->set(Constants::kcaoouwiygwwmiok, $mmikekwwmyiuwsac); } } public function cyqqwyicoaioakus($qsmogugokoieokgw) { $oammesyieqmwuwyi = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->wasgwsogmuquqeaa($qsmogugokoieokgw); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($igqsaukqcqscimok instanceof WC_Order_Item_Product) { $product = $igqsaukqcqscimok->get_product(); $mkgcaseqyaayywqo = $igqsaukqcqscimok->get_quantity(''); if ($product && $product->get_price('') > 0) { $this->uwswyuymakqsccya($igqsaukqcqscimok->get_id(), $product, $mkgcaseqyaayywqo); } } } } public function uwswyuymakqsccya($cawesmkieccckaae, $product, $mkgcaseqyaayywqo) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $umwqusowiqmyseom = $this->caokeucsksukesyo()->mmmcswscsiecscwg()->igiwycommqemseky($cawesmkieccckaae); $umkkkaqkwugkemce = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product); $ywqqikcsamcaycgm = $this->ksicuayoqaiikoiq($product); foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { if ($ekiuyucoiagmscgy = $gkyciwoiiisgywcs->get($xssuewsokckmigqk, Constants::wwgusigoaksqmwsm)) { $ekiuyucoiagmscgy = $this->ekkwaykokcgqkmoi($ekiuyucoiagmscgy, ''); $okycmmskgswewacc = $ekiuyucoiagmscgy($xssuewsokckmigqk, $cawesmkieccckaae, $product); } else { $okycmmskgswewacc = $this->awweyuumwaygcauy($xssuewsokckmigqk); } if ($okycmmskgswewacc && is_array($okycmmskgswewacc)) { $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); foreach ($okycmmskgswewacc as $aqmwamyiwgeeymqa) { $ousomaowqseoamse = $kueeocmceokoouqa->mwyqswsaeeewsosm($aqmwamyiwgeeymqa); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); if (!$ogekyekymoyuywog->iekyeyicoyyawomk()->exists([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::awkcoioakcaougmq, $cawesmkieccckaae), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::oguseymmyyoyaako, $umkkkaqkwugkemce), $eqwoegegiamegqsm->megqywqeuquawkim($ogekyekymoyuywog::cmiegiycgiucucgs, $ousomaowqseoamse)])) { $sogksuscggsicmac = $ogekyekymoyuywog->muyuaguucggskykw($xssuewsokckmigqk, $ousomaowqseoamse, $cawesmkieccckaae, $product, $mkgcaseqyaayywqo); if (!$sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { $this->caokeucsksukesyo()->mmmcswscsiecscwg()->mscqqcmmkkiqwcua(sprintf(__("\103\141\x6e\x20\x6e\x6f\164\x20\x61\x64\144\x20\x69\156\143\157\155\145\x3a\40\x25\163", PR__MDL__SALARY), $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac[Constants::iwyueouqaqegmcas])), $umwqusowiqmyseom); } } } } } } public function awweyuumwaygcauy($xssuewsokckmigqk) : array { $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); return $kueeocmceokoouqa->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, Constants::cwiummueqsucqayc), $eqwoegegiamegqsm->megqywqeuquawkim($kueeocmceokoouqa::woagckamiequeoyu, $mssuumukiiaqmcka->mwyqswsaeeewsosm($xssuewsokckmigqk))]); } public function ksicuayoqaiikoiq($product) : array { $ywqqikcsamcaycgm = []; if ($product) { $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $umkkkaqkwugkemce = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->qqiwsumoyiukmgco($product); $eyscsimwcyaqakqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->weescwwgqgiyumyw($umkkkaqkwugkemce, Constants::cmckeoksigiaqykc, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ywqqikcsamcaycgm = $mssuumukiiaqmcka->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Agreement::kmqmeaywmyiqqkqw, [$umkkkaqkwugkemce])->iygikqkegwkaaess(), $eqwoegegiamegqsm->megqywqeuquawkim(Agreement::guksqgkoswygwycw, $eyscsimwcyaqakqg)->iygikqkegwkaaess()]); } return $ywqqikcsamcaycgm; } }