<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6282905decdef             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\ORM\DB\Model; abstract class Common extends Model { public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->oyeskqayoscwciem()->okgmqaeuaeymaocm($wksoawcgagcgoask)->wiskakymeaywyeuw($wksoawcgagcgoask); } public function usouqioywgosyqqy($iueymcwwscwqkiyq, $meqocwsecsywiiqs) : string { return ManipulateHTML::uuccukgasskgimsq("\155\x61\x72\x6b", ["\143\x6c\x61\163\x73" => "\160\x72\55\x73\x74\x61\164\165\163\x20\163\164\141\164\x75\163\55{$iueymcwwscwqkiyq}"], ManipulateHTML::gmqyuaqwgiayskei($meqocwsecsywiiqs)); } public function cseaisoguykosgem($oammesyieqmwuwyi, $aiowsaccomcoikus = "\141\155\x6f\165\x6e\164") : int { $smowyuyseuwiaiei = 0; if (!$oammesyieqmwuwyi) { goto iomcaiwewsawiamu; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $smowyuyseuwiaiei += (int) ManipulateArray::get($igqsaukqcqscimok, $aiowsaccomcoikus, 0); kiqogmwcgcamwiig: } yowsmsiyimmimemc: iomcaiwewsawiamu: return $smowyuyseuwiaiei; } public function yqcgeogiccmkwuic($mksyucucyswaukig, $ywquoeygyskoaucu, $mgkceomocowocqyo = self::uwycywkimsycqwcy, $syweiogqscmeigge = "\x61\x6d\157\165\156\164") { $oammesyieqmwuwyi = $this->iscemaoqqckmkago($ywquoeygyskoaucu, $mksyucucyswaukig, $syweiogqscmeigge); $smowyuyseuwiaiei = $this->cseaisoguykosgem($oammesyieqmwuwyi, $syweiogqscmeigge); if (!($mgkceomocowocqyo === self::uwycywkimsycqwcy)) { goto sqiciiuwmykocycc; } $smowyuyseuwiaiei = ManipulateWoocommerce::mcgaskyiamgqmqgu($smowyuyseuwiaiei); sqiciiuwmykocycc: return $smowyuyseuwiaiei; } public function ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $saqmwwmqiwmkiwaa = null, $locale = null, $mksyucucyswaukig = null) { return parent::ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, ManipulateSetting::yoaaussmackoisuw(), $locale, $mksyucucyswaukig); } }
