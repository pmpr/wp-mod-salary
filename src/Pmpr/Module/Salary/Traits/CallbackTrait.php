<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661e423b713ee             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Traits; use Pmpr\Module\Salary\AbstractSalary; trait CallbackTrait { public function ekkwaykokcgqkmoi(?string $ccamueccusigaaio, string $mgkceomocowocqyo = self::uwycywkimsycqwcy) { $sogksuscggsicmac = ''; if (!$ccamueccusigaaio) { goto qqewoyookaskiuek; } if (self::uwycywkimsycqwcy === $mgkceomocowocqyo) { goto kqksuugcgsyeoayy; } $ccamueccusigaaio = str_replace("\137", "\x5c", $ccamueccusigaaio); if (!(is_subclass_of($ccamueccusigaaio, AbstractSalary::class) && ($qgciuiagkkguykgs = $this->sqasccoaywygsoew($ccamueccusigaaio)))) { goto ygcsmkuycoagwyou; } $sogksuscggsicmac = [$ccamueccusigaaio::symcgieuakksimmu(), $qgciuiagkkguykgs]; if (is_callable($sogksuscggsicmac)) { goto omugkkesagcyagmk; } $sogksuscggsicmac = null; omugkkesagcyagmk: ygcsmkuycoagwyou: goto iggyqogweyosuikc; kqksuugcgsyeoayy: $sogksuscggsicmac = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->uiiyaqiemcccwewi(), $ccamueccusigaaio); iggyqogweyosuikc: qqewoyookaskiuek: return $sogksuscggsicmac; } public function uiiyaqiemcccwewi(string $mgkceomocowocqyo = self::uwycywkimsycqwcy) : array { $sogksuscggsicmac = []; $gsoeomygymgeosya = (array) $this->ocksiywmkyaqseou("\163\x61\x6c\x61\162\171\x5f\143\x61\154\154\142\x61\x63\153\163", []); if (!(self::uwycywkimsycqwcy === $mgkceomocowocqyo)) { goto eegqyykygiccaoeo; } foreach ($gsoeomygymgeosya as $egkyssmuqcwaciya => $meqocwsecsywiiqs) { if (!$this->sqasccoaywygsoew($egkyssmuqcwaciya)) { goto miyqyeiwquwsacsm; } $sogksuscggsicmac[esc_attr(str_replace("\x5c", "\x5f", $egkyssmuqcwaciya))] = $meqocwsecsywiiqs; miyqyeiwquwsacsm: qkcyqocqqwmqgqww: } ssoucoucsgccekwe: eegqyykygiccaoeo: return $sogksuscggsicmac; } public function sqasccoaywygsoew($egkyssmuqcwaciya) { return $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($egkyssmuqcwaciya, "\x67\145\x74\115\141\164\x63\150\x65\144\122\x65\161\x75\x65\x73\164\163"); } }
