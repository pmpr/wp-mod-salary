<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63275ca640d6a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Page\Admin\Page; use Pmpr\Module\Salary\Model\Income as IncModel; use Pmpr\Module\Salary\Profile\Admin\Tab\Agreement; use Pmpr\Module\Salary\Profile\Admin\Tab\Income; use Pmpr\Module\Salary\Profile\Admin\Tab\Payment; use Pmpr\Module\Salary\Profile\Admin\Tab\Product; use Pmpr\Module\Salary\User; class Admin extends Page { const wuowaiyouwecckaw = "\x6d\x79\137\143\157\154\x6c\x61\142\x6f\162\x61\164\x69\157\156\x5f\160\162\x6f\146\151\154\x65"; const qagqayweyigciamg = "\x62\x61\x6e\x6b\137\151\x6e\x66\157"; const equssioqikiumyki = "\x77\151\x74\150\144\162\x61\x77\137\x74\157"; public function __construct() { if (!(DecoratorUser::scmcyesmmikkucie() || ManipulateUser::askmkgcmgekiqwsg(User::yuqaieqcaccggqck))) { goto cuoqqgaygogsmmic; } $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\160\x61\x72\x65\x6e\164\137\163\x6c\x75\147" => $wksoawcgagcgoask, "\x70\141\x67\145\137\x74\x69\164\154\145" => __("\115\171\40\123\x61\154\141\162\x79\40\120\162\x6f\x66\151\x6c\145", PR__MDL__SALARY), "\x6d\145\x6e\165\137\163\x6c\165\x67" => self::wuowaiyouwecckaw, "\160\x6f\163\151\164\151\x6f\x6e" => 0, "\143\x61\160\x61\x62\x69\x6c\151\x74\x79" => "\x72\x65\141\144"]; parent::__construct(); $this->iemaakgqgqosiecm(); cuoqqgaygogsmmic: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\151\156\137\151\156\151\x74", [$this, "\x79\x65\x79\151\x67\x75\x79\145\x67\x6d\155\171\x75\x73\145\141"]); parent::wigskegsqequoeks(); } public function iemaakgqgqosiecm() { Ajax::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto cgewcsueoyaeikgm; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\160\162\x6f\146\x69\154\145", $eygsasmqycagyayw->get("\160\162\157\146\x69\x6c\x65\x2e\152\x73"))->ayuciigykaswwqeo("\152\161\x75\145\x72\x79"))->ikqyiskqaaymscgw("\141\152\x61\170", Ajax::myikkigscysoykgy)->ikqyiskqaaymscgw("\155\x65\163\163\141\x67\x65\x73", ["\x77\151\x74\150\x64\x72\x61\x77\x5f\x74\x6f" => sprintf(__("\x49\x74\47\x73\40\x6e\157\x74\x20\x61\x20\166\141\154\x69\144\x20\x25\x73", PR__MDL__SALARY), __("\x44\x61\x74\x65", PR__MDL__SALARY)), "\x65\x6d\x70\x74\x79" => ["\142\x61\156\153\x5f\151\x6e\x66\157" => sprintf(__("\120\x6c\145\141\163\x65\40\163\145\154\x65\x63\x74\x20\x61\x20\45\163", PR__MDL__SALARY), __("\x42\x61\156\x6b\x20\101\x63\x63\x6f\165\x6e\x74\40\x49\156\x66\157\162\155\x61\164\x69\157\156", PR__MDL__SALARY)), "\x77\151\x74\150\144\162\x61\167\137\164\x6f" => sprintf(__("\120\x6c\145\x61\163\145\x20\163\145\x6c\145\x63\x74\40\x61\x20\45\x73", PR__MDL__SALARY), __("\104\x61\164\x65", PR__MDL__SALARY))]]); cgewcsueoyaeikgm: } public function suicksywcwiggasc() { $this->ciwuiwsyckiiogwo([Income::symcgieuakksimmu(), Product::symcgieuakksimmu(), Payment::symcgieuakksimmu(), Agreement::symcgieuakksimmu()]); $this->ssysiyiouyscyeyq(); } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { $this->asucekgauiagoeeo(); parent::kccgekiqgsuwmowo($suaemuyiacqyugsm); } public function asucekgauiagoeeo() { $oammesyieqmwuwyi = ["\x69\x6e\143\x6f\x6d\145\x73" => __("\124\157\164\x61\x6c\40\111\x6e\143\157\155\x65\163", PR__MDL__SALARY), "\x64\145\144\x75\x63\x74\163" => __("\x54\157\164\141\x6c\x20\x44\145\144\x75\x63\164\x73", PR__MDL__SALARY), "\160\141\x79\155\145\156\164\163" => __("\124\x6f\x74\x61\154\40\x50\x61\x79\x6d\145\156\x74\163", PR__MDL__SALARY)]; $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = 0; try { switch ($uusmaiomayssaecw) { case "\151\156\143\x6f\x6d\145\163": $ywwsgumqquoegmci = IncModel::symcgieuakksimmu(); $cseccogesusskess = $ywwsgumqquoegmci->cwkywyqksyucoyia([IncModel::iockmgiyoygcswog => $miowmmgaiagcuyoo, IncModel::eiiuyoyiygsickwe => [self::ciyoccqkiamemcmm => [IncModel::ycmomqymkecsysum, IncModel::youiiwsayswmyuum], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); $eqgoocgaqwqcimie = $ywwsgumqquoegmci->cseaisoguykosgem($cseccogesusskess); goto mqccmesakuemceqi; case "\144\x65\x64\165\x63\164\163": goto mqccmesakuemceqi; case "\160\141\171\x6d\x65\156\164\x73": goto mqccmesakuemceqi; } eyiamcekkgkiawqy: mqccmesakuemceqi: } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = 0; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = ["\154\141\x62\145\154" => $pkyyagewkiyckmwy, "\166\141\x6c\165\145" => ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie)]; igymseewwyiocoug: } sukskmcwsoysiuqu: echo $this->iuygowkemiiwqmiw("\163\164\x61\164\163", ["\151\164\145\x6d\163" => $oammesyieqmwuwyi]); } public function ssysiyiouyscyeyq() { $mkucggyaiaukqoce = ManipulateUser::get(); $ikgwqyuyckaewsow = ''; if (!$mkucggyaiaukqoce) { goto qwcegcuowwgiccos; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $qyukicweqoisimwg = ["\143\141\156\x63\145\x6c"]; $aukoggqmyoweqokc = User::symcgieuakksimmu()->ysqqicckeiweemmu($mkucggyaiaukqoce, self::qagqayweyigciamg); if ($aukoggqmyoweqokc) { goto twkmiuomimomscew; } $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo("\x74\x61\142", "\x74\x61\x62\x5f\x69\x6e\x63\x6f\155\x65\163\x5f\141\x6e\144\137\160\141\171\x6d\x65\x6e\x74\163", DecoratorUser::ekqiayaoseqcygmo($saqgcoqwmimycgim)); $uweseoyuyuwyeggc = ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\x72\145\x66" => $geecqyososceumsk], __("\120\x72\157\x66\151\154\x65\x20\x70\x61\147\145", PR__MDL__SALARY)); $iwamiguusayooguq = sprintf(__("\x59\x6f\x75\x20\x73\x68\157\x75\154\144\40\x66\151\162\x73\x74\x2c\40\x66\151\154\x6c\40\x69\156\40\171\157\x75\162\40\142\x61\x6e\153\40\x61\x63\x63\157\165\156\x74\x20\151\x6e\x66\157\162\x6d\141\164\x69\157\156\x20\151\156\x73\x69\x64\x65\40\x79\157\165\x72\x20\45\163\54\x20\x74\157\x20\x73\165\x62\155\151\x74\40\x61\x20\167\151\x74\x68\144\x72\x61\167", PR__MDL__SALARY), $uweseoyuyuwyeggc); goto kooskuwkuayiuose; twkmiuomimomscew: $aukoggqmyoweqokc->yoimakcqmoqokkcu(); $ikgwqyuyckaewsow = MetaBox::iuaucuookgoqiiio([MetaBox::sgsesoiwcgqgckoo(self::equssioqikiumyki, __("\104\141\164\145\x20\x54\157", PR__MDL__SALARY))->yoimakcqmoqokkcu(), $aukoggqmyoweqokc->eumecwmqmukqgyea(), MetaBox::cwiuiiakukcsaakw("\x6f\x77\x6e\x65\x72", $saqgcoqwmimycgim)], ["\145\143\x68\157" => false, "\x70\x61\x72\x65\156\x74" => ["\143\x6c\x61\163\163" => "\143\157\154\x2d\x31\x32\x20\x63\x6f\x6c\55\155\144\x2d\70\40\143\x6f\x6c\55\154\x67\x2d\x36\x20\155\x79\x2d\63\x20\155\x78\55\141\x75\x74\157"]]); $ikgwqyuyckaewsow = ManipulateHTML::uuccukgasskgimsq("\x64\151\x76", ["\x63\154\141\163\163" => "\x72\157\x77"], $ikgwqyuyckaewsow); $iwamiguusayooguq = __("\x42\x79\x20\x73\165\x62\x6d\151\x74\164\151\x6e\147\x20\x61\x20\156\145\x77\40\x70\141\171\x6d\145\x6e\164\40\162\x65\161\x75\x65\163\x74\x2c\40\171\157\x75\40\167\151\154\154\x20\x72\x65\x63\145\151\166\145\x20\171\157\165\x72\x20\151\x6e\143\x6f\155\x65\x20\151\156\40\x74\150\145\x20\146\x6f\x72\155\40\157\146\40\x61\40\x64\x65\160\x6f\x73\x69\164\x20\x74\157\40\164\150\145\40\x69\x6e\164\162\x6f\x64\165\x63\x65\144\40\x62\x61\x6e\153\x20\141\x63\x63\157\165\x6e\x74", PR__MDL__SALARY); $qyukicweqoisimwg[] = ["\143\154\x61\163\163" => "\142\164\x6e\x20\x62\x74\x6e\x2d\x70\162\151\x6d\141\162\x79\x20\141\144\144\x2d\x6e\145\x77\x2d\167\151\164\150\144\x72\x61\167", "\164\x69\x74\154\145" => __("\x53\x75\142\x6d\151\164", PR__MDL__SALARY)]; kooskuwkuayiuose: $iwamiguusayooguq = ManipulateHTML::uuccukgasskgimsq("\144\151\166", [], $iwamiguusayooguq); $uosiuoqysyokseqe = __("\x41\144\144\x20\x4e\x65\167\40\x57\x69\164\150\144\x72\141\x77", PR__MDL__SALARY); $nsmgceoqaqogqmuw = ManipulateHTML::icqkogwskuwscskk(["\163\x69\x7a\x65" => "\x6c\x67", "\164\x79\160\145" => "\x70\162\x69\155\x61\162\171", "\164\x69\164\x6c\145" => $uosiuoqysyokseqe, "\160\x72\145\x66\x69\170" => "\x61\144\144\x5f\156\145\167\x5f\x77\151\164\150\x64\162\141\x77", "\x63\157\156\x74\x65\x6e\x74" => $iwamiguusayooguq . $ikgwqyuyckaewsow, "\x62\x75\x74\x74\157\x6e\163" => $qyukicweqoisimwg, "\x73\x70\x69\x6e\156\145\162" => true], ["\164\x69\164\154\x65" => $uosiuoqysyokseqe, "\x61\164\164\162\163" => ["\x63\x6c\x61\x73\x73" => "\142\164\x6e\x20\142\164\156\x2d\x70\162\151\x6d\x61\162\x79\40\x66\x6c\157\141\164\x2d\162\151\x67\x68\164", "\x61\162\151\141\55\x6c\141\x62\145\x6c" => $uosiuoqysyokseqe]]); $this->quyawykcegmmwmky($nsmgceoqaqogqmuw); qwcegcuowwgiccos: } }
