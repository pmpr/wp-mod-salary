<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614ca04edad5c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; class Setting extends BaseClass { const FEE_POLICIES = "\x73\141\x6c\x61\x72\171\x5f\146\145\x65\x5f\x70\x6f\x6c\151\x63\151\145\x73"; const POLICY_VALUE = "\x70\157\x6c\151\x63\x79\x5f\x76\x61\x6c\x75\x65"; const ACCOUNT_TYPE = "\x61\x63\143\x6f\165\x6e\164\137\x74\171\160\x65"; const POLICY_TYPE = "\x70\157\x6c\151\143\x79\137\164\171\160\x65"; const BANK_NAME = "\x62\141\156\153\x5f\156\141\155\x65"; const VARIABLE_POLICY = "\x76\141\x72\151\141\x62\x6c\145\x5f\160\157\154\x69\143\x79"; const CONSTANT_POLICY = "\x63\157\156\x73\164\x61\156\164\x5f\160\x6f\154\151\143\x79"; public function __construct() { goto igooksugieceoege; omqiayeucoioqoao: $this->name = $wksoawcgagcgoask; goto ugqaaewwmkocwwgy; wgewmqieuamsoayy: $this->hasLicense = false; goto kqgcyoscsusgoaqi; kqgcyoscsusgoaqi: parent::__construct(); goto ueigkucgaucgeimc; ugqaaewwmkocwwgy: $this->parentMenu = $wksoawcgagcgoask; goto wgewmqieuamsoayy; igooksugieceoege: $wksoawcgagcgoask = self::akuociswqmoigkas(); goto omqiayeucoioqoao; ueigkucgaucgeimc: } public function gogaagekwoisaqgu() { $this->title = __("\x53\x65\164\164\151\156\147", PR__PKG__SALARY); } public function ecwgiiuacoaokqkw() { $uqyaagwcuoewkkss = Validator::symcgieuakksimmu(); $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . self::_GENERAL, __("\x47\145\x6e\x65\x72\141\x6c", PR__PKG__SALARY))->sikqggwmmykuiymy(self::cgygmuguceeosoey("{$this->mwikyscisascoeea()}\x5f\144\x65\x64\165\x63\x74\163", __("\x44\145\x64\165\143\x74\163", PR__PKG__SALARY))->mkksewyosgeumwsa(self::iseogkiymousogom(self::FEE_POLICIES, __("\x46\x65\x65\40\120\x6f\154\151\143\x69\x65\163", PR__PKG__SALARY))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ENABLE, __("\105\x6e\141\142\154\x65", PR__PKG__SALARY)))->mkksewyosgeumwsa($uqyaagwcuoewkkss->auawsikwmsucqccc(self::BANK_NAME)->oikgogcweiiaocka()->eumecwmqmukqgyea())->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::ACCOUNT_TYPE, __("\101\x63\143\x6f\165\156\x74\40\111\x6e\x66\x6f\x72\x6d\x61\164\x69\157\156\40\x54\x79\160\145", PR__PKG__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem())->oikgogcweiiaocka()->eumecwmqmukqgyea())->mkksewyosgeumwsa(self::kqcemgcowgomaqwa(self::POLICY_TYPE, __("\x50\x6f\154\151\x63\171\x20\124\171\160\145", PR__PKG__SALARY), $this->ksiaywqocueukouw())->oeeumggeiyyckkom(self::VARIABLE_POLICY, self::VARIABLE_POLICY)->oeeumggeiyyckkom(self::CONSTANT_POLICY, self::CONSTANT_POLICY)->eyygsasuqmommkua(self::CONSTANT_POLICY)->eumecwmqmukqgyea())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::CONSTANT_POLICY, $this->ksiaywqocueukouw(self::CONSTANT_POLICY))->mouwuossggyiwems())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::VARIABLE_POLICY, $this->ksiaywqocueukouw(self::VARIABLE_POLICY))->iaggyqeqiyqgmgoo())->awaeegwoiqoisoam([self::BANK_NAME, self::ACCOUNT_TYPE])->usosgsaaimqcysyk())->saemoowcasogykak(IconFontawesomeInterface::ICON_COIN))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR)); } public function ksiaywqocueukouw($qqqskcogoyswqaum = '') { $aacykmqwasyaykgu = [self::CONSTANT_POLICY => __("\103\157\156\163\x74\141\x6e\164\x20\x52\141\x74\x65", PR__PKG__SALARY), self::VARIABLE_POLICY => __("\x56\x61\162\151\x61\x62\x6c\145\x20\x52\x61\164\145", PR__PKG__SALARY)]; return ManipulateArray::get($aacykmqwasyaykgu, $qqqskcogoyswqaum, $aacykmqwasyaykgu); } }
