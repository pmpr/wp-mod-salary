<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240a5569f6ea             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Page\Admin\Page; use Pmpr\Module\Salary\Model\Income as IncModel; use Pmpr\Module\Salary\Profile\Admin\Tab\Agreement; use Pmpr\Module\Salary\Profile\Admin\Tab\Income; use Pmpr\Module\Salary\Profile\Admin\Tab\Payment; use Pmpr\Module\Salary\Profile\Admin\Tab\Product; use Pmpr\Module\Salary\User; class Admin extends Page { const wuowaiyouwecckaw = "\155\x79\137\143\x6f\154\154\x61\x62\157\162\141\x74\x69\157\x6e\x5f\160\x72\157\x66\x69\x6c\145"; const qagqayweyigciamg = "\x62\141\x6e\x6b\137\x69\x6e\x66\157"; const equssioqikiumyki = "\167\x69\x74\150\x64\x72\141\167\137\164\x6f"; public function __construct() { if (!(DecoratorUser::scmcyesmmikkucie() || ManipulateUser::askmkgcmgekiqwsg(User::yuqaieqcaccggqck))) { goto quwcqmyokicssyew; } $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\x70\x61\x72\145\x6e\x74\x5f\x73\x6c\165\x67" => $wksoawcgagcgoask, "\x70\141\147\145\137\164\x69\x74\154\145" => __("\115\x79\40\x53\141\x6c\141\162\171\40\120\162\157\146\x69\x6c\145", PR__MDL__SALARY), "\155\x65\x6e\x75\x5f\x73\x6c\165\x67" => self::wuowaiyouwecckaw, "\x70\157\163\x69\x74\x69\157\156" => 0, "\143\141\160\x61\x62\151\154\x69\164\x79" => "\x72\145\141\x64"]; parent::__construct(); $this->iemaakgqgqosiecm(); quwcqmyokicssyew: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\151\156\x5f\x69\x6e\151\164", [$this, "\x79\145\171\x69\x67\165\x79\x65\x67\155\x6d\x79\165\x73\x65\x61"]); parent::wigskegsqequoeks(); } public function iemaakgqgqosiecm() { Ajax::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto iqcogmsguwoikame; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x70\162\x6f\x66\151\154\145", $eygsasmqycagyayw->get("\160\162\x6f\x66\x69\154\145\x2e\152\163"))->ayuciigykaswwqeo("\152\x71\x75\x65\162\x79"))->ikqyiskqaaymscgw("\x61\x6a\x61\170", Ajax::myikkigscysoykgy)->ikqyiskqaaymscgw("\155\x65\163\163\x61\x67\x65\163", ["\x77\151\164\x68\x64\x72\x61\x77\137\164\157" => sprintf(__("\x49\x74\x27\163\40\156\x6f\x74\40\x61\40\x76\x61\154\x69\x64\40\45\x73", PR__MDL__SALARY), __("\x44\x61\x74\x65", PR__MDL__SALARY)), "\145\155\160\x74\x79" => ["\142\141\x6e\153\137\x69\x6e\146\157" => sprintf(__("\x50\x6c\x65\x61\163\x65\x20\x73\145\154\145\x63\164\40\x61\x20\x25\163", PR__MDL__SALARY), __("\x42\x61\156\153\x20\101\143\x63\157\x75\156\x74\40\111\156\146\x6f\x72\155\141\x74\151\x6f\x6e", PR__MDL__SALARY)), "\x77\x69\164\x68\144\162\x61\x77\x5f\164\x6f" => sprintf(__("\120\154\x65\x61\163\x65\40\x73\145\x6c\145\143\x74\40\x61\x20\45\163", PR__MDL__SALARY), __("\104\x61\x74\145", PR__MDL__SALARY))]]); iqcogmsguwoikame: } public function suicksywcwiggasc() { $this->ciwuiwsyckiiogwo([Income::symcgieuakksimmu(), Product::symcgieuakksimmu(), Payment::symcgieuakksimmu(), Agreement::symcgieuakksimmu()]); $this->ssysiyiouyscyeyq(); } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { $this->asucekgauiagoeeo(); parent::kccgekiqgsuwmowo($suaemuyiacqyugsm); } public function asucekgauiagoeeo() { $oammesyieqmwuwyi = ["\151\x6e\143\x6f\x6d\x65\x73" => __("\124\x6f\x74\141\x6c\x20\x49\156\x63\x6f\155\145\x73", PR__MDL__SALARY), "\x64\x65\144\x75\143\x74\x73" => __("\124\x6f\164\141\x6c\x20\104\x65\144\x75\x63\164\x73", PR__MDL__SALARY), "\x70\141\171\x6d\x65\x6e\164\x73" => __("\124\x6f\164\x61\154\40\120\141\x79\155\x65\156\164\x73", PR__MDL__SALARY)]; $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = 0; try { switch ($uusmaiomayssaecw) { case "\151\x6e\143\157\x6d\x65\163": $ywwsgumqquoegmci = IncModel::symcgieuakksimmu(); $cseccogesusskess = $ywwsgumqquoegmci->cwkywyqksyucoyia([IncModel::iockmgiyoygcswog => $miowmmgaiagcuyoo, IncModel::eiiuyoyiygsickwe => [self::ciyoccqkiamemcmm => [IncModel::aquouykoyqcwccay, IncModel::ugswgyqgycqguios], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); $eqgoocgaqwqcimie = $ywwsgumqquoegmci->cseaisoguykosgem($cseccogesusskess); goto yqykqysmiquwoasu; case "\x64\145\x64\165\x63\164\163": goto yqykqysmiquwoasu; case "\160\141\x79\x6d\x65\x6e\x74\x73": goto yqykqysmiquwoasu; } ayyweymyuuiauamo: yqykqysmiquwoasu: } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = 0; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = ["\x6c\x61\x62\145\x6c" => $pkyyagewkiyckmwy, "\x76\x61\154\165\145" => ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie)]; cmqucgoewuyieoyk: } gimmuoqwckiseaik: echo $this->iuygowkemiiwqmiw("\163\164\141\x74\163", ["\x69\x74\x65\x6d\163" => $oammesyieqmwuwyi]); } public function ssysiyiouyscyeyq() { $mkucggyaiaukqoce = ManipulateUser::get(); $ikgwqyuyckaewsow = ''; if (!$mkucggyaiaukqoce) { goto ygcsmkuycoagwyou; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $qyukicweqoisimwg = ["\143\x61\156\x63\x65\154"]; $aukoggqmyoweqokc = User::symcgieuakksimmu()->ysqqicckeiweemmu($mkucggyaiaukqoce, self::qagqayweyigciamg); if ($aukoggqmyoweqokc) { goto mosqsmqimqgqoase; } $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo("\x74\141\142", "\x74\141\x62\137\151\156\x63\157\x6d\145\x73\x5f\141\156\x64\137\x70\141\x79\155\x65\156\x74\163", DecoratorUser::ekqiayaoseqcygmo($saqgcoqwmimycgim)); $uweseoyuyuwyeggc = ManipulateHTML::uuccukgasskgimsq("\141", ["\150\x72\x65\x66" => $geecqyososceumsk], __("\x50\162\x6f\146\151\154\145\40\160\141\147\x65", PR__MDL__SALARY)); $iwamiguusayooguq = sprintf(__("\x59\157\x75\x20\x73\x68\x6f\165\x6c\x64\x20\146\151\162\163\164\x2c\40\x66\151\x6c\154\x20\151\156\x20\x79\157\x75\x72\40\142\141\x6e\153\40\x61\x63\x63\157\165\x6e\x74\40\151\156\x66\157\x72\155\x61\164\151\157\156\x20\x69\156\x73\151\x64\145\x20\171\x6f\165\162\x20\x25\x73\54\x20\164\x6f\x20\x73\x75\x62\x6d\x69\164\40\141\x20\167\151\x74\x68\144\162\141\x77", PR__MDL__SALARY), $uweseoyuyuwyeggc); goto omugkkesagcyagmk; mosqsmqimqgqoase: $aukoggqmyoweqokc->yoimakcqmoqokkcu(); $ikgwqyuyckaewsow = MetaBox::iuaucuookgoqiiio([MetaBox::sgsesoiwcgqgckoo(self::equssioqikiumyki, __("\x44\x61\x74\x65\40\x54\157", PR__MDL__SALARY))->yoimakcqmoqokkcu(), $aukoggqmyoweqokc->eumecwmqmukqgyea(), MetaBox::cwiuiiakukcsaakw("\157\x77\156\145\x72", $saqgcoqwmimycgim)], ["\x65\x63\150\x6f" => false, "\160\x61\162\145\x6e\164" => ["\x63\x6c\x61\x73\x73" => "\x63\157\154\55\61\x32\x20\143\157\x6c\x2d\x6d\144\x2d\x38\40\143\x6f\x6c\x2d\154\147\x2d\x36\x20\x6d\x79\x2d\63\x20\x6d\x78\x2d\x61\x75\164\x6f"]]); $ikgwqyuyckaewsow = ManipulateHTML::uuccukgasskgimsq("\x64\151\x76", ["\x63\154\141\x73\163" => "\x72\157\x77"], $ikgwqyuyckaewsow); $iwamiguusayooguq = __("\102\171\x20\x73\x75\142\155\x69\x74\164\x69\156\x67\40\x61\40\156\145\167\40\x70\141\x79\155\x65\x6e\x74\x20\x72\x65\x71\165\145\163\164\x2c\x20\x79\x6f\x75\40\167\x69\154\154\40\162\145\x63\x65\x69\166\x65\x20\x79\x6f\x75\162\40\x69\x6e\x63\x6f\x6d\145\40\151\x6e\40\x74\150\145\x20\146\157\162\155\x20\x6f\146\40\141\x20\x64\145\160\x6f\x73\151\164\x20\x74\157\x20\164\150\145\40\x69\156\x74\162\x6f\x64\165\143\x65\144\40\x62\141\x6e\x6b\x20\x61\x63\x63\157\x75\x6e\164", PR__MDL__SALARY); $qyukicweqoisimwg[] = ["\x63\154\x61\163\163" => "\x62\164\156\40\142\x74\x6e\55\x70\162\x69\x6d\141\162\x79\x20\141\144\144\x2d\x6e\x65\x77\x2d\x77\151\x74\x68\144\162\141\x77", "\x74\151\x74\154\x65" => __("\x53\x75\142\x6d\x69\164", PR__MDL__SALARY)]; omugkkesagcyagmk: $iwamiguusayooguq = ManipulateHTML::uuccukgasskgimsq("\x64\x69\x76", [], $iwamiguusayooguq); $uosiuoqysyokseqe = __("\x41\144\x64\40\116\145\x77\40\x57\151\x74\150\x64\x72\x61\167", PR__MDL__SALARY); $nsmgceoqaqogqmuw = ManipulateHTML::icqkogwskuwscskk(["\163\151\172\145" => "\154\x67", "\164\171\160\145" => "\x70\x72\x69\155\x61\162\171", "\164\151\x74\154\x65" => $uosiuoqysyokseqe, "\160\162\145\146\151\x78" => "\x61\144\144\x5f\156\145\167\137\x77\x69\164\150\x64\x72\x61\x77", "\143\157\156\164\145\x6e\164" => $iwamiguusayooguq . $ikgwqyuyckaewsow, "\142\165\x74\x74\x6f\156\x73" => $qyukicweqoisimwg, "\x73\160\151\156\x6e\x65\162" => true], ["\x74\151\x74\154\x65" => $uosiuoqysyokseqe, "\141\164\x74\162\x73" => ["\143\154\141\x73\x73" => "\142\164\x6e\40\142\x74\156\x2d\160\x72\x69\x6d\141\x72\171\40\x66\x6c\x6f\x61\x74\55\162\151\x67\150\164", "\x61\162\x69\141\x2d\x6c\141\142\145\154" => $uosiuoqysyokseqe]]); $this->quyawykcegmmwmky($nsmgceoqaqogqmuw); ygcsmkuycoagwyou: } }
