<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eef30c18127             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Page\Admin\Page; use Pmpr\Package\Salary\Model\Income as IncModel; use Pmpr\Package\Salary\Profile\Admin\Tab\Agreement; use Pmpr\Package\Salary\Profile\Admin\Tab\Income; use Pmpr\Package\Salary\Profile\Admin\Tab\Payment; use Pmpr\Package\Salary\Profile\Admin\Tab\Product; use Pmpr\Package\Salary\User; class Admin extends Page { const wuowaiyouwecckaw = "\x6d\x79\137\x63\x6f\x6c\154\x61\142\x6f\x72\141\x74\151\157\156\x5f\x70\x72\x6f\146\x69\x6c\145"; const qagqayweyigciamg = "\142\x61\156\x6b\137\151\156\146\x6f"; const equssioqikiumyki = "\167\x69\x74\x68\144\x72\141\167\x5f\x74\x6f"; public function __construct() { if (!(DecoratorUser::scmcyesmmikkucie() || ManipulateUser::askmkgcmgekiqwsg(User::yuqaieqcaccggqck))) { goto gygwewcqsmwqismo; } $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\x70\x61\x72\145\156\x74\137\163\154\165\x67" => $wksoawcgagcgoask, "\160\141\x67\x65\x5f\164\x69\x74\154\145" => __("\x4d\171\x20\x53\x61\x6c\141\162\x79\x20\120\162\157\146\151\154\145", PR__PKG__SALARY), "\155\145\156\165\137\x73\x6c\x75\x67" => self::wuowaiyouwecckaw, "\160\x6f\163\x69\164\151\157\x6e" => 0, "\143\141\160\141\x62\151\x6c\x69\x74\171" => "\x72\145\141\144"]; parent::__construct(); $this->iemaakgqgqosiecm(); gygwewcqsmwqismo: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\x69\156\137\151\156\x69\164", [$this, "\171\145\171\151\x67\x75\x79\145\147\155\155\x79\x75\x73\145\141"]); parent::wigskegsqequoeks(); } public function iemaakgqgqosiecm() { Ajax::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto uougwgeyiokewkkm; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x70\x72\157\146\151\x6c\x65", $eygsasmqycagyayw->get("\160\162\157\146\x69\x6c\145\56\x6a\163"))->ayuciigykaswwqeo("\152\x71\x75\145\x72\171"))->ikqyiskqaaymscgw("\141\152\x61\x78", Ajax::myikkigscysoykgy)->ikqyiskqaaymscgw("\x6d\145\163\163\141\x67\x65\x73", ["\167\x69\x74\x68\144\x72\141\167\x5f\164\x6f" => sprintf(__("\x49\x74\47\163\40\x6e\x6f\x74\x20\x61\x20\x76\x61\154\x69\x64\x20\x25\x73", PR__PKG__SALARY), __("\104\x61\164\x65", PR__PKG__SALARY)), "\145\x6d\x70\164\171" => ["\x62\141\156\x6b\x5f\x69\156\x66\157" => sprintf(__("\120\154\145\x61\163\x65\x20\x73\145\x6c\145\x63\x74\x20\141\x20\45\x73", PR__PKG__SALARY), __("\102\x61\156\153\x20\101\x63\143\x6f\x75\156\x74\40\111\x6e\x66\157\x72\x6d\141\x74\x69\157\156", PR__PKG__SALARY)), "\167\x69\164\x68\x64\162\141\167\x5f\x74\x6f" => sprintf(__("\x50\154\145\141\163\145\40\163\x65\154\x65\x63\164\x20\x61\40\x25\163", PR__PKG__SALARY), __("\104\141\x74\x65", PR__PKG__SALARY))]]); uougwgeyiokewkkm: } public function suicksywcwiggasc() { $this->ciwuiwsyckiiogwo([Income::symcgieuakksimmu(), Product::symcgieuakksimmu(), Payment::symcgieuakksimmu(), Agreement::symcgieuakksimmu()]); $this->ssysiyiouyscyeyq(); } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { $this->asucekgauiagoeeo(); parent::kccgekiqgsuwmowo($suaemuyiacqyugsm); } public function asucekgauiagoeeo() { $oammesyieqmwuwyi = ["\151\x6e\x63\157\155\x65\163" => __("\124\157\164\x61\154\40\111\x6e\143\x6f\x6d\145\x73", PR__PKG__SALARY), "\144\x65\x64\165\143\x74\x73" => __("\124\157\x74\x61\x6c\40\x44\x65\x64\x75\x63\x74\163", PR__PKG__SALARY), "\x70\x61\171\155\145\x6e\164\163" => __("\x54\157\x74\141\154\x20\x50\141\x79\155\145\156\164\x73", PR__PKG__SALARY)]; $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = 0; try { switch ($uusmaiomayssaecw) { case "\x69\156\143\x6f\155\145\x73": $ywwsgumqquoegmci = IncModel::symcgieuakksimmu(); $cseccogesusskess = $ywwsgumqquoegmci->cwkywyqksyucoyia([IncModel::iockmgiyoygcswog => $miowmmgaiagcuyoo, IncModel::eiiuyoyiygsickwe => [self::ciyoccqkiamemcmm => [IncModel::aquouykoyqcwccay, IncModel::ugswgyqgycqguios], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); $eqgoocgaqwqcimie = $ywwsgumqquoegmci->cseaisoguykosgem($cseccogesusskess); goto ucqmumuygcywwqma; case "\144\x65\x64\165\x63\164\x73": goto ucqmumuygcywwqma; case "\x70\141\x79\x6d\x65\x6e\164\x73": goto ucqmumuygcywwqma; } uykousayyomcaeaa: ucqmumuygcywwqma: } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = 0; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = ["\154\x61\142\145\154" => $pkyyagewkiyckmwy, "\x76\x61\x6c\165\145" => ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie)]; ukqocwewouckikso: } gommacygsykyussk: echo $this->iuygowkemiiwqmiw("\x73\x74\x61\164\163", ["\x69\164\x65\x6d\x73" => $oammesyieqmwuwyi]); } public function ssysiyiouyscyeyq() { $mkucggyaiaukqoce = ManipulateUser::get(); $ikgwqyuyckaewsow = ''; if (!$mkucggyaiaukqoce) { goto kocqqoyymosmuksu; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $qyukicweqoisimwg = ["\143\x61\156\x63\145\154"]; $aukoggqmyoweqokc = User::symcgieuakksimmu()->ysqqicckeiweemmu($mkucggyaiaukqoce, self::qagqayweyigciamg); if ($aukoggqmyoweqokc) { goto uimeeckqksqeekqq; } $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo("\x74\x61\x62", "\x74\141\x62\137\151\x6e\143\157\x6d\145\x73\137\x61\x6e\x64\x5f\x70\x61\x79\155\145\156\164\163", DecoratorUser::ekqiayaoseqcygmo($saqgcoqwmimycgim)); $uweseoyuyuwyeggc = ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\x72\x65\146" => $geecqyososceumsk], __("\x50\x72\x6f\x66\151\154\145\x20\x70\141\147\145", PR__PKG__SALARY)); $iwamiguusayooguq = sprintf(__("\131\x6f\x75\x20\163\150\157\x75\x6c\x64\40\x66\x69\162\163\x74\x2c\40\x66\151\154\x6c\x20\x69\156\40\171\157\x75\162\40\142\x61\156\x6b\x20\x61\143\x63\x6f\x75\x6e\x74\40\151\156\146\x6f\162\155\x61\x74\151\x6f\x6e\x20\151\156\163\151\144\145\x20\171\157\165\162\40\x25\163\x2c\40\164\157\x20\x73\165\142\x6d\x69\164\40\141\x20\167\x69\x74\x68\x64\162\141\167", PR__PKG__SALARY), $uweseoyuyuwyeggc); goto iuuuususuuuaieem; uimeeckqksqeekqq: $aukoggqmyoweqokc->yoimakcqmoqokkcu(); $ikgwqyuyckaewsow = MetaBox::iuaucuookgoqiiio([MetaBox::sgsesoiwcgqgckoo(self::equssioqikiumyki, __("\x44\x61\x74\x65\x20\124\157", PR__PKG__SALARY))->yoimakcqmoqokkcu(), $aukoggqmyoweqokc->eumecwmqmukqgyea(), MetaBox::cwiuiiakukcsaakw("\x6f\x77\x6e\145\162", $saqgcoqwmimycgim)], ["\x65\143\x68\x6f" => false, "\160\141\162\x65\156\x74" => ["\x63\x6c\141\163\163" => "\x63\x6f\154\x2d\x31\62\x20\143\157\x6c\55\x6d\x64\55\x38\40\x63\x6f\154\x2d\154\x67\x2d\x36\x20\x6d\171\x2d\63\40\x6d\170\55\x61\165\x74\157"]]); $ikgwqyuyckaewsow = ManipulateHTML::uuccukgasskgimsq("\144\151\166", ["\143\x6c\x61\163\163" => "\x72\157\x77"], $ikgwqyuyckaewsow); $iwamiguusayooguq = __("\x42\171\x20\x73\165\x62\155\x69\164\164\x69\x6e\x67\x20\141\40\x6e\x65\167\40\x70\x61\x79\x6d\145\156\164\40\x72\x65\161\165\145\x73\164\54\x20\x79\x6f\x75\40\167\151\154\x6c\40\162\145\x63\145\151\x76\x65\40\x79\157\165\162\x20\x69\156\143\157\x6d\145\x20\x69\156\40\164\x68\145\x20\x66\x6f\x72\155\40\157\146\40\141\40\144\145\160\157\163\x69\x74\40\164\x6f\x20\x74\150\145\x20\151\156\x74\x72\x6f\144\x75\x63\145\x64\x20\x62\x61\156\153\40\x61\143\143\157\165\x6e\164", PR__PKG__SALARY); $qyukicweqoisimwg[] = ["\x63\x6c\x61\163\163" => "\142\164\x6e\40\x62\x74\x6e\55\160\162\x69\x6d\x61\x72\x79\x20\x61\x64\144\x2d\x6e\x65\x77\x2d\x77\x69\x74\150\x64\162\141\x77", "\x74\151\164\x6c\145" => __("\123\x75\x62\155\151\x74", PR__PKG__SALARY)]; iuuuususuuuaieem: $iwamiguusayooguq = ManipulateHTML::uuccukgasskgimsq("\144\151\x76", [], $iwamiguusayooguq); $uosiuoqysyokseqe = __("\101\x64\x64\40\116\x65\x77\40\x57\151\164\150\x64\162\x61\x77", PR__PKG__SALARY); $nsmgceoqaqogqmuw = ManipulateHTML::icqkogwskuwscskk(["\163\151\172\145" => "\154\x67", "\x74\x79\x70\145" => "\x70\x72\151\x6d\141\162\171", "\164\x69\x74\154\145" => $uosiuoqysyokseqe, "\x70\x72\x65\146\x69\x78" => "\141\x64\144\x5f\156\145\x77\x5f\167\x69\x74\x68\x64\162\141\x77", "\143\x6f\x6e\164\145\156\164" => $iwamiguusayooguq . $ikgwqyuyckaewsow, "\142\165\164\164\x6f\156\163" => $qyukicweqoisimwg, "\x73\x70\151\156\x6e\x65\162" => true], ["\164\x69\164\154\145" => $uosiuoqysyokseqe, "\x61\x74\164\x72\163" => ["\x63\154\x61\x73\163" => "\x62\x74\156\40\x62\164\x6e\55\x70\x72\151\155\141\162\171\40\146\x6c\x6f\x61\164\55\x72\151\147\x68\164", "\x61\x72\151\x61\55\x6c\x61\x62\x65\x6c" => $uosiuoqysyokseqe]]); $this->quyawykcegmmwmky($nsmgceoqaqogqmuw); kocqqoyymosmuksu: } }
