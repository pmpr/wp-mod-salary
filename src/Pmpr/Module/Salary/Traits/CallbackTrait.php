<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63218046d099c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Traits; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Salary\AbstractSalary; trait CallbackTrait { public function ekkwaykokcgqkmoi(?string $ccamueccusigaaio, string $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $sogksuscggsicmac = ''; if (!$ccamueccusigaaio) { goto qwigomakwmyiwkgo; } if (self::uwycywkimsycqwcy === $mgkceomocowocqyo) { goto qogqewiwmwiwskgm; } $ccamueccusigaaio = str_replace("\x5f", "\134", $ccamueccusigaaio); if (!(is_subclass_of($ccamueccusigaaio, AbstractSalary::class) && ($qgciuiagkkguykgs = $this->sqasccoaywygsoew($ccamueccusigaaio)))) { goto qiaqsassksqiuyae; } $sogksuscggsicmac = [$ccamueccusigaaio::symcgieuakksimmu(), $qgciuiagkkguykgs]; if (is_callable($sogksuscggsicmac)) { goto cecuyayqoioasumi; } $sogksuscggsicmac = null; cecuyayqoioasumi: qiaqsassksqiuyae: goto qgoiooayqmqqsiok; qogqewiwmwiwskgm: $sogksuscggsicmac = ManipulateArray::get($this->uiiyaqiemcccwewi(), $ccamueccusigaaio); qgoiooayqmqqsiok: qwigomakwmyiwkgo: return $sogksuscggsicmac; } public function uiiyaqiemcccwewi(string $mgkceomocowocqyo = self::uwycywkimsycqwcy) : array { $sogksuscggsicmac = []; $gsoeomygymgeosya = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\x61\154\x61\x72\x79\x5f\x63\x61\x6c\x6c\142\x61\143\x6b\x73"), []); if (!(self::uwycywkimsycqwcy === $mgkceomocowocqyo)) { goto cuykwgmswkskqkyi; } foreach ($gsoeomygymgeosya as $egkyssmuqcwaciya => $meqocwsecsywiiqs) { if (!$this->sqasccoaywygsoew($egkyssmuqcwaciya)) { goto csscmcacoikwsecs; } $sogksuscggsicmac[esc_attr(str_replace("\x5c", "\x5f", $egkyssmuqcwaciya))] = $meqocwsecsywiiqs; csscmcacoikwsecs: asmecuqiyyswueqe: } myoicgcuugciueis: cuykwgmswkskqkyi: return $sogksuscggsicmac; } public function sqasccoaywygsoew($egkyssmuqcwaciya) { return ManipulateValidation::pwcgsiswecasgkgs($egkyssmuqcwaciya, "\x67\x65\164\x4d\x61\164\x63\x68\x65\144\x52\x65\x71\x75\x65\163\x74\x73"); } }
